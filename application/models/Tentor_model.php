<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tentor_model extends CI_Model {
	
	public function data_tentor($user)
	{
		$query = $this->db->query("select * from tb_user inner join tb_tentor on tb_user.`kode` = tb_tentor.`tentor_kode` AND tb_user.`id_user`= '$user'");
		return $query->result(); 

	}

	public function matpel_tentor($kd)
	{
		$query = $this->db->query("SELECT nama_matpel FROM tb_matpel WHERE kode_matpel = (SELECT kode_matpel FROM tb_tentor_matpel WHERE kode_tentor = '$kd')");
		return $query->result();
	}

	public function data_matpel()
	{
		return $this->db->query("select * from  tb_matpel");
	}

	public function pilih_matpel($kd_mp,$kd_t)
	{
		return $this->db->query("INSERT INTO tb_tentor_matpel VALUES ('','$kd_mp','$kd_t')");
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