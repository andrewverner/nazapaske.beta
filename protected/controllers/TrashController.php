<?php

class TrashController extends Controller
{
    public function actionIndex()
    {
        /*$data = <<<CSV
191;S034331;7,5;17;5;112;40;57,1;GMF;4;5 130;;;;;;;;;;;;;;;;;;;;;
191;S034333;7,5;17;5;114,3;45;73,1;SF;4;5 130;;;;;;;;;;;;;;;;;;;;;
191;S034329;8;18;5;112;40;66,6;GMF;4;6 160;;;;;;;;;;;;;;;;;;;;;
191;S034330;8;18;5;114,3;45;73,1;GMF;4;6 160;;;;;;;;;;;;;;;;;;;;;
192;S012311;8;20;5;112;45;66,6;MBF;4;7 380;;;;;;;;;;;;;;;;;;;;;
193;S012314;8;20;5;112;45;66,6;MBF;4;7 380;;;;;;;;;;;;;;;;;;;;;
195;S019365;7,5;17;5;120;40;72,6;GMF;4;4 810;;;;;;;;;;;;;;;;;;;;;
CSV;
        $rows = explode(PHP_EOL, $data);
        foreach ($rows as $row) {
            list($name, $article, $width, $diameter, $pcd, $pcd2, $et, $dco, $color, $count, $price) = explode(';', $row);
            $name = trim(mb_convert_encoding($name, 'UTF-8', 'Windows-1251'));
            $color = trim(mb_convert_encoding($color, 'UTF-8', 'Windows-1251'));

            $width = str_replace(',','.',$width);
            $pcd2 = str_replace(',','.',$pcd2);
            $dco = str_replace(',','.',$dco);
            $price = preg_replace('/[^0-9\/]/','',$price);

            $model = new Disk();
            $model->width = $width;
            $model->diameter = $diameter;
            $model->bolts_count = $pcd;
            $model->pcd = $pcd2;
            $model->et = $et;
            $model->dia = $dco;
            $model->price = $price;
            $model->name = $name;
            $model->color = $color;
            $model->producer = 3;
            $model->save();
        }*/
    }
}
