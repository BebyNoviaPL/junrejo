<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	var $c_name = "Keuangan";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keuangan_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Keuangan_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/keuangan/index',$data);
		$this->load->view('admin/template/footer',$datafooter);
	}
	public function insert()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
		];
		$datafooter = [
			'content' => "datatables",
		];
		
		$this->form_validation->set_rules('tahun',"tahun","required");
		
		
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/keuangan/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}
		else{
			$config['upload_path'] = './assets_admin/file/';
			$config['allowed_types'] = 'pdf';
			$config['max_size']  = '4000';
			
			$this->load->library('upload', $config);
			$Is_error = false;
			if ($_FILES['dokumen_perencanaan']['name'] != "") {
				if ( ! $this->upload->do_upload('dokumen_perencanaan')){
					$data['error'] = $this->upload->display_errors();
					print_r($error);
					$Is_error = true;
				}
				else{
					$dokumen_perencanaan = $this->upload->data('file_name');

				}
			}else{
				$dokumen_perencanaan = "";
			}

			if ($Is_error) {
				$this->load->view('admin/template/header',$dataheader);
				$this->load->view('admin/keuangan/insert',$data);
				$this->load->view('admin/template/footer',$datafooter);
				print_r($error);
			}else{
				$this->Keuangan_m->insert($dokumen_perencanaan);
				redirect('Admin/'.$this->c_name,'refresh');
				print_r($error);
			}
			
		}
	}
	public function delete($id)
	{
		$this->Keuangan_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
