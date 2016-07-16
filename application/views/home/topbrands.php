<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Top Brands</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">
					<li>
						<img src="<?php echo base_url();?>vendor/images/4.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="<?php echo base_url();?>vendor/images/5.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="<?php echo base_url();?>vendor/images/6.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="<?php echo base_url();?>vendor/images/7.png" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="<?php echo base_url();?>vendor/images/46.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
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
<!-- //top-brands -->
