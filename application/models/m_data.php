<?php

class M_data extends CI_Model{
	function tampil_data_penduduk(){
		return $this->db->get('tb_penduduk');
	}
	function tampil_data_surat_kelahiran(){
		return $this->db->get('surat_kelahiran');
	}
	function tampil_data_surat_kematian(){
		return $this->db->get('surat_kematian');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where,$table){
	return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
