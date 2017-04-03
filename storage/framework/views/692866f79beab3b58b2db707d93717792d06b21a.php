<?php $__env->startSection('title'); ?>
	<?php echo e("Products"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.ads', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<?php echo $__env->make('layouts.left-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				
				<div class="col-sm-9 col-md-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">View Detail Order</h2>
						<section id="cart_items">
							<div class="table-responsive cart_info">
								<table class="table table-condensed" style="margin-bottom: 0;">
									<thead>
										<tr class="cart_menu text-center">
											<td class="image" style="width: 15%;">Item</td>
											<td class="description" >Mô tả</td>
											<td class="description" style="width: 15%">Số lượng</td>
											<td class="description" style="width: 15%">Total</td>
											<td class="price text-center" style="width: 10%">Status</td>
										</tr>
									</thead>
									<tbody class="text-center">
										<td><a href="product-detail/<?php echo e($CustomOrder->product->tenkodau); ?>-<?php echo e($CustomOrder->product->id); ?>.html"><img style="width: 130px;" src="upload/product/<?php echo e($CustomOrder->product->hinh); ?>"></a></td>
										<td class="cart_description">
											<a href="product-detail/<?php echo e($CustomOrder->product->tenkodau); ?>-<?php echo e($CustomOrder->product->id); ?>.html"><p style="font-size: 20px;"><?php echo e($CustomOrder->product->ten); ?></p></a>
											<p><?php echo e($CustomOrder->product->tomtat); ?></p>
											</td>
										<td class="cart_description" style="font-size: 18px;">x<?php echo e($CustomOrder->qty); ?></td>
										<td class="cart_price" style="font-size: 18px;"><?php echo e($CustomOrder->total); ?>$</td>
										<td class="cart_delete text-center" style="font-size: 18px; display: inline;"> 
											<p>
												<?php if($CustomOrder->customer->status ==0): ?> 
													<?php echo e("Đang gửi"); ?>

													<p><a class="cart_quantity_delete" href="myorder/delete-<?php echo e($CustomOrder->id); ?>.html"><i class="fa fa-times"></i></a></p>
												<?php else: ?>
													<p style="margin-top:25px;"><?php echo e("Đã giao"); ?></p>
												<?php endif; ?>
											</p>
											
										</td>
									</tbody>
								</table>
							</div>
					</section> 
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>