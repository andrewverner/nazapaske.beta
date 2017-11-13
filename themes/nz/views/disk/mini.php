<?php
/**
 * Created by PhpStorm.
 * User: Dasher
 * Date: 22.10.2017
 * Time: 12:58
 */
?>

<div class="col-lg-3 col-md-3 col-sm-4 col-xs-2">
    <div class="item-preview">
        <div class="item-image">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71StaTIJIJL._SY355_.jpg" class="img-thumbnail" />
        </div>
        <div class="item-name">
            <?= $disk->name; ?>
        </div>
        <div class="item-price">
            от <?= $disk->price; ?> Р
        </div>
        <div class="mode-details">
            <a href="#" class="btn btn-primary">
                Подробнее
            </a>
        </div>
    </div>
</div>