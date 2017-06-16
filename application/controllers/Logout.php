<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Logout extends CI_Controller {

	public function index()
	{
				//$page_en = 'en/'.$page;
		//$this->load->view('default/header_login');
		//$this->load->view('default/menu', $data);
		//$this->load->view('pages/login');
		//$this->load->view('default/footer');
		$this->session->sess_destroy();
		redirect('login');
	}

}
