<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	public function index(){
		
		$this->db->select('*');
		$data['banner'] = $this->db->get('banners')->result();
		$this->load->view('includes/header');
		$this->load->view('banner/listar', $data);
		$this->load->view('includes/footer');
	}

	public function incluir(){
		$this->load->view('includes/header');
		$this->load->view('banner/incluir');
		$this->load->view('includes/footer');
	}

	public function salvar(){
		$this->load->model('banner_model', 'banner');
                
                if($this->banner->salvar()){
                    redirect('banner');
                }else{
                    redirect('banner');
                }
	}

	public function deletar($id = null){
                $this->load->model('banner_model', 'banner');
                if($this->banner->deletar($id)){
			redirect('banner');
		}else{
			redirect('banner');
		}
	}
}
