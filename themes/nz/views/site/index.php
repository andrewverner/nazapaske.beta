<pre>
<?php
/**
 * @var $disks
 * @var $disk Disk
 */
?>

<?php if ($disks): ?>
    <?php foreach ($disks as $disk): ?>
        <?php print_r($disk) ?>
    <?php endforeach; ?>
<?php endif; ?>
</pre>
