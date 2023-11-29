<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Equicksales Platform Registration</title>
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
	<style>
		.poper{
			z-index:2;
			bottom:0;
			left:0;
			position:fixed;
		}
	</style>
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
				        
				                <li><a href="<?php echo site_url('site/registration');?>">Equicksales Registration</a></li>
				                <li><a href="<?php echo site_url('site/contact');?>">Contact</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader customtitle">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Password Reset</h2>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="about-img">
									<div class="panel panel-default about-widget">
										
										<?php if (isset($msg1)):?>
											<h5 style="color:#00aa00"><?php echo $msg1; ?></h5>
										<?php
											endif;	
											if(isset($msg2)):?>
												<h5 style="color:#aa0000"><?php echo $msg2; ?></h5>
										<?php 
											endif;		
										?><br>
										<h3>Password Reset</h3>
										<div class="panel-body">
											<form method="post" action="<?php echo site_url('platform/resetpassword/'.$token.'/1');?>">
												<div class="input group">
													<label for ="password">Password</label>
													<input class="form-control" type="password" name="password" placeholder="Enter Password" style="border-color:lightblue" required>
												</div>
												<div class="input group">
													<label for ="password">Confirm Password</label>
													<input class="form-control" type="password" name="confirmpassword" placeholder="Enter Password" style="border-color:lightblue" required>
												</div>
												<div class="input group">
													<input class="btn btn-primary" type="submit" value="Reset Password" id="signin">
													
													<img id="loading" src="<?php echo base_url('resources/images/loading.gif');?>" height="50px" style="opacity: 0.4;right:280px; visibility:hidden">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
		<section>
			<div class="container">
				<div class="poper">
				</div>
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
                    			<li><a href="about.html">About us</a></li>
                    			<li><a href="#">Contact</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Services</h4>
                    		<ul>
                    			<li><a href="services.html">Computer Security Research</a></li>
                    			<li><a href="services.html">System Analysis and Design</a></li>
                    			<li><a href="services.html">Web Development</a></li>
                    			<li><a href="services.html">Mobile App Development</a></li>
                    			<li><a href="services.html">Website Design</a></li>
                    		</ul>
                    	</div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-2 col-sm-2">
                    	<div class="widget clearfix">
                    		<h4 class="widget-title">Products</h4>
                    		<ul>
                    			<li><a href="products.html">Equicksales Platform</a></li>
                    			<li><a href="products.html">Eshop</a></li>
                    			<li><a href="products.html">Emedics</a></li>
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
	<script src="<?php echo base_url('resources/js/notify.js');?>"></script>
	<script src="<?php echo base_url('resources/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('resources/js/parallax.js');?>"></script>
	<script src="<?php echo base_url('resources/js/animate.js');?>"></script>
	<script src="<?php echo base_url('resources/js/custom.js');?>"></script>
</body>
</html>