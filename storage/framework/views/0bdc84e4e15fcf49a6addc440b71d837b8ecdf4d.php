 
<?php $__env->startSection('contents'); ?>
<div class="row">

    <div class="col-md-4 col-md-offset-3" style="background: linear-gradient(to bottom right, darkslateblue, brown, green); color: white">
        <h3 align="center">Add shoppings made</h3>
        <table class="table">
            <tr>
                <td>
                    <form class="form-group center-" method="post" action="shop">
                        <?php echo e(csrf_field()); ?>

                        <input placeholder="Product name" class="form-control" type="text" value="" name="product_name" id="product_name" required><br>
                        <input placeholder="Product quantity" class="form-control" type="number" value="" name="quantity" id="quantity" required
                            min="1"><br>
                        <input placeholder="price per unit of product in Tsh" title="price per unit of product in Tanzania Shillings" class="form-control"
                            min="0" type="number" value="" name="price" id="price" required><br>
                        <input placeholder="date" class="form-control" type="date" value="" name="date" id="date"><br>
                        <input type="submit" class="btn btn-default col-md-offset-10" value="save" name="savebtn" id="savebtn">
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>