<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index() {
        $data['title'] = "Dashboard";
        $data['content'] = "buku/dashboard";

        $this->load->view('template/my_template', $data);
    }
    
    public function add() {
        $data['title'] = "Tambah Data Buku";
        $data['content'] = "buku/tambah_buku";

        $this->load->view('template/my_template', $data);
    }
}
