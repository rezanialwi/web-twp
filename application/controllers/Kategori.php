<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    	function __construct(){
		parent::__construct();	
		 $this->load->model('M_proker');
       $this->load->library('upload');	
      $this->load->library('pagination');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	
	}
    //crud kategori

    public function kategori()
    {
        $data['proker'] = $this->m_data->get_data('kategori')->result();
        $this->load->view('admin/v_kategori',$data);

    }
}