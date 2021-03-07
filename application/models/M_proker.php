<?php 

class M_proker extends CI_Model{
 function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('proker');
      $query = $this->db->get();
      return $query->result();
  }
  
    public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('proker');

    return $query->num_rows();
  }

   function get_by_id($kondisi)
  {
      $this->db->from('proker');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

//model baru
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
  
  function tampil_data(){
		return $this->db->get('proker');
    }

    // kategori anjim
        
    function get_data($table){

        return $this->db->get($table);
    }

    function insert_data($data,$table){
		$this->db->insert($table,$data);
    }

    function insert($data)
  {
      $this->db->insert('artikel',$data);
      return TRUE;
  }

    function edit($where,$table){ 
    return $this->db->get_where($table,$where); 
    }

    // fungsi untuk menghapus data dari database
    function delete_data($where,$table){

    $this->db->delete($table,$where); 
    }
     function update($data,$kondisi)
      {
          $this->db->update('artikel',$data,$kondisi);
            return TRUE;
    }





 
}

