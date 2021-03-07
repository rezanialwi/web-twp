<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_calang extends CI_Controller {
 function __construct(){
  parent::__construct();
 }

  function index(){
  $data = array(
   'foto' => $this->db->get('tb_pendaftaran')
  );
  $this->load->view('admin/v_cetak_calang',$data);
 }


   function cetak_pdf() {
    // load view yang akan digenerate atau diconvert
    $data = array(
      'foto'  => $this->db->query("SELECT * FROM tb_pendaftaran")
    );
    $this->load->view('admin/v_cetak_calang',$data);
   
 }

     public function cetak_id($nim) {
     $data = array(
      'foto'  => $this->db->query("SELECT * FROM tb_pendaftaran where nim='$nim'"),
    );
      $this->load->view('admin/v_cetak_semua',$data);
  }
}