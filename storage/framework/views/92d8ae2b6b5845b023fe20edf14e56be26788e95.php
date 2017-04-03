<?php $__env->startSection('title'); ?>
	<?php echo e("Cart"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="javascript:void(0)">Home</a></li>
				  <li class="active">My Order</li>
				</ol>
			</div>
			<div style="margin-bottom: 40px;">
				<h2>Tình trạng hàng: Đã đóng</h2>
			</div>
			<div class="table-responsive cart_info">

				<table class="table table-condensed" style="margin-bottom: 0;">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="width: 15%;">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity" style="width: 15%;">Quantity</td>
							<td class="total" width="10%">Total</td>
						</tr>
					</thead>
					<tbody>
					<?php $__currentLoopData = $condition->customorder->ten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
						<tr >
							<td class="cart_product" style="margin: 10px 0px 10px 20px;">
								<a href=""><img width="100px" src="upload/product/<?php echo e($cus->hinh); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><?php echo e($cus->ten); ?></h4>
								<p>Web ID: <?php echo e($cus->id); ?></p>
							</td>
							<td class="cart_price">
								<p>$</p>
							</td>
							<td class="cart_quantity" style="size: 24px;">
								x3
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$</p>
							</td>
						</tr>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			
		</div>
</section> <!--/#cart_items-->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>