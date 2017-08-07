<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index(){
		
		$this->db->select('*');
		$data['categoria'] = $this->db->get('categorias')->result();
		$this->load->view('includes/header');
		$this->load->view('categoria/listar', $data);
		$this->load->view('includes/footer');
	}

	public function incluir(){
		$this->load->view('includes/header');
		$this->load->view('categoria/incluir');
		$this->load->view('includes/footer');
	}

	public function salvar(){
                //carregando a model e renomeando para categoria
		$this->load->model('categoria_model', 'categoria');
                
                if($this->categoria->salvar()){
                    redirect('categoria');
                }else{
                    redirect('categoria');
                }
                
	}

	public function editar($id = null){
		$this->db->where('cat_codigo',$id);
		$data['categoria'] = $this->db->get('categorias')->result();
		$this->load->view('includes/header');
		$this->load->view('categoria/editar', $data);
		$this->load->view('includes/footer');
	}

	public function editar_salvar($id = null){
            
            //carregando a model e renomeando para categoria
		$this->load->model('categoria_model', 'categoria');
                
                if($this->categoria->editar_salvar()){
                    redirect('categoria');
                }else{
                    redirect('categoria');
                }
	}

	public function deletar($id = null){
                $this->load->model('categoria_model', 'categoria');
		
                if($this->categoria->deletar($id)){
			redirect('categoria');
		}else{
			redirect('categoria');
		}
	}
}
