<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_pengurus extends CI_Controller {
    	function __construct(){
		parent::__construct();	
		 $this->load->model('M_pengurus');
       $this->load->library('upload');	
		
	
	}

	public function index()
	{

  		$this->load->view('user/v_isi_pengurus');
		
    }

	function proses()
	{
	  $no_anggota = $this->input->post('no_anggota');
      $nama = $this->input->post('nama');
      $nim = $this->input->post('nim');
      $prodi = $this->input->post('prodi');
      $no_wa = $this->input->post('no_wa');
      $alamat = $this->input->post('alamat');
      $jabatan = $this->input->post('jabatan');

      // get foto
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                        'no_anggota'=>$no_anggota,
                            'nama'=>$nama,
                            'nim'=>$nim,
                            'prodi'=>$prodi,
                            'no_wa'=>$no_wa,
                            'alamat'=>$alamat,
                            'jabatan'=>$jabatan,
                            'foto'=> $foto['file_name'],
	                        );
							$this->M_pengurus->insert($data);
              redirect('add_pengurus/alert');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }
	}
	
	function alert(){
		$this->load->view('user/v_alert_absen');
    }

	
}