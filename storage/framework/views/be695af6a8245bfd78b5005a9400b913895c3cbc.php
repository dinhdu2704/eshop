				<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								
								<?php 
									$stt=0;
								 ?>
						<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<?php if(count($cate2->product)>0): ?>
								<?php if(count($cate2->product->where('noibat',1))!=0): ?>
								<div class="item <?php if($stt==0): ?> active <?php endif; ?> ">

									<?php $__currentLoopData = $cate2->product->where('noibat',1)->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
										<div class="col-sm-4 col-md-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="upload/product/<?php echo e($pro2->hinh); ?>" alt="" />
														<h2>$<?php echo e($pro2->gia); ?></h2>
														<p><?php echo e($pro2->ten); ?></p>
														<a href="buy/<?php echo e($pro2->tenkodau); ?>-<?php echo e($pro2->id); ?>.html" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
													
												</div>
											</div>
										</div>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									<?php 
									$stt++;
									 ?>
									
								</div>
								<?php endif; ?>
							<?php endif; ?>
								
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
							<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>			
						</div>
					</div><!--/recommended_items-->