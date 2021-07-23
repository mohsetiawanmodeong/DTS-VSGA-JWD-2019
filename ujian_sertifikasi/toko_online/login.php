<?php
session_start();
if ($_SESSION) {
  if ($_SESSION['level'] == "Administrator") {
    header("Location:admin/admin.php");
  }
}

include('config/proses_login.php');
?>


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
  <!-- banner -->
  <div class="banner">
    <div class="w3l_banner_nav_center">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <!-- login -->
            <div class="w3_login">
              <h3> Login One Mart</h3>
              <div class="w3_login_module">
                <div class="module form-module">
                  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                  </div>
                  <div class="form">
                    <center>
                      <h2>Silahkan Login</h2>
                    </center>
                    <form action="#" method="post">
                      <input type="text" name="username" placeholder="Username" required=" ">
                      <input type="password" name="password" placeholder="Password" required=" ">
                      </select>
                      <center><?php echo $error; ?></center><br>
                      <input type="submit" name="submit" value="Login">
                    </form>
                  </div>

                  <div class="cta glyphicon glyphicon-arrow-left"><a href="index.php"> Kembali ke Website</a></div>
                </div>
              </div>
              <script>
                $('.toggle').click(function() {
                  // Switches the Icon
                  $(this).children('i').toggleClass('fa-pencil');
                  // Switches the forms  
                  $('.form').animate({
                    height: "toggle",
                    'padding-top': 'toggle',
                    'padding-bottom': 'toggle',
                    opacity: "toggle"
                  }, "slow");
                });
              </script>
            </div>
          </ul>
        </div>
    </div>
    <div class="clearfix">



    </div>
  </div>
  <!-- banner -->
  <div class="banner_bottom">

  </div>

  <!-- footer -->
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