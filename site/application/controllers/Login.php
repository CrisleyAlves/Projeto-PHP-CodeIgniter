<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function index(){
                    
		$this->load->view('login');
	}
        
        public function logar(){
            $email = $this->input->post('usu_email');
            $senha = $this->input->post('usu_senha');
            
            $this->db->where('usu_email', $email);
            $this->db->where('usu_senha', $senha);

            $data['usuario'] = $this->db->get('usuarios')->result();
            
            if(count($data['usuario']) == 1){
                    $data['usu_codigo'] =  $data['usuario'][0]->usu_codigo;
                    $data['usu_nome'] =  $data['usuario'][0]->usu_nome;
                    $data['logado'] =  true;
                    $data['carrinho'] = array();
                    $this->session->set_userdata($data);
                    redirect('home');
            }else{
                    redirect('login');
            }
        }
        
        public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
