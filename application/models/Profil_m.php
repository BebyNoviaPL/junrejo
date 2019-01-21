<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_m extends CI_Model {

	public function getData($kunci)
	{
		return $this->db->where('kunci',$kunci)->get('profil_desa')->row(0)->profil;
	}

	public function updateData()
	{
		if ($this->input->post('desa') != "") {
			$this->db->where('kunci','desa')->update('profil_desa',array('profil'=>$this->input->post('desa')));
		}
	}
}
