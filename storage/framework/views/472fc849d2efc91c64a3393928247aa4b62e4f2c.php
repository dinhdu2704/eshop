<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>">
</head>
<body>
	<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php echo $rows->news_id; ?>

		<?php echo $rows->news_title."<br>"; ?>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<?php echo $news->appends(['tin'=>'3'])->links(); ?>

		<!-- <?php echo $news->fragment('something')->links(); ?> -->
</body>
</html>