<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan_m extends CI_Model {

	var $table_name = "keuangan";
	public function get()
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_id($id)
	{
		$this->db->select("*");
		$this->db->from($this->table_name);
		$this->db->where("id",$id);
		$query = $this->db->get();
		return $query->row(0);
	}

	public function insert($infografis_apbd)
	{
		$set = [
			'nama' => $this->input->post('nama'),
			
			
			
		];
		if ($dokumen != "") {
			$set['dokumen'] = $dokumen;
		}else{
			$set['dokumen'] = 'default.png';
		}
		$insert = $this->db->insert($this->table_name,$set);
		if($insert){
			$this->session->set_flashdata("success_message","Data Berhasil di Tambahkan");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Tambahkan");
		}
	}
	public function update($id,$infografis_apbd)
	{
		$set = [
			'dokumen_perencanaan' => $this->input->post('dokumen_perencanaan'),
			'apbdesa' => $this->input->post('apbdesa'),
			'laporan_keuangan' => $this->input->post('laporan_keuangan'),
		];
		if ($infografis_apbd != "") {
			$set['infografis_apbd'] = $infografis_apbd;
		}else{
			$set['infografis_apbd'] = 'default.png';
		}
		$insert = $this->db->insert($this->table_name,$set);
		if($insert){
			$this->session->set_flashdata("success_message","Data Berhasil di Tambahkan");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Tambahkan");
		}
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$delete = $this->db->delete($this->table_name);
		if($delete){
			$this->session->set_flashdata("success_message","Data Berhasil di Hapus");
		}else{
			$this->session->set_flashdata("error_message","Data Gagal di Hapus");
		}
	}
}
