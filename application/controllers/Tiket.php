<?php 

class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();		
		
			$this->load->model('M_tiket');
                $this->load->helper('url');
	}

	function index(){
		$this->load->view('user/v_tiket');
	}

	function proses(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$asal = $this->input->post('asal');
		$telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $ket = $this->input->post('ket');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'asal' => $asal,
			'telp' => $telp,
            'email' => $email,
            'ket' => $ket
			);
		$this->M_tiket->input_data($data,'tiket');
		redirect('tiket/alert');
    }

	function cetak_persatu($id_tiket){
		$detail = $this->M_tiket->get_detail($id_tiket);
	 $data['detail'] = $detail;
	 $this->load->view('user/cetak_tiket',$data);
	 }

	 function alert(){
		
		$this->load->view('user/v_alert_tiket');
	 }
	 
}