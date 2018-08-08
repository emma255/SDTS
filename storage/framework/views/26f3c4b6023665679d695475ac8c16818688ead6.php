 
<?php $__env->startSection('contents'); ?>

<div class="box col-md-6 center-block">
    <div class="box-header text-center text-bold">Shoppings made</div>
    <div class="box-body">

        <table class="table table-striped table-responsive table-bordered table-condensed text-center">
            <tr>
                <th>Product name</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Total Cost</th>
            </tr>
            <?php $__currentLoopData = $shoppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shopping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($shopping->product_name); ?></td>
                <td><?php echo e($shopping->quantity); ?></td>
                <td><?php echo e($shopping->date); ?></td>
                <td><?php echo e($shopping->price * $shopping->quantity); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>