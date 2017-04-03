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
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Người đăng</th>
                                        <th>Nổi bật</th>
                                        <th>View</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php 
                                    $stt=1;
                                 ?>
                                <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                    <tr class="text-center">
                                        <td><?php echo e($stt++); ?></td>
                                        <td>
                                            <?php if($bl->hinh!=''): ?>
                                                <img style="width: 200px" src="upload/blog/<?php echo e($bl->hinh); ?>">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($bl->tieude); ?></td>
                                        <td><?php echo e($bl->tomtat); ?></td>
                                        <td><?php echo e($bl->user->name); ?></td>
                                        <td>
                                            <?php if($bl->noibat==1): ?>
                                                <?php echo e("Có"); ?>

                                            <?php else: ?> <?php echo e("Không"); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($bl->soluotxem); ?></td>
                                        <td class="text-center" width="10%">
                                            <a href="admin/blog/edit/<?php echo e($bl->id); ?>" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                            <a onclick="return window.confirm('Bạn muốn xóa chứ?')" href="admin/blog/delete/<?php echo e($bl->id); ?>" class="font-20 text-danger"><span class="fa fa-times"></span></a>
                                        </td>
                                    </tr>
                                </tbody>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
               <?php echo e($blog->render()); ?>

           </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>