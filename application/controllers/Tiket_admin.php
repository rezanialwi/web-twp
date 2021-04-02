<?php 

class Tiket_admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_tiket');
		  $this->load->helper('url');
		   $this->load->library('pagination');
		  $this->load->library('pdf');
	}

	function index(){
		$cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama' => $cari );

      $batas =  5; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'Tiket_admin/?cari='.$cari;
  		$config['total_rows'] 			 = $this->m_tiket->jumlah_row($search);

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


      $data['data'] = $this->m_tiket->get($batas,$offset,$search);

  		$this->load->view('admin/tiket/v_tampil_tiket',$data);
		

    }
    
    function tambah(){
		$this->load->view('admin/tiket/v_tambah_tiket');
    }
    
    function tambah_aksi(){
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
		$this->m_tiket->input_data($data,'tiket');
		redirect('tiket_admin/index');
    }
    
    function edit($id_tiket){
	$where = array('id_tiket' => $id_tiket);
	$data['tiket'] = $this->m_tiket->edit_data($where,'tiket')->result();
	$this->load->view('admin/tiket/v_edit_ket',$data);
    }

    function update(){
	$id_tiket = $this->input->post('id_tiket');
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

	$where = array(
		'id_tiket' => $id_tiket
	);

	$this->m_tiket->update_data($where,$data,'tiket');
	redirect('tiket_admin/index');
}

    function hapus($id_tiket){
		$where = array('id_tiket' => $id_tiket);
		$this->m_tiket->hapus_data($where,'tiket');
		redirect('tiket_admin');
	}

	 function cetak()
  {
  $data['tiket'] = $this->m_tiket->lihat_data();
	$this->load->view('admin/tiket/v_cetak_tiket', $data);
  }

  function search(){
	$keyword = $this->input->post('keyword');
	$data['data']=$this->m_tiket->get_product_keyword($keyword);
	$this->load->view('admin/tiket/v_cari_tiket',$data);

}

function detail($id_tiket){

$detail = $this->m_tiket->get_detail($id_tiket);
$data['detail'] = $detail;
$this->load->view('admin/tiket/v_detail_tiket', $data);


}

}