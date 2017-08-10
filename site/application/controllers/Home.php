<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        
        $this->db->select('*');
        $data['banner'] = $this->db->get('banners')->result();
        $data['produto'] = $this->db->get('produtos')->result();

        $this->load->view('includes/header');
        $this->load->view('home', $data);
        $this->load->view('includes/footer');
    }

}
