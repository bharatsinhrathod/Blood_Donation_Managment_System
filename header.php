<?php 
session_start();
include "connection.php";
?>

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
<!--w3l-header-->
<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
					<div class="top-left col-lg-6">
						<ul class="accounts">
							<li class="top_li"><span class="fa fa-map-o"></span> <a href="#">Motichowk, Wadhwan, Surendranagar, Gujrat</a>
							</li>
							<li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
									href="mailto:mail@company.com" class="mail"> BDMS@company.com</a>

							</li>
						</ul>
					</div>
					<div class="social-top col-lg-6 mt-lg-0 mt-sm-3">
						<div class="top-bar-text"><a class="bk-button" href="#">BOOK ONLINE </a> You can
							request appointment in 24 hours</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<!--w3l-header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<a class="navbar-brand" href="index.php"><span>BD</span>MS</a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-lg-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Services</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="login.php">login</a>
						</li>
					</ul>
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Saerch your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>

							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
					</div>
					<!--//search-right-->
					<div class="call-support">
						<p>Call us for any question</p>
						<h5>121-345-64369</h5>
					</div>
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	