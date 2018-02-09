<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('tampilan');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('data_crud');
	}

	function carirute()
	{
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		$query=$this->data_crud->join_rutemaskapai($from,$to);
		$data['rute'] = null;
		if($query){
			$data['rute'] = $query;
		}
		$this->load->view('v_client_rute',$data);
	}
}
