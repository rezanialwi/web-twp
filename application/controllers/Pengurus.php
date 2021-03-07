<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {
    	function __construct(){
		parent::__construct();	
		 $this->load->model('M_pengurus');
       $this->load->library('upload');	
      $this->load->library('pagination');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	
	}

	function create()
	{
		$this->load->view('admin/v_input_pengurus');
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
              redirect('pengurus');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }
	}
	
	

	public function index()
	{
	 $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'pengurus/?cari='.$cari;
  		$config['total_rows'] 			 = $this->M_pengurus->jumlah_row($search);

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


      $data['data'] = $this->M_pengurus->get($batas,$offset,$search);

  		$this->load->view('admin/v_tampil_pengurus',$data);
		
	}

	function delete($id_pengurus){
            $_id_pengurus = $this->db->get_where('pengurus',['id_pengurus' => $id_pengurus])->row();
            $query = $this->db->delete('pengurus',['id_pengurus'=>$id_pengurus]);
            if($query){
                unlink("uploads/".$_id->foto);
            }
            redirect('pengurus');
		}
		
	 // edit
   function edit($id_pengurus)
  {
      $kondisi = array('id_pengurus' => $id_pengurus );

      $data['data'] = $this->M_pengurus->get_by_id($kondisi);
      return $this->load->view('admin/v_edit_pengurus',$data);
  }

  // update
  public function updatedata()
  {
      $id_pengurus   = $this->input->post('id_pengurus');
      $no_anggota = $this->input->post('no_anggota');
      $nama = $this->input->post('nama');
      $nim = $this->input->post('nim');
      $prodi = $this->input->post('prodi');
      $no_wa = $this->input->post('no_wa');
      $alamat = $this->input->post('alamat');
      $jabatan = $this->input->post('jabatan');

      $path = './uploads/';

      $kondisi = array('id_pengurus' => $id_pengurus );

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
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->M_pengurus->update($data,$kondisi);
              redirect('pengurus');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }

  function cetak()
  {
    $data = array(
   'pengurus' => $this->db->get('pengurus')
  );
  $this->load->view('admin/v_cetak_pengurus',$data);
  }

   public function cetak_id($id_pengurus) {
     $data = array(
      'pengurus'  => $this->db->query("SELECT * FROM pengurus where id_pengurus='$id_pengurus'"),
    );
      $this->load->view('admin/v_cetak_pengurusid',$data);
  }
}

