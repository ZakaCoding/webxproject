<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class adm_model extends CI_Model {
	function tampil_pendaftaran(){		
		return $this->db->query("select * from tb_tentor where tentor_status='Sudah Validasi'");
	}
	public function matpel_tentor($kd)
	{
		$query = $this->db->query("SELECT nama_matpel FROM tb_matpel WHERE kode_matpel = (SELECT kode_matpel FROM tb_tentor_matpel WHERE kode_tentor = '$kd')");
		return $query->result();
	}
	function konfirmasi($id_tentor)
	{
		$this->db->query("update tb_tentor set tentor_status = 'dikonfirmasi' where id_tentor = '$id_tentor'");
	}
	function pilihsemuatentor($id_tentor)
	{
		return $this->db->query("select * from  tb_tentor where id_tentor =$id_tentor")->result();
	}
	function pilihsiswa($id_siswa)
	{
		return $this->db->query("select * from  tb_murid where id_murid =$id_siswa")->result();
	}
	function beribintang($id_tentor,$pilihan)
	{
		return $this->db->query("update tb_tentor set tentor_bintang = '$pilihan' where id_tentor = '$id_tentor'");
	}
	function data_tentor()
	{
		return $this->db->query("select * from  tb_tentor");
	}
	function data_murid()
	{
		return $this->db->query("select * from  tb_murid");
	}
	function data_matpel()
	{
		return $this->db->query("select * from  tb_matpel");
	}
	function tambah_matpel($data)
	{
		return $this->db->insert('tb_matpel',$data);
	}
	function get_promo()
	{
		return $this->db->get('tb_promo');
	}
	function get_produk()
	{
		return $this->db->get('tb_produk');
	}
	function hapus_produk($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function tambah_produk($data)
	{
		return $this->db->insert('tb_produk',$data);
	}
	function update_promo($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>