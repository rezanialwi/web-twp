<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proker extends CI_Controller {
    	function __construct(){
		parent::__construct();	
        date_default_timezone_set('Asia/Jakarta'); 
		 $this->load->model('M_proker');
       $this->load->library('upload');	
      $this->load->library('pagination');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	
	}

    public function kategori()
    {
        $data['kategori'] = $this->M_proker->get_data('kategori')->result();
        $this->load->view('admin/v_kategori',$data);

    }

    public function kategori_tambah()
    {

        $this->load->view('admin/v_kategori_tambah');

        

    } 
    public function kategori_aksi() 
    { 
        $this->form_validation->set_rules('kategori','Kategori','required'); 
        if($this->form_validation->run() != false){ 
        $kategori = $this->input->post('kategori'); 
        $data = array( 
        'kategori_nama' => $kategori, 
        'kategori_slug' => strtolower(url_title($kategori)) 
        ); 
        $this->M_proker->insert_data($data,'kategori'); 
        redirect(base_url().'proker/kategori'); 
        }else{ 
        $this->load->view('admin/v_kategori_tambah'); 
        } 
    }

    public function kategori_edit($id) 
    { 
        $where = array( 
        'kategori_id' => $id 
        ); 
        $data['kategori'] = $this->M_proker->edit($where,'kategori')->result(); 
 
        $this->load->view('admin/v_kategori_edit',$data); 
    }


    public function kategori_update()
    {
        $this->form_validation->set_rules('kategori','Kategori','required');
        if($this->form_validation->run() != false){
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori');
        $where = array(
        'kategori_id' => $id
        );
        $data = array(
        'kategori_nama' => $kategori,
        'kategori_slug' => strtolower(url_title($kategori))
        );
        $this->M_proker->update_data($where, $data,'kategori');
        redirect(base_url().'proker/kategori');
        }else{
        $id = $this->input->post('id');
        $where = array(
        'kategori_id' => $id
        );
        $data['kategori'] = $this->M_proker->edit($where,'kategori')->result();
        $this->load->view('admin/v_kategori_edit',$data);
        }
    }


    public function kategori_hapus($id)
    {
        $where = array(
        'kategori_id' => $id
        );
        $this->M_proker->delete_data($where,'kategori');
        redirect(base_url().'proker/kategori');
    }

    public function artikel()
    {
        $data['artikel'] = $this->db->query("SELECT * FROM artikel,kategori WHERE
        artikel_kategori=kategori_id order by artikel_id desc")->result();
        $this->load->view('admin/v_artikel',$data);
    }

    public function artikel_tambah()
    {
    $data['kategori'] = $this->M_proker->get_data('kategori')->result();
    $this->load->view('admin/v_artikel_tambah',$data);
    } 


    public function artikel_aksi()
		{
      $tanggal = date('Y-m-d H:i:s');
      $judul = $this->input->post('judul');
      $slug = strtolower(url_title($judul));
      $konten = $this->input->post('konten');
      
      $kategori = $this->input->post('kategori');
      $status = $this->input->post('status');
	

      // get foto
      $config['upload_path'] = './uploads/artikel';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['sampul']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['sampul']['name'])) {
	        if ( $this->upload->do_upload('sampul') ) {
	            $sampul = $this->upload->data();
	            $data = array(
	                    'artikel_tanggal'=>$tanggal,
                            'artikel_judul'=>$judul,
                            'artikel_slug'=>$slug,
                            'artikel_konten'=>$konten,

                            'artikel_kategori'=>$kategori,
                            'artikel_status'=>$status,
                            'artikel_sampul'=> $sampul['file_name'],
	                        );
		$this->M_proker->insert($data,'artikel');
              
redirect(base_url().'proker/artikel'); 
}else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }
	}

    public function artikel_edit($id)
    {
    $where = array(
    'artikel_id' => $id
    );
    $data['artikel'] = $this->M_proker->edit_data($where,'artikel')->result();
    $data['kategori'] = $this->M_proker->get_data('kategori')->result(); 
    
    $this->load->view('admin/v_artikel_edit',$data);
        } 



public function artikel_update()
{
        // Wajib isi judul,konten dan kategori 
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('konten','Konten','required');
        $this->form_validation->set_rules('kategori','Kategori','required');
        if($this->form_validation->run() != false){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $slug = strtolower(url_title($judul));
        $konten = $this->input->post('konten');
        $kategori = $this->input->post('kategori');
        $status = $this->input->post('status');
        $path = './uploads/artikel';
        $where = array('artikel_id' => $id);
        $data = array(
        'artikel_judul' => $judul,
        'artikel_slug' => $slug,
        'artikel_konten' => $konten,
        'artikel_kategori' => $kategori,
        'artikel_status' => $status, );
        $this->M_proker->update_data($where,$data,'artikel');
        if (!empty($_FILES['sampul']['name'])){
        $config['upload_path'] = './uploads/artikel/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('sampul')) {
        // mengambil data tentang gambar
        $gambar = $this->upload->data();
        $data = array(
        'artikel_sampul' => $gambar['file_name'],
        );
        @unlink($path.$this->input->post('filelama'));
        $this->M_proker->update_data($where,$data,'artikel');
        redirect(base_url().'proker/artikel');
        } else {
        $this->form_validation->set_message('sampul',
        $data['gambar_error'] = $this->upload->display_errors());
        $where = array( 'artikel_id' => $id);
        $data['artikel'] = $this->M_proker->edit_data($where,'artikel')->result();
        $data['kategori'] = $this->M_proker->get_data('kategori')->result();
        
        $this->load->view('admin/v_artikel_edit',$data);
        }
        }else{
        redirect(base_url().'proker/artikel');
        }
        }else{
        $id = $this->input->post('id');
        $where = array('artikel_id' => $id);
        $data['artikel'] = $this->M_proker->edit_data($where,'artikel')->result();
        $data['kategori'] = $this->M_proker->get_data('kategori')->result();
        $this->load->view('admin/v_artikel_edit',$data);
        
        }
} 
    public function artikel_hapus($id)
    {
    $where = array('artikel_id' => $id);
    $this->M_proker->delete_data($where,'artikel'); 
    redirect(base_url().'proker/artikel');
} 















		public function index()
	{
	 $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama_proker' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url']  = base_url().'proker/?cari='.$cari;
  		$config['total_rows']  = $this->M_proker->jumlah_row($search);

  		$config['per_page']	 = $batas;
  		$config['uri_segment'] 	 = $page;

  		$config['full_tag_open'] 	= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 	= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] = 'last';
  		$config['last_tag_open']= '<li><a>';
  		$config['last_tag_close'] = '</a></li>';

  		$config['next_link'] = '&raquo;';
  		$config['next_tag_open'] = '<li><a>';
  		$config['next_tag_close'] = '</a></li>';

  		$config['prev_link'] = '&laquo;';
  		$config['prev_tag_open'] = '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] = '<li class="active"><a>';
  		$config['cur_tag_close'] = '</a></li>';

  		$config['num_tag_open'] = '<li><a>';
  		$config['num_tag_close'] = '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination'] = $this->pagination->create_links();
      $data['jumlah_page'] = $page;


      $data['data'] = $this->M_proker->get($batas,$offset,$search);

  		$this->load->view('admin/v_tampil_proker',$data);
		
    }

     function tambah(){
		$this->load->view('admin/v_input_proker');
    }
    
    function tambah_aksi(){
		$nama_proker = $this->input->post('nama_proker');
        $tanggal = $this->input->post('tanggal');
 
		$data = array(
			'nama_proker' => $nama_proker,
            'tanggal' => $tanggal
			);
		$this->M_proker->input_data($data,'proker');
		redirect('proker/index');
    }
    
    function edit($id_proker){
	$where = array('id_proker' => $id_proker);
	$data['proker'] = $this->M_proker->edit_data($where,'proker')->result();
	$this->load->view('admin/v_edit_proker',$data);
    }

    function update(){
	$id_proker = $this->input->post('id_proker');
	$nama_proker = $this->input->post('nama_proker');
        $tanggal = $this->input->post('tanggal');

	$data = array(
		'nama_proker' => $nama_proker,
         'tanggal' => $tanggal
	);

	$where = array(
		'id_proker' => $id_proker
	);

	$this->M_proker->update_data($where,$data,'proker');
	redirect('proker/index');
}

    function delete($id_proker){
		$where = array('id_proker' => $id_proker);
		$this->M_proker->hapus_data($where,'proker');
		redirect('proker/index');
	}
	
	

}