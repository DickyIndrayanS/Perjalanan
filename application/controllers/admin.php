<?php 
/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('data_crud');
		$this->load->helper('url');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}

	function index(){
		$this->load->view('welcome_message');
	}

// Rute Controller
	function rute(){
		$data['rute'] = $this->data_crud->tampil_datarute()->result();
		$this->load->view('t_rute',$data);
	}
	function proses_tambah(){
		$depart = $this->input->post('depart');
		$rute_from = $this->input->post('rutefrom');
		$rute_to = $this->input->post('ruteto');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportationid');

		$data = array(
			'depart_at' => $depart,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportationid' => $transportationid
		);
		$this->data_crud->input_datarute($data,'rute');
		redirect('admin/rute');
	}
	function hapus_rute($id){
		$where = array('id' => $id);
		$this->data_crud->hapus_datarute($where,'rute');
		redirect('admin/rute');
	}

	function edit_rute($id){
		$where = array('id' => $id);
		$data['rute'] = $this->data_crud->edit_datarute($where,'rute')->result();
		$this->load->view('v_rute_edit',$data);
	}

	function update_rute(){
		$id = $this->input->post('id');
		$depart = $this->input->post('depart');
		$rute_from = $this->input->post('rutefrom');
		$rute_to = $this->input->post('ruteto');
		$price = $this->input->post('price');

		$data = array(
			'depart_at' => $depart,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price
		);

		$where = array(
			'id' => $id
		);

		$this->data_crud->update_datarute($where,$data,'rute');
		redirect('admin/data_rute');
	}

	function data_rute(){
		$data['rute'] = $this->data_crud->tampil_datarute()->result();
		$this->load->view('v_data_rute',$data);
	}

// Maskapai Controller
	function data_maskapai(){
		$data['maskapai'] = $this->data_crud->tampil_datamaskapai()->result();
		$this->load->view('v_maskapai',$data);
	}

	function tambah_maskapai(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$code = $this->input->post('code');
		$deskripsi = $this->input->post('deskripsi');
		$seat = $this->input->post('seat');
		$id_type=$this->input->post('id_type');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'code' => $code,
			'deskripsi' => $deskripsi,
			'seat' => $seat,
			'id_type' => $id_type
		);
		$this->data_crud->input_datamaskapai($data,'maskapai');
		redirect('admin/data_maskapai');
	}

	function maskapai(){
		$data['maskapai'] = $this->data_crud->tampil_datamaskapai()->result();
		$this->load->view('t_maskapai',$data);
	}

	function hapus_maskapai($id){
		$where = array('id' => $id);
		$this->data_crud->hapus_datamaskapai($where,'maskapai');
		redirect('admin/data_maskapai');
	}

	function edit_maskapai($id){
		$where = array('id' => $id);
		$data['maskapai'] = $this->data_crud->edit_datamaskapai($where,'maskapai')->result();
		$this->load->view('v_maskapai_edit',$data);
	}

	function update_maskapai(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$code = $this->input->post('code');
		$deskripsi = $this->input->post('deskripsi');
		$seat = $this->input->post('seat');
		$id_type = $this->input->post('id_type');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'code' => $code,
			'deskripsi' => $deskripsi,
			'seat' => $seat,
			'id_type' => $id_type
		);

		$where = array(
			'id' => $id
		);

		$this->data_crud->update_datamaskapai($where,$data,'maskapai');
		redirect('admin/data_maskapai');
	}

	//Bandara Controller
	function data_bandara(){
		$data['bandara'] = $this->data_crud->tampil_databandara()->result();
		$this->load->view('v_bandara',$data);
	}

	function bandara(){
		$data['bandara'] = $this->data_crud->tampil_databandara()->result();
		$this->load->view('t_bandara',$data);
	}

	function tambah_bandara(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$data = array(
			'id' => $id,
			'kode' => $kode,
			'nama' => $nama,
			'kota' => $kota,
		);
		$this->data_crud->input_datamaskapai($data,'bandara');
		redirect('admin/data_bandara');
	}

	function hapus_bandara($id){
		$where = array('id' => $id);
		$this->data_crud->hapus_databandara($where,'bandara');
		redirect('admin/data_bandara');
	}

	function edit_bandara($id){
		$where = array('id' => $id);
		$data['bandara'] = $this->data_crud->edit_databandara($where,'bandara')->result();
		$this->load->view('v_bandara_edit',$data);
	}

	function update_bandara(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$kota = $this->input->post('kota');
		$data = array(
			'id' => $id,
			'kode' => $kode,
			'nama' => $nama,
			'kota' => $kota,
		);
		$where = array(
			'id' => $id
		);
		$this->data_crud->update_databandara($where,$data,'bandara');
		redirect('admin/data_bandara');
}
}
?>