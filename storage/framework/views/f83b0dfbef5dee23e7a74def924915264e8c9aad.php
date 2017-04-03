<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Brand</h1>
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
                    <?php if(session('error')): ?>
                        <div class="alert-danger" style="line-height: 50px;">
                            <p style="margin-left:30px;"><?php echo e(session('error')); ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Brand
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">STT</th>
                                        <th class="text-center">Tên Hãng</th>
                                        <th class="text-center">Tên Không Dấu</th>
                                        <th class="text-center">Ngày tạo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                    <tr>
                                        <td><?php echo e($stt++); ?></td>
                                        <td><?php echo e($bra->ten); ?></td>
                                        <td><?php echo e($bra->tenkodau); ?></td>
                                        <td>
                                            <?php if($bra->created_at): ?>
                                                <?php echo e(Carbon\Carbon::createFromTimestamp(strtotime($bra->created_at))->diffForHumans()); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/brand/edit/<?php echo e($bra->id); ?>" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/brand/delete/<?php echo e($bra->id); ?>" class="font-20 text-danger"><span class="fa fa-times"></span></a>
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
               <?php echo e($brand->render()); ?>

           </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>