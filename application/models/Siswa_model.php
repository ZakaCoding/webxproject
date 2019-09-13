<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class siswa_model extends CI_Model {
	
	public function data_siswa($user)
	{
		$query = $this->db->query("select * from tb_user inner join tb_murid on tb_user.`kode` = tb_murid.`kode_murid` AND tb_user.`id_user`= '$user'");
		return $query->result(); 

	}


	public function validasi($table,$data,$where)
	{
		$query = $this->db->update($table,$data,$where);
		if ($query){
			echo 'ok';
		}


	}
}
?>