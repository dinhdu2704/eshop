<?php $__env->startSection('title'); ?>
	<?php echo e("Blog"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<?php echo $__env->make('layouts.left-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				<div class="col-sm-9 col-md-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>

						<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="single-blog-post">
							<h3><?php echo e($bl->tieude); ?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i><?php echo e($bl->user->name); ?></li>
									<li><i class="fa fa-clock-o"></i><?php echo e(date_format($bl->created_at,'H:i')); ?></li>
									<li><i class="fa fa-calendar"></i><?php echo e(date_format($bl->created_at,'d-m-Y')); ?></li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="blog-detail/<?php echo e($bl->tieudekodau); ?>-<?php echo e($bl->id); ?>.html">
								<img src="upload/blog/<?php echo e($bl->hinh); ?>" alt="<?php echo e($bl->tieudekodau); ?>">
							</a>
							<p><?php echo $bl->tomtat; ?></p>
							<a  class="btn btn-primary" href="blog-detail/<?php echo e($bl->tieudekodau); ?>-<?php echo e($bl->id); ?>.html">Read More</a>
						</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<div class="pagination-area">
							<?php echo e($blog->render()); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>