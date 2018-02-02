<html>
<link rel="stylesheet" href="assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" href="assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
<link rel="stylesheet" href="assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

<body style="background-color: #3C8DBC;">
<!--main-->
<?php $status = $this->session->userdata('status');
 echo $status; ?>
<div class="container" style="display: flex;justify-content: center; margin-top:120px;">
<div class="jumbotron col-md-5" >
		<form action="<?php echo base_url('auth/cek_login'); ?>" method="post">
		<center><h3 style="border: none; border-bottom: 2px solid black; border-radius: 1px; line-height: 45px;">Dashboard Login</h3></center><br>
		<div class="form-group">
			<input placeholder="Username" type="text" name="username" class="form-control" id="usr">
		</div>
		<div class="form-group">
			<input placeholder="Password" type="password" name="password" class="form-control" id="pwd">
		</div>
		<button class="btn btn-primary col-md-12" name="submit" style="border: none; font-size: 18px; padding:10px; margin-top: 10px;">Login</button>
		</form>
</div>
</div>
<!--//main-->

</body>
</html>