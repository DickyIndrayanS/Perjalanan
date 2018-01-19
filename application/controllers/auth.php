<?php 
/**
 * 
 */
 class Auth extends Ci_Controller
 {
 	function __construct(){
 	parent::__construct();

 	$this->load->model('data_login');
 	}


 	function index(){
 		$status = $this->session->userdata("status");
 		if($status == "login"){
 			redirect(base_url());
 		}
 		$this->load->view('form_login');
 	}

 	function cek_login(){
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
		$where  = array(
			'username' => $username ,
			'password' => $password
			);
		$cek = $this->data_login->cek_login("tuser",$where)->num_rows();
		if ($cek>0) {
		 		$data_session = array(
		 			'nama' => $username,
		 			'status' => "login"
		 		);
		 		$this->session->get_userdata($data_session);
		 		redirect(base_url());
		 	} else  {
		 		echo "<script type='text/javascript'>
		 		alert ('Maaf username dan password anda salah!');
		 		document.write('<center><h1>Harap masukan username dan password dengan benar</h1></center>');
		 		</script>";
		 	
		 	}	
 	}

 	function logout(){
 		$this->session->sess_destroy();
 		redirect(base_url('auth'));
 	}
 } ?>