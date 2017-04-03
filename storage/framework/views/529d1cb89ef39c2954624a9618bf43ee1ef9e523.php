<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-12 table-responsive" style="padding-bottom:120px">

                        <?php if(count($errors) > 0 ): ?>
                            <div class="alert alert-danger">
                                
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $loi; ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                        
                        
                        <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo session('thongbao'); ?>

                            </div>
                        <?php endif; ?>

                        <?php if(session('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session('error'); ?>

                        </div>
                        <?php endif; ?>
                        <form action="admin/slide/edit/<?php echo $slide->id; ?>" method="POST" enctype="multipart/form-data">
                            <table class="table table-striped">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input class="form-control" name="Ten" placeholder="Đừng bỏ trống" value="<?php echo $slide->ten; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Ảnh</label>
                                    <p><img class="img-responsive" src="upload/slide/<?php echo $slide->hinh; ?>"></p>
                                    <input type="file" name="Hinh"/>
                                </div>
                                <div class="form-group">
                                    <label>Nội Dung</label>
                                    <textarea id="demo" class="form-control ckeditor" rows="3" name="NoiDung"><?php echo $slide->noidung; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>link</label>
                                    <input class="form-control" name="link" placeholder="Đừng bỏ trống"  value="<?php echo $slide->link; ?>" />
                                </div>
                                
                                <button type="submit" class="btn btn-success">Edit Slide</button>&nbsp;
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            </table>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>