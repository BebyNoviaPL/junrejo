<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppid_layanan extends CI_Controller {

	var $c_name = "Ppid_layanan";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppid_layanan_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'data' => $this->Ppid_layanan_m->get(),
		];
		$datafooter = [
			'content' => "datatables",
		];
		$this->load->view('admin/template/header',$dataheader);
		$this->load->view('admin/ppid_layanan/index',$data);
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
		
		$this->form_validation->set_rules('jenis_layanan',"jenis_layanan","required");
		$this->form_validation->set_rules('dokumen',"dokumen","required");
		$this->form_validation->set_rules('syarat',"syarat","required");
		$this->form_validation->set_rules('biaya',"biaya","required");
		$this->form_validation->set_rules('proses',"proses","required");
		
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/ppid_layanan/insert',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}
		else{
				$this->Ppid_layanan_m->insert($gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		
	}
	public function update($id)
	{
		$dataheader = [];
		$data = [
			'c_name' => $this->c_name,
			'ppid_layanan' => $this->Ppid_layanan_m->get_id($id),
		];
		$datafooter = [
			'content' => "datatables",
		];
		
		
		$this->form_validation->set_rules('jenis_layanan',"jenis_layanan","required");
		$this->form_validation->set_rules('dokumen',"dokumen","required");
		$this->form_validation->set_rules('syarat',"syarat","required");
		$this->form_validation->set_rules('biaya',"biaya","required");
		$this->form_validation->set_rules('proses',"proses","required");
		


		if ($this->form_validation->run() == false) {
			$this->load->view('admin/template/header',$dataheader);
			$this->load->view('admin/ppid_layanan/update',$data);
			$this->load->view('admin/template/footer',$datafooter);
		}else{
				$this->Ppid_layanan_m->update($id,$gambar);
				redirect('Admin/'.$this->c_name,'refresh');
			}
			
		
	}
	public function delete($id)
	{
		$this->Ppid_layanan_m->delete($id);
		redirect('Admin/'.$this->c_name,'refresh');
	}
}
