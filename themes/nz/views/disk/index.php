<?php
/**
 * @var $producers
 * @var $producer DiskProducer
 * @var $filters
 * @var $filterParams
 */
?>

<?php $this->renderPartial('//disk/filters', ['filters' => $filters, 'params' => $filterParams]); ?>

<pre>
<?php if ($producers): ?>
    <?php foreach ($producers as $producer): ?>
        <?php print_r($producer) ?>
    <?php endforeach; ?>
<?php endif; ?>
</pre>
