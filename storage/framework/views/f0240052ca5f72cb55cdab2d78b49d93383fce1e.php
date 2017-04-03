<?php $__env->startSection('content'); ?>
<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Blog</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if(session('thongbao')): ?>
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('thongbao')); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if(session('success')): ?>
                        <div class="alert-success" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('success')); ?></p>
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
                                        <th>Tên KH</th>
                                        <th>Sđt</th>
                                        <th>Địa chỉ</th>
                                        <th>Message</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Giao</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="text-center">
                                        <td><?php echo e($stt++); ?></td>
                                        <td><?php echo e($cus->user->name); ?></td>
                                        <td><?php echo e($cus->phone); ?></td>
                                        <td><?php echo e($cus->address); ?></td>
                                        <td><?php echo e($cus->message); ?></td>
                                        <td><?php echo e($cus->subtotal); ?>$</td>
                                        <td><?php echo e(Carbon\Carbon::createFromTimestamp(strtotime($cus->created_at))->diffForHumans()); ?></td>
                                        <td>
                                            <?php if($cus->status==0): ?>
                                                <?php echo e("Chưa"); ?>

                                            <?php else: ?>
                                                <?php echo e("Đã"); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/customer/detail/<?php echo e($cus->id); ?>" class="font-20 text-success "><span class="fa fa-calendar"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/customer/delete/<?php echo e($cus->id); ?>" class="font-20 text-danger"><span class="fa fa-times"></span></a>
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
               <?php echo e($customer->render()); ?>

           </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>