<?php 

class Absen_calang extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('M_absen_calang');
		  $this->load->helper('url');
		   $this->load->library('pagination');
		  $this->load->library('pdf');
	}

	function index(){
			$cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama_calang' => $cari );

      $batas =  5; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'absen_calang/?cari='.$cari;
  		$config['total_rows'] 			 = $this->M_absen_calang->jumlah_row($search);

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


      $data['data'] = $this->M_absen_calang->get($batas,$offset,$search);

  		$this->load->view('admin/v_tampil_absenc',$data);
    }
    
    function tambah(){
		$this->load->view('admin/v_input_absenc');
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
		redirect('absen_calang/index');
    }
    
    function edit($id_absensi){
	$where = array('id_absensi' => $id_absensi);
	$data['absensi_calang'] = $this->M_absen_calang->edit_data($where,'absensi_calang')->result();
	$this->load->view('admin/v_edit_absenc',$data);
    }

    function update(){
	$id_absensi = $this->input->post('id_absensi');
	$nama_calang = $this->input->post('nama_calang');
   $id_proker = $this->input->post('id_proker');
     $keterangan = $this->input->post('keterangan');

	$data = array(
		'nama_calang' => $nama_calang,
          'id_proker' => $id_proker,
            'keterangan' => $keterangan
	);

	$where = array(
		'id_absensi' => $id_absensi
	);

	$this->M_absen_calang->update_data($where,$data,'absensi_calang');
	redirect('absen_calang/index');
}

    function hapus($id_absensi){
		$where = array('id_absensi' => $id_absensi);
		$this->M_absen_calang->hapus_data($where,'absensi_calang');
		redirect('absen_calang/index');
	}

	 function cetak()
  {
  $data['absensi_calang'] = $this->M_absen_calang->lihat_data();
	$this->load->view('admin/v_cetak_absenc', $data);
  }
	  
  	 function laporanpdf()
  {
      $data['absensi_calang'] = $this->M_absen_calang->lihat_data();
     $this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-absen-calang.pdf";
		$this->pdf->load_view('admin/v_pdf_absenc', $data);
  }
}