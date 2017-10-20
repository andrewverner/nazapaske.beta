<?php

class CartController extends Controller
{
    const TYPE_DISK = 'disk';
    const TYPE_TIRE = 'tire';

    public function actionAdd()
    {
        if (Yii::app()->request->isAjaxRequest) {
            return;
        }

        if (!isset($_POST['type']) || !isset($_POST['id']) || !isset($_POST['count'])) {
            return;
        }

        krsort($_POST);
        list($type, $id, $count) = $_POST;
        $items = isset($_SESSION[$type]) ? $_SESSION[$type] : [];
        $items[$id] = isset($items[$id]) ? ($items[$id] + $count) : $count;

        $_SESSION[$type] = $items;

        $this->update();
    }

    public function actionRemove()
    {
        if (!isset($_POST['type']) || !isset($_POST['id'])) {
            return;
        }

        krsort($_POST);
        list($type, $id) = $_POST;
        if (isset($_SESSION[$type][$id])) {
            unset($_SESSION[$type][$id]);
        }

        $this->update();
    }

    public function actionIndex()
    {
        $disks = (isset($_SESSION[self::TYPE_DISK]) && !empty($_SESSION[self::TYPE_DISK])) ? $_SESSION[self::TYPE_DISK] : [];
        $tires = (isset($_SESSION[self::TYPE_TIRE]) && !empty($_SESSION[self::TYPE_TIRE])) ? $_SESSION[self::TYPE_TIRE] : [];

        $tiresModels = [];
        $disksModels = [];

        if ($disks) {
            foreach ($disks as $id => $count) {
                $model = Disk::model()->findByPk($id);
                $disk = new stdClass();
                $disk->type = self::TYPE_DISK;
                $disk->count = $count;
                $disk->name = $model->name;
                $disk->producer = $model->producer;
                $disk->price = $model->price;

                $disksModels[] = $disk;
            }
        }

        if ($tires) {
            foreach ($tires as $id => $count) {
                $model = Disk::model()->findByPk($id);
                $tire = new stdClass();
                $tire->type = self::TYPE_TIRE;
                $tire->count = $count;
                $tire->name = $model->name;
                $tire->producer = $model->producer;
                $tire->price = $model->price;

                $tiresModels[] = $tire;
            }
        }

        $this->render('index', [
            'disks' => $disksModels,
            'tires' => $tiresModels
        ]);
    }

    private function update()
    {
        Header('Content-type: qpplication/json');
        $disks = (isset($_SESSION[self::TYPE_DISK]) && !empty($_SESSION[self::TYPE_DISK])) ? $_SESSION[self::TYPE_DISK] : [];
        $tires = (isset($_SESSION[self::TYPE_TIRE]) && !empty($_SESSION[self::TYPE_TIRE])) ? $_SESSION[self::TYPE_TIRE] : [];

        if (empty($disks) && empty($tires)) {
            throw new CHttpException(204);
        }

        $totalCount = count($disks) + count($tires);
        $totalCost = 0;

        if ($disks) {
            foreach ($disks as $id => $count) {
                $disk = Disk::model()->findByPk($id);
                $totalCost += $disk->price;
            }
        }

        if ($tires) {
            foreach ($tires as $id => $count) {
                $tire = Tire::model()->findByPk($id);
                $totalCost += $tire->price;
            }
        }

        echo json_encode([
            'count' => $totalCount,
            'cost' => $totalCost
        ]);
    }
}
