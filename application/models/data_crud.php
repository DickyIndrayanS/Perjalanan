<?php 
/**
* 
*/
class Data_crud extends CI_Model
{
// Model Rute	
	function tampil_datarute()
	{
		return $this->db->get('rute');
	}

	function input_datarute($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_datarute($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_datarute($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_datarute($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

// Model Maskapai
	function tampil_datamaskapai()
	{
		return $this->db->get('maskapai');
	}

	function input_datamaskapai($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_datamaskapai($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_datamaskapai($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_datamaskapai($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

//Model Bandara
	function tampil_databandara()
	{
		return $this->db->get('bandara');
	}

	function input_databandara($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_databandara($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_databandara($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_databandara($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function join_rutemaskapai($from,$to,$date)
	{
		$this->db->like('rute.rute_from', $from);
		$this->db->like('rute.rute_to', $to);
		$this->db->like('rute.depart_at', $date);

		$this->db->select('*');
		$this->db->from('rute');
		return $query = $this->db->get()->result();
	}

	function join_clientreserve($where)
	{
		$this->db->select("rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price,maskapai.deskripsi,maskapai.code");
		$this->db->from('rute');
		$this->db->join('maskapai', 'maskapai.id = rute.transportationid');
		$this->db->where('rute.id', $where);
		$query = $this->db->get();
		return $query->result();
	}

	function searchrutefrom(){
		$this->db->select('distinct(rute_from)');
		return $this->db->get('rute');
	}

	function searchruteto(){
		$this->db->select('distinct(rute_to)');
		return $this->db->get('rute');
	}

	function seat($id)
	{
		$this->db->select('maskapai.seat');
		$this->db->from('rute,maskapai');
		$this->db->where('rute.transportationid = maskapai.id');
		$this->db->where('rute.id' , $id);
		return $this->db->get();
	}

	function filterseat($id)
	{
		$this->db->select('kode_kursi');
		$this->db->where('pemesanan.id_rute' ,$id);
		return $this->db->get('pemesanan');
	}
}
?>