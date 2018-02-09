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
<body class="bg agileinfo">

	<div class="Jumbotron button">
		<button type="button" class="btn btn-primary"><a href=""></a>Log In</button>
		<button type="button" class="btn" style="background-color: transparent; color:white; border:1px solid;	"><a href=""></a>Sign Up</button>
	</div>


	<h1 class="agile_head text-justify">Pesan Perjalananmu</h1>
	<p class="text-justify"">Fusce turpis  nisi aliquam facilisis elit.</p>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="<?php echo base_url('frontend/carirute')?>" method="post" class="agile_form">
					<div class="row section_class_agileits sec-left">
						<input type="text" class="name" name="from" id="text" placeholder="Keberangkatan" style="border-radius: 5px;" required="">
					</div>
					<div class="section_class_agileits sec-right">
						<input type="text" class="name" name="to" id="text" placeholder="Tujuan" style="border-radius: 5px;" required="">
					</div>
					<input placeholder="Date" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" style="border-radius: 5px;" />
					<div class="list_agileits_w3layouts">
						<div class="section_class_agileits sec-left">
							<select>
								<option value="0">Destination City</option>
								<option value="1">city1</option>
								<option value="2">city2</option>
								<option value="3">city3</option>
								<option value="4">city4</option>
							</select>
						</div>
						<div class="section_class_agileits sec-right">
							<select>
								<option value="0">select class</option>
								<option value="1">Any</option>
								<option value="3">Economy Class</option>
								<option value="2"> Business Class</option>
								<option value="1">First Class</option>
							</select>
						</div>	
						<div class="clear"></div>
					</div>	
					<div class="list_agileits_w3layouts">
						<div class="section_class_agileits sec-left">
							<select>
								<option value="0">Adults</option>
								<option value="1">0</option>
								<option value="2">1</option>
								<option value="3"> 2</option>
								<option value="4">3 or 3+</option>
							</select>
						</div>	
						<div class="section_class_agileits sec-right">
							<select>
								<option value="0">Children</option>
								<option value="1">0</option>
								<option value="2">1</option>
								<option value="3"> 2</option>
								<option value="4">3 or 3+</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>				
					<div class="submit">
						<input type="submit" value="search">
					</div>  
				</form>
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