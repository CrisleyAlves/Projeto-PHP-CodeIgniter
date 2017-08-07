<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function index(){
                $this->db->select('*');
                $this->db->join('categorias','categoria=cat_codigo','inner');
                $data['produto'] = $this->db->get('produtos')->result();
        
		$this->load->view('includes/header');
		$this->load->view('produto/listar', $data);
		$this->load->view('includes/footer');
	}

	public function form(){
		$data['categoria'] = $this->db->get('categorias')->result();
		$this->load->view('includes/header');
		$this->load->view('produto/form', $data);
		$this->load->view('includes/footer');
	}

	public function salvar(){
                
            $this->load->model('produto_model', 'produto');
                
                if($this->produto->salvar()){
                    redirect('produto');
                }else{
                    redirect('produto');
                }
	}

	public function editar($id = null){

		$this->db->where('pro_codigo',$id);
		
                $this->db->select('*');
                $this->db->join('categorias','categoria=cat_codigo','inner');
                $data['produto'] = $this->db->get('produtos')->result();
                $data['categorias'] = $this->db->get('categorias')->result();
                
		$this->load->view('includes/header');
		$this->load->view('produto/editar', $data);
		$this->load->view('includes/footer');
	}

	public function editar_salvar($id = null){
		$this->load->model('produto_model', 'produto');
                
                if($this->produto->editar_salvar()){
                    redirect('produto');
                }else{
                    redirect('produto');
                }
	}

	public function deletar($id = null){
		$this->db->where('pro_codigo', $id);
		if($this->db->delete('produtos')){
			redirect('produto');
		}else{
			redirect('produto');
		}
	}
}
