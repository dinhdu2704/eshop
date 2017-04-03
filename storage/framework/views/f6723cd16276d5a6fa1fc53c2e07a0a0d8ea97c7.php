	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<?php 
								$stt=0;
							 ?>
							<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li data-target="#slider-carousel" data-slide-to="<?php echo e($stt); ?>"
							 
							<?php if($stt==0): ?>

							 class="active"

							<?php endif; ?>	
							></li>
							<?php  
								$stt++;
							 ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ol>
						
						<div class="carousel-inner">
							<?php 
								$stt=0;
							 ?>
							<?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
							<div class="item 
								<?php if($stt==0): ?>
									active
								<?php endif; ?>
							">
								<div class="col-sm-6 col-md-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2><?php echo e($sl->ten); ?></h2>
									<p><?php echo $sl->noidung; ?></p>
									<a href="<?php echo e($sl->link); ?>" class="btn btn-default get">Get it now</a>
								</div>
								<div class="col-sm-6 col-md-6">
									<img src="upload/slide/<?php echo e($sl->hinh); ?>" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<?php  
								$stt++;
							 ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->