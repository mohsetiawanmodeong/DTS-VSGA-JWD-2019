<?php require_once("koneksi.php");
if (!isset($_SESSION)) {
	session_start();
} ?>

<!DOCTYPE html>
<html>

<head>
	<title> Toko Online One</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="asset/images/one.png" type="image/x-icon" />
	<!-- font-awesome icons -->
	<link href="asset/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="asset/js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="asset/js/move-top.js"></script>
	<script type="text/javascript" src="asset/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<!--
			<a href="products.html">Today's special Offers !</a>-->
		</div>
		<div class="w3l_search">
			<!--<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>-->
		</div>
		<div class="w3l_header_right1">
			<h2><a href="login.php"> Login</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- script-for sticky-nav -->
	<script>
		$(document).ready(function() {
			var navoffeset = $(".agileits_header").offset().top;
			$(window).scroll(function() {
				var scrollpos = $(window).scrollTop();
				if (scrollpos >= navoffeset) {
					$(".agileits_header").addClass("fixed");
				} else {
					$(".agileits_header").removeClass("fixed");
				}
			});

		});
	</script>
	<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php"><span>TOKO ONLINE</span> ONE MART</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<!--<ul class="special_items">
					<li><a href="events.html">Events</a><i>/</i></li>
					<li><a href="about.html">About Us</a><i>/</i></li>
					<li><a href="products.html">Best Deals</a><i>/</i></li>
					<li><a href="services.html">Services</a></li>
				</ul> -->
			</div>
			<div class="w3ls_logo_products_left1">
				<!--<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">ocikyamin93@gmail.com</a></li>
				</ul> -->
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">BERANDA</a></li> &nbsp; &nbsp; &nbsp;
				<li><a href="pakaian.php">PAKAIAN</a></li> &nbsp; &nbsp; &nbsp;
				<li><a href="makanan.php">MAKANAN</a></li>
			</ul>
		</div>
	</div>
	<!-- //products-breadcrumb -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3> Produk Pakaian </h3>
			<div class="agile_top_brands_grids">
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM pakaian ORDER BY br_id DESC limit 12");
				while ($data = mysqli_fetch_array($sql)) {
					?>


					<div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="tag"><img src="asset/images/tag.png" alt=" " class="img-responsive" /></div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<img src="admin/assets/images/pakaian/<?php echo $data['br_gbr']; ?>" />
												<p><?php echo $data['br_nm']; ?></p>
												<h4>Rp.<?php echo number_format($data['br_hrg'], 2, ",", "."); ?></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												<fieldset>
													<a href="detailpakaian.php?kd=<?php echo $data['br_id']; ?>" class="btn btn-danger">Detail</a>
													<a href="detailpakaian.php?kd=<?php echo $data['br_id']; ?>" class="btn btn-success">Beli &raquo;</a>
												</fieldset>
											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>
				<?php
				}


				?>



			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
	</div>
	</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>
							<p>Copyright &copy; 2019 One Mart | Design By Setiawan </p>
						</h4>
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Hubungi Kami</h5>
						<ul class="agileits_social_icons">
							<li><a href="https://web.facebook.com/Mr.One13" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCBYbpyPu-rC-rIXcbh4wTsg?view_as=subscriber" class="google"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/mohsetiawanmodeong/?hl=id" class="dribbble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://modeong13.blogspot.com/" class="instagram"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- Bootstrap Core JavaScript -->
	<script src="asset/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="asset/js/minicart.js"></script>
	<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function(evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
</body>

</html>