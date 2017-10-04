<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index() {
        $data['title'] = "Daftar Kategori";
        $data['content'] = "kategori/dashboard";

        $this->load->view('template/my_template', $data);
    }
    
    public function add() {
        $data['title'] = "Tambah Kategori Buku";
        $data['content'] = "kategori/tambah_buku";

        $this->load->view('template/my_template', $data);
    }
}
