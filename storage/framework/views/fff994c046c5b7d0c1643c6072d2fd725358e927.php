 
<?php $__env->startSection('contents'); ?>
<div class="container-fluid">
  <div class="col-md-6" id="shopping"></div>
  <div class="col-md-6" id="routes"></div>
  <div class="row">
  <?php echo $__env->make('charts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>