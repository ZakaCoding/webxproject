<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_awal extends CI_Controller {
	
	public function index()
	{
		$this->load->view('components/css');
		$this->load->view('components/navbar');
		$this->load->view('pages/v_halaman_awal');
		$this->load->view('components/footer');
		$this->load->view('components/js');
	}

	public function login()
	{
		echo "Hello World";
		// $this->load->view('pages/v_sign.php');
	}


}
