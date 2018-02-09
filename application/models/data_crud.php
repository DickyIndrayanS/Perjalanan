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

	function join_rutemaskapai($from,$to)
	{
		$this->db->select('rute.id,rute.depart_at,rute.rute_from,rute.rute_to,rute.price');
		$this->db->from('rute');
		$this->db->where('rute.rute_from', $from);
		$this->db->where('rute.rute_to', $to);
		$query = $this->db->get();
		return $query->result();

	}
}
?>