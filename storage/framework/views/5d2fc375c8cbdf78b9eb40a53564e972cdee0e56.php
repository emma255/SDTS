 
<?php $__env->startSection('contents'); ?>
<div class="col-md-8">
    <div class="box col-md-offset-4">
        <div class="box-header">
            <h3 align="center">Profile details</h3>
        </div>
        <div class="box-body">
            <form action="<?php echo e(asset('send/profile')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(@csrf_field()); ?>

                <div class="row col-md-12">
                    <div class="col-md-3"> <label for="profession">Profession</label></div>
                    <div class="col-md-8"><input type="text" name="profession" id="profession" class="form-control form-group"></div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-3"> <label for="education_level">Current education level</label></div>
                    <div class="col-md-8"><input type="text" name="education_level" id="education_level" class="form-control form-group"></div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-3"> <label for="institution">Institution</label></div>
                    <div class="col-md-8"><input type="text" name="institution" id="institution" class="form-control form-group"></div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-3"> <label for="description">Extra information</label></div>
                    <div class="col-md-8"><input type="text" name="description" id="description" class="form-control form-group"></div>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-3"> <label for="photo">Your image</label></div>
                    <div class="col-md-8"><input type="file" name="photo" id="photo" class="form-group" accept="image/jpg"></div>
                </div>
                <input type="submit" value="Store" class="btn btn-primary col-md-offset-7 form-group">
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>