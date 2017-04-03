<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<fieldset style="width: 500px; margin:auto;">
		<legend>Form</legend>
		<form method="post" action="">
			<tr>
				<td>Họ tên:</td>
				<td><input type="text" name="hoten"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		</form>
	</fieldset>
</body>
</html>