<?php 

class Absen_c extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_absen_calang');
          $this->load->helper('url');
	}

	function index(){
		$this->load->view('user/v_absenc');
    }

    function alert(){
		$this->load->view('user/v_alert_absen');
    }
    
    function tambah_aksi(){
		$nama_calang = $this->input->post('nama_calang');
        $id_proker = $this->input->post('id_proker');
        $keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama_calang' => $nama_calang,
            'id_proker' => $id_proker,
            'keterangan' => $keterangan
			);
		$this->M_absen_calang->input_data($data,'absensi_calang');
		redirect('absen_c/alert');
    }
    
}