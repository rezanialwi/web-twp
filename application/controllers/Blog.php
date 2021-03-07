<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_blog');
        $this->load->library('upload');
	}

	function lists(){ //fungsi untuk menampilkan list artikel
		$x['data']=$this->M_blog->get_all_post();
		$this->load->view('user/v_blog_list',$x);
        
	}

	function detail($slug){ //fungsi untuk menampilkan detail artikel
		$data=$this->M_blog->get_post_by_slug($slug);
		if($data->num_rows() > 0){ // validasi jika data ditemukan
			$x['data']= $data;
			$this->load->view('user/v_blog_detail',$x);
		}else{
			//jika data tidak ditemukan, maka kembali ke blog
			redirect('blog/lists');
		}
		
	}

}