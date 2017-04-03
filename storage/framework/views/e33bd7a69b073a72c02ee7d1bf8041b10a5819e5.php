<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<fieldset style="width: 500px; margin: auto;">
		<legend><h1>Danh sách sinh viên</h1></legend>
		<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
			<tr>
				<th>Họ tên</th>
				<th>Email</th>
			</tr>
			<?php $__currentLoopData = $sinhvien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo $sv['hoten']; ?></td>
				<td><?php echo $sv['email']; ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</fieldset>

	<fieldset style="width: 500px; margin: auto;">
		<legend><h1>Danh sách sinh viên</h1></legend>
		<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
			<tr>
				<th>Họ tên</th>
				<th>Email</th>
			</tr>
			<?php foreach($sinhvien as $sv2){ ?>
			<tr>
				<td><?php echo $sv2['hoten']; ?></td>
				<td><?php echo $sv2['email']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</fieldset>
</body>
</html>