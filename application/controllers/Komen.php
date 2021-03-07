<?php 

class Komen extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index(){
		$this->load->view('user/v_komen');
	}

	
    
    function tambah_aksi(){
		$nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $komen = $this->input->post('komen');
 
		$data = array(
			'nama' => $nama,
            'email' => $email,
            'komen' => $komen
			);
		$this->M_data->input_data($data,'kontak');
		redirect('komen/feedback');
	}
	 function feedback(){
		$this->load->view('user/v_feedback');
	
	 }

}