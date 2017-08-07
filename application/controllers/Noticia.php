<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

	public function index(){
		
                $this->db->select('*');
                $this->db->join('categorias','categoria=cat_codigo','inner');
                $data['noticia'] = $this->db->get('noticias')->result();
                
		$this->load->view('includes/header');
		$this->load->view('noticia/listar', $data);
		$this->load->view('includes/footer');
	}

	public function incluir(){
		$data['noticia'] = $this->db->get('noticias')->result();
                $data['categoria'] = $this->db->get('categorias')->result();
		$this->load->view('includes/header');
		$this->load->view('noticia/incluir', $data);
		$this->load->view('includes/footer');
	}

	public function salvar(){
                
                //recebe os arquivos
                $data['not_imagem'] = $_FILES['not_imagem']['name'];

		if(count($_FILES['not_imagem']['name']) > 0){
                    

			/*
				CONTAR A QUANTIDADE DE IMAGENS QUE FORAM ENVIADAS;
			*/
			$number_of_files = count($_FILES['not_imagem']['name']);

			/*
				ARMAZENAR ARQUIVOS GLOBAIS EM UMA VARIÁVEL LOCAL
			*/
			$files = $_FILES;

			/*
				VERIFICANDO SE A PASTA AS IMAGENS VÃO IR EXISTE, PERMISSÃO 0777,
			*/
			if(!is_dir('uploads/noticia')){
				mkdir('./uploads/noticia', 0777, true);
			}
                        

			/*
				ENVIANDO UMA POR UMA
			*/

			for ($i=0; $i < $number_of_files; $i++) {
				$_FILES['not_imagem']['name'] = $files['not_imagem']['name'];
				$_FILES['not_imagem']['type'] = $files['not_imagem']['type'];
				$_FILES['not_imagem']['tmp_name'] = $files['not_imagem']['tmp_name'];
				$_FILES['not_imagem']['error'] = $files['not_imagem']['error'];
				$_FILES['not_imagem']['size'] = $files['not_imagem']['size'];

				$config['upload_path'] = './uploads/noticia';
				$config['allowed_types'] = 'gif|jpg|png|pdf';
				$config['max_size'] = '0';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
				$config['overwrite'] = TRUE;
				$config['remove_spaces'] = TRUE;

				$this->upload->initialize($config);
                                
				if(!$this->upload->do_upload('not_imagem')){
					$error = array('error' => $this->upload->display_errors());
                                        print_r($error);
				}else{
					$error = array('upload_data' => $this->upload->data());
				}
			}
                        
		}else{
			
		}
                
                   
                
                //recebe o restante dos parametros
		$data['not_titulo'] = $this->input->post('not_titulo');
		$data['not_texto'] = $this->input->post('not_texto');
		$data['not_data'] = $this->input->post('not_data');
                $data['categoria'] = $this->input->post('categoria');
                $data['usuario'] = 1;
                
                if($this->db->insert('noticias', $data)){
			redirect('noticia');
		}
	}

	public function editar($id = null){
                
                $this->db->where('not_codigo',$id);
		
                $this->db->select('*');
                $this->db->join('categorias','categoria=cat_codigo','inner');
                $data['noticia'] = $this->db->get('noticias')->result();
                $data['categorias'] = $this->db->get('categorias')->result();
                
		$this->load->view('includes/header');
		$this->load->view('noticia/editar', $data);
		$this->load->view('includes/footer');
	}

	public function editar_salvar($id = null){
                
		//id sendo recebido do formulário
		$id = $this->input->post('id');
                
                //dados vai ser atualizado
		$data['not_titulo'] = $this->input->post('not_titulo');
		$data['not_texto'] = $this->input->post('not_texto');
		$data['not_data'] = $this->input->post('not_data');
                $data['categoria'] = $this->input->post('categoria');
                $data['usuario'] = 1;
                
                
                
                if($_FILES['not_imagem']['name']){
                    $data['not_imagem'] = $_FILES['not_imagem']['name'];
                    
                    $number_of_files = count($_FILES['not_imagem']['name']);

			/*
				ARMAZENAR ARQUIVOS GLOBAIS EM UMA VARIÁVEL LOCAL
			*/
			$files = $_FILES;

			/*
				VERIFICANDO SE A PASTA AS IMAGENS VÃO IR EXISTE, PERMISSÃO 0777,
			*/
			if(!is_dir('uploads/noticia')){
				mkdir('./uploads/noticia', 0777, true);
			}
                        

			/*
				ENVIANDO UMA POR UMA
			*/

			for ($i=0; $i < $number_of_files; $i++) {
				$_FILES['not_imagem']['name'] = $files['not_imagem']['name'];
				$_FILES['not_imagem']['type'] = $files['not_imagem']['type'];
				$_FILES['not_imagem']['tmp_name'] = $files['not_imagem']['tmp_name'];
				$_FILES['not_imagem']['error'] = $files['not_imagem']['error'];
				$_FILES['not_imagem']['size'] = $files['not_imagem']['size'];

				$config['upload_path'] = './uploads/noticia';
				$config['allowed_types'] = 'gif|jpg|png|pdf';
				$config['max_size'] = '0';
				$config['max_width'] = '0';
				$config['max_height'] = '0';
				$config['overwrite'] = TRUE;
				$config['remove_spaces'] = TRUE;

				$this->upload->initialize($config);
                                
				if(!$this->upload->do_upload('not_imagem')){
					$error = array('error' => $this->upload->display_errors());
                                        print_r($error);
				}else{
					$error = array('upload_data' => $this->upload->data());
				}
			}
                }
                
                if(empty($data['not_imagem'])){
                    echo "faz o update sem atualizar a imagem";
                }else{
                    echo "tem que atualizar a imagem";
                }

		//fazendo consulta no banco com base no id recebido para saber se existe o dado
		$this->db->where('not_codigo', $id);

		if($id != null){
			$this->db->update('noticias', $data);
			redirect('noticia');
		}else{
			redirect('noticia');
		}
	}

	public function deletar($id = null){
               $data['noticia'] = $this->db->get('noticias')->result();
		$this->db->where('not_codigo', $id);
                
                
                unlink( FCPATH . "uploads/noticias/".$data['noticia'][0]->not_imagem);
                
                
		if($this->db->delete('noticias')){
			redirect('noticia');
		}else{
			redirect('noticia');
		}
	}
}
