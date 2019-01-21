<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/index');
		$this->load->view('home/footer');
	}

	public function profil()
	{
		$this->load->model('Profil_m');
		$data['profil'] = $this->Profil_m->get();
		$this->load->view('home/header');
		$this->load->view('home/profil',$data);
		$this->load->view('home/footer');
	}
}
