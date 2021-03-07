<?php 

class Kontak extends CI_Controller{

	function __construct(){
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('M_data');
                $this->load->helper('url');
	}

	function index(){
		$data['kontak'] = $this->M_data->tampil_data()->result();
		$this->load->view('admin/v_tampil_kontak',$data);
    }
    
    function tambah(){
		$this->load->view('admin/v_input_kontak');
    }
    
    function tambah_aksi(){
		$nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $komen = $this->input->post('komen');
 
		$data = array(
			'nama' => $nama,
            'email' => $email,
            'komen' => $komen
			);
		$this->M_data->input_data($data,'kontak');
		redirect('kontak/index');
    }
    
    function edit($id){
	$where = array('id' => $id);
	$data['kontak'] = $this->M_data->edit_data($where,'kontak')->result();
	$this->load->view('admin/v_edit_kontak',$data);
    }

    function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $komen = $this->input->post('komen');

	$data = array(
		'nama' => $nama,
        'email' => $email,
        'komen' => $komen
	);

	$where = array(
		'id' => $id
	);

	$this->M_data->update_data($where,$data,'kontak');
	redirect('kontak/index');
}

    function hapus($id){
		$where = array('id' => $id);
		$this->M_data->hapus_data($where,'kontak');
		redirect('kontak/index');
	}

	function cetak(){
	$data['kontak'] = $this->M_data->tampil_data()->result();
  $this->load->view('admin/v_tampil_kontak',$data);
	}
}