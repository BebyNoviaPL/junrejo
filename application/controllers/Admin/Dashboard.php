<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$dataheader = [];
		$data = [];
		$datafooter = [
			'content' => "dashboard",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/template/footer',$datafooter);
		
	}
	public function profil()
	{
		$this->load->model('Profil_m');
		$dataheader = [];
		$data = [];
		$datafooter = [
			'content' => "dashboard",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/profil',$data);
		$this->load->view('admin/template/footer',$datafooter);
	}

	public function profil_proses()
	{
		$this->load->model('Profil_m');
		$this->Profil_m->updateData();
		redirect('Admin/Dashboard/profil');
	}

	
}
