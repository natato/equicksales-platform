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
    <meta name="keywords" content="Software Development, Registration">
    <meta name="description" content="Equicksales platform lets you market your products and services">
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

	<script src="<?php echo base_url('resources/js/notify.js');?>"></script>

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
							<div class="navbar-brand"><a  href="http://localhost/new/newequicksales"><img src="<?php echo base_url('resources/images/commerce.png');?>" height="50px;"> <span><b style="color:#0000aa">Equicksales</b></a></span></div>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
								<!--<li class=""><a href="<?php echo site_url('site/index');?>">Home</a></li>-->
				               <!-- <li class="dropdown yamm-fw hasmenu">
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
				                </li>-->
				                <li class="active"><a href="<?php echo site_url('site/registration');?>">Equicksales Registration</a></li>
				                 <li><a href="<?php echo site_url('site/advert');?>">Adverts</a></li>
				                <!--<li><a href="<?php echo site_url('site/contact');?>">Contact</a></li>--
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
						<h2>Sign Up for Equicksales Platform</h2>
						<p class="lead">Platform for marketing and sales of products and services</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-widget">
							<i class="flaticon-cup"></i>
							<h3>Equicksales Platform</h3>
							<p>Equicksales platform gives you the opportunity to market and sell your products and services. It is a platform where customers meet businesses</p>

	                        
						</div><!-- end about-widget -->	
					</div><!-- end col -->

					<div class="col-md-7">
						<div class="about-img">
							<div class="panel panel-default about-widget">
								<h3>Equicksales Registration</h3>
								<div class="panel-body">
									<form method="post" action="">
										<div class="input group">
											<label for ="fullname">Fullname</label>
											<input class="form-control" type="text" id="fullname" placeholder="Enter Fullname" style="border-color:lightblue">
										</div>
										<div class="input group">
											<label for ="email">Email</label>
											<input class="form-control" type="text" id="email" placeholder="Enter Email" style="border-color:lightblue">
										</div>
										<div class="input group">
											<label for ="password">Password</label>
											<input class="form-control" type="password" id="password" placeholder="Enter Password" style="border-color:lightblue">
										</div>
										<div class="input group">
											<label for ="confirmpassword">Confirm Password</label>
											<input class="form-control" type="password" id="confirmpassword" placeholder="Re-enter Password" style="border-color:lightblue">
										</div>
										<div class="input group">
											<label for ="category">Category</label>
											<select class="form-control" type="text" id="category" placeholder="Re-enter Password" style="border-color:lightblue">
												<option value="0">select option</option>
												<option value="1">Business</option>
												<option value="2">Individual</option>
											</select>
										</div>
										<div class="input group">
											<input class="btn btn-primary" id="register" type="button" value="Register" id="register">
											<a href="<?php echo site_url('site/signin');?>"><button type="button" class="btn btn-primary">Sign</button></a>
											<img id="loading" src="<?php echo base_url('resources/images/loading.gif');?>" height="50px" style="opacity: 0.4;right:210px; visibility:hidden">
										</div>
										
									</form>
									<div class="register" data-value="<?php echo site_url('platform/register');?>"> </div>
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

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>2015 - <?php echo DATE("Y");?> &copy; <a href="#">Equicksales Consulting Ltd.</a> All rights reserved.</p>
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
	<script src="<?php echo base_url('resources/js/register.js');?>"></script>
	<?php
		if(isset($msg)){
	?>
			<script type="text/javascript">
				showMsg(<?php echo $msg;?>);		
			</script>
	<?php
		}
	?>
</body>
</html>