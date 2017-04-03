<?php $__env->startSection('title'); ?>
	<?php echo e("Login"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<?php if(count($errors)>0): ?>

				<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3" >
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="alert-danger text-center bor-radius">
							<h3 class="line60"><?php echo e($err); ?></h3>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<?php endif; ?>
				<?php if(session('error')): ?>
				<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
					<div class="alert-danger text-center bor-radius">
						<h3 class="line60"><?php echo e(session('error')); ?></h3>
					</div>
				</div>
				<?php endif; ?>
				<?php if(session('thongbao')): ?>
				<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
					<div class="alert-success text-center bor-radius">
						<h3 class="line60"><?php echo e(session('thongbao')); ?></h3>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-4 col-md-4 col-sm-offset-1 col-md-offset-1">
					
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login.html" method="post">
							<input type="email" name="email" placeholder="Email Address" />
							<input type="password" placeholder="********" name="password" />
							<span>
								<input type="checkbox" name="remember" id="remember" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1 col-md-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4 col-md-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo e(url('signup.html')); ?>" method="post">
							<input type="text" name="Ten" placeholder="Name" required />
							<input type="email" name="Email" placeholder="Email Address" required/>
							<input type="password" name="Password" placeholder="Password" required/>
							<input type="password" name="PasswordAgain" placeholder="Password Again" required/>
							<button type="submit" class="btn btn-default">Signup</button>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>