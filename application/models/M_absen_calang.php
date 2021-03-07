<?php

class M_absen_calang extends CI_Model 
{

	function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
       $this->db->join('proker', 'proker.id_proker = absensi_calang.id_proker', 'left');
     return $this->db->get('absensi_calang')->result();
  }
  
    public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('absensi_calang');

    return $query->num_rows();
  }

   function get_by_id($kondisi)
  {
      $this->db->from('absensi_calang');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

	public function lihat_data()
	{
        return $this->db->join('proker', 'proker.id_proker = absensi_calang.id_proker', 'left')
        ->get('absensi_calang')->result();
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
}
