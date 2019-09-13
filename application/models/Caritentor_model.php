<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class caritentor_model extends CI_Model {
	function caritentor($matpel){
		$query = $this->db->query("SELECT t.tentor_foto AS foto, 
									t.tentor_bintang AS bintang, 
									t.tentor_almt_tinggal AS alamat, 
									t.tentor_nama_lengkap AS nama_tentor, 
									m.nama_matpel AS matpel, 
									t.tentor_kode AS kode_t, 
									m.kode_matpel AS kode_m 
									FROM tb_tentor t, tb_matpel m, tb_tentor_matpel tm 
									WHERE t.tentor_kode = tm.kode_tentor 
									AND m.kode_matpel = tm.kode_matpel 
									AND m.nama_matpel = '$matpel'");
		return $query;
	}
}
?>