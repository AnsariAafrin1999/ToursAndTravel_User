<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
							<div id="colorlib-logo"><a href="index.html">Tour</a></div>
						</div>
						
						<div class="col-xs-10 text-right menu-1">
							@if(Auth::check())
                            <span>Welcome,{{Auth::user()->first_name}}</span>
                            <a href="{{route('Logout')}}"><span>Logout</span></a>
                            @endif
							<ul>
								<li class="active"><a href="home">Home</a></li>
								
							    <li><a href="holidays">Holidays</a></li>
								<li><a href="offers">Offers</a></li>
								<li><a href="contact">Contact Us</a></li>
								<li><a href="about">About Us</a></li>
								<li class="has-dropdown">
									<a href="login">Login</a>
									<ul class="dropdown">
									<li><a href="register">Sign Up</a></li>	
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
			   	<li style="background-image: url(images/Jaipur.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>2 Days Tour</h2>
				   					<h1>Amazing Jaipur Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/himachal1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>10 Days</h2>
				   					<h1>Beautiful Place</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/Domestic.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explore our most tavel agency</h2>
				   					<h1>Our Travel Agency</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/images13.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/italy1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the</h2>
				   					<h1>Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   		   		   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
								<li><a data-toggle="tab" href="#train"><i class="flaticon-train"></i> Train</a></li>
								<li><a data-toggle="tab" href="#bus"><i class="flaticon-bus"></i> Bus</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-3">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="hotel" class="tab-pane fade">
						      <form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Book Now</h2>
					              	 	<span>Best Price Online</span>
				              	 	</div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Train" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   <div id="car" class="tab-pane fade">
						   	<form method="post" class="colorlib-form">
				              	<div class="row">
				              	 <div class="col-md-4">
				              	 	<div class="form-group">
				                    <label for="date">Where:</label>
				                    <div class="form-field">
				                      <input type="text" id="location" class="form-control" placeholder="Search Location">
				                    </div>
				                  </div>
				              	 </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Start Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="date">Return Date:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <input type="submit" name="submit" id="submit" value="Find Bus" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						   </div>
						   </div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Destination</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/agra1.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Famliy Tour in Agra</h2>
						<span class="city">Agra</span>
						<span class="price"></span>
					</span>
				</a>
					    <a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/Manali.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Couple Tour in Manali</h2>
						<span class="city">Himanchal</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/ladakh.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Family Tour in Kashmir</h2>
						<span class="city">Kashmir</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/goa1.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Group Tour in Goa</h2>
						<span class="city">Goa</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/dubai1.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Custome Tour in Dubai</h2>
						<span class="city">Dubai</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/greece3.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Couple Tour in Greece</h2>
						<span class="city">Greece</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/singapur.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Custome Tour in Singapure</h2>
						<span class="city">Singapure</span>
						<span class="price"></span>
					</span>
				</a>
				<a href="#" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(images/thailand4.jpg);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
						<h2>Group Tour in Thailand</h2>
						<span class="city">Thailand</span>
						<span class="price"></span>
					</span>
				</a>
			</div>
		</div>
		<div id="colorlib-intro" class="intro-img" style="background-image: url(images/img_bg_5.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
								<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-tour">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Most Popular Travel Places</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/himanchal/manali.jpg);">
												<div class="desc">
													<h3>Manali - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/himanchal/Shimla1.jpg);">
												<div class="desc">
													<h3>Shimla - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/himanchal/Kullu.jpg);">
												<div class="desc">
													<h3>Kullu - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/himanchal/dharamshala.jpg);">
												<div class="desc">
													<h3>dharamshala - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Himanchal</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Manali</a></li>
															<li><a href="#">Shimla</a></li>
															<li><a href="#">Kullu</a></li>
															<li><a href="#">Kasol</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Dalhousie</a></li>
															<li><a href="#">Kasuli</a></li>
															<li><a href="#">Chamba</a></li>
															<li><a href="#">Dharmshala</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Una</a></li>
															<li><a href="#">Pragpur</a></li>
															<li><a href="#">Parwanoo</a></li>
															<li><a href="#">Hamirpur</a></li>
														</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="f-tour">
							<div class="row">
								<div class="col-md-6 col-md-push-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/jodhpur.jpg);">
												<div class="desc">
													<h3>jodhpur - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/mountabu.jpg);">
												<div class="desc">
													<h3>mountabu - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/udaipur.jpg);">
												<div class="desc">
													<h3>udaipur - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/bundi.jpg);">
												<div class="desc">
													<h3>bundi - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box col-md-pull-6 text-right">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Rajashthan</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Jodhpur</a></li>
															<li><a href="#">Udaipur</a></li>
															<li><a href="#">Mount Abu</a></li>
															<li><a href="#">Pushkar</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Bikaner</a></li>
															<li><a href="#">Jaisalmer</a></li>
															<li><a href="#">jaipur</a></li>
															<li><a href="#">chittorgrah</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">ranthambore</a></li>
															<li><a href="#">Bundi</a></li>
															<li><a href="#">alwar</a></li>
														</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
					<div class="col-md-12">
						<div class="f-tour">
							<div class="row row-pb-md">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/dubai2.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/italy1.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/singapur2.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/thailand1.jpg);">
												<div class="desc">
													<h3>Rome - 5 Days</h3>
													<p class="price"><span></span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Italy, Europe</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Rome</a></li>
															<li><a href="#">Milan</a></li>
															<li><a href="#">Genoa</a></li>
															<li><a href="#">Verona</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Venice</a></li>
															<li><a href="#">Bologna</a></li>
															<li><a href="#">Trieste</a></li>
															<li><a href="#">Florence</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Palermo</a></li>
															<li><a href="#">Siena</a></li>
															<li><a href="#">San Marino</a></li>
															<li><a href="#">Naples</a></li>
														</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="f-tour">
							<div class="row">
								<div class="col-md-6 col-md-push-6">
									<div class="row">
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/crete_greece.jpg);">
												<div class="desc">
													<h3>jodhpur - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/mountabu.jpg);">
												<div class="desc">
													<h3>mountabu - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/udaipur.jpg);">
												<div class="desc">
													<h3>udaipur - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
										<div class="col-md-6 animate-box">
											<a  href="tours.html" class="f-tour-img" style="background-image: url(images/rajshthan/bundi.jpg);">
												<div class="desc">
													<h3>bundi - 5 Days</h3>
													<p class="price"><span>$120</span> <small>/ person</small></p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box col-md-pull-6 text-right">
									<div class="desc">
										<div class="row">
											<div class="col-md-12">
												<h3>Athens, Greece</h3>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p><br>
											</div>
											<div class="col-md-12">
												<h4>Best Tours City</h4>
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Cape Sounion</a></li>
															<li><a href="#">Thessaloniki</a></li>
															<li><a href="#">Zagori</a></li>
															<li><a href="#">Halkidiki</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Peloponnese</a></li>
															<li><a href="#">Delphi</a></li>
															<li><a href="#">Meteora</a></li>
															<li><a href="#">Crete</a></li>
														</ul>
													</div>
													<div class="col-md-4 col-sm-4 col-xs-4">
														<ul>
															<li><a href="#">Athens</a></li>
															<li><a href="#">Greek Islands</a></li>
															</ul>
													</div>
												</div>
												<p><a href="tours.html" class="btn btn-primary">View All Places</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
	</html>