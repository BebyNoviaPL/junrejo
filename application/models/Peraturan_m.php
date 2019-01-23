<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_m extends CI_Model {

	public function getData($kunci)
	{
		return $this->db->where('kunci',$kunci)->get('peraturan_desa')->row(0)->peraturan;
	}

	public function updateData()
	{
		if ($this->input->post('desa') != "") {
			$this->db->where('kunci','desa')->update('peraturan_desa',array('peraturan'=>$this->input->post('desa')));
		}
	}
}
