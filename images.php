<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?php include('db.php');?>
<html lang="en">
<head>
<title>Glass Arts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crop Pic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
<!--gallery pop-up-css file -->
<link rel="stylesheet" href="css/chocolat.css" type="text/css">
<!-- // gallery pop-up-css file -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner jarallax">
		<div class="banner-agileinfo">
				<!-- Header -->
		<div class="logo-w3layouts">
			<h1><a href="index.php"><i class="fa fa-pie-chart" aria-hidden="true"></i>Glass Art</a></h1>
		</div>
		
			<!-- Navigation -->
		<!--div class="menu">
					<a href="#" class="navicon"></a> 
					<div class="toggle"> 
						<ul class="toggle-menu">
							<li><a href="index.html" class="active"> Home</a></li>
							<li><a href="#about" class="scroll"> About</a></li> 
								<li><a href="services.html"> Services</a></li> 
								<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
							<li><a href="portfolio.html"> Portfolio</a></li> 
							<li><a  href="mail.html"> Contact Us</a></li>
						</ul>
					</div> 
				</div-->   

		<!-- //Navigation -->

			<!-- banner-text -->
			<div class="banner-w3lstext agileits-w3layouts">  
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li> 
					<li class="active">Images</li>
				</ol>  
			</div>
			<!-- //banner-text -->
		</div>
	</div>
	<!-- //banner --> 
	  <!-- gallery -->
	  
	    
	  <?php
							$aid12=$_GET['albumid'];
							$sql12="select * from album where albumid='$aid12' ";
							$result12=mysql_query($sql12);
									if($result12==false ){die(mysql_error());}
									$count12=mysql_num_rows($result12);
									$row12=mysql_fetch_array($result12);
									
			
			
			
							$aid=$_GET['albumid'];
							$sql="select photonm from images where albumid='$aid' ";
							//echo $sql;
							$result=mysql_query($sql);
									if($result==false ){die(mysql_error());}
									$count=mysql_num_rows($result);
									//$row=mysql_fetch_array($result);
									
				?>
	  
	  
	<div class="portfolio" id="gallery">
			<div class="container">
			<!-- Owl-Carousel -->
			<div class="wthree_head_all">
				<h3><?php echo $row12['name']; ?></h3>
			</div>
			
			
			
			
			
			<div class="portfolio-agile">
			<div class="main">
			<?php 
			
			for($k=1;$k<=$count;$k++)
				{
				   $row=mysql_fetch_array($result); 
			
			
			?>
                <div class="view view-seventh">
					<a href="images/photos/<?php echo $row['photonm'];?> " class="b-link-stripe b-animate-go  thickbox">
						<img src="images/photos/<?php echo $row['photonm'];?>" alt="" />
						<div class="mask">
							<!--h4>Crop Pic</h4-->
							
						</div>
					</a>
                </div>
               
                <?php }?>
				
				<div class="clearfix"></div>
           
			</div>
			</div>
			
			
			</div>
	</div>
<!-- //gallery -->
<!-- Clients -->

	<!--// Clients -->
	<!-- footer -->
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>About Us</h3>
				<p>Nam libero tempore cum vulputate id est id, pretium semper enim. Morbi viverra congue nisi vel pulvinar posuere sapien
					eros.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Latest News</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>8088 USA, Honey block, <span>New York City.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="footer_grids">
				<div class="col-md-4 footer_grid_left">
					<h3>Sign up for our Newsletter</h3>
				</div>
				<div class="col-md-8 footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
					<div class="footer_bottom1">
						<p>© 2018 Crop pic . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script> 
	<!-- //menu-js --> 
	
	<!-- gallery-pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript">
$(function() {
	$('.view-seventh a').Chocolat();
});
</script>
<!-- //gallery-pop-up-script -->
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 2,
				lazyLoad: true,
				autoPlay: false,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->
	<!-- jarallax -->  
	<script src="js/SmoothScroll.min.js"></script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
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
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>