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
		$data['cat_nome'] = $this->input->post('cat_nome');

		if($this->db->insert('categorias', $data)){
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
            
            	//id sendo recebido do formulário
		$id = $this->input->post('id');

		//dados vai ser atualizado
		$data['cat_nome'] = $this->input->post('cat_nome');

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('cat_codigo', $id);

		if($id != null){
			$this->db->update('categorias', $data);
			redirect('categoria');
		}else{
			redirect('categoria');
		}
	}

	public function deletar($id = null){
		$this->db->where('cat_codigo', $id);
		if($this->db->delete('categorias')){
			redirect('categoria');
		}else{
			redirect('categoria');
		}
	}
}
