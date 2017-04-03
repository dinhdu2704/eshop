<?php $__env->startSection('title'); ?>
	<?php echo e("Profile"); ?>

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
				<?php if(session('thongbao')): ?>
				<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
					<div class="alert-success text-center bor-radius">
						<h3 class="line60"><?php echo e(session('thongbao')); ?></h3>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<div class="login-form"><!--profile form-->
						<h2>Login to your account</h2>
						<form action="profile.html" method="post">
							<input type="text"  name="Ten" placeholder="Name"  value="<?php echo e(Auth::User()->name); ?>" />
							<input type="email" name="Email" placeholder="Email Address" disabled value="<?php echo e(Auth::User()->email); ?>" />
							<span>
								<label>
								<input type="checkbox" class="checkbox" name="changePass" id="changePass"> 
								Change your password
								</label>
							</span>
							<input type="password" class="change" placeholder="Password" name="Password" disabled />
							<input type="password" class="change" placeholder="Password Again" name="PasswordAgain" disabled />
							<button type="submit" class="btn btn-default">Submit</button>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						</form>
					</div><!--/profile-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#changePass').change(function(){
				if($(this).is(':checked')){
					$('.change').removeAttr('disabled');
					$('.change').css({"background":'white','border':'1px solid burlywood'});
				}
				else{
					$('.change').attr('disabled', 'disabled');
					$('.change').css({"background":'#F0F0E9','border':'medium none'})
				}
			})
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>