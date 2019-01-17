<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Desa Junrejo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords"  />

<!-- Default-JavaScript-File -->
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/mainStyles.css" /><!-- for banner -->

<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/flexslider.css" type="text/css" media="screen" property="" /><!-- for testimonials -->

<!-- Property for sale section css files-->
<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.css" type="text/css" media="all">
<link href="<?php echo base_url('assets/') ?>css/owl.theme.css" rel="stylesheet">
<!-- //Property for sale section css files -->

<!-- for team section tabs -->
<link href="<?php echo base_url('assets/') ?>css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- // for team section tabs -->

<!-- default css files -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- Property for sale section Script-->
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<!-- //Property for sale section Script-->

</head>

<!-- banner -->
	<div class="banner" id="home">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.php"><span>Desa</span> Junrejo</a></h1>
					<i class="fa fa-home" aria-hidden="true"></i>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
						<li><a href="#about" class="scroll"><span data-hover="Tentang Desa">Tentang Desa</span></a></li>
						<li><a href="#services" class="scroll"><span data-hover="Keuangan">Keuangan</span></a></li>
						<li><a href="#team" class="scroll"><span data-hover="PPID Desa">PPID Desa</span></a></li>
						<li><a href="#testimonials" class="scroll"><span data-hover="Berita">Berita</span></a></li>
						<li><a href="#contact" class="scroll"><span data-hover="Kontak">Kontak</span></a></li>
					</ul>
				</nav>
			</div>
					
		</nav>
		</div>
<!-- //banner -->