<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth_Model extends CI_Model {
	function cek_login($table,$where){	
		return $this->db->get_where($table,$where);
	}	
}
?>