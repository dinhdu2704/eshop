<?php $__env->startSection('title'); ?>
	<?php echo e("Home"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('layouts.slide', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php if(session('success')): ?>
		<?php echo "<script>
			alert('Đăng ký thành công ^^');
		</script>"; ?>

	<?php endif; ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					
					<?php echo $__env->make('layouts.left-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					
				</div>
				
				<div class="col-sm-9 col-md-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div class="col-sm-4 col-md-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="upload/product/<?php echo e($pro->hinh); ?>" alt="<?php echo e($pro->tomtam); ?>"   />
											<h2>$<?php echo e($pro->gia); ?></h2>
											<p><?php echo e($pro->ten); ?></p>

											<a href="product-detail/<?php echo e($pro->tenkodau); ?>-<?php echo e($pro->id); ?>.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$<?php echo e($pro->gia); ?></h2>
												<p><?php echo e($pro->ten); ?></p>
												<a href="product-detail/<?php echo e($pro->tenkodau); ?>-<?php echo e($pro->id); ?>.html" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Detail</a>
												<br>
												<a href="buy/<?php echo e($pro->tenkodau); ?>-<?php echo e($pro->id); ?>.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
											<?php if($pro->soluong <=30): ?>
												<img src="images/home/sale.png" class="new" alt="" />
											<?php endif; ?>
											<?php if($pro->noibat==1): ?>
												<img src="images/home/new.png" class="new" alt="" />
											<?php endif; ?>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
							<?php 
								$stt2=0;
							 ?>
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if(count($cate->subCategory)>0): ?>
								<li 
									<?php if($stt2==0): ?> 
										class="active" 
									<?php endif; ?>
								>
									<a href="#<?php echo e($cate->tenkodau); ?>" data-toggle="tab"><?php echo e($cate->ten); ?></a>
									<?php 
										$stt2++;
									 ?>
								</li>
								<?php endif; ?>
								
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
							</ul>
						</div>
						<div class="tab-content">
						<?php 
							$stt3=0;
						 ?>
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if(count($cate->subCategory) >0): ?>
							<div class="tab-pane fade 
								<?php if($stt3==0): ?> 
									active
								<?php endif; ?> 
								<?php 
									$stt3++;
								 ?>
									in" id="<?php echo e($cate->tenkodau); ?>" >
								<?php $__currentLoopData = $cate->product->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3 col-md-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="upload/product/<?php echo e($pro->hinh); ?>" alt="" />
												<h2>$<?php echo e($pro->gia); ?></h2>
												<p><?php echo e($pro->ten); ?></p>
												<a href="buy/<?php echo e($pro->tenkodau); ?>-<?php echo e($pro->id); ?>.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						</div>
					</div><!--/category-tab-->
					
					<?php echo $__env->make('layouts.recommended-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					
				</div>
			</div>
		</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>