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
							<div class="navbar-brand"><a  href="http://localhost/new/newequicksales"><img src="<?php echo base_url('resources/images/commerce.png');?>" height="50px;"> <span><b style="color:#0000aa">Equicksales</b></a></span></div>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class=""><a href="<?php echo site_url('site/passwordreset');?>">Password Reset</a></li>
				                <!--
				                <li class="dropdown yamm-fw hasmenu active">
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
				                <li><a href="<?php echo site_url('site/contact');?>">Contact</a></li>
				            -->
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
										
										<?php if (isset($msg)):?>
											<h5 style="color:#aa0000"><?php echo $msg; ?></h5>
										<?php	
											endif;		
										?><br>
										<h3>Password Reset</h3>
										<div class="panel-body">
											<form method="post" action="">
												<div class="input group">
													<label for ="email">Email</label>
													<input class="form-control" type="email" id="email" placeholder="Enter Email" style="border-color:lightblue" required>
												</div>
												</div>
												<div class="input group">
													<input class="btn btn-primary" type="button" value="Reset Password" id="passwordreset">
													
													<img id="loading" src="<?php echo base_url('resources/images/loading.gif');?>" height="50px" style="opacity: 0.4;right:150px; visibility:hidden">
												</div>
											</form>
											<div class="passwordreset" data-value="<?php echo site_url('platform/passwordreset');?>"> </div>
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
	<script src="<?php echo base_url('resources/js/passwordreset.js');?>"></script>
</body>
</html>