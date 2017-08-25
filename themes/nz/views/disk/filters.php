<?php
/**
 * @var array $filters
 * @var array $params
 */
?>

<div class="row">
    <?php foreach ($params as $param): ?>
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $param; ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?= CHtml::checkBoxList($param, isset($_GET[$param]) ? $_GET[$param] : null, $filters[$param]) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
        <input type="submit" class="btn btn-primary" value="Filter" />
    </div>
</div>
