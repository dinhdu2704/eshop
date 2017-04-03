<?php $__env->startSection('title'); ?>
	<?php echo e("Product-Detail"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<?php echo $__env->make('layouts.left-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				
				<div class="col-sm-9 col-md-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5 col-md-5">
							<div class="view-product" id="load-img">
								<img id="zoom_mw" src="upload/product/<?php echo e($procheck->hinh); ?>" alt="" data-zoom-image="upload/product/<?php echo e($procheck->hinh); ?>" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								<style type="text/css">.width25{width: 25%;}</style>
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh); ?>" alt=""></a>
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh2); ?>" alt=""></a>
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh3); ?>" alt=""></a>
										</div>
										<div class="item">
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh2); ?>"  alt=""></a>
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh3); ?>" alt=""></a>
											<a href="javascript:void(0)"><img class="width25 a-click" src="upload/product/<?php echo e($procheck->hinh); ?>" alt=""></a>
										</div>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7 col-md-7">
							<div class="product-information"><!--/product-information-->
								<?php if($procheck->noibat==1): ?>
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<?php endif; ?>
								<?php if($procheck->noibat==0 && $procheck->soluong < 50): ?>
								<img src="images/product-details/sale.jpg" class="newarrival">
								<?php endif; ?>
								<h2><?php echo e($procheck->ten); ?></h2>
								<p>Web ID: <?php echo e($procheck->id); ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<form action="<?php echo e(url('buy-product/'.$procheck->tenkodau.'-'.$procheck->id.'.html')); ?>" method="post">
								<span>
									<span>USD: <?php echo e($procheck->gia); ?>$</span>
									<label>Quantity:</label>
									<input type="number" min="0" max="99" value="1" name="number"/>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
									<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								</span>
								</form>
								<p><b>Availability: </b>
									<?php if($procheck->soluong >10): ?>
										<?php echo e("Còn hàng"); ?>

									<?php else: ?> <?php echo e("Hết hàng"); ?>

									<?php endif; ?> 
								</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand: </b><?php echo e($procheck->brand->ten); ?></p>
								<div class=" col-sm-12">
									<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
									<div class="g-plusone" data-annotation="inline" data-width="120"></div>
										
								</div>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12 col-md-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Products</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Price</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews <?php if(count($comment)>0): ?> <?php echo e("(".count($comment).")"); ?> <?php endif; ?></a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<?php if(count($proSub)==0): ?>
									<h1>Chưa có sản phẩm</h1>
								<?php endif; ?>
								<?php $__currentLoopData = $proSub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							
								<div class="col-sm-3 col-md-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="upload/product/<?php echo e($prs->hinh); ?>" alt="" />
												<h2>$<?php echo e($prs->gia); ?></h2>
												<p><?php echo e($prs->ten); ?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<?php if(count($proPrice)==0): ?>
									<h1>Chưa có sản phẩm</h1>
								<?php endif; ?>
								<?php $__currentLoopData = $proPrice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
								<div class="col-sm-3 col-md-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="upload/product/<?php echo e($pr->hinh); ?>" alt="" />
												<h2>$<?php echo e($pr->gia); ?></h2>
												<p><?php echo e($pr->ten); ?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<?php if(count($proBrand)==0): ?>
									<h1>Chưa có sản phẩm</h1>
								<?php endif; ?>
								<?php $__currentLoopData = $proBrand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col-sm-3 col-md-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="upload/product/<?php echo e($br->hinh); ?>" alt="" />
												<h2>$<?php echo e($br->gia); ?></h2>
												<p><?php echo e($br->ten); ?></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12 col-md-12">
									<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<ul >
										<li><a href=""><i class="fa fa-user"></i><?php echo e($com->user->name); ?></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-clock-o"></i><?php echo e(date_format($com->created_at,'H:i')); ?></a></li>
										<li><a href="javascript:void(0)"><i class="fa fa-calendar-o"></i><?php echo e(date_format($com->created_at,'d:m:Y')); ?></a></li>
									</ul>
									<div style="margin-bottom: 30px; margin-top: -10px;"><?php echo $com->noidung; ?></div>
									<hr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<p style="margin-top:60px;"><b >Write Your Review</b></p>
									<?php if(Auth::User()): ?>
										<form action="" method="post">
											<span>
												<input style="color:brown" type="text" value="<?php echo e(Auth::User()->name); ?>"  readonly />
												<input style="color:brown" value="<?php echo e(Auth::User()->email); ?>"  type="email" readonly />
											</span>
											<textarea style="color:brown" name="review" required></textarea>
											<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
											<button type="submit" class="btn btn-default pull-right">
												Submit
											</button>
											<input type="hidden" name="idPro" value=<?php echo e($procheck->id); ?>>
											<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										</form>		
									<?php else: ?>
										<div class="text-uppercase" style="margin-top:50px;">
											<h1 style="color: #FE980F;">Login to write Reviews</h1>
										</div>
									<?php endif; ?> 
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

					<!--recommended_items-->
					<?php echo $__env->make('layouts.recommended-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script src='js/jquery.elevatezoom.js'></script>
	
    <script type="text/javascript">
        $(document).ready(function(){
        	var width = $( document ).width();
        	if(width <= 750)
        	{
        		$('#load-img img').removeAttr('id');
        	}
            $(".a-click").click(function()
            {
                var Images = $(this).attr('src');
                $("#load-img > img").remove();
                $('#load-img').append('<img src="'+Images+'" id=zoom_mw >');
               	//$.get('load-img/'+Images,function(data){
                //    $('#load-img').html(data);
                //});
                $('#zoom_mw').elevateZoom({scrollZoom : true});
            });
            $('#zoom_mw').elevateZoom({scrollZoom : true});
        });
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>