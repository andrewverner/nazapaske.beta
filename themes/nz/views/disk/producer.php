<?php
/**
 * @var $producer DiskProducer
 * @var $disks
 * @var $disk Disk
 * @var $pages
 * @var $filters
 * @var $filterParams
 */
?>

<?php $this->renderPartial('//disk/filters', ['filters' => $filters, 'params' => $filterParams]); ?>

<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>

<pre>
<?php foreach ($disks as $disk): ?>
    <?php print_r($disk) ?>
<?php endforeach; ?>
</pre>

<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>
