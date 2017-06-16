<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Redirect extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_main');
		//$this->load->model('m_master');
		$this->load->library('session');
	}

	public function index()
	{
			$email = $this->input->post('username');
			$pass = $this->input->post('password');
			$cek=$this->m_main->doLogin($email,$pass);
			
			// Cek Validitas User
			if($cek!=0){ // OK
				// Cek Jenis User
				$user_type = $this->m_main->getUserType($email);
				if($user_type==="perserikatan"){
					// Get Data Serikat Kerja
					$user_info=$this->m_main->getUserInfo($email);
					foreach ($user_info as $key ) {
						$nama_user=$key->NAMA_SERIKAT;
						$user_id=$key->ID_TK;
					}
					$data=array(
						'nama_user'=>$nama_user,
						'role'=> ucwords($user_type),
						'user_id'=> $user_id
					);
					$x=$this->session->set_userdata($data);			
					redirect('main/index/pengaduan-serikat-pekerja',$x);
				}
				elseif($user_type==="perseorangan"){
					// Get Data Tenaga Kerja
					$user_info=$this->m_main->getUserInfo($email);
					foreach ($user_info as $key ) {
						$nama_user=$key->NAMA_TK;
						$nik=$key->NO_KTP;
						$user_id=$key->ID_TK;
					}
					$data=array(
						'nama_user'=>$nama_user,
						'nik'=>$nik,
						'role'=> ucwords($user_type),
						'user_id'=> $user_id
					);
					$x=$this->session->set_userdata($data);			
					redirect('main/index/edit-pengadu?id='.$user_id,$x);
				}
				else{
					redirect("login/error");
				}
				
				
			}
			else{ // NOT OK
				// Cek Data Petugas Internal
				$cek_internal = $this->m_main->employeeCheck($email);
				if(strlen($cek_internal) > 0){
					$user_type = "petugas";
					// Get Data Petugas Internal
					$user_info=$this->m_main->getDataPerEmployee($email);
					foreach ($user_info as $key ) {
						$nama_user=$key->NAMA_KARYAWAN;
						$nik=$key->ID_KARYAWAN;
						$user_id=$key->IDPENGGUNA;
					}
					$data=array(
						'nama_user'=>$nama_user,
						'nik'=>$nik,
						'role'=> ucwords($user_type),
						'user_id'=> $user_id
					);
					$x=$this->session->set_userdata($data);			
					redirect('main/index/pembuatan-surat-perintah-tugas',$x);
				}
				else{
					redirect("login/error");	
				}
			}
			
			// 	if($cek == 'Editor'){
			// 		$x=$this->session->set_userdata($data);			
			// 		redirect('redaksi/home',$x);
			// 	}
			// 	elseif($cek == 'Reporter'){
			// 		$x=$this->session->set_userdata($data);			
			// 		redirect('reporter/naskah',$x);
			// 	}
			// 	elseif($cek == 'Kabid'){
			// 		$x=$this->session->set_userdata($data);			
			// 		redirect('kabid/evaluasi',$x);
			// 	}
			// 	else{
			// 		redirect('login');
					
			// 		//echo "login gagal";
			// 	}

				// // TEMPORARY LOGIN METHOD
				// if($user_id=='supriyadi'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Tenaga Kerja',
				// 	'nama_user'=> 'Supriyadi'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pengaduan-tenaga-kerja',$x);
				// }
				// elseif($user_id=='setyadi'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Tenaga Kerja',
				// 	'nama_user'=> 'Setyadi'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pengaduan-tenaga-kerja',$x);
				// }
				// elseif($user_id=='ekaputri'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Tenaga Kerja',
				// 	'nama_user'=> 'Eka Putri'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pengaduan-tenaga-kerja',$x);
				// }
				// elseif($user_id=='admin'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Admin',
				// 	'nama_user'=> 'Venny'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pengguna',$x);
				// }
				// elseif($user_id=='spsi'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Serikat Pekerja',
				// 	'nama_user'=> 'SPSI'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pengaduan-serikat-pekerja',$x);
				// }
				// elseif($user_id=='pengawas'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Pengawas',
				// 	'nama_user'=> 'Sumiarso'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pemeriksaan-lapangan',$x);
				// }
				// elseif($user_id=='kabid_pengawas'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Kabid Pengawas',
				// 	'nama_user'=> 'Sarah Prihartini'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pemilihan-petugas-pengawas',$x);
				// }
				// elseif($user_id=='admin_pengawas'&&$pass=='123qwe'){
				// 	$data=array(
				// 	'user_id'=>$this->input->post('username'),
				// 	'role'=> 'Admin Pengawas',
				// 	'nama_user'=> 'Maya Septiana'
				// 	);
				// 	$x=$this->session->set_userdata($data);			
				// 	redirect('main/index/pembuatan-surat-perintah-tugas',$x);
				// }
				// else{
				// 	redirect('login');
					
				// 	//echo "login gagal";
				// }

		// $this->load->view('default/header_login');
		// $this->load->view('default/menu', $data);
		// $this->load->view('pages/login');
		// $this->load->view('default/footer');
	}

}
