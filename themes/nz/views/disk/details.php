<?php
/**
 * @var $filters
 * @var $filterParams
 * @var $producer DiskProducer
 * @var $disks
 * @var $disk Disk
 */
?>

<div class="row">
    <div class="col-lg-3 col-md-3">
        <?php $this->renderPartial('//disk/filters', ['filters' => $filters, 'params' => $filterParams]); ?>
    </div>

    <div class="col-lg-9 col-md-9">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="<?= $disk->getImage() ?>" alt="" />
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <th></th>
                        <th>Size</th>
                        <th>PCD</th>
                        <th>ET</th>
                        <th>DCO</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($disks as $disk): ?>
                            <tr>
                                <td><img src="<?= $disk->getImage() ?>" class="disk-thumbnail rounded img-thumbnail" /></td>
                                <td><?= $disk->width ?>*<?= $disk->diameter ?></td>
                                <td><?= $disk->bolts_count ?>*<?= $disk->pcd ?></td>
                                <td><?= $disk->et ?></td>
                                <td><?= $disk->dia ?></td>
                                <td><?= $disk->color ?></td>
                                <td><?= $disk->price ?></td>
                                <td></td>
                                <td><?= CHtml::link('Buy', 'javascript:void(0);', [
                                    'class' => 'to-cart',
                                    'data-id' => $disk->id,
                                    'data-type' => 'disk'
                                ]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('a.to-cart').click(function () {
            $.ajax({
                url: '<?= Yii::app()->createUrl('cart/add') ?>',
                type: 'post',
                data: {
                    type: $(this).data('type'),
                    id: $(this).data('id')
                },
                success: function (data) {

                }
            });
        });
    });
</script>
