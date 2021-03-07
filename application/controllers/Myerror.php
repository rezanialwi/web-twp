<?php

class Myerror extends CI_Controller {
    public function __construct()
    {
		parent::__construct();		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/v_error");
	}
}
