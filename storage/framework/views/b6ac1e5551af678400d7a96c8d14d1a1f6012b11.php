<?php echo isset($error) ? $error : ''; ?>

<form action="<?php echo e(route('login')); ?>" method="post">
	Username: <input type="text" name="username" placeholder="Username">
	Password: <input type="password" name="password">
	<input type="submit" value="Submit">
	<input type="hidden" name="_token" value=<?php echo e(csrf_token()); ?>>
</form>
