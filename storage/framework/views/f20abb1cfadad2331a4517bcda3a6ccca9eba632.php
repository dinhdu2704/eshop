<?php $__env->startSection('content'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Đang sửa: <small><?php echo $user->name; ?></small></small>
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
                        <form action="<?php echo e(url('admin/user/edit/'.$user->id)); ?>" method="POST">
                            <div class="form-group">
                                <label>Level</label>
                                <select name="quyen" class="form-control" >
                                    <option value="0" 
                                        <?php if($user->quyen==0): ?>
                                            <?php echo "selected"; ?>

                                        <?php endif; ?>
                                        >Người dùng</option>
                                    <option value="1"
                                        <?php if($user->quyen==1): ?>
                                            <?php echo "selected"; ?>

                                        <?php endif; ?>
                                    >Cộng tác viên</option>
                                    <option value="2"
                                        <?php if($user->quyen==2): ?>
                                            <?php echo "selected"; ?>

                                        <?php endif; ?>
                                    >Admin</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input class="form-control" type="text" name="name" placeholder="Đừng bỏ trống" required value="<?php if(old('name')): ?> <?php echo e(old('name')); ?> <?php else: ?> <?php echo $user->name; ?> <?php endif; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="kaideptrai@gmail.com" readonly="" value="<?php if(old('email')): ?> <?php echo e(old('email')); ?> <?php else: ?> <?php echo $user->email; ?> <?php endif; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" id="changePassword" name="changePassword">&nbsp;Đổi mật khẩu
                                </label>
                                <input class="form-control password" type="password" name="password" placeholder="Nhập mật khẩu mới" disabled="" required/>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control password" type="password" name="passwordAgain" placeholder="Nhập lại mật khẩu" disabled="" required/>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Sửa User</button>
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

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                //nếu trong input không có dấu tích thì
                if($(this).is(':checked'))
                {
                    $('.password').removeAttr('disabled');
                }
                else{
                    $('.password').attr('disabled','');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>