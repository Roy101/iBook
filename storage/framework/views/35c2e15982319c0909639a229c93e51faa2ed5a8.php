=

<?php $__env->startSection('admin_content'); ?>


<div id="content" class="span12">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">View Order</a></li>
    </ul>


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


        <div class="box span6">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Customer Details</h2>
            </div>

            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Customer Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Customer Mobile</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order_by_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row"><?php echo e($v_order->customer_id); ?></th>
                            <td><?php echo e($v_order->customer_name); ?></td>
                            <td><?php echo e($v_order->customer_email); ?></td>
                            <td><?php echo e($v_order->mobile_number); ?></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>

                      <div class="row-fluid sortable">
                        <div class="box span6">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon car"></i><span class="break"></span>Shipping Details</h2>
                    </div>
                      <div class="col-md-6">
                      <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">Shipping Id</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Lasst Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $order_by_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <th scope="row"><?php echo e($v_order->shipping_id); ?></th>
                                    <td><?php echo e($v_order->shipping_first_name); ?></td>
                                    <td><?php echo e($v_order->shipping_last_name); ?></td>
                                    <td><?php echo e($v_order->shipping_address); ?></td>
                                    <td><?php echo e($v_order->shipping_mobile); ?></td>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                      </div>
                    </div>
        </div>


        <div class="row-fluid sortable">
            <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon gallery"></i><span class="break"></span>Order Details</h2>
        </div>

    <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Order Id</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Product Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Sub Total</th>
                </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $order_by_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <th scope="row"><?php echo e($v_order->order_id); ?></th>
                  <td><?php echo e($v_order->product_name); ?></td>
                  <td><?php echo e($v_order->product_price); ?></td>
                  <td><?php echo e($v_order->product_sales_quantity); ?></td>
                  <td><?php echo e($v_order->order_total); ?></td>
                </tr>

              </tbody>
              <tbody>
                <tr>
                  <th>Total</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo e($v_order->order_total); ?> BDT</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
</div><!--/span-->
</div><!--/row-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\elaravel\resources\views/admin/view_order.blade.php ENDPATH**/ ?>