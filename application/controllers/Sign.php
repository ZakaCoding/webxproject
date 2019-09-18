<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller
{
    public function index()
    {
        echo "Hello world";
    }
    public function Login()
    {
        $this->load->view('components/css');
        $this->load->view('pages/v_sign');
        $this->load->view('components/js');
    }
} 
