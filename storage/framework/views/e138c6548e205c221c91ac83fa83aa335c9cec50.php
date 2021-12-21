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
        <a href="#">Add Product</a>
    </li>
</ul>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add product</h2>
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
            <form class="form-horizontal" action="<?php echo e(url('/save_product')); ?>" method="post" enctype="multipart/form-data">
              <fieldset>
                <?php echo e(@csrf_field()); ?>

                <div class="control-group">
                  <label class="control-label" for="textarea2">Product Name</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="product_name">
                  </div>
                </div>


                             <div class="control-group">
								<label class="control-label" for="selectError3">Catgeory</label>
								<div class="controls">
								  <select id="selectError3" name="category_id">
                                      <option>Select Category</option>
						<?php $all_published_category = DB::table('tbl_category')
												->where('publication_status', 1)
												->get();
							foreach($all_published_category as $v_category){?>
										<option value="<?php echo e($v_category -> category_id); ?>"><?php echo e($v_category -> category_name); ?></option> <?php } ?>
								  </select>
								</div>
							  </div>


                             <div class="control-group">
								<label class="control-label" for="selectError3">Brand</label>
								<div class="controls">
								  <select id="selectError3" name="brand_id">
                                  <option>Select Brand</option>
						<?php $all_published_brand = DB::table('tbl_brand')
												->where('publication_status', 1)
												->get();
							foreach($all_published_brand as $v_brand){?>
										<option value="<?php echo e($v_brand -> brand_id); ?>"><?php echo e($v_brand -> brand_name); ?></option>
							<?php } ?>
								  </select>
								</div>
							  </div>


                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Short Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="product_short_description" rows="3"></textarea>
                  </div>
                </div>


                  <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Long Description</label>
                  <div class="controls">
                    <textarea class="cleditor" name="product_long_description" rows="3"></textarea>
                  </div>
                </div>


                <div class="control-group">
                  <label class="control-label" for="textarea2">Price</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="product_price">
                  </div>
                </div>

                	<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div>

                <div class="control-group">
                  <label class="control-label" for="textarea2">Quantity</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="product_quantity">
                  </div>
                </div>

                    <label class="control-label" for="textarea2">Publication Status</label>
                  <div class="controls">
                    <input type="checkbox" name="publication_status" value="1">
                </div>
                </div>


                <div class="form-actions">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                  <button type="reset" class="btn">Cancel</button>
                </div>
              </fieldset>
            </form>

        </div>
    </div><!--/span-->
</div><!--/row-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\iBook\resources\views/admin/add_product.blade.php ENDPATH**/ ?>