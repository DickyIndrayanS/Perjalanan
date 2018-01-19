<?php $status = $this->session->userdata('status');
 echo $status; ?>

 <body>
 	<h1 align="center">Login Disini</h1>
 	<form action="<?php echo base_url('auth/cek_login'); ?>" method="post">
 	<input type="text" name="username" placeholder="username">
 	<input type="password" name="password" placeholder="password">
 	<button type="submit" name="submit">Login</button>
 	</form>
 </body>
 