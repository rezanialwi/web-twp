<?php 

class M_fkpsk extends CI_Model{

	function get_product_keyword($keyword){
		// $this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left');
		$this->db->select('*');
		$this->db->from('fkpsk');
		$this->db->like('nama',$keyword);
		$this->db->or_like('jumlah',$keyword);
		$this->db->or_like('ket',$keyword);
		return $this->db->get()->result();
	  }

	function get($batas=NULL,$offset=NULL,$cari=NULL)
	{
		if ($batas != NULL) {
		  $this->db->limit($batas,$offset);
		}
		if ($cari != NULL) {
			$this->db->or_like($cari);
		}
		$this->db->from('fkpsk');
		$query = $this->db->get();
		return $query->result();
	}
	
	  public function jumlah_row($search)
	{
	  $this->db->or_like($search);
	  $query = $this->db->get('fkpsk');
  
	  return $query->num_rows();
	}
  
	 function get_by_id($kondisi)
	{
		$this->db->from('fkpsk');
		$this->db->where($kondisi);
		$query = $this->db->get();
		return $query->row();
	}
  
  
	  public function lihat_data()
	  {
		  return $this->db->get('fkpsk')->result();
	  }
	  

	//crud fkpsk
	function tampil_data(){
		return $this->db->get('fkpsk');
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	//pagging
	function data($number,$offset){
		return $query = $this->db->get('cs',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('cs')->num_rows();
	}
    
    function get_data($table){

        return $this->db->get($table);
    }

     function get_detail($id_fkpsk = NULL){
		
		$query = $this->db->get_where('fkpsk', array('id_fkpsk' => $id_fkpsk))->row();
		return $query;
 
	}
    
}