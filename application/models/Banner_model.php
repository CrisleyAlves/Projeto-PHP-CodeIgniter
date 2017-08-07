<?php

class Banner_model extends Ci_Model {

    function __construct() {
        //se quiser executar qualquer coisa antes de utilizar esta classe, os comandos devem vir aqui
        parent::__construct();
    }

    public function salvar() {
        $data['ban_descricao'] = $this->input->post('ban_descricao');
        $data['ban_nome'] = $this->input->post('ban_nome');
        $data['ban_data_inicio'] = $this->input->post('ban_data_inicio');
        $data['ban_data_fim'] = $this->input->post('ban_data_fim');

        $data['ban_nome'] = $_FILES['ban_nome']['name'];

        if (count($_FILES['ban_nome']['name']) > 0) {


            /*
              CONTAR A QUANTIDADE DE IMAGENS QUE FORAM ENVIADAS;
             */
            $number_of_files = count($_FILES['ban_nome']['name']);

            /*
              ARMAZENAR ARQUIVOS GLOBAIS EM UMA VARIÁVEL LOCAL
             */
            $files = $_FILES;

            /*
              VERIFICANDO SE A PASTA AS IMAGENS VÃO IR EXISTE, PERMISSÃO 0777,
             */
            if (!is_dir('uploads/banners')) {
                mkdir('./uploads/banners', 0777, true);
            }

            /*
              ENVIANDO UMA POR UMA
             */

            for ($i = 0; $i < $number_of_files; $i++) {
                $_FILES['ban_nome']['name'] = $files['ban_nome']['name'];
                $_FILES['ban_nome']['type'] = $files['ban_nome']['type'];
                $_FILES['ban_nome']['tmp_name'] = $files['ban_nome']['tmp_name'];
                $_FILES['ban_nome']['error'] = $files['ban_nome']['error'];
                $_FILES['ban_nome']['size'] = $files['ban_nome']['size'];

                $config['upload_path'] = './uploads/banners';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['max_size'] = '0';
                $config['max_width'] = '0';
                $config['max_height'] = '0';
                $config['overwrite'] = TRUE;
                $config['remove_spaces'] = TRUE;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('ban_nome')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $error = array('upload_data' => $this->upload->data());
                }
            }
        } else {
            
        }

        return $this->db->insert('banners', $data);
    }
    
    public function deletar($id = null){
            $data['banner'] = $this->db->get('banners')->result();
            $this->db->where('ban_codigo', $id);
            
            unlink( FCPATH . "uploads/banners/" . $data['banner'][0]->ban_nome);
            return $this->db->delete('banners');
	}

}
