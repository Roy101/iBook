

<?php $__env->startSection('admin_content'); ?>

<div id="content" class="span10">
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Admin Dashboard</a>
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Update Category</a>
    </li>
</ul>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>
        </div>


            <p class="alert-success">
                <?php
                $message=Session::get('message');

                if($message)
                {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
            </p>
            
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo e(url('/update_category', $category_info->category_id)); ?>" method="post">
              <fieldset>
                <?php echo e(@csrf_field()); ?>

                <div class="control-group">
                  <label class="control-label" for="textarea2">Category Name</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="category_name" value="<?php echo e($category_info->category_name); ?>">
                  </div>
                </div>

                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Category Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="category_description" rows="3"><?php echo e($category_info->category_description); ?></textarea>
                  </div>
                </div>


                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Save Info</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
              </fieldset>
            </form>

        </div>
    </div><!--/span-->

</div><!--/row-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elaravel\resources\views/admin/edit_category.blade.php ENDPATH**/ ?>