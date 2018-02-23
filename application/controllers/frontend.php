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
	function __construct()
	{
		parent::__construct();
		$this->load->model('data_crud');
	}
	
	public function index()
	{
		$data['from'] = $this->data_crud->searchrutefrom()->result();
		$data['to'] = $this->data_crud->searchruteto()->result();
		$this->load->view('tampilan',$data);
	}

	function carirute()
	{
		$from=$this->input->get('from');
		$to=$this->input->get('to');
		$date= strtotime($this->input->get('date'));
		$date =  date('Y-m-d',$date);
		$penumpang = $this->input->get('penumpang');
		$data['rute']=$this->data_crud->join_rutemaskapai($from,$to,$date,$penumpang);
		

		$this->load->view('v_client_rute',$data,$penumpang);
	}

	public function reservation($id){
		$where =  $id;
		$query = $this->data_crud->join_clientreserve($where);
		$data['seat'] = $this->data_crud->seat($where)->result();
 		$data['filter'] = $this->data_crud->filterseat($where)->result();
		$data['reserve'] = null;
		if($query){
			$data['reserve'] = $query;
		}
		$this->load->view('v_client_reservation',$data);
	}

	function pesan(){
		$rute_id = $this->input->post('rute_id');
		$namapemesan = $this->input->post('namapemesan');
		$alamatpemesan = $this->input->post('alamatpemesan');
		$emailpemesan = $this->input->post('emailpemesan');
		$notelpemesan = $this->input->post('notelpemesan');
		$jenkelpenumpang = $this->input->post('jenkelpenumpang');
		$namapenumpang = $this->input->post('namapenumpang');
		$data = array(
			'rute_id' => $rute_id,
			'namapemesan' => $namapemesan,
			'alamatpemesan' => $alamatpemesan,
			'emailpemesan' => $emailpemesan,
			'notelpemesan' => $notelpemesan,
			'jenkelpenumpang' => $jenkelpenumpang,
			'namapenumpang' => $namapenumpang,
			'status' => 'Menunggu Pembayaran'
		);
		$this->data_crud->input_datareservation($data,'reservation');
		redirect('admin/datarute');
	}
}
