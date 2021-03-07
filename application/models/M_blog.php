<?php
class M_blog extends CI_Model{

	//fungsi untuk menampilkan data post berdasarkan slug
	function get_post_by_slug($slug){ 
		$hsl=$this->db->query("SELECT * FROM artikel WHERE artikel_slug='$slug'");
		return $hsl;
	}
	//funsgi untuk menampilkan semua post pada list
	function get_all_post(){ 
		$hsl=$this->db->query("SELECT * FROM artikel WHERE artikel_status='publish' ORDER BY artikel_id DESC LIMIT 3");
		return $hsl;
	}
}