<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Blog
                            <small>Edit Blog</small>
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
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        
                        <?php if(session('thongbao')): ?>
                            <div class="alert alert-success">
                                <?php echo session('thongbao'); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('admin/blog/edit/'.$blog->id)); ?>" method="POST" enctype="multipart/form-data">
                            <table class="table table-striped">
                                <div class="form-group">
                                    <label>Blog Name</label>
                                    <input class="form-control" name="Ten" placeholder="Đừng bỏ trống" value="<?php if(old('Ten')): ?> <?php echo old('Ten'); ?> <?php else: ?> <?php echo e($blog->tieude); ?><?php endif; ?>" />
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="demo" class="form-control ckeditor" rows="3" name="TomTat"><?php echo $blog->tomtat; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea id="demo" class="form-control ckeditor" rows="3" name="NoiDung"><?php echo $blog->noidung; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <?php if($blog->hinh): ?>
                                        <p><img src="upload/blog/<?php echo e($blog->hinh); ?>" style="width:150px"></p>
                                    <?php endif; ?>
                                    <input type="file" name="Image"/>
                                </div>
                                <div class="form-group">
                                    <label>Nổi Bật</label>
                                    <label class="radio-inline">
                                        <input  name="NoiBat" value="1" type="radio"
                                        <?php if($blog->noibat==1): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>>Có
                                    </label>
                                    <label class="radio-inline">
                                        <input name="NoiBat" value="0" type="radio" <?php if($blog->noibat==0): ?>
                                            <?php echo e("checked"); ?>

                                        <?php endif; ?>>Không
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success">Add Blog</button>&nbsp;
                                <button type="reset" class="btn btn-warning">Reset</button>
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