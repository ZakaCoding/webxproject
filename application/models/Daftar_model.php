<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class daftar_model extends CI_Model {
	function daftar_tentor($data,$table,$data_user){

		$insert = $this->db->insert($table,$data);
		if ($insert) {
			$level = $data_user['level'];
			$password = $data_user['password'];
			$kode = $data['tentor_kode'];
			$username = $data['tentor_email'];

			$insert_user = $this->db->query("INSERT INTO tb_user values ('','$kode','$username','$password','$level')");
		 	echo "<script>alert('Silahkan login dengan Username & password yang telah anda buat'); document.location='".base_url('login')."'</script>";
		 } 
	}	

	function daftar_murid($data,$tabel,$data_user)
	{
		$insert = $this->db->insert($tabel,$data);
		if ($insert) {
			$level = $data_user['level'];
			$password = $data_user['password'];
			$kode = $data['kode_murid'];
			$username = $data['email_murid'];

			$inser_user = $this->db->query("INSERT INTO tb_user VALUES('','$kode','$username','$password','$level')");
			echo "<script>alert('Silahkan login dengan Username & password yang telah anda buat'); document.location='".base_url('login')."'</script>";			
		}
	}
	
}
?>