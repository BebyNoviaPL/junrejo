<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_m extends CI_Model {

	public function getData($kunci)
	{
		return $this->db->where('kunci',$kunci)->get('pages')->row(0)->nilai;
	}

	public function updateData()
	{
		if ($this->input->post('about') != "") {
			$this->db->where('kunci','about')->update('pages',array('nilai'=>$this->input->post('about')));
		}
	}
}
