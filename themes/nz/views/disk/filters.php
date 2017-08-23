<?php
/**
 * @var array $filters
 * @var array $params
 */
?>

<?php foreach ($params as $param): ?>
    <?php echo CHtml::checkBoxList($param, false, $filters[$param]) ?>
<?php endforeach; ?>
