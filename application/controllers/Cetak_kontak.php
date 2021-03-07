<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak_kontak extends CI_Controller {
 function __construct(){
  parent::__construct();
 }
  function index(){
  $data = array(
   'kontak' => $this->db->get('kontak')
  );
  $this->load->view('admin/v_cetak_kontak',$data);
 }

}