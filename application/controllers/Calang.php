<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calang extends CI_Controller {
    	function __construct(){
		parent::__construct();	
		 $this->load->model('M_calang');
       $this->load->library('upload');	
      $this->load->library('pagination');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	
	}

	function create()
	{
		$this->load->view('admin/v_input_calang');
	}

	function proses()
	{
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
              redirect('calang');
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

      $search = array('nm_pendaftar' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'calang/?cari='.$cari;
  		$config['total_rows'] 			 = $this->M_calang->jumlah_row($search);

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


      $data['data'] = $this->M_calang->get($batas,$offset,$search);

  		$this->load->view('admin/v_tampil_calang',$data);
		
	}

	function delete($nim){
            $_nim = $this->db->get_where('tb_pendaftaran',['nim' => $nim])->row();
            $query = $this->db->delete('tb_pendaftaran',['nim'=>$nim]);
            if($query){
                unlink("uploads/".$_nim->foto);
            }
            redirect('calang');
		}
		
	 // edit
   function edit($nim)
  {
      $kondisi = array('nim' => $nim );

      $data['data'] = $this->M_calang->get_by_id($kondisi);
      return $this->load->view('admin/v_edit_calang',$data);
  }

  // update
  public function updatedata()
  {
      $nim   = $this->input->post('nim');
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

      $path = './uploads/';

      $kondisi = array('nim' => $nim );

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
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->M_calang->update($data,$kondisi);
              redirect('calang');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }
}

