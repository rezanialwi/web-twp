<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		
		
		// load view admin/overview.php
	
			$qcalang = 'SELECT COUNT(*) AS hasil FROM tb_pendaftaran';
			$data['calang'] = $this->db->query($qcalang)->row_array();

			$qkontak = 'SELECT COUNT(*) AS hasil FROM kontak';
			$data['kontak'] = $this->db->query($qkontak)->row_array();

			$pengurus = 'SELECT COUNT(*) AS hasil FROM pengurus';
			$data['pengurus'] = $this->db->query($pengurus)->row_array();

			$proker = 'SELECT COUNT(*) AS hasil FROM proker';
			$data['proker'] = $this->db->query($proker)->row_array();

			$absenp = 'SELECT COUNT(*) AS hasil FROM absensi_pengurus';
			$data['absensi_pengurus'] = $this->db->query($absenp)->row_array();

			$absenc = 'SELECT COUNT(*) AS hasil FROM absensi_calang';
			$data['absensi_calang'] = $this->db->query($absenc)->row_array();

			$tiket = 'SELECT COUNT(*) AS hasil FROM tiket';
			$data['tiket'] = $this->db->query($tiket)->row_array();

            $artikel = 'SELECT COUNT(*) AS hasil FROM artikel';
			$data['artikel'] = $this->db->query($artikel)->row_array();

        $this->load->view('admin/v_overview',$data);
	}
}
