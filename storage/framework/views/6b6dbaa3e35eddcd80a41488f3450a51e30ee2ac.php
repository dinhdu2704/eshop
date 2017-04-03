	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo e($cate->id); ?>">
							<span class="badge pull-right">
								<?php if(count($cate->subCategory)>0): ?>
								<i class="fa fa-plus"></i>
								<?php endif; ?>
							</span><?php echo e($cate->ten); ?>

							</a>
						</h4>
					</div>
					<?php if(count($cate->subCategory)>0): ?>
					<div id="sportswear<?php echo e($cate->id); ?>" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<?php $__currentLoopData = $cate->subCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li><a href="category/<?php echo e($sub->tenkodau); ?>-<?php echo e($sub->id); ?>.html"><?php echo e($sub->ten); ?></a></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
					<?php endif; ?>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="brand/<?php echo e($bra->tenkodau); ?>-<?php echo e($bra->id); ?>.html"><span class="pull-right">
											<?php if(count($bra->product)>0): ?> <?php echo e("(".count($bra->product).")"); ?> 
											<?php endif; ?></span><?php echo e($bra->ten); ?>

										</a>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
							<form id="formSlider" type="post" action="product.html">
								<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[0,60]" id="sl2" name="aName"><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
								 
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								
							</form>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							
							<a href="<?php echo e($slideads->link); ?>"><img src="upload/slide_ads/<?php echo e($slideads->hinh); ?>" alt="<?php echo e($slideads->ten); ?>" /></a>
							
						</div><!--/shipping-->				
	</div>
