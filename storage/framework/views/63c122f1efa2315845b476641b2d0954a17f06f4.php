 
<?php $__env->startSection('contents'); ?>
<div class="row">
  <div class="col-md-5 col-md-offset-3">
    <!-- Card Regular -->
    <div class="card card-cascade">
      <div class="card-body card-body-cascade text-center">
        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="img img-circle" height="300" src="<?php echo e(asset('../storage/app/'.$image)); ?>" alt="<?php echo e(Auth::user()->name); ?>">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->

        <!-- Title -->
        <h4 class="card-title"><strong><?php echo e(Auth::user()->name); ?></strong></h4>
        <!-- Subtitle -->
        
        <h6 class="font-weight-bold indigo-text py-2"><?php echo e($detail->profession); ?></h6>

        <h6 class="font-weight-bold indigo-text py-2"><?php echo e($detail->currentEduLevel); ?> Student</h6>
        <h6 class="font-weight-bold indigo-text py-2"><?php echo e($detail->institution); ?></h6>
        <!-- Text -->
        <p class="card-text"><?php echo e($detail->description); ?></p>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
        <!-- Google + -->
        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

    </div>
    <!-- Card Regular -->
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>