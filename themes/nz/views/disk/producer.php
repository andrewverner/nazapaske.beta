<?php
/**
 * @var $producer DiskProducer
 * @var $disks
 * @var $disk Disk
 * @var $pages
 * @var $filters
 * @var $filterParams
 */

$disk = reset($disks);
?>

<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>

<div class="row">
    <div class="col-lg-3 col-md-3">
        <?php $this->renderPartial('//disk/filters', ['filters' => $filters, 'params' => $filterParams]); ?>
    </div>

    <div class="col-lg-9 col-md-9">

        <div class="card-group">
            <?php $this->renderPartial('card', ['disk' => $disk, 'producer' => $producer]); ?>
            <?php $this->renderPartial('card', ['disk' => $disk, 'producer' => $producer]); ?>
            <?php $this->renderPartial('card', ['disk' => $disk, 'producer' => $producer]); ?>
        </div>

        <div class="card-group">
            <div class="card">
                <div class="img">
                    <img class="card-img-top" src="https://ae01.alicdn.com/kf/HTB1wKYIOVXXXXcQXXXXq6xXFXXXd/1PCS-Magnesium-Alloy-Bicycle-font-b-Wheel-b-font-20-Mountain-Bike-20-Folding-font-b.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img class="card-img-top" src="https://neocycle.files.wordpress.com/2010/12/10653515_830536970319328_4749377127966809205_n.jpg?w=480&h=480" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img class="card-img-top" src="https://s3.amazonaws.com/rp-part-images/assets/ac0516eece431aba1a68fdfa7d1a490c.jpg" alt="Card image cap">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

    </div>
</div>

<pre>
<?php foreach ($disks as $disk): ?>
    <?php print_r($disk) ?>
<?php endforeach; ?>
</pre>

<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>
