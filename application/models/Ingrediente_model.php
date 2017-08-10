<?php

class Ingrediente_model extends Ci_Model{
    
    function __construct(){
        //se quiser executar qualquer coisa antes de utilizar esta classe, os comandos devem vir aqui
        parent::__construct();
    }
    
    public function salvar(){
        $data['ing_nome'] = $this->input->post('ing_nome');
        
        return $this->db->insert('ingredientes', $data);
    }
    
    public function editar_salvar($id = null){
            
            	//id sendo recebido do formulário
		$id = $this->input->post('id');

		//dados vai ser atualizado
		$data['ing_nome'] = $this->input->post('ing_nome');

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('ing_codigo', $id);

                return $this->db->update('ingredientes', $data);
	}
        
        public function deletar($id = null){
		$this->db->where('ing_codigo', $id);
		return $this->db->delete('ingredientes');
	}

}
