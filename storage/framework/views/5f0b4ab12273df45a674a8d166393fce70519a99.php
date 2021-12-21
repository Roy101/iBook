<?php $__env->startSection('content'); ?>
                    <h2 class="text-center title">Featured Items</h2>

                    <?php foreach($all_product_info as $v_published_product){ ?>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="text-center productinfo">
											<img src="<?php echo e(URL::to($v_published_product->product_image)); ?>" style="width:150px; height: 150px" alt="iBook Image" />
											<h2><?php echo e($v_published_product->product_price); ?> BDT</h2><p>(per unit)</p>
											<h3><?php echo e($v_published_product->product_name); ?></h3>
                                            <p><?php echo e($v_published_product->brand_name); ?></p>
											<a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo e($v_published_product->product_price); ?> BDT</h2><p>(per unit)</h2>
												<p><?php echo e($v_published_product->product_name); ?></p>
												<a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>"><i class="fa fa-plus-square"></i>View Product</a></li>
									</ul>
								</div>
							</div>
						</div>
                        <?php } ?>
					</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\iBook\resources\views/pages/home_content.blade.php ENDPATH**/ ?>