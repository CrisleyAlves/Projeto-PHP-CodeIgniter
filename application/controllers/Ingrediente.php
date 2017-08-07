<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ingrediente extends CI_Controller {

	public function index(){
		
		$this->db->select('*');
		$data['ingrediente'] = $this->db->get('ingredientes')->result();
		$this->load->view('includes/header');
		$this->load->view('ingrediente/listar', $data);
		$this->load->view('includes/footer');
	}

	public function incluir(){
		$this->load->view('includes/header');
		$this->load->view('ingrediente/incluir');
		$this->load->view('includes/footer');
	}

	public function salvar(){
		$this->load->model('ingrediente_model', 'ingrediente');
                
                if($this->ingrediente->salvar()){
                    redirect('ingrediente');
                }else{
                    redirect('ingrediente');
                }
	}

	public function editar($id = null){
		$this->db->where('ing_codigo',$id);
		$data['ingrediente'] = $this->db->get('ingredientes')->result();
		$this->load->view('includes/header');
		$this->load->view('ingrediente/editar', $data);
		$this->load->view('includes/footer');
	}

	public function editar_salvar($id = null){
            
            	$this->load->model('ingrediente_model', 'ingrediente');
                
                if($this->ingrediente->editar_salvar()){
                    redirect('ingrediente');
                }else{
                    redirect('ingrediente');
                }
	}

	public function deletar($id = null){
                $this->load->model('ingrediente_model', 'ingrediente');
                if($this->ingrediente->deletar($id)){
			redirect('ingrediente');
		}else{
			redirect('ingrediente');
		}
	}
}
