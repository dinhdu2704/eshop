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
				<h2>Order Status</h2>
				<?php if(session('success')): ?>
					<div class="text-success">
						<h3 class="text-center">
							<?php echo e(session('success')); ?>

						</h3>
					</div>
				<?php endif; ?>
			</div>
			<div class="table-responsive cart_info">

				<table class="table table-condensed" style="margin-bottom: 0;">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="width: 15%;">Item</td>
							<td class="description"></td>
							<td class="description" style="width: 20%">Mã hàng</td>
							<td class="price text-center" style="width: 20%">Status</td>
						</tr>
					</thead>
					<tbody>
					<?php $__currentLoopData = $bought; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td class="cart_product" style="margin: 10px 0px 10px 20px;">
								<a href="myorder/view-<?php echo e($cus->id); ?>.html"><img width="100px" src="upload/product/<?php echo e($cus->product->hinh); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="myorder/view-<?php echo e($cus->id); ?>.html" ><?php echo e($cus->product->ten); ?></a></h4>
								<p>Web ID: <?php echo e($cus->product->id); ?></p>
							</td>
							<td>
								<p>Đặt hàng: #<?php echo e($cus->id); ?></p>
								<p>Đặt ngày: <?php echo e(date_format($cus->created_at,'d/m/Y')); ?></p>
							</td>
							<td class="cart_price text-center">
								<a href="myorder/view-<?php echo e($cus->id); ?>.html">Quản lý đơn hàng</a>
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