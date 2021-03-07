<?php 

class Absen_pengurus extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('M_absen_pengurus');
		  $this->load->helper('url');
		   $this->load->library('pagination');
		  $this->load->library('pdf');
	}

	function index(){
		$cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama_pengurus' => $cari );

      $batas =  5; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'absen_pengurus/?cari='.$cari;
  		$config['total_rows'] 			 = $this->M_absen_pengurus->jumlah_row($search);

  		$config['per_page'] 				 = $batas;
  		$config['uri_segment'] 			 = $page;

  		$config['full_tag_open'] 		= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 			= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] 				= 'last';
  		$config['last_tag_open']	 	= '<li><a>';
  		$config['last_tag_close'] 	= '</a></li>';

  		$config['next_link'] 				= '&raquo;';
  		$config['next_tag_open'] 		= '<li><a>';
  		$config['next_tag_close'] 	= '</a></li>';

  		$config['prev_link'] 				= '&laquo;';
  		$config['prev_tag_open'] 		= '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] 		= '<li class="active"><a>';
  		$config['cur_tag_close'] 		= '</a></li>';

  		$config['num_tag_open'] 		= '<li><a>';
  		$config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;


      $data['data'] = $this->M_absen_pengurus->get($batas,$offset,$search);

  		$this->load->view('admin/v_tampil_absenp',$data);
		

    }
    
    function tambah(){
		$this->load->view('admin/v_input_absenp');
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
		redirect('absen_pengurus/index');
    }
    
    function edit($id_absensi){
	$where = array('id_absensi' => $id_absensi);
	$data['absensi_pengurus'] = $this->M_absen_pengurus->edit_data($where,'absensi_pengurus')->result();
	$this->load->view('admin/v_edit_absenp',$data);
    }

    function update(){
	$id_absensi = $this->input->post('id_absensi');
	$nama_pengurus = $this->input->post('nama_pengurus');
   $id_proker = $this->input->post('id_proker');
     $keterangan = $this->input->post('keterangan');

	$data = array(
		'nama_pengurus' => $nama_pengurus,
          'id_proker' => $id_proker,
            'keterangan' => $keterangan
	);

	$where = array(
		'id_absensi' => $id_absensi
	);

	$this->M_absen_pengurus->update_data($where,$data,'absensi_pengurus');
	redirect('absen_pengurus/index');
}

    function hapus($id_absensi){
		$where = array('id_absensi' => $id_absensi);
		$this->M_absen_pengurus->hapus_data($where,'absensi_pengurus');
		redirect('absen_pengurus/index');
	}

	 function cetak()
  {
  $data['absensi_pengurus'] = $this->M_absen_pengurus->lihat_data();
	$this->load->view('admin/v_cetak_absenp', $data);
  }

  	 function laporanpdf()
  {
  	$data['absensi_pengurus'] = $this->M_absen_pengurus->lihat_data();
     $this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen-pengurus.pdf";
		$this->pdf->load_view('admin/v_pdf_absenp', $data);
    

  }
}