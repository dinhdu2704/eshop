<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Nhập điểm:</h1>
	<form action="<?php echo e(route('diem')); ?>" method="get" >
		<input type="number" name="diem">
		<input type="submit" value="Submit">
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	</form>
</body>
</html>