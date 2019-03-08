<!DOCTYPE HTML>
<html>
	<head>

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->

	<link rel="stylesheet" href="/css/style.css">

	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="">Tour</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="home">Home</a></li>
								<li class="has-dropdown">
									<a href="domestic">Domestic</a>
									<ul class="dropdown">
										<li><a href="#">Rajsathan</a></li>
										<li><a href="#">Himanchal</a></li>
										<li><a href="#">Agra</a></li>
										<li><a href="#">Delhi</a></li>
										<li><a href="#">Kashmir</a></li>
										<li><a href="#">Hydrabad</a></li>
										<li><a href="#">Chennai</li>
											
									</ul>
								</li>
								<li class="has-dropdown">
									<a href="international">International</a>
									<ul class="dropdown">
										<li><a href="#">Dubai</a></li>
										<li><a href="#">Signapore</a></li>
										<li><a href="#">Maldives</a></li>
										<li><a href="#">Island</a></li>
										<li><a href="#">Itali</a></li>
										<li><a href="#">Greece</a></li>
									</ul>
								</li>
								<li><a href="about">Contact Us</a></li>
								<li><a href="contact">About Us</a></li>
								<li class="has-dropdown">
									<a href="login">Login</a>
									<ul class="dropdown">
									<li><a href="#">Sign Up</a></li>	
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/manali.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Find Tours</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	<form method="post" action="">
		{{csrf_field()}}
		<div class="container">
			<div class="row">
				<div class="tour">
					<div class="text-center"><h1>{{$sing->pack_name}}</h1></div>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->pack_image)}}" width="300px" height="300px">
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->pack_image1)}}" height="300px" width="300px">
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->pack_image2)}}" height="300px" width="300px">
					</div>
						<h1 class="text-center">Information</h1>
						<p class="description">{{$sing->pack_desc}}</p>

						<h1 class="text-center">{{$sing->hotelget->hotel_name}}</h1>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->hotelget->image_1)}}" width="300px" height="300px">
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->hotelget->image_2)}}" height="300px" width="300px">
					</div>
					<div class="col-lg-4">
						<img src="{{ asset('images/'.$sing->hotelget->image_3)}}" height="300px" width="300px">
					</div>				
					<h2 class="text-center">{{$sing->dayscheduleget->day1}}</h2>
					<h2 class="text-center">{{$sing->dayscheduleget->day2}}</h2>
					<h2 class="text-center">{{$sing->dayscheduleget->day3}}</h2>
					<h2 class="text-center">{{$sing->dayscheduleget->day4}}</h2>							
	<div class="col-md-4">
	<div class="tour1">
		<h3>inclusion</h3>
		<i class="fa fa-check-square" aria-hidden="true">GST Extra</i><br>
		<i class="fa fa-check-square" aria-hidden="true">Air/Train Fare</i><br>
		<i class="fa fa-check-square" aria-hidden="true">Travel insurance</i>
		<i class="fa fa-check-square" aria-hidden="true">camera fee</i>
	</div>
</div>
<div class="col-md-4">
	<div class="tour1">
		<h3>exclusion</h3>
		<i class="fa fa-check-square" aria-hidden="true">GST Extra</i><br>
		<i class="fa fa-check-square" aria-hidden="true">Air/Train Fare</i><br>
		<i class="fa fa-check-square" aria-hidden="true">Travel insurance</i>
		<i class="fa fa-check-square" aria-hidden="true">camera fee</i>
	</div>
</div>
<div class="col-md-4">
	<div class="tour1">
		<h3>Cancellation Policy</h3>
		<h4>cancellation charges per person</h4>
		<i class="fa fa-check-square" aria-hidden="true">Before 30 days of departure - Rs. 2000 per Person</i><br>
		<i class="fa fa-check-square" aria-hidden="true">Before 15 days of departure - Rs. 3000 per Person</i><br>
		<i class="fa fa-check-square" aria-hidden="true">GST not refund</i>
		</div>
	</div>
	</div></div>

	<div class="row">
		<div class="col-md-12 text-center">
			<a href="" data-toggle="modal" data-target="#exampleModal">Book Order</a>
		</div>
	</div>
	</div>
	</div>
	</div>



	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		 <div class="modal-dialog" role="document">
		 	<div class="modal-content">
		 		<div class="modal-header">
		 			<button type="button" class="close" data-dsimiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		 			<h4 class="modal-title" id="exampleModalLabel">New Message</h4>
		 		</div>
		 		<form action="{{route('savebooking')}}" method="post">
		 			{{csrf_field()}}
		 			<input type="hidden" name="pack_id" value="" id="modal-pack-id">
		 			<div class="modal-body">
		 				<div class="form-group">
		 					<label for="receipient-name" class="control-label">Book Date</label>
		 					<input type="text" class="form-control" name="book_date">
		 				</div>
		 				<div class="form-group">
		 					<label for="receipient-name" class="control-label">Description</label>
		 					<input type="text" class="form-control" name="description">
		 				</div>
		 				<div class="modal-footer">
		 					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 					<input type="submit" value="Submit" class="btn btn-primary">
		 				</div>
		 			</div>
		 		</form>
		 			}
		 	</div>
		 </div>
	</div>



</form>
		
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Follow Us</h4>
						
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
								<li><a href="#"><i class="icon-youtube"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Support</h4>
						<p>
							Terms of Services<br>
							Privacy Policy
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Domestic Tour</a></li>
								<li><a href="#">International Tour</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><i class="icon-phone"> International: (079)67541245
							<br>Domestic: (079)45789073</i></li>
							<li><a href="#"><i class="icon-location"> Address</i></a></li>
						</ul>
					</div>
				</div>
					
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kevalya Infotech</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
		

	

		

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="/js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="/js/main.js"></script>

	</body>
</html>

