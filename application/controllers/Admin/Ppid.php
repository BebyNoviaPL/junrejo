<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppid extends CI_Controller {

	var $c_name = "Ppid";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppid_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Ppid_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/ppid/index',$data);
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
		
		$this->form_validation->set_rules('visi',"visi","required");
		$this->form_validation->set_rules('misi',"misi","required");
		$this->form_validation->set_rules('tugas',"tugas","required");
		
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/ppid/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$config['upload_path'] = './assets_admin/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			$Is_error = false;
			if ($_FILES['struktur']['name'] != "") {
				if ( ! $this->upload->do_upload('struktur')){
					$data['error'] = $this->upload->display_errors();
					$Is_error = true;
				}
				else{
					$struktur = $this->upload->data('file_name');
				}
			}else{
				$struktur = "";
			}

			if ($Is_error) {
				$this->load->view('admin/template/header',$dataheader);
				$this->load->view('admin/ppid/insert',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Ppid_m->insert($struktur);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		}
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'ppid' => $this->Ppid_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
		
		
	$this->form_validation->set_rules('visi',"visi","required");
		$this->form_validation->set_rules('misi',"misi","required");
		$this->form_validation->set_rules('tugas',"tugas","required");
		


		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/ppid/update',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
			$config['upload_path'] = './assets_admin/images/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '3000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			$Is_error = false;
			if ($_FILES['struktur']['name'] != "") {
				if ( ! $this->upload->do_upload('struktur')){
					$data['error'] = $this->upload->display_errors();
					$Is_error = true;
				}
				else{
					$struktur = $this->upload->data('file_name');
				}
			}else{
				$struktur = "";
			}

			if ($Is_error) {
				$this->load->view('admin/template/header',$dataheader);
				$this->load->view('admin/ppid/update',$data);
				$this->load->view('admin/template/footer',$datafooter);
			}else{
				$this->Ppid_m->update($id,$struktur);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		}
	}
	public function delete($id)
	{
		$this->Ppid_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
