<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$data = [];
		
		$this->load->view('admin/index',$data);
		
	}

	
}
