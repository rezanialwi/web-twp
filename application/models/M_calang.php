<?php 

class M_calang extends CI_Model{
 function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      if ($cari != NULL) {
          $this->db->or_like($cari);
      }
      $this->db->from('tb_pendaftaran');
      $query = $this->db->get();
      return $query->result();
  }
  
    public function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('tb_pendaftaran');

    return $query->num_rows();
  }

   function get_by_id($kondisi)
  {
      $this->db->from('tb_pendaftaran');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

 function insert($data)
  {
      $this->db->insert('tb_pendaftaran',$data);
      return TRUE;
  }
   function update($data,$kondisi)
  {
      $this->db->update('tb_pendaftaran',$data,$kondisi);
      return TRUE;
  }

}