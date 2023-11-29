<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Basic -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
     <title>Equicksales Consulting Ltd.</title>
    <meta name="keywords" content="Adverts, Equicksales Posts">
    <meta name="description" content="Adverts on Equicksales platform">
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
							<div class="navbar-brand"><a  href="<?php echo site_url('platform/index');?>"><img src="<?php echo base_url('resources/images/commerce.png');?>" height="50px;"> <span><b style="color:#0000aa">Equicksales</b></a></span></div>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class=""><a href="<?php echo site_url('platform/index');?>">Home</a></li>
								<li class=""><a href="<?php echo site_url('platform/advert');?>">Post Advert</a></li>
								<li class=""><a href="<?php echo site_url('platform/youradverts');?>">Your Adverts</a></li>
				                <li class="dropdown yamm-fw hasmenu active">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user;?><span class="fa fa-angle-down"></span></a>
						            <ul class="dropdown-menu">
						                <li>
						                    <div class="yamm-content">
							                    <div class="row"> 
							                    	<div class="col-md-5 col-md-offset-3">
														<ul>
							                    			<li><a href="<?php echo site_url('platform/profile');?>">View Profile</a></li>
							                    		</ul>
							                    	</div>
							                    	<div class="col-md-1">
														<ul>
							                    			<li><a href="<?php echo site_url('platform/logout');?>">Logout</a></li>
							                    		</ul>
							                    	</div>
							                    </div>
						                    </div>
						                </li>
						            </ul>
				                </li>
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
						<h2><strong>Equicksales Platform</strong></h2>
						<p class="lead">Platform for marketing and sales of products and services</p>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->
		
		<section class="section">
			<div class="container">
			   	<?php
				     $num_rows=$adverts->num_rows();
				     $rows=$adverts->result_array();
			        for($i=0;$i<$num_rows;$i=$i+2):
			            if($num_rows>$i):
			                $ads=$rows[$i];
			            endif;
			            if($num_rows>$i+1):
			                $ads2=$rows[$i+1];
			            endif;
			    ?>
				<div class="row">
					<div class="col-md-6">
						<div class="about-widget">
							<i class="flaticon-cup"></i>
							<h4><?php echo $ads["title"]; ?></h4>
							<p><?php echo $ads["description"];?></p>
							<p style="font-size:11pt">
							    <span></span>Contact Person:<b> <?php echo $ads["contactperson"];?></b></span>
							    <span>Contact: <b><?php echo $ads["contact"];?></b></b></span><br>
							    <span>Posted Date: <b><?php echo $ads["posted_date"];?></b></span>
							    
							</p>

						</div><!-- end about-widget -->	
					</div><!-- end col -->
					<?php
					    if($num_rows>$i+1):?>
					<div class="col-md-6">
						<div class="about-widget">
							<i class="flaticon-cup"></i>
							<h4><?php echo $ads2["title"]; ?></h4>
							<p><?php echo $ads2["description"];?></p>
							<p style="font-size:11pt">
							    <span></span>Contact Person:<b> <?php echo $ads2["contactperson"];?></b></span>
							    <span>Contact: <b><?php echo $ads2["contact"];?></b></b></span><br>
							    <span>Posted Date: <b><?php echo $ads2["posted_date"];?></b></span>
							    
							</p>

						</div><!-- end about-widget -->	
					</div><!-- end col -->   
					        
					<?php    
					    endif;?>
					
             
				</div><!-- end row -->
				<?php endfor?>
				<?php if($total_rows>10): ?>
				<ul class="pagination">
				    <?php echo $links;?>
				</ul>
				<?php endif; ?>
			</div><!-- end container -->
		</section><!-- end section -->
		
		

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
	<script src="<?php echo base_url('resources/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('resources/js/parallax.js');?>"></script>
	<script src="<?php echo base_url('resources/js/animate.js');?>"></script>
	<script src="<?php echo base_url('resources/js/custom.js');?>"></script>

</body>
</html>