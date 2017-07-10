<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Main extends CI_Controller {

	public function index($page_name = 'home')
	{
				//$page_en = 'en/'.$page;
		$title= str_replace("-"," ",$page_name);
		$id_tk=$this->input->get('id');
		if($page_name=='edit-pengadu'){
			$this->load->model('m_main');
			$data=array(
			'data_perseorangan' => $this->m_main->getUserPerseoranganInfo($id_tk),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pengaduan-tenaga-kerja'){
			$this->load->model('m_main');
			$this->load->model('m_tk');
			$id_tk=$_SESSION['user_id'];
			$data=array(
			'data_perseorangan' => $this->m_main->getUserPerseoranganInfo($id_tk),
			'data_max_id_keluhan_tk' => $this->m_tk->getIdKeluhanTK(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pemilihan-petugas-pengawas'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'data_keluhan_tk' => $this->m_main->getDataKeluhanTK(),
			'data_karyawan' => $this->m_main->getDataEmployee(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pembuatan-surat-perintah-tugas'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'id_spt' => $this->m_main->getSPT_ID(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='status-pengaduan'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'id_spt' => $this->m_main->getSPT_ID(),
			'title' => ucwords("beranda"),
			'page_name' => "beranda"
			);
		}
		elseif($page_name=='daftar-pengaduan'){
			$this->load->model('m_main');
			$id_karyawan=$_SESSION['nik'];
			$data=array(
			'spt_list' => $this->m_main->getSPT_List($id_karyawan),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pemeriksaan-lapangan'){
			$this->load->model('m_main');
			$id_tk=$_GET['id_tk'];
			$data=array(
			'spt_list' => $this->m_main->getDataPengadu($id_tk),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		

		$this->load->view('default/header',$data);
		//$this->load->view('default/menu', $data);
		$this->load->view('pages/'.$page_name,$data);
		$this->load->view('default/footer',$data);
	}

	public function pengaduan1(){
		$this->load->model('m_tk');
		$this->m_tk->insertPengaduan1();
		redirect('main/index/pengaduan-tenaga-kerja?success');
	}

}
