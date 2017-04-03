        
     
        
        <!-- Page Content -->
    <?php $__env->startSection('content'); ?>
    <style type="text/css"> .center>th{text-align: center;} </style>
        <div id="page-wrapper">
            <div class="container-fluid">
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
                        <h1 class="page-header">Slide
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr class="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th >Hình Ảnh</th>
                                <th>Nội Dung</th>
                                <th>Link</th>
                                <th>Ngày</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $stt=1;
                         ?>
                        <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sld): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt++; ?></td>
                                <td><?php echo $sld->ten; ?></td>
                                <td>
                                    <?php if($sld->hinh): ?>
                                        <img class="img-responsive" src="upload/slide/<?php echo $sld->hinh; ?>" width="200px">
                                    <?php endif; ?>
                                    
                                </td>
                                <td><?php echo $sld->noidung; ?></td>
                                <td><?php echo $sld->link; ?></td>
                                <td>
                                    <?php echo e(Carbon\Carbon::createFromTimestamp(strtotime($sld->created_at))->diffForHumans()); ?>

                                </td>
                                <td class="text-center" width="10%">
                                    <a href="admin/slide/edit/<?php echo e($sld->id); ?>" class="font-20 text-success "><span class="fa fa-pencil-square-o"></span></a>&nbsp;&nbsp;
                                    <a href="admin/slide/delete/<?php echo e($sld->id); ?>" class="font-20 text-danger"><span class="fa fa-times" onclick="return window.confirm('Bạn muốn xóa chứ?')"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <div class="text-center">
            <?php echo e($slide->render()); ?>

        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>