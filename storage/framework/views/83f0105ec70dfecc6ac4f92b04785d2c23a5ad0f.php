<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
<style type="text/css">
    .text-mid>th{ text-align: center; }
</style>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
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
                        <div class="panel-heading">
                            List Product
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr class="text-mid">
                                        <th>STT</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Brand</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>View</th>
                                        <th>Hot</th>
                                        <th>Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($stt++); ?></td>
                                        <td>
                                            <?php if($pro->hinh): ?>
                                                <img src="upload/product/<?php echo e($pro->hinh); ?>" style="width: 100px;">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($pro->ten); ?></td>
                                        <td><?php echo e($pro->gia); ?> $</td>
                                        <td><?php echo e($pro->brand->ten); ?></td>
                                        <td><?php echo e($pro->subcate->ten); ?></td>
                                        <td><?php echo $pro->tomtat; ?></td>
                                        <td><?php echo $pro->soluotxem; ?></td>
                                        <td>
                                            <?php if($pro->noibat==1): ?>
                                                <?php echo e("Có"); ?>

                                            <?php else: ?> <?php echo e("Không"); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($pro->soluong); ?></td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/product/edit/<?php echo e($pro->id); ?>" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/product/delete/<?php echo e($pro->id); ?>" class="font-20 text-danger"><span class="fa fa-times" ></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <div class="text-center">
              <?php echo e($product->render()); ?>

           </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>