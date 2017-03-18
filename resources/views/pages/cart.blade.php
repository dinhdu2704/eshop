@extends('layouts.index')
@section('content')
<form method="get" action="">
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
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
							<td></td>
						</tr>
					</thead>
					<tbody>
					
					@foreach ($content as $item)
					
						<tr>
							<td class="cart_product" style="margin: 10px 0px 10px 20px;">
								<a href=""><img width="100px" src="upload/product/{{ $item->options->img }}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{ $item->name }}</a></h4>
								<p>Web ID: {{ $item->id }}</p>
							</td>
							<td class="cart_price">
								<p>${{ number_format($item->price,0,",",".") }}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down button{{ $item->rowId }}" id="{{ $item->rowId }}" href="javascript:void(0)"> - </a>
									<input class="cart_quantity_input getid" id="{{ $item->rowId }}" type="text" name="quantity{{ $item->rowId }}" value="{{ ($item->qty) }}" autocomplete="off" size="2" min="0">
									<a class="cart_quantity_up button{{ $item->rowId }}"  href="javascript:void(0)" id="{{ $item->rowId }}"> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{ number_format($item->price*$item->qty)}}</p>
							</td>
							<td class="cart_delete" style="overflow: none;">
								<a class="cart_quantity_delete" href="{{ url('delete/'.$item->rowId) }}.html"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					
					@endforeach
					
					</tbody>
				</table>
			</div>
		</div>
</section> <!--/#cart_items-->

<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-6">
					<div class="total_area">
						<ul>
							
							<li>VAT(10%)<span>{!! number_format($vat) !!}$</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>${{ number_format($subtotal+$vat) }}</span></li>
						</ul>
							
							<a class="btn btn-default update" id="update" href="javascript:void(0)">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</div>
			</div>
		</div>
</section><!--/#do_action-->
</form>
@endsection
@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			@foreach ($content as $item)

			$(".button{{ $item->rowId }}").on("click", function(){
				
				var $button = $(this);
				var quantity = $("input[name='quantity{{ $item->rowId }}']").val();
				if ($button.text() == " + ") {
					var newVal = parseFloat(quantity) + 1;
				} else 
				{
					// Don't allow decrementing below zero
					if (quantity > 0) {
					    var newVal = parseFloat(quantity) - 1;
					} 
					else {
					    newVal = 0;
					}
				}
				$("input[name='quantity{{ $item->rowId }}']").val(newVal);
			});
			$('#update').click(function(){
				var getId= $('.getid').attr('id');
				var qty= $("input[name='quantity{{ $item->rowId }}']").val();
				var token= $("input[name='_token']").val();
				$.ajax({
					url: 'update/'+getId+'/'+qty,
					type:'get',
					cache:false,
					data:{"_token":token,"id":getId,"qty":qty},
					success:function(data){
						if(data=="oke")
							alert("xong");
					}
				});
			});
			@endforeach
			
			//$('#update').click(function(){
					
					// $.ajax({
					// 	url: 'update/'+rowId+'/'+qty,
					// 	type:'post',
					// 	cache:false,
					// 	data:{"_token":token,"id":rowId,"qty":qty},
					// 	success:function(data){
					// 		if(data=="oke")
					// 			alert("yes");
					// 	}
					// });
			//})
			
		});
	</script>
	
@endsection