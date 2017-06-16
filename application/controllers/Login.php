<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Login extends CI_Controller {

	public function index()
	{
				//$page_en = 'en/'.$page;
		$this->load->view('default/header_login');
		//$this->load->view('default/menu', $data);
		$this->load->view('pages/login');
		$this->load->view('default/footer');
	}

	public function error()
	{
				//$page_en = 'en/'.$page;
		$this->load->view('default/header_login');
		$data_error = array('msg' => 'Invalid Email or Password' );
		//$this->load->view('default/menu', $data);
		$this->load->view('pages/login',$data_error);
		$this->load->view('default/footer');
	}

}
