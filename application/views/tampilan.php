<!DOCTYPE html>
<html>
<head>
	<title>Perjalanan</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="assets/frontend/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/frontend/js/bootstrap.js"></script>
<!-- stylesheet -->
<link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/css/bootstrap.min.css">

<style type="text/css">
<?php
include("assets/frontend/css/style.css");
?>
</style>

<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- //stylesheet -->
</head>
<body>
	<header>
		<!-- Navbar -->
		<div class="container">
			<div class="navbar-header">
				<a href="" class="navbar-brand"><span class="logo-text">Perjalanan</span></i></a>
			</div>
			<nav class="navbar navbar-default">
				<ul class="navbar-right">
					<li class="nav-item active"><a href="">Home</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">About</a></li>
				</ul>
			</nav>
		</div>
		<div class="clear">
		</div>
		<!-- //Navbar -->
	</header>

	<div class="container body-form">
		<h1>Pesan Perjalanan Anda</h1>
		<form action="<?php echo base_url('frontend/carirute?')?>" method="get" class="agile_form">
			<div class="row">
				<div class="section_class_agileits col-lg-2 col-md-2 col-sm-12" style="padding:5px;">
					<label class="label-title">Asal</label>
					<select>
						<?php foreach ($from as $r) { ?>
						<option><?php echo $r->rute_from ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="section_class_agileits col-lg-2 col-md-2 col-sm-12" style="padding:5px;">
					<label class="label-title">Tujuan</label>
					<select>
						<?php foreach ($to as $r) { ?>
						<option><?php echo $r->rute_to ?></option>
						<?php } ?>
					</select>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-12" style="padding:5px;">
					<label class="label-title">Tanggal</label>
					<input placeholder="Date" name="date" class="date" type="date" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
				</div>

				<div class="section_class_agileits col-lg-2 col-md-2 col-sm-12" style="padding:5px;">
					<label class="label-title">Jumlah</label>
					<select name="penumpang">
						<option value="0" disabled="true" selected="true">Jumlah</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
				<div class="submit col-lg-4 col-md-4 col-sm-4" style="padding:5px;">
					<input type="submit" value="search">
				</div>
				<div class="clear"></div>
			</div>
		</form>				  
	</div>

	<!-- <div class="bottom-part">
		<div class="container">
			<div class="social-media">
				<a href=""><i class="fb"></i></a>
				<a href=""><i class="twitter"></i></a>
				<a href=""><i class="youtube"></i></a>
				<a href=""><i class="google"></i></a>
			</div>

			<div class="copyright">
				
			</div>
		</div>
	</div> -->		
</body>
</html>