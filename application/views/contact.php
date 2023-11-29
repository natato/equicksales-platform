<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
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
	<link rel="stylesheet" href="<?php echo base_url('resources/css/style.css');?>">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	
	<div id="wrapper">
		<header class="header site-header header-transparent">
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
							<div class="navbar-brand"><a  href="<?php echo site_url('site/index');?>"><img src="<?php echo base_url('resources/images/commerce.png');?>" height="50px;"> <span><b style="color:#0000aa">Equicksales</b></a></span></div>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class=""><a href="<?php echo site_url('site/index');?>">Home</a></li>
				                <li class="dropdown yamm-fw hasmenu">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products and Services <span class="fa fa-angle-down"></span></a>
						            <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="<?php echo site_url('site/services');?>">System Analysis and Design</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">Website Design</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">Web Application Development</a></li>

							                    		</ul>
							                    	</div>
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="<?php echo site_url('site/services');?>">Computer Security Reseach</a></li>
							                    			<li><a href="<?php echo site_url('site/services');?>">Mobile Application Development on android devices</a></li>
							                    		</ul>
							                    	</div>
							                    	<div class="col-md-4">
														<ul>
							                    			<li><a href="<?php echo site_url('site/products');?>">Equicksales Platform</a></li>
							                    			<li><a href="<?php echo site_url('site/products');?>">Eshop</a></li>
							                    			<li><a href="<?php echo site_url('site/products');?>">Emedics</a></li>
							                    		</ul>
							                    	</div>
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>
				                <li><a href="<?php echo site_url('site/registration');?>">Equicksales Registration</a></li>
				                    <li><a href="<?php echo site_url('site/advert');?>">Adverts</a></li>
				               
				                <li class="active"><a href="<?php echo site_url('site/contact');?>">Contact</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader bgcolor">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Contact Us</h2>
						<p class="lead">Conact us with your queries or complains about equicksales  platform</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-details">
							<h3>Welcome to Our Contact Center</h3>
							<p>Please contact us with regards to any queries about our services and products or to complain about any service or security issue with regards to the use of the equicksales platform</p>
							
						</div>
					</div>

					<div class="col-md-5">
						<form role="form" class="contactform">
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						    </div>
						    <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
						    </div>
						    <button type="button" id="submit" name="submit" class="btn btn-primary">Submit Form</button>
						</form>
					</div><!-- end col -->

					<div class="col-md-3 mb30">
						<div class="contact-details">
							<ul>
								<li><i class="fa fa-phone"></i> <span>+233 209 281 193</span></li>
								<li><i class="fa fa-envelope"></i> <span><a href="mailto:info@equicksales.com">info@equicksales.com</a></span></li>
								<li><i class="fa fa-twitter"></i> <span><a href="https://twitter.com/equicksales">twitter.com/equicksales</a></span></li>
								<li><i class="fa fa-facebook"></i> <span><a href="http://www.facebook.com/equicksales">facebook.com/equicksales</a></span></li>
								<!--<li><i class="fa fa-google-plus"></i> <span><a href="#">google.com/+yourhandle</a></span></li>-->
							</ul>
						</div><!-- end contact details -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->		

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
	<script src="<?php echo base_url('resources/js/custom.js');?>"></script>

</body>
</html>