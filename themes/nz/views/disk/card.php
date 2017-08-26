<?php
/**
 * @var $disk Disk
 * @var $producer DiskProducer
 */
?>

<div class="card">
    <div class="img">
        <img class="card-img-top" src="<?= $disk->getImage(); ?>" alt="Card image cap">
    </div>
    <div class="card-body">
        <h4 class="card-title"><?= $producer->title ?> <?= $disk->name ?></h4>
        <p class="card-text"><?= $disk->getMinimalPrice(); ?></p>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?= CHtml::link('Details', Yii::app()->createUrl("disk/details/{$producer->getTitleForUrl()}/{$disk->getNameForUrl()}"), ['class' => 'btn btn-primary']); ?>
            </div>
        </div>
    </div>
</div>
