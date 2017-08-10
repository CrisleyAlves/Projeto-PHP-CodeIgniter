<?php

class Categoria_model extends Ci_Model{
    
    function __construct(){
        //se quiser executar qualquer coisa antes de utilizar esta classe, os comandos devem vir aqui
        parent::__construct();
    }
    
    public function salvar(){
        $data['cat_nome'] = $this->input->post('cat_nome');
        
        return $this->db->insert('categorias', $data);
    }
    
    public function editar_salvar($id = null){
            
            	//id sendo recebido do formulário
		$id = $this->input->post('id');

		//dados vai ser atualizado
		$data['cat_nome'] = $this->input->post('cat_nome');

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('cat_codigo', $id);

                return $this->db->update('categorias', $data);
	}
        
        public function deletar($id = null){
		$this->db->where('cat_codigo', $id);
		return $this->db->delete('categorias');
	}

}
