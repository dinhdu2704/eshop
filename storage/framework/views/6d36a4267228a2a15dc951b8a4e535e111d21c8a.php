<!-- kiểm tra đăng nhập chưa. -->
<?php if(Auth::check()): ?>
	
	<h1>Đăng nhập thành công ^^</h1>
	<?php if(isset($user)): ?>
		<!-- từ hàm $user(đại diện của Auth::user() ) trỏ về name trong csdl -->
		<?php echo "Tên của bạn là: ".$user->name; ?>

		<br>
		<?php echo "Email: ".$user->email; ?>


		<a href="<?php echo url('logout'); ?>">Logout</a>
	<?php endif; ?>
<?php else: ?>
	<?php echo "<h1>Bạn chưa đăng nhập</h1>"; ?>

<?php endif; ?>