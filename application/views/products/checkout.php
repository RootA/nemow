<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3>Your shopping cart contains: <span>3 Products</span></h3>

			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Service Charges</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a href="<?php echo base_url('product/single_product');?>"><img src="<?php echo base_url();?>vendor/images/j3.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity">
								<div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Beige solid Chinos</td>
						<td class="invert">$5.00</td>
						<td class="invert">$200.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close1').on('click', function(c){
									$('.rem1').fadeOut('slow', function(c){
										$('.rem1').remove();
									});
									});
								});
						   </script>
						</td>
					</tr>
					<tr class="rem2">
						<td class="invert">2</td>
						<td class="invert-image"><a href="<?php echo base_url('product/single_product');?>"><img src="<?php echo base_url();?>vendor/images/ss5.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity">
								<div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Floral Border Skirt</td>
						<td class="invert">$5.00</td>
						<td class="invert">$270.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close2"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close2').on('click', function(c){
									$('.rem2').fadeOut('slow', function(c){
										$('.rem2').remove();
									});
									});
								});
						   </script>
						</td>
					</tr>
					<tr class="rem3">
						<td class="invert">3</td>
						<td class="invert-image"><a href="<?php echo base_url('product/single_product');?>"><img src="<?php echo base_url();?>vendor/images/c7.jpg" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity">
								<div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Beige Sandals</td>
						<td class="invert">$5.00</td>
						<td class="invert">$212.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close3"> </div>
							</div>
							<script>$(document).ready(function(c) {
								$('.close3').on('click', function(c){
									$('.rem3').fadeOut('slow', function(c){
										$('.rem3').remove();
									});
									});
								});
						   </script>
						</td>
					</tr>
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">
				<div class="checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Product1 <i>-</i> <span>$200.00 </span></li>
						<li>Product2 <i>-</i> <span>$270.00 </span></li>
						<li>Product3 <i>-</i> <span>$212.00 </span></li>
						<li>Total Service Charges <i>-</i> <span>$15.00</span></li>
						<li>Total <i>-</i> <span>$697.00</span></li>
					</ul>
				</div>
				<div class="checkout-right-basket">
					<a href="products"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo base_url();?>vendor/images/ss1.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss2.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss3.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss4.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss5.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss6.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss7.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss8.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html">Pink Flared Skirt</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo base_url();?>vendor/images/ss2.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss3.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss4.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss5.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss6.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss9.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss7.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss8.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single_product">Red Pencil Skirt</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo base_url();?>vendor/images/ss3.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss4.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss5.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss6.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss7.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss8.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss9.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss1.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single_product">Yellow Cotton Skirt</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo base_url();?>vendor/images/ss4.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss5.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss6.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss7.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss8.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss9.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss1.jpg" alt=" " class="img-responsive">
								<img src="<?php echo base_url();?>vendor/images/ss2.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single_product">Black Short</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint:480,
									visibleItems: 1
								},
								landscape: {
									changePoint:640,
									visibleItems:2
								},
								tablet: {
									changePoint:768,
									visibleItems: 3
								}
							}
						});

					});
				</script>
				<script type="text/javascript" src="<?php echo base_url();?>vendor/js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="<?php echo base_url();?>vendor/images/39.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>a good look women's Long Skirt</h4>
							<p>Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat.Duis aute irure dolor in
								reprehenderit in voluptate velit esse cillum dolore
								eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="<?php echo base_url();?>vendor/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="<?php echo base_url();?>vendor/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="<?php echo base_url();?>vendor/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="<?php echo base_url();?>vendor/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="<?php echo base_url();?>vendor/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$320</span> <i class="item_price">$250</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span>Red</a></li>
									<li><a href="#" class="brown"><span></span>Yellow</a></li>
									<li><a href="#" class="purple"><span></span>Purple</a></li>
									<li><a href="#" class="gray"><span></span>Violet</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //checkout -->
