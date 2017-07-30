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
			if($_SESSION['role'] == 'Perseorangan'){
				$data=array(
				'data_perseorangan' => $this->m_main->getUserPerseoranganInfo($id_tk),
				'data_max_id_keluhan_tk' => $this->m_tk->getIdKeluhanTK(),
				'title' => ucwords($title),
				'page_name' => $page_name
				);
			}
			else if($_SESSION['role'] == 'Perserikatan'){
				$data=array(
				'data_perseorangan' => $this->m_main->getUserPerseoranganInfo($id_tk),
				'data_max_id_keluhan_tk' => $this->m_tk->getIdKeluhanSK(),
				'title' => ucwords($title),
				'page_name' => $page_name
				);
			}
		}
		elseif($page_name=='pemilihan-petugas-pengawas'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'data_keluhan_tk' => $this->m_main->getDataKeluhanTK(),
			'data_karyawan' => $this->m_main->getDataEmployee(),
			'data_beban_kerja' => $this->m_main->getDataWorkload(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='kinerja-pengawas'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'data_work_done' => $this->m_main->getDataWorkDone(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pembuatan-surat-perintah-tugas'){
			$this->load->model('m_main');
			// $id_tk=$_SESSION['user_id'];
			$data=array(
			'permintaan_spt' => $this->m_main->permintaan_spt(),
			'pengaduan_baru' => $this->m_main->permintaan_petugas(),
			'id_spt' => $this->m_main->getSPT_ID(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='status-pengaduan'){
			$this->load->model('m_main');
			$id_tk=$_SESSION['user_id'];
			$data=array(
			'id_spt' => $this->m_main->getSPT_ID(),
			'data_status' => $this->m_main->getStatus($id_tk),
			'data_pengadu' => $this->m_main->getDataPengadu($id_tk),
			'title' => ucwords("beranda"),
			'page_name' => "beranda"
			);
		}
		elseif($page_name=='status-pengaduan-serikat-pekerja'){
			$this->load->model('m_main');
			$id_tk=$_SESSION['user_id'];
			$data=array(
			'id_spt' => $this->m_main->getSPT_ID(),
			'data_status' => $this->m_main->getStatus($id_tk),
			'data_pengadu' => $this->m_main->getDataPengadu($id_tk),
			'title' => ucwords("beranda"),
			'page_name' => "beranda"
			);
		}
		elseif($page_name=='daftar-pengaduan'){
			$this->load->model('m_main');
			$id_karyawan=$_SESSION['nik'];
			$data=array(
			'spt_list' => $this->m_main->getSPT_List($id_karyawan),
			'spt_baru' => $this->m_main->getSPT_List_count($id_karyawan),
			'pengaduan_baru' => $this->m_main->permintaan_petugas(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='laporan-kejadian'){
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
		elseif($page_name=='hasil-temuan'){
			$this->load->model('m_main');
			$id_spt=$_GET['id_spt'];
			$data = array();
			$data['spt_list'] = $this->m_main->getDataTemuan($id_spt);
			$id_pasal = $this->m_main->getIDPasal($id_spt);
			// $data['id_pasal'] = $this->m_main->getIDPasal($id_spt);
			// var_dump($id_pasal);die();
			$data['pasal'] = $this->m_main->getSelectedPasal($id_pasal);
			$data['title'] = ucwords($title);
			$data['page_name'] = $page_name;
			// $data=array(
			// 'spt_list' => $this->m_main->getDataTemuan($id_spt),
			// 'pasal' => $this->m_main->getSelectedPasal($id_spt),
			// 'title' => ucwords($title),
			// 'page_name' => $page_name
			// );
		}
		elseif($page_name=='master-pasal'){
			$this->load->model('m_main');
			// $id_spt=$_GET['id_spt'];
			$data=array(
			// 'spt_list' => $this->m_main->getDataTemuan($id_spt),
			'pasal' => $this->m_main->getDataPasal(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='pengguna'){
			$this->load->model('m_main');
			// $id_spt=$_GET['id_spt'];
			$data=array(
			'last_id_kabid' => $this->m_main->getLastIDKabid(),
			'pengguna' => $this->m_main->getDataPengguna(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='data-pengaduan'){
			$this->load->model('m_main');
			// $id_spt=$_GET['id_spt'];
			$data=array(
			'spt_list' => $this->m_main->getSPT_List_all(),
			'pengaduan_selesai' => $this->m_main->pengaduanSelesai(),
			'pengaduan_belum_selesai' => $this->m_main->pengaduanBelumSelesai(),
			'permintaan_petugas' => $this->m_main->permintaan_petugas(),
			'total_pengaduan' => $this->m_main->total_pengaduan(),
			// 'pasal' => $this->m_main->getDataPasal(),
			'title' => ucwords($title),
			'page_name' => $page_name
			);
		}
		elseif($page_name=='laporan-bulanan'){
			$this->load->model('m_main');
			
			$data=array();
			if(isset($_GET['tgl_awal']) && $_GET['tgl_awal']!=''){
				$tgl_awal=date('Y-m-d H:i:s',strtotime($_GET['tgl_awal']));
				$tgl_akhir=date('Y-m-d H:i:s', strtotime($_GET['tgl_akhir']));
				$jenis_pelanggaran=$_GET['jenis_pelanggaran'];
				$data=array(
				'kasus_masuk' => $this->m_main->kasus_masuk_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kasus_masuk_serikat' => $this->m_main->kasus_masuk_serikat_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kasus_selesai' => $this->m_main->kasus_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kasus_serikat_selesai' => $this->m_main->kasus_serikat_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kasus_tidak_selesai' => $this->m_main->kasus_tidak_selesai($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kasus_serikat_tidak_selesai' => $this->m_main->kasus_serikat_tidak_selesai($tgl_awal,$tgl_akhir,$jenis_pelanggaran),
				'kecenderungan_perorangan' => $this->m_main->kecenderungan_perorangan_p($tgl_awal,$tgl_akhir),
				'kecenderungan_serikat' => $this->m_main->kecenderungan_serikat_p($tgl_awal,$tgl_akhir),
				// 'pasal' => $this->m_main->getDataPasal(),
				'title' => ucwords($title),
				'page_name' => $page_name
				);
			}
			else{
				$data=array(
				'kasus_masuk' => $this->m_main->kasus_masuk(),
				'kasus_masuk_serikat' => $this->m_main->kasus_masuk_serikat(),
				'kasus_selesai' => $this->m_main->kasus_selesai(),
				'kasus_serikat_selesai' => $this->m_main->kasus_serikat_selesai(),
				'kasus_tidak_selesai' => $this->m_main->kasus_tidak_selesai(),
				'kasus_serikat_tidak_selesai' => $this->m_main->kasus_serikat_tidak_selesai(),
				'kecenderungan_perorangan' => $this->m_main->kecenderungan_perorangan(),
				'kecenderungan_serikat' => $this->m_main->kecenderungan_serikat(),
				// 'pasal' => $this->m_main->getDataPasal(),
				'title' => ucwords($title),
				'page_name' => $page_name
				);
			}
			
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
	public function pengaduan2(){
		$this->load->model('m_tk');
		$this->m_tk->insertPengaduan2();
		redirect('main/index/pengaduan-tenaga-kerja?success');
	}

}
