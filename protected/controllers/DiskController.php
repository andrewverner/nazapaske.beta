<?php

class DiskController extends Controller
{
    public function actionIndex()
    {
        $producers = DiskProducer::model()->findAll(['order' => 'title ASC']);
        $this->render('index', [
            'producers' => $producers,
            'filters' => [
                Disk::PARAM_WIDTH => Disk::getParamValues(Disk::PARAM_WIDTH),
                Disk::PARAM_DIAMETER => Disk::getParamValues(Disk::PARAM_DIAMETER),
                Disk::PARAM_PCD => Disk::getParamValues(Disk::PARAM_PCD),
                Disk::PARAM_PCD2 => Disk::getParamValues(Disk::PARAM_PCD2),
                Disk::PARAM_ET => Disk::getParamValues(Disk::PARAM_ET)
            ],
            'filterParams' => Disk::getFilterParams()
        ]);
    }

    public function actionProducer($title)
    {
        $title = str_replace('_', ' ', $title);
        $producer = DiskProducer::model()->findByAttributes(['title' => $title]);
        if (!$producer) {
            throw new CHttpException(404, 'Producer not found');
        }

        $criteria = new CDbCriteria();
        $criteria->addCondition('published = :published AND producer = :producer');

        foreach (Disk::getFilterParams() as $param) {
            if (isset($_GET[$param])) {
                $criteria->addInCondition($param, $_GET[$param]);
            }
        }

        $criteria->order = 'name ASC';
        $criteria->params = [
            ':published' => 1,
            ':producer' => $producer->id
        ];
        $count = Disk::model()->count($criteria);
        $pages = new CPagination($count);

        $pages->pageSize = 30;
        $pages->applyLimit($criteria);
        $disks = Disk::model()->findAll($criteria);

        if (!$disks) {
            throw new CHttpException(404, 'Disks not found');
        }

        $this->render('producer', [
            'producer' => $producer,
            'disks' => $disks,
            'pages' => $pages,
            'filters' => [
                Disk::PARAM_WIDTH => Disk::getParamValues(Disk::PARAM_WIDTH, ['producer' => $producer->id]),
                Disk::PARAM_DIAMETER => Disk::getParamValues(Disk::PARAM_DIAMETER, ['producer' => $producer->id]),
                Disk::PARAM_PCD => Disk::getParamValues(Disk::PARAM_PCD, ['producer' => $producer->id]),
                Disk::PARAM_PCD2 => Disk::getParamValues(Disk::PARAM_PCD2, ['producer' => $producer->id]),
                Disk::PARAM_ET => Disk::getParamValues(Disk::PARAM_ET, ['producer' => $producer->id])
            ],
            'filterParams' => Disk::getFilterParams()
        ]);
    }

    public function actionDetails($producerTitle, $diskName)
    {
        $producerTitle = str_replace('_', ' ', $producerTitle);
        $producer = DiskProducer::model()->findByAttributes(['title' => $producerTitle]);
        if (!$producer) {
            throw new CHttpException(404, 'Producer not found');
        }

        $diskName = str_replace('_', ' ', $diskName);

        $disks = Disk::model()->findAllByAttributes([
            'producer' => $producer->id,
            'name' => $diskName
        ]);

        if (!$disks) {
            throw new CHttpException(404, 'Disks not found');
        }

        $this->render('details', [
            'producer' => $producer,
            'disks' => $disks,
            'disk' => reset($disks),
            'filters' => [
                Disk::PARAM_WIDTH => Disk::getParamValues(Disk::PARAM_WIDTH, ['producer' => $producer->id]),
                Disk::PARAM_DIAMETER => Disk::getParamValues(Disk::PARAM_DIAMETER, ['producer' => $producer->id]),
                Disk::PARAM_PCD => Disk::getParamValues(Disk::PARAM_PCD, ['producer' => $producer->id]),
                Disk::PARAM_PCD2 => Disk::getParamValues(Disk::PARAM_PCD2, ['producer' => $producer->id]),
                Disk::PARAM_ET => Disk::getParamValues(Disk::PARAM_ET, ['producer' => $producer->id])
            ],
            'filterParams' => Disk::getFilterParams()
        ]);
    }
}
