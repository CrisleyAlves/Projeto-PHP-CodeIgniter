<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {

    public function index() {
        
        $this->load->view('includes/header');
        $this->load->view('carrinho/listar');
        $this->load->view('includes/footer');
    }
    
    public function adicionarProdutoCarrinho($id){
        
        $this->db->select('*');
        $this->db->where('pro_codigo',$id);
        $data['produto'] = $this->db->get('produtos')->result();
        
        echo "dado encontrado: ".$data['produto'][0]->pro_valor;
        
        $this->session->data['carrinho'] = array(
            "pro_codigo" => '2'
        );
        
        $this->load->view('carrinho/listar', $data);
    }

}