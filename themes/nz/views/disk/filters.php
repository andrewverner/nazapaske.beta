<?php
/**
 * @var array $filters
 * @var array $params
 */
?>

<?php foreach ($params as $param): ?>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $param; ?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?= CHtml::checkBoxList($param, isset($_GET[$param]) ? $_GET[$param] : null, $filters[$param]) ?>
        </div>
    </div>
<?php endforeach; ?>
<input type="submit" class="btn btn-primary" value="Filter" />
