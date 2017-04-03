<?php $__env->startSection('content'); ?>
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-10 col-md-offset-1">
                    <h1 class="page-header">Order Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-10 col-md-offset-1">
                    <?php if(session('thongbao')): ?>
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('thongbao')); ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if(session('error')): ?>
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('error')); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Blog
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="center">
                                        <th>STT</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $ord; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $or): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr class="text-center">
                                        <td><?php echo e($stt++); ?></td>
                                        <td>
                                            <img width="150px" src="upload/product/<?php echo e($or->product->hinh); ?>">
                                        </td>
                                        <td><?php echo e($or->product->ten); ?></td>
                                        <td><?php echo e($or->qty); ?></td>
                                        <td><?php echo e(number_format($or->price)); ?>$</td>
                                        <td><?php echo e(number_format($or->total)); ?>$</td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                        <div style="float:right;">
                        <form method="post">
                            <label>
                                <input type="checkbox" name="giaohang" value="1">Giao Hàng
                            </label><br>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" value="Giao Hàng" class="btn btn-success">
                        </form>
                        </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <div class="text-center">
           </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>