<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Đây là trang postFile</h1>
	<form action="<?php echo e(route('postFile')); ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="myFile"/>
		<!-- <input type="text" name="tuoi"/> -->
		<input type="submit"/>
		<!-- cho thêm dòng này k thì lỗi dòng 67 or 68 -->
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>﻿
	</form>
</body>
</html>