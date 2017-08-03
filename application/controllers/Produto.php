<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function index(){
		
                $dados['produto'] = $this->db->get('produtos')->result();
		$this->db->join('categorias','cat_codigo=categoria','inner');
        
		$this->load->view('includes/header');
		$this->load->view('produto/listar', $dados);
		$this->load->view('includes/footer');
	}

	public function form(){
		$data['categoria'] = $this->db->get('categorias')->result();
		$this->load->view('includes/header');
		$this->load->view('produto/form', $data);
		$this->load->view('includes/footer');
	}

	public function salvar(){
		$data['pro_nome'] = $this->input->post('pro_nome');
		$data['pro_descricao'] = $this->input->post('pro_descricao');
		$data['pro_valor'] = $this->input->post('pro_valor');
                $data['pro_status'] = $this->input->post('pro_status');
                $data['categoria'] = $this->input->post('categoria');

		if($this->db->insert('produtos', $data)){
			redirect('produto');
		}
	}

	public function editar($id = null){

		$data['pro_nome'] = $this->input->post('pro_nome');
		$data['pro_descricao'] = $this->input->post('pro_descricao');
		$data['pro_valor'] = $this->input->post('pro_valor');
                $data['pro_status'] = $this->input->post('pro_status');
                $data['categoria'] = $this->input->post('categoria');
                $data['produto'] = $this->db->get('produtos')->result();
                $data['categorias'] = $this->db->get('categorias')->result();
                
		$this->load->view('includes/header');
		$this->load->view('produto/editar', $data);
		$this->load->view('includes/footer');
	}

	public function editar_salvar($id = null){
		
		//id sendo recebido do formulário
		$id = $this->input->post('id');



		//dados vai ser atualizado
		$data['pro_nome'] = $this->input->post('pro_nome');
		$data['pro_descricao'] = $this->input->post('pro_descricao');
		$data['pro_valor'] = $this->input->post('pro_valor');
                $data['pro_status'] = $this->input->post('pro_status');
                $data['categoria'] = $this->input->post('categoria');

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('pro_codigo', $id);
                

		if($id != null){
			$this->db->update('produtos', $data);
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
