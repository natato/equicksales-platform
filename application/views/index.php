<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js " lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Basic -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Equicksales Consulting Ltd.</title>
    <meta name="keywords" content="Software Development, Product Marketing">
    <meta name="description" content="Equicksales consulting Ltd. is a software development consulting firm">
    <meta name="author" content="Nathanael Asaam">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('resources/images/favicon_io/favicon.ico')?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url('resources/images/favicon_io/apple-touch-icon.png')?>">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="<?php echo base_url('resources/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('resources/css/animate.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('resources/css/carousel.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('resources/css/style.css');?>">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <nav class="topbar-menu">
                            <ul class="list-inline">
                            	<li>Follow us: </li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul><!-- end list -->
                        </nav><!-- end menu -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6">
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

		<header class="header site-header">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							<div class="navbar-brand"><a  href="<?php echo site_url('site/index');?>"><img src="<?php echo base_url('/resources/images/commerce.png');?>" height="50px;"> <span><b style="color:#0000aa">Equicksales</b></a></span></div>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="active"><a href="<?php echo site_url('site/index');?>">Home</a></li>
				                <li class="dropdown yamm-fw hasmenu">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products and Services <span class="fa fa-angle-down"></span></a>
						            <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    
							                    	<div class="col-md-6">
														<ul>
							                    			<li><a href="<?php echo site_url('site/services');?>">Computer Security Research</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">System Analysis and Design</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">Website Design</a></li>
							                    			<li><a href="<?php echo site_url('site/services'); ?>">Web Application Development</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">Mobile Application Development on Android Devices</a></li>
							                    			
							                    		</ul>
							                    	</div>
													<div class="col-md-6">
														<ul>
							                    			<li><a href="<?php echo site_url('site/products');?>">Equicksales platform</a></li>
							                    			<li><a href="<?php echo site_url('site/products');?>">Eshop</a></li>
							                    			<li><a href="<?php echo site_url('site/products');?>">EMedics</a></li>
							                    		</ul>
							                    	</div>
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>
				                <li><a href="<?php echo site_url('site/registration');?>">Equicksales Registration</a></li>
				                  <li><a href="<?php echo site_url('site/advert');?>">Adverts</a></li>
				                <li><a href="<?php echo site_url('site/contact');?>">Contact</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="<?php echo 'background-image:';echo 'url(';echo base_url('resources/images/bg.jpg');echo ')'?>">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Search Equicksales</h2>
						<p class="lead">You can search equicksales for a page</p>
						<form class="calculateform">
						    <div class="item-box">
						        <div class="item-top form-inline">
						            <div class="form-group">
						                <div class="input-group2">
						                    <span class="input-addon">
												<i class="fa fa-link"></i>
											</span>
						                    <input type="text" class="form-control" id="urladres" name="url" placeholder="Search">
						                </div>
						            </div>
						            <input type="submit" name="send" value="Search" class="btn btn-default" />
						        </div>
						    </div>
						</form>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section nopad">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 nopad first">
						<div class="home-service c1">
							<i class="flaticon-competition"></i>
							<p>Equicksales platform: For marketing and sales of products and services</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c2">
							<i class="flaticon-chat"></i>
							<p>Eshop: Shop magement system for managing shops and supermarkets</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c3">
							<i class="flaticon-domain"></i>
							<p>Emedics: Hospital management system for managing hospitals</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad last">
						<div class="home-service c4">
							<i class="flaticon-medal"></i>
							<p>We embark on Computer Security Research to develop Security Systems</p>
						</div><!-- end home-service -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section overfree">
			<div class="icon-center"><i class="fa fa-anchor"></i></div>
			<div class="container">
				<div class="row service-list text-center">
					<div class="col-md-4 col-sm-12 col-xs-12 first">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-competition"></i>
							<div class="service-details">
								<h4><a href="service-01.html" title="">What We Do</a></h4>
								<p>System Analysis and Design, Website Design, Web Application Development, Mobile App Development on android devices</p>
								<a href="<?php echo site_url('site/services');?>" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-content"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Who We Are</a></h4>
								<p>We are an IT consulting firm started in 2015 with a vision to become one of the best software development firms in West Africa</p>
								<a href="<?php echo site_url('site/about');?>" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">	
							<i class="flaticon-html"></i>
							<div class="service-details">
								<h4><a href="service-02.html" title="">Our Mission</a></h4>
								<p>Our mission is to provide the means to embark on software development projects within constrained timeline and budget</p>
								<a href="<?php echo site_url('site/about');?>" class="readmore">View Details</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
		
		<section class="section lb nopad spotlight style1">
		    <div class="content">
		        <h2>Computer Security Research</h2>
		        <p>We are embarking on a computer security research. Our research is in the area of Building a usage profile and using it to detect anomalous activities on a computer system. We hope to develop an intrusion detection system and a risk analysis system  when are research is successful</p>
		    </div>
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="<?php echo base_url('resources/images/csr_bg.jpg');?>" alt="" />
		    </div>
		</section>
		<section class="section overfree">
			<div class="icon-center"><i class="fa fa-bar-chart"></i></div>
			<div class="container">
				<div class="section-title text-center">
					<small>Sign up for the equicksales platform for marketing and sales of products and services </small>
					<h3></h3>
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<ul style="list-style:none;margin:0 auto; width:350px;">
								<li style="float:left;padding:5px"><a href="<?php echo site_url('site/registration');?>"><button class="btn btn-primary">Sign Up</button></a></li>
								<li style="float:left;padding:5px;"><a href="<?php echo site_url('site/signin');?>"><button class="btn btn-primary">Sign In</button></a></li>
							</ul>
						</div>
					</div>
				</div><!-- end section-title -->
			</div>
		</section>


		<footer class="footer primary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Subscribe</h4>
                    		<div class="newsletter-widget">
                    			<p>You can opt out of our newsletters at any time. See our privacy policy.</p>
		                        <form class="form-inline" role="search">
		                            <div class="form-1">
		                              	<input type="text" class="form-control" placeholder="Enter email here..">
										<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i></button>
		                            </div>
								</form>
                    		</div><!-- end newsletter -->
                    	</div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Company</h4>
                    		<ul>
                    			<li><a href="<?php echo site_url('site/about');?>">About us</a></li>
                    			<li><a href="<?php echo site_url('site/contact');?>">Contact</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Services</h4>
                    		<ul>
                    			<li><a href="<?php echo site_url('site/services');?>">Computer Security Research</a></li>
                    			<li><a href="<?php echo site_url('site/services');?>">System Analysis and Design</a></li>
                    			<li><a href="<?php echo site_url('site/services');?>">Web Development</a></li>
                    			<li><a href="<?php echo site_url('site/services');?>">Mobile App Development</a></li>
                    			<li><a href="<?php echo site_url('site/services');?>">Website Design</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Products</h4>
                    		<ul>
                    			<li><a href="<?php echo site_url('site/products');?>">Equicksales Platform</a></li>
                    			<li><a href="<?php echo site_url('site/products');?>">Eshop</a></li>
                    			<li><a href="<?php echo site_url('site/products');?>">Emedics</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Be Social</h4>
                    		<ul>
                    			<li><a href="#">Facebook</a></li>
                    			<li><a href="#">Twitter</a></li>
                    			<li><a href="#">Google+</a></li>
                    			<li><a href="#">Linkedin</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
           	</div><!-- end container -->
		</footer><!-- end primary-footer -->

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>2015 - 2019 &copy; <a href="#">Equicksales Consulting Ltd.</a> All rights reserved.</p>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li>Designed  by: <a href="https://html.design">Equicksales</a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->
	</div><!-- end wrapper -->

	<!-- jQuery Files -->
	<script src="<?php echo base_url('resources/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('resources/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('resources/js/parallax.js');?>"></script>
	<script src="<?php echo base_url('resources/js/animate.js');?>"></script>
	<script src="<?php echo base_url('resources/js/owl.carousel.js');?>"></script>
	<script src="<?php echo base_url('resources/js/custom.js');?>"></script>
	
</body>
</html>