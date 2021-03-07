<?php 

class Absen_p extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_absen_pengurus');
          $this->load->helper('url');
	}

	function index(){
		$this->load->view('user/v_absenp');
    }

    function alert(){
		$this->load->view('user/v_alert_absen');
    }
    
    function tambah_aksi(){
		$nama_pengurus = $this->input->post('nama_pengurus');
        $id_proker = $this->input->post('id_proker');
        $keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama_pengurus' => $nama_pengurus,
            'id_proker' => $id_proker,
            'keterangan' => $keterangan
			);
		$this->M_absen_pengurus->input_data($data,'absensi_pengurus');
		redirect('absen_p/alert');
    }
    
}