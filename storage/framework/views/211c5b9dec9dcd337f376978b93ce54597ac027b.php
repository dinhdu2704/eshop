<!-- nạp file master.blade -->

<!-- start section nội dung -->
<?php $__env->startSection('NoiDung'); ?>








<?php $learn= array('PHP','Laravel','ASP','NodeJS'); ?>


<?php $__empty_1 = true; $__currentLoopData = $learn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	<?php if($rows=='ASP') break; ?>
	<?php echo $rows; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<?php echo "Mảng rỗng"; ?>

<?php endif; ?>




<!-- end section nội dung -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>