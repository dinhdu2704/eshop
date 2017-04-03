<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<fieldset style="width: 300px">
		<legend><h1>Form</h1></legend>
		<form method="post" action="">
			Số 1: <input type="text" name="so1"><br>
			Số 2: <input type="text" name="so2">
			<input type="submit" value="submit">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>﻿
		</form>
	</fieldset>
</body>
</html>