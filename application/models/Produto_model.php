<?php

class Produto_model extends Ci_Model {

    function __construct() {
        //se quiser executar qualquer coisa antes de utilizar esta classe, os comandos devem vir aqui
        parent::__construct();
    }

    public function salvar() {

        //recebe os arquivos

        $data['pro_img'] = $_FILES['pro_img']['name'];

        if (count($_FILES['pro_img']['name']) > 0) {


            /*
              CONTAR A QUANTIDADE DE IMAGENS QUE FORAM ENVIADAS;
             */
            $number_of_files = count($_FILES['pro_img']['name']);

            /*
              ARMAZENAR ARQUIVOS GLOBAIS EM UMA VARIÁVEL LOCAL
             */
            $files = $_FILES;

            /*
              VERIFICANDO SE A PASTA AS IMAGENS VÃO IR EXISTE, PERMISSÃO 0777,
             */
            if (!is_dir('uploads')) {
                mkdir('./uploads', 0777, true);
            }


            /*
              ENVIANDO UMA POR UMA
             */

            for ($i = 0; $i < $number_of_files; $i++) {
                $_FILES['pro_img']['name'] = $files['pro_img']['name'];
                $_FILES['pro_img']['type'] = $files['pro_img']['type'];
                $_FILES['pro_img']['tmp_name'] = $files['pro_img']['tmp_name'];
                $_FILES['pro_img']['error'] = $files['pro_img']['error'];
                $_FILES['pro_img']['size'] = $files['pro_img']['size'];

                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['max_size'] = '0';
                $config['max_width'] = '0';
                $config['max_height'] = '0';
                $config['overwrite'] = TRUE;
                $config['remove_spaces'] = TRUE;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('pro_img')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $error = array('upload_data' => $this->upload->data());
                }
            }
        } else {
            
        }



        //recebe o restante dos parametros

        $data['pro_nome'] = $this->input->post('pro_nome');
        $data['pro_descricao'] = $this->input->post('pro_descricao');
        $data['pro_valor'] = $this->input->post('pro_valor');
        $data['pro_status'] = $this->input->post('pro_status');
        $data['categoria'] = $this->input->post('categoria');


        echo $data['pro_img'];

        return $this->db->insert('produtos', $data);
    }

    public function editar_salvar($id = null) {

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

        return $this->db->update('produtos', $data);
            
    }

    public function deletar($id = null) {
        $this->db->where('cat_codigo', $id);
        return $this->db->delete('categorias');
    }

}
