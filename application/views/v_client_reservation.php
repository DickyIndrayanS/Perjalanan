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
				<a href="" class="navbar-brand"><span class="logo-text" style="background:url(../../../assets/frontend/images/i-plane.png);
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

	<!-- Form Reservation -->
	<div class="container container-style">
		<div class="row">
			<div class="col-lg-11">         
				<table class="table table-bordered">
					<thead>
						<?php foreach($reserve as $r) { ?>
						<tr>
							<th colspan="4" class="title">Pesanan</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td><?php echo $r->deskripsi ?> <br>
								(<?php echo $r->code ?>)</td>
								<td><?php echo $r->rute_from ?></td>
								<td><?php echo $r->rute_to ?></td>
								<td><?php echo $r->depart_at ?></td>
								<td><?php echo $r->price ?></td>
							</tr>

							<tr>
								<td colspan="4" align="right">Total (1)</td>
								<td><?php echo $r->price*1 ?></td>
								<?php } ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<?php
				$penumpang = $this->uri->segment(4);
				?>
				<?php for ($i=0; $i < $penumpang ; $i++) { 
									 	# code...
					?>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<form action="<?php echo base_url('frontend/pesan')?>" method="post">
							<div class="table-responsive table-primary">
								<table class="table table-bordered">
									<thead class="thead-dark">

										<tr>
											<th class="title"><span>Isi Detail Penumpang</span></th>
										</tr>
										<tr>
											<th class="title"><span>Informasi Kontak Yang dapat Dihubungi</span></th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="form-group">
													<label>Nama</label>
													<input type="text" name="" class="form-control">
												</div>


												<div class="form-group">
													<label>Alamat</label>
													<input type="text" name="" class="form-control">
												</div>

												<div class="form-group">
													<label>Email</label>
													<input type="Email" name="" class="form-control">
												</div>


												<div class="form-group">
													<label>No Telp</label>
													<input type="text" name="" class="form-control">
												</div>
											</td>
										</tr>

										<tr>
											<td>
												<div class="form-group">
													<label>Jenis Kelamin</label>
													<select class="form-control">
														<option>Tuan</option>
														<option>Nyonya</option>
													</select>
												</div>
												
											</td>
										</tr>
										<tr>
											<td colspan="2"></td>

											<?php 
											$x = 1;
											foreach ($seat as $s) {
												while ($x <= $s->seat) { ?>
												<input class="checkbox" type="checkbox" name="" <?php foreach($filter as $f) if($x == $f->seat) { echo "Checked Disabled";  } ?>>
												<?php $x++;
											}
										}
										?>
									</tr>

								</tbody>
							</table>
						</div>
					</form>
				</div>
				<?php } ?>


			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
						<div class="btn btn-primary btn-pesan">Pesan
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--start-date-piker-->
	<link rel="stylesheet" href="assets/frontend/css/jquery-ui.css" />
	<script src="assets/frontend/js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
	<!-- /End-date-piker -->		
</body>
</html>