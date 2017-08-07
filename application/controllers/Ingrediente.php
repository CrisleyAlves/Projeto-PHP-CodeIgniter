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
		$data['ing_nome'] = $this->input->post('ing_nome');

		if($this->db->insert('ingredientes', $data)){
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
            
            	//id sendo recebido do formulário
		$id = $this->input->post('id');

		//dados vai ser atualizado
		$data['ing_nome'] = $this->input->post('ing_nome');

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('ing_codigo', $id);

		if($id != null){
			$this->db->update('ingredientes', $data);
			redirect('ingrediente');
		}else{
			redirect('ingrediente');
		}
	}

	public function deletar($id = null){
		$this->db->where('ing_codigo', $id);
		if($this->db->delete('ingredientes')){
			redirect('ingrediente');
		}else{
			redirect('ingrediente');
		}
	}
}
