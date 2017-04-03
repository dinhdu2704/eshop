<!-- khai báo file master.blade để nạp vào đây -->


<!-- khai báo nội dung bên yield sẽ nhận -->
<?php $__env->startSection('NoiDung'); ?>

<h2>Laravel 1</h2>
<?php echo e($learn); ?>

<!-- đóng section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>