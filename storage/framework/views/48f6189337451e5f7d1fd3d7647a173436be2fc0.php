<?php $__env->startSection('title'); ?>
	<?php echo e("Checkout"); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="cart_items">
		
		<div class="container">
			
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			
				<?php if($errors): ?>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="alert-danger" style="line-height: 40px; border-radius: 10px; font-size: 16px; padding-left: 15px;">
						<?php echo e($err); ?>

					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

				<?php if(session('thongbao')): ?>
					<div class="alert-danger" style="line-height: 40px; border-radius: 10px; font-size: 16px; padding-left: 15px;">
						<?php echo e(session('thongbao')); ?>

					</div>
				<?php endif; ?>

				<?php if(session('success')): ?>
					<div class="alert-success" style="line-height: 40px; border-radius: 10px; font-size: 16px; padding-left: 15px;">
						<?php echo e("Mua hàng thành công. Xin đợi liên hệ của chúng tôi"); ?>

					</div>
				<?php endif; ?>
			</div><!--/breadcrums-->
			
		<?php if(Auth::User()): ?>
			<?php if(count($content)>0): ?>
			<div class="step-one">
				<h2 class="heading">Step1<small>&nbsp;Checkout Options</small></h2>
			</div>
			

			
			<form method="post" action="checkout.html">
				<div class="shopper-informations">
					<div class="row">
						<div class="col-sm-3 col-md-3">
							<div class="shopper-info">
								<p>Shopper Information</p>
								<div class="form-repair">
									<input type="text" placeholder="Display Name *" 
									value="<?php if(old('Name')): ?> <?php echo e(old('Name')); ?>

									<?php else: ?> <?php echo e(Auth::User()->name); ?> <?php endif; ?>" required name="Name">
									<input type="text" placeholder="User Name *" value="<?php echo e(Auth::User()->email); ?>" readonly>
									<input type="password" name="Password" placeholder="Password *" required="">
									<input type="password" name="PasswordAgain" placeholder="Confirm password *" required="">
								</div>
								
							</div>
						</div>
						<div class="col-sm-5 col-md-5 clearfix">
							<div class="bill-to">
								<p>Bill To</p>
								<div class="form-one">
									<div class="form-repair">
										<input type="text" placeholder="Company Name" name="Company" value="<?php echo e(old('Company')); ?>">
										<input type="text" placeholder="Title" name="Title" value="<?php echo e(old('Title')); ?>"> 
										<input type="text" placeholder="Address *" name="Address" required="" value="<?php echo e(old('Address')); ?>">
										<input type="text" placeholder="Mobile Phone *" name="Phone" required="" value="<?php echo e(old('Phone')); ?>">
									</div>
								</div>
								<div class="form-two">
									<div class="form-repair">
										<input type="text" placeholder="Zip / Postal Code">
										<select>
											<option>-- Province/City --</option>
											<option>Hà Nội</option>
											<option>Hồ Chí Minh</option>
											<option>Cà Mau</option>
											<option>Vũng Tàu</option>
											<option>Nha Trang</option>
											<option>Đà Lạt</option>
											<option>Hà Tây</option>
											<option>Vĩnh Phúc</option>
										</select>
										<select>
											<option>-- Region --</option>
											<option>United States</option>
											<option>Bangladesh</option>
											<option>UK</option>
											<option>India</option>
											<option>Pakistan</option>
											<option>Ucrane</option>
											<option>Canada</option>
											<option>Dubai</option>
										</select>
										<input type="text" placeholder="Phone">
										<input type="text" placeholder="Fax">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="order-message">
								<p>Shipping Order</p>
								<textarea name="message" placeholder="Vui lòng nhập địa chỉ chi tiết để chúng tôi có thể gửi hàng đến nơi chính xác nhất" rows="16" required><?php echo e(old('message')); ?></textarea>
								<label><input type="checkbox"> Shipping to bill address</label>
							</div>	
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					<button class="btn btn-primary" type="submit" style="float:right" onclick="return window.confirm('Bạn đồng ý mua hàng chứ?')">Checkout</button>
					</div>
				</div>
			

			
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="width: 15%;">Item</td>
							<td class="description" width="35%"></td>
							<td class="price">Price</td>
							<td class="quantity" style="width: 15%;">Quantity</td>
							<td class="total" width="10%">Total</td>
							<td style="width: 10%;"></td>
						</tr>
					</thead>
					<tbody>
					<?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td class="cart_product" style="margin: 10px 0px 10px 20px;">
								<a href=""><img width="100px" src="upload/product/<?php echo e($item->options->img); ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo e($item->name); ?></a></h4>
								<p>Web ID: <?php echo e($item->id); ?></p>
							</td>
							<td class="cart_price">
								<p>$<?php echo e(number_format($item->price,0,",",".")); ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down cursor" href="javascript:void(0)"> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo e(($item->qty)); ?>" autocomplete="off" size="2" min="0">
									<a class="cart_quantity_up cursor" href="javascript:void(0)"> + </a>
									<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php echo e(number_format($item->price*$item->qty)); ?></p>
							</td>
							<td class="cart_delete" style="overflow: none;">
								<a class="cart_quantity_delete" href="<?php echo e(url('delete/'.$item->rowId)); ?>.html"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Exo Tax(0%)</td>
										<td>$0</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$<?php echo e($subtotal); ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
			</div>

		</form>
			<?php else: ?>
				<h2 class="text-center text-uppercase " style="margin-bottom: 40px;">Please <a style="color: #FE980F; font-weight: bold;" title="Eshop - Checkout" href="<?php echo e(url('product.html')); ?>"/>Giỏ hàng</a> của bạn chưa có sản phẩm</h2>
			<?php endif; ?>
		<?php else: ?>
			<h2 class="text-center text-uppercase " style="margin-bottom: 40px;">Please <a style="color: #FE980F; font-weight: bold;" title="Eshop - Checkout" href="<?php echo e(url('login.html')); ?>"/>Login</a> to continue</h2>
		<?php endif; ?>
		</div>
		
			
		
	</section> <!--/#cart_items-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>