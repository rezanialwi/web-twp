<?php 

class Halaman_daftar extends CI_Controller{

		function __construct(){
		parent::__construct();	
		 $this->load->model('M_calang');
       $this->load->library('upload');	

	
	}

	function index(){
		$this->load->view('user/v_halaman_daftar');
	}

	function proses()
	{
      $nim = $this->input->post('nim');
      $nm_pendaftar = $this->input->post('nm_pendaftar');
      $jurusan = $this->input->post('jurusan');
      $prodi = $this->input->post('prodi');
      $tmp_lahir = $this->input->post('tmp_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $alamat = $this->input->post('alamat');
      $no_wa = $this->input->post('no_wa');
      $agama = $this->input->post('agama');
      $jenkel = $this->input->post('jenkel');
      $organisasi = $this->input->post('organisasi');
      $berkesenian = $this->input->post('berkesenian');
      $minat = $this->input->post('minat');

      // get foto
      $config['upload_path'] = './uploads/calang';
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
                            'nim'=>$nim,
                            'nm_pendaftar'=>$nm_pendaftar,
                            'jurusan'=>$jurusan,
                            'prodi'=>$prodi,
                            'tmp_lahir'=>$tmp_lahir,
                            'tgl_lahir'=>$tgl_lahir,
                            'alamat'=>$alamat,
                            'no_wa'=>$no_wa,
                            'agama'=>$agama,
                            'jenkel'=>$jenkel,
                            'organisasi'=>$organisasi,
                            'berkesenian'=>$berkesenian,
                            'minat'=>$minat,
                            'foto'=> $foto['file_name'],
	                        );
							$this->M_calang->insert($data);
              $this->load->view('user/v_bukti_calang', $data);
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }
	}

	function daftar_calang(){
		$this->load->view('user/v_daftar_calang');
	}
	
	
}