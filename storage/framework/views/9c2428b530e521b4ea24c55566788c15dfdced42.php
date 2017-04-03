<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Thêm</small>
                        </h1>
                    </div>
                    

                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <?php if(session('thongbao')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo session('thongbao'); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(count($errors) >0): ?>
                        <div class="alert alert-warning" role="alert">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $err; ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                        <form action="<?php echo e(url('admin/user/add')); ?>" method="POST">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="quyen">
                                    <option <?php if(old('quyen')==0): ?> <?php echo e("selected"); ?> <?php endif; ?> value="0">Người dùng</option>
                                    <option <?php if(old('quyen')==1): ?> <?php echo e("selected"); ?> <?php endif; ?>  value="1">Cộng tác viên</option>
                                    <option <?php if(old('quyen')==2): ?> <?php echo e("selected"); ?> <?php endif; ?>  value="2">Quản trị viên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input class="form-control" type="text" name="name" placeholder="Đừng bỏ trống" required value="<?php echo old('name'); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="kaideptrai@gmail.com" value="<?php echo old('email'); ?>" required/>
                            </div>
                            
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input class="form-control" type="password" name="passwordAgain" placeholder="Password Again" required/>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Add User</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
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