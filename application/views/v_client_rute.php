<!DOCTYPE html>
<html>
<head>
	<title>Book My Trip Flat Responsive Widget Template :: w3layouts</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="<?php echo base_url('assets/frontend/js/jquery-1.11.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/frontend/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/frontend/js/bootstrap.min.js')?>"></script>
<!-- stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/bootstrap.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/bootstrap.min.css')?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/style.css')?>">

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
				<a href="" class="navbar-brand"><span class="logo-text" style="background:url(../assets/frontend/images/i-plane.png);
				background-repeat: no-repeat;">Perjalanan</span></i></a>
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

	<div class="container body-frm">
		<div class="row">
			<div class="col-lg-11 col-md-10 col-sm-12">

				<?php
				if(empty($rute)){
					?>
					<div class="col-lg-12">
						<div class="jumbotron">
							<label class="">Tidak Ditemukan Jadwal Yang Anda Inginkan</label>
						</div>
					</div>
					<?php
				}else{
					?>

					<h1>Perjalanan Ditemukan</h1>
					<table class="table table-hover">
						<thead>
							<tr>
								<td>No</td>
								<td>Asal</td>
								<td>Tujuan</td>
								<td>Keberangkatan</td>
								<td>Harga</td>
								<td></td>
							</tr>
						</thead>
						<?php $no=1; foreach($rute as $r){?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $r->rute_from; ?></td>
							<td><?php echo $r->rute_to; ?></td>
							<td><?php echo $r->depart_at; ?></td>
							<td><?php echo $r->price; ?></td>
							<td><a href="<?php echo base_url(); ?>frontend/reservation/<?php echo $r->id; ?>/<?php echo $_GET['penumpang']; ?>"><button class="btn btn-pesan">Pesan</button></a></td>
						</tr>
						<?php }
					}
					?>

				</table>
			</div>
		</div>
	</div>
</div>		
</body>
</html>