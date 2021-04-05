<?php 

class Fkpsk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('m_fkpsk');
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
  		$config['base_url'] 				 = base_url().'fkpsk/?cari='.$cari;
  		$config['total_rows'] 			 = $this->m_fkpsk->jumlah_row($search);

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


      $data['data'] = $this->m_fkpsk->get($batas,$offset,$search);

  		$this->load->view('admin/fkpsk/v_tampil_fkpsk',$data);
		

    }
    
    function tambah(){
		$this->load->view('admin/fkpsk/v_tambah_fkpsk');
    }
    
    function tambah_aksi(){
		$nama = $this->input->post('nama');
     $jumlah = $this->input->post('jumlah');
     $ket = $this->input->post('ket');
 
		$data = array(
			'nama' => $nama,
            'jumlah' => $jumlah,
            'ket' => $ket
			);
		$this->m_fkpsk->input_data($data,'fkpsk');
		redirect('fkpsk/index');
    }
    
    function edit($id_fkpsk){
	$where = array('id_fkpsk' => $id_fkpsk);
	$data['fkpsk'] = $this->m_fkpsk->edit_data($where,'fkpsk')->result();
	$this->load->view('admin/fkpsk/v_edit_ket',$data);
    }

    function update(){
	$id_fkpsk = $this->input->post('id_fkpsk');
	$nama = $this->input->post('nama');
     $jumlah = $this->input->post('jumlah');
     $ket = $this->input->post('ket');

	$data = array(
		'nama' => $nama,
            'jumlah' => $jumlah,
            'ket' => $ket
	);

	$where = array(
		'id_fkpsk' => $id_fkpsk
	);

	$this->m_fkpsk->update_data($where,$data,'fkpsk');
	redirect('fkpsk/index');
}

    function hapus($id_fkpsk){
		$where = array('id_fkpsk' => $id_fkpsk);
		$this->m_fkpsk->hapus_data($where,'fkpsk');
		redirect('fkpsk');
	}

	 function cetak()
  {
  $data['fkpsk'] = $this->m_fkpsk->lihat_data();
	$this->load->view('admin/fkpsk/v_cetak_fkpsk', $data);
  }

  function search(){
	$keyword = $this->input->post('keyword');
	$data['data']=$this->m_fkpsk->get_product_keyword($keyword);
	$this->load->view('admin/fkpsk/v_cari_fkpsk',$data);

}

function detail($id_fkpsk){

$detail = $this->m_fkpsk->get_detail($id_fkpsk);
$data['detail'] = $detail;
$this->load->view('admin/fkpsk/v_detail_fkpsk', $data);


}

}