<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Pengaduan extends CI_Controller {

	public function index()
	{
				//$page_en = 'en/'.$page;
		$this->load->view('default/header');
		//$this->load->view('default/menu', $sdata);
		$this->load->view('pages/registrasi');
		$this->load->view('default/footer');
	}
    function hapusTemuan($id_hasil_temuan){
        $id_spt = $this->input->get("id_spt");
        $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
        $status = $this->input->get("status");
        $this->load->model('m_main');
        $this->m_main->deleteTemuan($id_hasil_temuan);
        redirect('main/index/hasil-temuan?id_spt='.$id_spt.'&id_jenis_keluhan='.$id_jenis_keluhan.'&status='.$status);
    }
    function konfirmasi_datang(){
        $id_spt = $this->input->get("key");
        $this->load->model("m_tk");
        $status = $this->m_tk->konfirmasi_kedatangan($id_spt);
        if($status > 0){
            redirect('registrasi/ConfirmSuccess');
        }
        else{
            redirect('registrasi/ConfirmFail');
        }
    }
    function insert_pengguna(){
        $this->load->model('m_main');
        $this->m_main->insert_pengguna_new();
        redirect('main/index/pengguna');
    }
    function master_pasal_new(){
        $pasal=$this->input->post("pasal");
        $jenis_pelanggaran=$this->input->post("jenis_pelanggaran");
        $this->load->model('m_main');
        $this->m_main->insert_new_pasal($pasal,$jenis_pelanggaran);
        redirect('main/index/master-pasal');
    }
    function edit_pasal(){
        $id_pasal=$this->input->post("id_pasal_edit");
        $pasal=$this->input->post("pasal_edit");
        $jenis_pelanggaran=$this->input->post("jenis_pelanggaran_edit");
        $this->load->model('m_main');
        $this->m_main->editPasal($id_pasal,$pasal,$jenis_pelanggaran);
        redirect('main/index/master-pasal');
    }
    function close_case(){
        $id_jenis_keluhan=$this->input->post("id_jenis_keluhan");
        $this->load->model('m_main');
        $this->m_main->closes_case($id_jenis_keluhan);
        redirect('main/index/status-pengaduan');
    }
    function tambah_pasal(){
        $id_spt=$this->input->post("id_spt");
        $id_jenis_keluhan=$this->input->post("id_jenis_keluhan");
        $status=$this->input->post("status");
        $this->load->model('m_main');
        $this->m_main->insert_hasil_temuan($id_spt,$id_jenis_keluhan,$status);
        redirect('main/index/hasil-temuan?id_spt='.$id_spt.'&id_jenis_keluhan='.$id_jenis_keluhan.'&status='.$status);
    }
    function cetak_laporan_kinerja(){
        $this->load->model('m_main');
        $data_work_done = $this->m_main->getDataWorkDone();
        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Laporan Kinerja Pengawas');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:underline">LAPORAN KINERJA PENGAWAS</span></div>';
    if(isset($_GET['tgl_awal']) && $_GET['tgl_awal']!=''){
        $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">JENIS '.strtoupper($_GET['jenis_pelanggaran']).' PERIODE '.date('d-m-Y',strtotime($_GET['tgl_awal'])).' s/d '.date('d-m-Y',strtotime($_GET['tgl_akhir'])).'</span></div>';
    }
    
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">JUMLAH PENYELESAIAN KASUS</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="20px"></td>';

    $html .= '<td width="250px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="40px"><strong>No</strong></td>';
    $html .= '<td width="210px"><strong>Nama Karyawan</strong></td>';
    $html .= '<td width="190px"><strong>Golongan</strong></td>';
    $html .= '<td width="150px"><strong>Jumlah Kasus</strong></td>';
    $html .= '</tr>';
    $count = 1;
    foreach ($data_work_done as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$count.'</td>';
        $html .= '<td style="text-align:left;">&nbsp;'.$key->NAMA_KARYAWAN.'</td>';
        $html .= '<td style="text-align:left;">&nbsp;'.$key->GOLONGAN.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
        $count++;
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="250px">';
    
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    

    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('Laporan-Kinerja-Pengawas-'.date('Y-m-d.H-i-s').'.pdf', 'I');
    }
    function laporan_pdf(){
        $this->load->model('m_main');
        $jenis_pelanggaran = $this->input->get("jenis_pelanggaran");
        $tgl_awal = date('Y-m-d H:i:s', strtotime($this->input->get("tgl_awal")));
        $tgl_akhir = date('Y-m-d H:i:s', strtotime($this->input->get("tgl_akhir")));
        // $kasus_masuk = '';
        if(isset($_GET['tgl_awal']) && $_GET['tgl_awal']!=''){
            $kasus_masuk = $this->m_main->kasus_masuk_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kasus_masuk_serikat = $this->m_main->kasus_masuk_serikat_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kasus_selesai = $this->m_main->kasus_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kasus_serikat_selesai = $this->m_main->kasus_serikat_selesai_p($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kasus_tidak_selesai = $this->m_main->kasus_tidak_selesai($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kasus_serikat_tidak_selesai = $this->m_main->kasus_serikat_tidak_selesai($tgl_awal,$tgl_akhir,$jenis_pelanggaran);
            $kecenderungan_perorangan = $this->m_main->kecenderungan_perorangan_p($tgl_awal,$tgl_akhir);
            $kecenderungan_serikat = $this->m_main->kecenderungan_serikat_p($tgl_awal,$tgl_akhir);
        }
        else{
            $kasus_masuk = $this->m_main->kasus_masuk();
            $kasus_masuk_serikat = $this->m_main->kasus_masuk_serikat();
            $kasus_selesai = $this->m_main->kasus_selesai();
            $kasus_serikat_selesai = $this->m_main->kasus_serikat_selesai();
            $kasus_tidak_selesai = $this->m_main->kasus_tidak_selesai();
            $kasus_serikat_tidak_selesai = $this->m_main->kasus_serikat_tidak_selesai();
            $kecenderungan_perorangan = $this->m_main->kecenderungan_perorangan();
            $kecenderungan_serikat = $this->m_main->kecenderungan_serikat();
        }
        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Laporan Bulanan');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:underline">LAPORAN BULANAN PERORANGAN</span></div>';
    if(isset($_GET['tgl_awal']) && $_GET['tgl_awal']!=''){
        $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">JENIS '.strtoupper($_GET['jenis_pelanggaran']).' PERIODE '.date('d-m-Y',strtotime($_GET['tgl_awal'])).' s/d '.date('d-m-Y',strtotime($_GET['tgl_akhir'])).'</span></div>';
    }
    
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">1. JUMLAH KASUS MASUK</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px"></td>';

    $html .= '<td width="250px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="100px"><strong>Bulan</strong></td>';
    $html .= '<td width="150px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_masuk as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="250px">';
    
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">2. KASUS SELESAI & TIDAK SELESAI</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="100px"></td>';

    $html .= '<td width="160px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td colspan="2">Kasus Selesai</td>';
    $html .= '</tr>';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="80px"><strong>Bulan</strong></td>';
    $html .= '<td width="80px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_selesai as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="250px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td colspan="2">Kasus Tidak Selesai</td>';
    $html .= '</tr>';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="100px"><strong>Bulan</strong></td>';
    $html .= '<td width="150px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_tidak_selesai as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">3. KECENDERUNGAN KASUS</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px"></td>';

    $html .= '<td width="260px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="180px"><strong>Jenis Pelanggaran</strong></td>';
    $html .= '<td width="80px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kecenderungan_perorangan as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->jenis.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="260px">';
    
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    // Page #2

    $html .= '<br pagebreak="true"/>';
    
    // Section 1
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:underline">LAPORAN BULANAN PERSERIKATAN</span></div>';
    if(isset($_GET['tgl_awal']) && $_GET['tgl_awal']!=''){
        $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">JENIS '.strtoupper($_GET['jenis_pelanggaran']).' PERIODE '.date('d-m-Y',strtotime($_GET['tgl_awal'])).' s/d '.date('d-m-Y',strtotime($_GET['tgl_akhir'])).'</span></div>';
    }
    
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">1. JUMLAH KASUS MASUK</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px"></td>';

    $html .= '<td width="250px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="100px"><strong>Bulan</strong></td>';
    $html .= '<td width="150px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_masuk_serikat as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="250px">';
    
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">2. KASUS SELESAI & TIDAK SELESAI</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="100px"></td>';

    $html .= '<td width="160px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td colspan="2">Kasus Selesai</td>';
    $html .= '</tr>';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="80px"><strong>Bulan</strong></td>';
    $html .= '<td width="80px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_serikat_selesai as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="250px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td colspan="2">Kasus Tidak Selesai</td>';
    $html .= '</tr>';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="100px"><strong>Bulan</strong></td>';
    $html .= '<td width="150px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kasus_serikat_tidak_selesai as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->Bulan.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">3. KECENDERUNGAN KASUS</span></div>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px"></td>';

    $html .= '<td width="260px">';
    $html .= '<table border="1">';
    $html .= '<tr style="text-align:center;">';
    $html .= '<td width="180px"><strong>Jenis Pelanggaran</strong></td>';
    $html .= '<td width="80px"><strong>Jumlah</strong></td>';
    $html .= '</tr>';
    foreach ($kecenderungan_serikat as $key) {
        $html .= '<tr style="text-align:center">';
        $html .= '<td>'.$key->jenis.'</td>';
        $html .= '<td>'.$key->jumlah.'</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="10px">&nbsp;</td>';
    $html .= '<td width="260px">';
    
    $html .= '</td>';

    $html .= '<td width="20px"></td>';
    $html .= '</tr>';
    $html .= '</table>';

    

    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('Laporan-Bulanan-'.date('Y-m-d.H-i-s').'.pdf', 'I');
    }
    function buat_laporan_kejadian(){
        $this->load->model('m_main');
        $id_spt = $this->input->get("id_spt");
        $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
        $no_spt = $this->input->get("no_spt");
        $nota_sebelum = 3;
        $nota_ke = 4;
        $data_nota4 = $this->m_main->cekNotaPemeriksaan1($id_spt,$nota_ke);
        if($data_nota4 < 1){
            $this->m_main->insert_nota_pemeriksaan($id_spt,$nota_ke,$id_jenis_keluhan);
        }
        $data_nota1 = $this->m_main->getNotaPemeriksaan1($id_jenis_keluhan);
        $data_nota2 = $this->m_main->getNotaPemeriksaan2($id_spt);
        $data_nota3 = $this->m_main->getNotaPemeriksaan3($id_spt);
        $data_nota_laporan_kejadian = $this->m_main->getNotaLaporanKejadian($id_spt);
        $data_nota_sebelum = $this->m_main->getNotaSebelum($id_spt,$nota_sebelum);
        
        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Laporan Kejadian');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:underline">LAPORAN KEJADIAN</span></div>';
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: normal;text-decoration:none">No. LK xx/VII/2017 PPNS-NAKER</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1.5"><span style="font-weight: normal;text-decoration:none">PELAPOR</span></div>';
    foreach ($data_nota1 as $key) {
        
    
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="100px">1. Nama</td>';
    $html .= '<td width="10px">:</td>';
    if($key->NAMA_TK != ''){
        $html .= '<td width="150px">'.$key->NAMA_TK.'</td>';
    }
    elseif($key->NAMA_SERIKAT != ''){
        $html .= '<td width="150px">'.$key->NAMA_SERIKAT.'</td>';
    }
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">2. Pekerjaan</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">'.$key->PEKERJAAN.'</td>';
    $html .= '</tr>';
    $html .= '</table>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1.5"><span style="font-weight: normal;text-decoration:none">PERISTIWA YANG TERJADI</span></div>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="180px">1. Waktu Kejadian</td>';
    $html .= '<td width="10px">:</td>';
    if($key->NAMA_TK != ''){
        $html .= '<td width="440px">'.date('d F Y', strtotime($key->TANGGAL_MASUK)).'</td>';
    }
    elseif($key->NAMA_SERIKAT != ''){
        $html .= '<td width="440px">'.date('d F Y', strtotime($key->TGL_MASUK)).'</td>';
    }
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="180px">2. Tempat Kejadian</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="440px">'.$key->NAMA_PERUSAHAAN.'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="180px">3. Yang Terjadi</td>';
    $html .= '<td width="10px">:</td>';
    if($key->NAMA_TK != ''){
        $html .= '<td width="440px">'.$key->ISI_KELUHAN.'</td>';    
    }
    elseif($key->NAMA_SERIKAT != ''){
        $html .= '<td width="440px">'.$key->ISI_KELUHAN_SERIKAT.'</td>';
    }
    $html .= '</tr>';
    $html .= '</table>';
    }

    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px" colspan="3">4. Modus Operandi</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="440px"></td>';
    $html .= '</tr>';
    $letter = 'a';
    foreach ($data_nota3 as $key3) {
        $html .= '<tr>';
        $html .= '<td width="15px">&nbsp;</td>';
        $html .= '<td width="20px">'.$letter.'. </td>';
        $html .= '<td width="590px">Pelanggaran '.$key3->KETERANGAN_PASAL.' '.$key3->ISI_HASIL_TEMUAN.'</td>';
        $html .= '</tr>';
        $letter++;
    }
    
    $html .= '</table>';
    
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px" colspan="3">5. Barang Bukti</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="440px"></td>';
    $html .= '</tr>';
    $letter = 'a';
    $nota1 = 'Nota Pemeriksaan';
    $nota2 = 'Nota Peringatan II';
    $nota3 = 'Nota Peringatan III';
    foreach ($data_nota_laporan_kejadian as $key2) {
        $html .= '<tr>';
        $html .= '<td width="15px">&nbsp;</td>';
        $html .= '<td width="20px">'.$letter.'. </td>';
        if($key2->ISI_NOTA_PEMERIKSAAN == 1) {$html .= '<td width="590px">'.$nota1.' No. '.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).' tanggal '.date('d F Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).'</td>';}
        elseif ($key2->ISI_NOTA_PEMERIKSAAN == 2) {$html .= '<td width="590px">'.$nota2.' No. '.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).' tanggal '.date('d F Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).'</td>';}
        elseif ($key2->ISI_NOTA_PEMERIKSAAN == 3) {$html .= '<td width="590px">'.$nota3.' No. '.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).' tanggal '.date('d F Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).'</td>';}
        $html .= '</tr>';
        $letter++;
    }
    
    $html .= '</table>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px" colspan="3">6. Uraian Singkat</td>';
    $html .= '<td width="10px">:</td>';
    foreach ($data_nota2 as $key2) {
        $html .= '<td width="440px">'.$key2->PEMERIKSAAN.'</td>';
    }
    $html .= '</tr>';
    $html .= '</table>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="180px" colspan="3">7. TIndakan yang diambil</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="440px">Akan ditindaklanjuti ke Berita Acara Pemeriksaan</td>';
    $html .= '</tr>';
    $html .= '</table>';
    

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="50px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Kepala Dinas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">Sulton Prakasa</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Pembina Utama Muda</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="200px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Pegawai Pengawas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Yang memeriksa</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">'.$_SESSION["nama_user"].'</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Nip. '.$_SESSION["nik"].'</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('Laporan-Kejadian-'.$nomor_spt.'.pdf', 'I');
    }
    function cetak_nota_3(){
        $this->load->model('m_main');
        $id_spt = $this->input->get("id_spt");
        $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
        $no_spt = $this->input->get("no_spt");
        $nota_sebelum = 2;
        $nota_ke = 3;
        $id_nota_pemeriksaan = 0;
        $data_nota4 = $this->m_main->cekNotaPemeriksaan1($id_spt,$nota_ke);
        if($data_nota4 < 1){
            $id_nota_pemeriksaan = $this->m_main->insert_nota_pemeriksaan($id_spt,$nota_ke,$id_jenis_keluhan);
        }
        $data_nota1 = $this->m_main->getNotaPemeriksaan1($id_jenis_keluhan);
        $data_nota2 = $this->m_main->getNotaPemeriksaan2($id_spt);
        $data_nota3 = $this->m_main->getNotaPemeriksaan3($id_spt);
        $data_nota_sebelum = $this->m_main->getNotaSebelum($id_spt,$nota_sebelum);
        
        $nomor_spt = $this->m_main->getNomorSPT($id_spt);
        $this->load->helper('path');

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Nota Peringatan III');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:right;border:none;line-height:1px"><span style="font-weight: normal;">Surabaya, '.date('d F Y').'</span></div>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="100px">Nomor</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">'.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y').'</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Kepada :</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Sifat</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Penting</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Yth. Pimpinan Perusahaan</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Lampiran</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">-</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->NAMA_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Hal</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Nota Peringatan III</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->ALAMAT_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 2
    foreach ($data_nota_sebelum as $key2) {
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menindaklanjuti surat kami nomor : '.$no_spt.' tanggal '.date('d F Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).' perihal Nota Peringatan II, ternyata masih ada yang belum Saudara laksanakan / menindaklanjutinya.</p></div>';
    }
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh karena itu sekali lagi kami ingatkan agar Saudara segera menindaklanjuti surat tersebut, dan apabila dalam batas waktu 3 (tiga) hari setelah menerima surat ini  Saudara tetap tidak melaksanakan dan melaporkan pelaksanaannya, maka akan diambil tindakan sesuai dengan ketentuan yang berlaku.</p></div>';
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk menjadi perhatian.</p></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="50px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Kepala Dinas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">Sulton Prakasa</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Pembina Utama Muda</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="200px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Pegawai Pengawas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Yang memeriksa</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">'.$_SESSION["nama_user"].'</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Nip. '.$_SESSION["nik"].'</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');

        $path = set_realpath('uploads/pdf');
        if($data_nota4 < 1){
            $pdf->Output($path.'Nota-Peringatan-III-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'F');
            // EMAIL =========================================================================================================================
            // $email = $this->input->post("username");
            $email = $this->m_main->getEmailPerusahaan($id_jenis_keluhan);

            $config = Array(
                    'protocol' => 'smtp',
                  'smtp_host' => 'ssl://smtp.googlemail.com',
                  'smtp_port' => 465,
                  'smtp_user' => 'cs.aptk@gmail.com', // change it to yours
                  'smtp_pass' => 'aplikasipengaduantenagakerja', // change it to yours
                  'mailtype' => 'html',
                  'charset' => 'iso-8859-1',
                  'wordwrap' => TRUE
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            // Set to, from, message, etc.
            $this->email->from('cs.aptk@gmail.com', 'Venny Indrawati');
            $this->email->to($email); 

            $pesan = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
        <!--[if gte mso 9]><xml>
         <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
        </xml><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width">
        <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
        <title>Konfirmasi Akun</title>
        
        
        <style type="text/css" id="media-query">
          body {
      margin: 0;
      padding: 0; }

    table, tr, td {
      vertical-align: top;
      border-collapse: collapse; }

    .ie-browser table, .mso-container table {
      table-layout: fixed; }

    * {
      line-height: inherit; }

    a[x-apple-data-detectors=true] {
      color: inherit !important;
      text-decoration: none !important; }

    [owa] .img-container div, [owa] .img-container button {
      display: block !important; }

    [owa] .fullwidth button {
      width: 100% !important; }

    .ie-browser .col, [owa] .block-grid .col {
      display: table-cell;
      float: none !important;
      vertical-align: top; }

    .ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
      width: 500px !important; }

    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
      line-height: 100%; }

    .ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
      width: 164px !important; }

    .ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
      width: 328px !important; }

    .ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
      width: 250px !important; }

    .ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
      width: 166px !important; }

    .ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
      width: 125px !important; }

    .ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
      width: 100px !important; }

    .ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
      width: 83px !important; }

    .ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
      width: 71px !important; }

    .ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
      width: 62px !important; }

    .ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
      width: 55px !important; }

    .ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
      width: 50px !important; }

    .ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
      width: 45px !important; }

    .ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
      width: 41px !important; }

    @media only screen and (min-width: 520px) {
      .block-grid {
        width: 500px !important; }
      .block-grid .col {
        display: table-cell;
        Float: none !important;
        vertical-align: top; }
        .block-grid .col.num12 {
          width: 500px !important; }
      .block-grid.mixed-two-up .col.num4 {
        width: 164px !important; }
      .block-grid.mixed-two-up .col.num8 {
        width: 328px !important; }
      .block-grid.two-up .col {
        width: 250px !important; }
      .block-grid.three-up .col {
        width: 166px !important; }
      .block-grid.four-up .col {
        width: 125px !important; }
      .block-grid.five-up .col {
        width: 100px !important; }
      .block-grid.six-up .col {
        width: 83px !important; }
      .block-grid.seven-up .col {
        width: 71px !important; }
      .block-grid.eight-up .col {
        width: 62px !important; }
      .block-grid.nine-up .col {
        width: 55px !important; }
      .block-grid.ten-up .col {
        width: 50px !important; }
      .block-grid.eleven-up .col {
        width: 45px !important; }
      .block-grid.twelve-up .col {
        width: 41px !important; } }

    @media (max-width: 520px) {
      .block-grid, .col {
        min-width: 320px !important;
        max-width: 100% !important; }
      .block-grid {
        width: calc(100% - 40px) !important; }
      .col {
        width: 100% !important; }
        .col > div {
          margin: 0 auto; }
      img.fullwidth {
        max-width: 100% !important; } }

        </style>
    </head>
    <!--[if mso]>
    <body class="mso-container" style="background-color:#FFFFFF;">
    <![endif]-->
    <!--[if !mso]><!-->
    <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
    <!--<![endif]-->
      <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

            <div style="background-color:#ffffff;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 30px; padding-bottom: 30px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</strong></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                      
                        <div align="center" class="img-container center" style="padding-bottom:50px;padding-right: 0px;  padding-left: 0px;">
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
      <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank">
        <img class="center" align="center" border="0" src="http://3.bp.blogspot.com/-YJgB7NSrRmA/Ujy40DeBW-I/AAAAAAAAAYM/_i0PH66vKy0/s1600/Surabaya_Logo.svg.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 102px" width="102">
      </a>
    <!--[if mso]></td></tr></table><![endif]-->
    </div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>    <div style="background-color:#61626F;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#61626F;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong style="font-size:19px">Kami mengundang perusahaan anda untuk datang ke Disnaker Surabaya terkait nota peringatan III yang kami kirimkan melalui email ini. Untuk konfirmasi kedatangan, silahkan klik tombol di bawah ini.</strong></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><span style="font-size: 14px; line-height: 21px;"></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        
    <div align="center" class="button-container center" style="Margin-right: 10px;Margin-left: 10px;">
        <div style="line-height:15px;font-size:1px">&nbsp;</div>
      <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank" style="color: #ffffff; text-decoration: none;">
        <!--[if mso]>
          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" style="height:42px; v-text-anchor:middle; width:146px;" arcsize="60%" strokecolor="#C7702E" fillcolor="#C7702E" >
          <w:anchorlock/><center style="color:#ffffff; font-family:Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:16px;">
        <![endif]-->
        <!--[if !mso]><!-->
        <div style="color: #ffffff; background-color: #C7702E; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 126px; width: 25%; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; text-align: center;">
        <!--<![endif]-->
        <div style="background-color:#4584ef;border:1px solid #4564f1;border-radius:5px">
          <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;" mce-data-marked="1">Konfirmasi Kedatangan</span></span>
          </div>
        <!--[if !mso]><!-->
        </div>
        <!--<![endif]-->
        <!--[if mso]>
              </center>
          </v:roundrect>
        <![endif]-->
      </a>
        <div style="line-height:10px;font-size:1px">&nbsp;</div>
    </div>

                      
                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 0px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>    <div style="background-color:#ffffff;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <div></div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      </div>


    </body></html>';

            $this->email->subject('NOTA PERINGATAN III');
            $this->email->message($pesan);
            $this->email->attach($path . 'Nota-Peringatan-III-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf');

            //$result = $this->email->send();
            if($this->email->send())
             {
              // echo 'Email sent.';
            redirect('main/index/daftar-pengaduan');    
             }
             else
            {
             show_error($this->email->print_debugger());  
            }
        }
        else{
            $pdf->Output($path.'Nota-Peringatan-III-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'I');
        }
    }
    function cetak_nota_2(){
        $this->load->model('m_main');
        $id_spt = $this->input->get("id_spt");
        $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
        $no_spt = $this->input->get("no_spt");
        $nota_sebelum = 1;
        $nota_ke = 2;
        $id_nota_pemeriksaan = 0;
        $data_nota4 = $this->m_main->cekNotaPemeriksaan1($id_spt,$nota_ke);
        if($data_nota4 < 1){
            $id_nota_pemeriksaan = $this->m_main->insert_nota_pemeriksaan($id_spt,$nota_ke,$id_jenis_keluhan);
        }
        $data_nota1 = $this->m_main->getNotaPemeriksaan1($id_jenis_keluhan);
        $data_nota2 = $this->m_main->getNotaPemeriksaan2($id_spt);
        $data_nota3 = $this->m_main->getNotaPemeriksaan3($id_spt);
        $data_nota_sebelum = $this->m_main->getNotaSebelum($id_spt,$nota_sebelum);
        
        $nomor_spt = $this->m_main->getNomorSPT($id_spt);
        $this->load->helper('path');

        $this->load->library('Pdf');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Nota Peringatan II');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:right;border:none;line-height:1px"><span style="font-weight: normal;">Surabaya, '.date('d F Y').'</span></div>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="100px">Nomor</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">'.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y').'</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Kepada :</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Sifat</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Penting</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Yth. Pimpinan Perusahaan</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Lampiran</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">-</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->NAMA_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Hal</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Nota Peringatan II</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->ALAMAT_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 2
    foreach ($data_nota_sebelum as $key2) {
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menindaklanjuti surat kami nomor : '.$no_spt.' tanggal '.date('d F Y', strtotime($key2->TGL_NOTA_PEMERIKSAAN)).' perihal Nota Pemeriksaan, ternyata masih ada yang belum Saudara laksanakan / menindaklanjutinya.</p></div>';
    }
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh karena itu sekali lagi kami ingatkan agar Saudara segera menindaklanjuti surat tersebut, dan apabila dalam batas waktu 5 (lima) hari setelah menerima surat ini  Saudara tetap tidak melaksanakan dan melaporkan pelaksanaannya, maka akan diambil tindakan sesuai dengan ketentuan yang berlaku.</p></div>';
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian untuk menjadi perhatian.</p></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="50px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Kepala Dinas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">Sulton Prakasa</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Pembina Utama Muda</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="200px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Pegawai Pengawas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Yang memeriksa</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">'.$_SESSION["nama_user"].'</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Nip. '.$_SESSION["nik"].'</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');

        $path = set_realpath('uploads/pdf');
        if($data_nota4 < 1){
            $pdf->Output($path.'Nota-Peringatan-II-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'F');
            // EMAIL =========================================================================================================================
            // $email = $this->input->post("username");
            $email = $this->m_main->getEmailPerusahaan($id_jenis_keluhan);

            $config = Array(
                    'protocol' => 'smtp',
                  'smtp_host' => 'ssl://smtp.googlemail.com',
                  'smtp_port' => 465,
                  'smtp_user' => 'cs.aptk@gmail.com', // change it to yours
                  'smtp_pass' => 'aplikasipengaduantenagakerja', // change it to yours
                  'mailtype' => 'html',
                  'charset' => 'iso-8859-1',
                  'wordwrap' => TRUE
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            // Set to, from, message, etc.
            $this->email->from('cs.aptk@gmail.com', 'Venny Indrawati');
            $this->email->to($email); 

            $pesan = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
        <!--[if gte mso 9]><xml>
         <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
         </o:OfficeDocumentSettings>
        </xml><![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width">
        <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
        <title>Konfirmasi Akun</title>
        
        
        <style type="text/css" id="media-query">
          body {
      margin: 0;
      padding: 0; }

    table, tr, td {
      vertical-align: top;
      border-collapse: collapse; }

    .ie-browser table, .mso-container table {
      table-layout: fixed; }

    * {
      line-height: inherit; }

    a[x-apple-data-detectors=true] {
      color: inherit !important;
      text-decoration: none !important; }

    [owa] .img-container div, [owa] .img-container button {
      display: block !important; }

    [owa] .fullwidth button {
      width: 100% !important; }

    .ie-browser .col, [owa] .block-grid .col {
      display: table-cell;
      float: none !important;
      vertical-align: top; }

    .ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
      width: 500px !important; }

    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
      line-height: 100%; }

    .ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
      width: 164px !important; }

    .ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
      width: 328px !important; }

    .ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
      width: 250px !important; }

    .ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
      width: 166px !important; }

    .ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
      width: 125px !important; }

    .ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
      width: 100px !important; }

    .ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
      width: 83px !important; }

    .ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
      width: 71px !important; }

    .ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
      width: 62px !important; }

    .ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
      width: 55px !important; }

    .ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
      width: 50px !important; }

    .ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
      width: 45px !important; }

    .ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
      width: 41px !important; }

    @media only screen and (min-width: 520px) {
      .block-grid {
        width: 500px !important; }
      .block-grid .col {
        display: table-cell;
        Float: none !important;
        vertical-align: top; }
        .block-grid .col.num12 {
          width: 500px !important; }
      .block-grid.mixed-two-up .col.num4 {
        width: 164px !important; }
      .block-grid.mixed-two-up .col.num8 {
        width: 328px !important; }
      .block-grid.two-up .col {
        width: 250px !important; }
      .block-grid.three-up .col {
        width: 166px !important; }
      .block-grid.four-up .col {
        width: 125px !important; }
      .block-grid.five-up .col {
        width: 100px !important; }
      .block-grid.six-up .col {
        width: 83px !important; }
      .block-grid.seven-up .col {
        width: 71px !important; }
      .block-grid.eight-up .col {
        width: 62px !important; }
      .block-grid.nine-up .col {
        width: 55px !important; }
      .block-grid.ten-up .col {
        width: 50px !important; }
      .block-grid.eleven-up .col {
        width: 45px !important; }
      .block-grid.twelve-up .col {
        width: 41px !important; } }

    @media (max-width: 520px) {
      .block-grid, .col {
        min-width: 320px !important;
        max-width: 100% !important; }
      .block-grid {
        width: calc(100% - 40px) !important; }
      .col {
        width: 100% !important; }
        .col > div {
          margin: 0 auto; }
      img.fullwidth {
        max-width: 100% !important; } }

        </style>
    </head>
    <!--[if mso]>
    <body class="mso-container" style="background-color:#FFFFFF;">
    <![endif]-->
    <!--[if !mso]><!-->
    <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
    <!--<![endif]-->
      <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

            <div style="background-color:#ffffff;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 30px; padding-bottom: 30px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</strong></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                      
                        <div align="center" class="img-container center" style="padding-bottom:50px;padding-right: 0px;  padding-left: 0px;">
    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
      <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank">
        <img class="center" align="center" border="0" src="http://3.bp.blogspot.com/-YJgB7NSrRmA/Ujy40DeBW-I/AAAAAAAAAYM/_i0PH66vKy0/s1600/Surabaya_Logo.svg.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 102px" width="102">
      </a>
    <!--[if mso]></td></tr></table><![endif]-->
    </div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>    <div style="background-color:#61626F;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#61626F;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong style="font-size:19px">Kami mengundang perusahaan anda untuk datang ke Disnaker Surabaya terkait nota peringatan II yang kami kirimkan melalui email ini. Untuk konfirmasi kedatangan, silahkan klik tombol di bawah ini.</strong></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;"><![endif]-->
    <div style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
        <div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><span style="font-size: 14px; line-height: 21px;"></span></p></div>
    </div>
    <!--[if mso]></td></tr></table><![endif]-->

                      
                      
                        
    <div align="center" class="button-container center" style="Margin-right: 10px;Margin-left: 10px;">
        <div style="line-height:15px;font-size:1px">&nbsp;</div>
      <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank" style="color: #ffffff; text-decoration: none;">
        <!--[if mso]>
          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" style="height:42px; v-text-anchor:middle; width:146px;" arcsize="60%" strokecolor="#C7702E" fillcolor="#C7702E" >
          <w:anchorlock/><center style="color:#ffffff; font-family:Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:16px;">
        <![endif]-->
        <!--[if !mso]><!-->
        <div style="color: #ffffff; background-color: #C7702E; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 126px; width: 25%; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; text-align: center;">
        <!--<![endif]-->
        <div style="background-color:#4584ef;border:1px solid #4564f1;border-radius:5px">
          <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;" mce-data-marked="1">Konfirmasi Kedatangan</span></span>
          </div>
        <!--[if !mso]><!-->
        </div>
        <!--<![endif]-->
        <!--[if mso]>
              </center>
          </v:roundrect>
        <![endif]-->
      </a>
        <div style="line-height:10px;font-size:1px">&nbsp;</div>
    </div>

                      
                      
                        <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
      <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
      <div align="center"><div style="border-top: 0px solid transparent; width:100%;">&nbsp;</div></div>
      <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
    </div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>    <div style="background-color:#ffffff;">
          <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
            <div style="border-collapse: collapse;display: table;width: 100%;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                  <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
                  <div style="background-color: transparent; width: 100% !important;">
                  <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                      
                        <div></div>

                      
                  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                  </div>
                </div>
              <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      </div>


    </body></html>';

            $this->email->subject('NOTA PERINGATAN II');
            $this->email->message($pesan);
            $this->email->attach($path . 'Nota-Peringatan-II-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf');

            //$result = $this->email->send();
            if($this->email->send())
             {
              // echo 'Email sent.';
            redirect('main/index/daftar-pengaduan');    
             }
             else
            {
             show_error($this->email->print_debugger());  
            }
        }
        else{
            $pdf->Output($path.'Nota-Peringatan-II-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'I');
        }

    }
    function cetak_nota_1(){
        $this->load->model('m_main');
        $id_spt = $this->input->get("id_spt");
        $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
        $nota_ke = 1;
        $data_nota4 = $this->m_main->cekNotaPemeriksaan1($id_spt,$nota_ke);
        $id_nota_pemeriksaan = 0;
        if($data_nota4 < $nota_ke){
            $id_nota_pemeriksaan = $this->m_main->insert_nota_pemeriksaan($id_spt,$nota_ke,$id_jenis_keluhan);
        }
        $data_nota1 = $this->m_main->getNotaPemeriksaan1($id_jenis_keluhan);
        $data_nota2 = $this->m_main->getNotaPemeriksaan2($id_spt);
        $data_nota3 = $this->m_main->getNotaPemeriksaan3($id_spt);
        
        $nomor_spt = $this->m_main->getNomorSPT($id_spt);

        $this->load->library('Pdf');
        $this->load->helper('path');

        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Nota Pemeriksaan I');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:right;border:none;line-height:1px"><span style="font-weight: normal;">Surabaya, '.date('d F Y').'</span></div>';
    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="100px">Nomor</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">'.$id_spt.'/'.$id_jenis_keluhan.'/'.date('d.m/Y').'</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Kepada :</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Sifat</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Penting</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    $html .= '<td width="200px">Yth. Pimpinan Perusahaan</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Lampiran</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">-</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->NAMA_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="100px">Hal</td>';
    $html .= '<td width="10px">:</td>';
    $html .= '<td width="150px">Nota Pemeriksaan</td>';
    $html .= '<td width="150px">&nbsp;</td>';
    foreach ($data_nota1 as $key) {
        $html .= '<td width="200px">'.$key->ALAMAT_PERUSAHAAN.'</td>';
    }
    
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 2
    foreach ($data_nota2 as $key2) {
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan dengan pemeriksaan di perusahaan Saudara pada tanggal '.date('d F Y', strtotime($key2->TGL_SPT)).' tentang pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan dan berdasarkan data yang Saudara berikan, maka diminta agar memperhatikan hal-hal di bawah ini :</p></div>';
    }

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $nota3 = 1;
    foreach ($data_nota3 as $key3) {
    $html .= '<div style="text-align:justify;border:none;line-height:1.5"><font style="font-weight: normal;">'.$nota3.'. '.$key3->ISI_HASIL_TEMUAN.'</font></div>';
    $nota3++;
    }
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $path = set_realpath('uploads/pdf');
    if($data_nota4 < $nota_ke){
        $pdf->Output($path.'Nota-Pemeriksaan-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'F');
        // EMAIL =========================================================================================================================
        // $email = $this->input->post("username");
        $email = $this->m_main->getEmailPerusahaan($id_jenis_keluhan);

        $config = Array(
                'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => 465,
              'smtp_user' => 'cs.aptk@gmail.com', // change it to yours
              'smtp_pass' => 'aplikasipengaduantenagakerja', // change it to yours
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Set to, from, message, etc.
        $this->email->from('cs.aptk@gmail.com', 'Venny Indrawati');
        $this->email->to($email); 

        $pesan = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title>Konfirmasi Akun</title>
    
    
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 164px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }

    </style>
</head>
<!--[if mso]>
<body class="mso-container" style="background-color:#FFFFFF;">
<![endif]-->
<!--[if !mso]><!-->
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
<!--<![endif]-->
  <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

        <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 30px; padding-bottom: 30px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
    <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <div align="center" class="img-container center" style="padding-bottom:50px;padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank">
    <img class="center" align="center" border="0" src="http://3.bp.blogspot.com/-YJgB7NSrRmA/Ujy40DeBW-I/AAAAAAAAAYM/_i0PH66vKy0/s1600/Surabaya_Logo.svg.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 102px" width="102">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#61626F;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#61626F;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
    <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong style="font-size:19px">Kami mengundang perusahaan anda untuk datang ke Disnaker Surabaya terkait nota pemeriksaan yang kami kirimkan melalui email ini. Untuk konfirmasi kedatangan, silahkan klik tombol di bawah ini.</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
    <div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><span style="font-size: 14px; line-height: 21px;"></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    
<div align="center" class="button-container center" style="Margin-right: 10px;Margin-left: 10px;">
    <div style="line-height:15px;font-size:1px">&nbsp;</div>
  <a href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" target="_blank" style="color: #ffffff; text-decoration: none;">
    <!--[if mso]>
      <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/aptk/pengaduan/konfirmasi_datang?key='.$id_spt.'" style="height:42px; v-text-anchor:middle; width:146px;" arcsize="60%" strokecolor="#C7702E" fillcolor="#C7702E" >
      <w:anchorlock/><center style="color:#ffffff; font-family:Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:16px;">
    <![endif]-->
    <!--[if !mso]><!-->
    <div style="color: #ffffff; background-color: #C7702E; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 126px; width: 25%; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; text-align: center;">
    <!--<![endif]-->
    <div style="background-color:#4584ef;border:1px solid #4564f1;border-radius:5px">
      <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;" mce-data-marked="1">Konfirmasi Kedatangan</span></span>
      </div>
    <!--[if !mso]><!-->
    </div>
    <!--<![endif]-->
    <!--[if mso]>
          </center>
      </v:roundrect>
    <![endif]-->
  </a>
    <div style="line-height:10px;font-size:1px">&nbsp;</div>
</div>

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 0px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div></div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </div>


</body></html>';

        $this->email->subject('NOTA PEMERIKSAAN');
        $this->email->message($pesan);
        $this->email->attach($path . 'Nota-Pemeriksaan-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf');

        //$result = $this->email->send();
        if($this->email->send())
         {
          // echo 'Email sent.';
        redirect('main/index/daftar-pengaduan');    
         }
         else
        {
         show_error($this->email->print_debugger());  
        }
    }
    else{
        $pdf->Output($path.'Nota-Pemeriksaan-'.$id_spt.'.'.date('dmY.H.i.s').'.pdf', 'I');
    }
    // sleep(10);
        

    }

    function cetak_laporan_pemeriksaan(){
    $this->load->model('m_main');
    $id_spt = $this->input->get("id");
    $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
    $data_spt = $this->m_main->getLaporanPemeriksaan($id_spt);
    $this->load->library('Pdf');
    // set document variable
    // $nomor_spt = $this->input->get("no_spt");
    $nomor_spt = $this->input->get("no_spt");

    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Laporan Pemeriksaan');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">LAPORAN PEMERIKSAAN</span></div>';
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><span style="font-weight: normal;">NOMOR : '.$nomor_spt.'</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 2
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1px"><p style="font-weight: normal;">KEPADA YTH</p>';
    $html .= '<p style="font-weight:normal">Bapak Kepala Dinas Sulton Prakasa</p>';
    $html .= '<p style="font-weight:normal">di tempat.</p>';
    $html .= '</div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    foreach ($data_spt as $key) {
        $no_spt=$key->NO_SPT;
        $tgl_spt=$key->TGL_SPT;
        $tgl_pemeriksaan=$key->TGL_PEMERIKSAAN;
        $nama_perusahaan=$key->NAMA_PERUSAHAAN;
        $html .= '<div style="width:300px;text-align:justify;border:none;line-height:1.5"><p style="font-weight: normal;"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Berdasarkan Surat Perintah Tugas Nomor '.$no_spt.' tanggal '.date('d F Y', strtotime($tgl_spt)).', pada tanggal '.date('d F Y', strtotime($tgl_pemeriksaan)).' telah dilakukan pemeriksaan di '.$nama_perusahaan.' dengan hasil pemeriksa sebagai berikut:</p></div>';
    
    
    $html .='<table border="0">';
    $html .='<tr>';
    $html .='<td width="15px" height="25px">I.</td>';
    $html .='<td height="25px" colspan="4" width="600px">DATA PERUSAHAAN</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">1.</td>';
    $html .='<td height="25px" width="250px">Perusahaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$nama_perusahaan.'</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">2.</td>';
    $html .='<td height="25px" width="250px">Alamat dan No. Telepon Perusahaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$key->ALAMAT_PERUSAHAAN.' '.$key->TELP_PERUSAHAAN.'</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">3.</td>';
    $html .='<td height="25px" width="250px">No. Telepon HRD Perusahaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$key->TELP_HRD_SERIKAT.'</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">4.</td>';
    $html .='<td height="25px" width="250px">Jenis Usaha</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$key->JENIS_USAHA.'</td>';
    $html .='</tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">5.</td>';
    $html .='<td height="25px" width="250px">Jumlah Pegawai</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$key->JUMLAH_PEGAWAI.' orang</td>';
    $html .='</tr>';
    $html .='</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">&nbsp;</span></div>';

    $html .='<table border="0">';
    $html .='<tr>';
    $html .='<td width="15px" height="25px">II.</td>';
    $html .='<td height="25px" colspan="4" width="600px">Hasil Pemeriksaan :</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">1.</td>';
    $html .='<td height="25px" width="250px">Tanggal Pemeriksaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.date('d F Y', strtotime($tgl_pemeriksaan)).'</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">2.</td>';
    $html .='<td height="25px" width="250px">Waktu Pemeriksaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.date('H:i', strtotime($tgl_pemeriksaan)).' WIB</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="25px" width="15px">&nbsp;</td>';
    $html .='<td height="25px" width="15px">3.</td>';
    $html .='<td height="25px" width="250px">Keterangan Pemeriksaan</td>';
    $html .='<td height="25px" width="15px">:</td>';
    $html .='<td height="25px" width="320px">'.$key->PEMERIKSAAN.'</td>';
    $html .='</tr>';
    $html .='</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">&nbsp;</span></div>';

    $html .='<table border="0">';
    $html .='<tr>';
    $html .='<td width="20px" height="25px">III.</td>';
    $html .='<td height="25px" >Kesimpulan Hasil Pemeriksaan</td>';
    $html .='</tr>';
    $html .='</table>'; 

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">&nbsp;</span></div>';

    $html .='<table border="0">';
    $html .='<tr>';
    $html .='<td width="570px" colspan="4" height="25px" style="text-align:right">........, ..........................</td>';
    $html .='<td width="50px">&nbsp;</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td width="80px">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">Mengetahui</td>';
    $html .='<td width="100px">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">Pengawas Ketenagakerjaan</td>';
    $html .='<td width="20px">&nbsp;</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td width="80px">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">Kepala Dinas</td>';
    $html .='<td width="100px" style="text-align:center">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">Yang memeriksa</td>';
    $html .='<td width="20px">&nbsp;</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td height="70px" width="80px">&nbsp;</td>';
    $html .='<td height="70px" width="70px">&nbsp;</td>';
    $html .='<td height="70px" width="200px">&nbsp;</td>';
    $html .='<td height="70px" width="200px">&nbsp;</td>';
    $html .='<td height="70px" width="20px">&nbsp;</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td width="80px">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">Sulton Prakasa</td>';
    $html .='<td width="100px" style="text-align:center">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">'.$key->NAMA_KARYAWAN.'</td>';
    $html .='<td width="20px">&nbsp;</td>';
    $html .='</tr>';
    $html .='<tr>';
    $html .='<td width="80px">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">NIP. 10170001.189423.1.001</td>';
    $html .='<td width="100px" style="text-align:center">&nbsp;</td>';
    $html .='<td width="200px" style="text-align:center">NIP. '.$key->ID_KARYAWAN.'</td>';
    $html .='<td width="20px">&nbsp;</td>';
    $html .='</tr>';
    $html .='</table>';

    }
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('Lap-pemeriksaan-'.$nomor_spt.'.pdf', 'I');
  }
    function insert_pemeriksaan(){
    $id_spt = $this->input->post("id_spt");
    $id_jenis_keluhan = $this->input->post("id_jenis_keluhan");
    $jumlah_pegawai = $this->input->post("jumlah_pegawai");
    $keterangan = $this->input->post("keterangan");
    $this->load->model('m_tk');
    $this->m_tk->insertCasePemeriksaan($id_spt,$jumlah_pegawai,$keterangan,$id_jenis_keluhan);
    redirect('main/index/daftar-pengaduan');
    }
  function pembuatan_SPT(){
    $id_spt = $this->input->get("no_spt");
    $id_jenis_keluhan = $this->input->get("id_jenis_keluhan");
    $nama_perusahaan = $this->input->get("nama_perusahaan");
    $alamat_perusahaan = $this->input->get("alamat_perusahaan");
    $tgl_awal = $this->input->get("tgl_awal");
    $tgl_akhir = $this->input->get("tgl_akhir");

    $isi_spt = '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan '.$nama_perusahaan.' alamat '.$alamat_perusahaan.' <br/>2. melaksanakan tugas dari tanggal '.$tgl_awal.' s/d tanggal '.$tgl_akhir.' <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.';
    $isi_spt1 = 'Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan '.$nama_perusahaan.' alamat '.$alamat_perusahaan;
    $isi_spt2 = 'melaksanakan tugas dari tanggal '.$tgl_awal.' s/d tanggal '.$tgl_akhir;
    $isi_spt3 = 'Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.';


    // $isi_spt = $this->input->get("kasus");
    $this->load->model('m_tk');
    $this->load->model('m_main');
    $this->m_tk->insertCaseSPT($id_spt,$id_jenis_keluhan,$isi_spt);

    // Download PDF Document
    $data_pengawas = $this->m_main->getDataSPT_PDF($id_spt);
    $data_spt = $this->m_main->getIsiSPT($id_spt);
    $this->load->library('Pdf');
    // set document variable
    $nomor_spt = $id_spt."/".$id_jenis_keluhan."/".date('d.m/Y');
    $dasar1 = "Undang-undang nomor 3 tahun 1951 tentang pernyataan berlakunya undang-undang pengawasan perburuhan tahun 1948 No. 23 dari Republik Indonesia untuk seluruh Indonesia";
    $dasar2 = "Undang-undang No. 1 tahun 1970 tentang Keselamatan Kerja";
    $dasar3 = "Undang-undang No. 13 tahun 2003 tentang Ketenagakerjaan";
    $dasar4 = "Undang-undang No. 32 tahun 2004 tentang Pemerintah Daerah";

    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Surat Perintah Tugas');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    setlocale(LC_TIME, "id_ID");
    // echo strftime(" in Finnish is %A,");
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;">SURAT PERINTAH TUGAS</span></div>';
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;">Nomor : '.$nomor_spt.'</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;"></span></div>';

    // Section 2
    $html .= '<table border="0" >';
    $html .= '<tr>';
    $html .= '<td rowspan="4" width="80px">Dasar</td>';
    $html .= '<td rowspan="4" width="20px">:</td>';
    $html .= '<td width="20px">1. </td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$dasar1.'</p></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">2. </td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$dasar2.'</p></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">3. </td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$dasar3.'</p></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">4. </td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$dasar4.'</p></td>';
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;">MENUGASKAN</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1"><span style="font-weight: bold;"></span></div>';

    // Section 4
    $html .= '<table border="0" width="200px">';
    $html .= '<tr>';
    $html .= '<td rowspan="15" width="80px">Kepada</td>';
    $html .= '<td rowspan="15" width="20px">:</td>';
    $html .= '<td width="400px">';
    $html .= '<table border="0">';

    // Get data petugas pengawas
    $count = 1;
    foreach ($data_pengawas as $key) {
      $html .= '<tr>';
      $html .= '<td width="20px" rowspan="5">'.$count++.'. </td>';
      $html .= '<td width="100px">Nama</td>';
      $html .= '<td width="20px">:</td>';
      $html .= '<td width="200px">'.$key->NAMA_KARYAWAN.'</td>';
      $html .= '</tr>';
      $html .= '<tr>';
      $html .= '<td>Pangkat/Gol</td>';
      $html .= '<td>:</td>';
      $html .= '<td>'.$key->GOLONGAN.'</td>';
      $html .= '</tr>';
      $html .= '<tr>';
      $html .= '<td>Nip</td>';
      $html .= '<td>:</td>';
      $html .= '<td>'.$key->ID_KARYAWAN.'</td>';
      $html .= '</tr>';
      $html .= '<tr>';
      $html .= '<td>Jabatan</td>';
      $html .= '<td>:</td>';
      $html .= '<td>Pengawas Ketenagakerjaan</td>';
      $html .= '</tr>';
      $html .= '<tr>';
      $html .= '<td>&nbsp;</td>';
      $html .= '<td>&nbsp;</td>';
      $html .= '<td>&nbsp;</td>';
      $html .= '</tr>';
      
    }

    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';
    
    // Section 5
    $html .= '<table border="0" >';
    $html .= '<tr>';
    $html .= '<td  width="80px">Untuk</td>';
    $html .= '<td  width="20px">:</td>';
    $html .= '<td width="500px">';
    $html .= '<table border="0">';

    // Get data isi spt
    
    $html .= '<tr>';
    $html .= '<td width="30px">1.</td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$isi_spt1.'</p></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="30px">2.</td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$isi_spt2.'</p></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="30px">3.</td>';
    $html .= '<td width="500px"><p style="text-align:justify">'.$isi_spt3.'</p></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';


    // Section 6
    $html .= '<div style="width:300px;text-align:left;border:none;line-height:1.5"><p style="font-weight: normal;"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Demikian Surat Perintah Tugas ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh tanggung jawab.</p></div>';

    // Section 3
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td width="50px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline"></font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none"></font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '<td width="200px">&nbsp;</td>';
    $html .= '<td>';
    $html .= '<table border="0">';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Surabaya, '.date('d F Y').'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">Kepala Dinas</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center">&nbsp;</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:underline">Sulton Prakasa</font></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="190px" style="text-align:center"><font style="text-decoration:none">Nip. 10170001.189423.1.001</font></td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</td>';
    $html .= '</tr>';
    $html .= '</table>';

    // $html .= '<table border="0" width="400px">';
    // $html .= '<tr>';
    // $html .= '<td width="20px">1. </td>';
    // $html .= '<td width="90px">Nama</td>';
    // $html .= '<td width="20px">:</td>';
    // $html .= '<td width="300px">'.$dasar1.'</td>';
    // $html .= '</tr>';
    // $html .= '</table>';
    /*$query1 = "SELECT NAMA_LOKASI, WITEL FROM master_access_point WHERE ID_LOKASI='".$id_lokasi."'";
    $result1 = mysql_query($query1);
    while($row1 = mysql_fetch_array($result1)){
        $nama_lokasi = $row1[0];
        $witel = $row1[1];
        $html .= '<span style="font-weight: normal;">ID Lokasi : '.$id_lokasi.' </span><br/>';
        $html .= '<span style="font-weight: normal;">Nama Lokasi : '.$nama_lokasi.' </span><br/>';
        $html .= '<span style="font-weight: normal;">Witel : '.$witel.' </span><br/><br/>';
    }*/
    $html .='';
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('SPT-'.$nomor_spt.'.pdf', 'I');

    redirect('main/index/pembuatan-surat-perintah-tugas?success');
  }
  function downloadPDF_SPT($id_spt){
    // $this->load->model('m_tk');
    $data_pengawas = $this->m_main->getDataSPT($id_spt);
    $this->load->library('Pdf');
    // set document variable
    $nomor_spt = $id_spt."/".$id_jenis_keluhan."/".date('d.m/Y');
    $dasar1 = "Undang-undang nomor 3 tahun 1951 tentang pernyataan berlakunya undang-undang pengawasan perburuhan tahun 1948 No. 23 dari Republik Indonesia untuk seluruh Indonesia";
    $dasar2 = "Undang-undang No. 1 tahun 1970 tentang Keselamatan Kerja";
    $dasar3 = "Undang-undang No. 13 tahun 2003 tentang Ketenagakerjaan";
    $dasar4 = "Undang-undang No. 32 tahun 2004 tentang Pemerintah Daerah";

    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Disnaker Surabaya');
    $pdf->SetTitle('Surat Perintah Tugas');
    $pdf->SetSubject('Disnaker');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SURAT PERINTAH TUGAS', PDF_HEADER_STRING);

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, '43', PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin('50');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set font
    $pdf->SetFont('dejavusans', '', 10);

    $pdf->AddPage();
    // Section 1
    $html = '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">SURAT PERINTAH TUGAS</span></div>';
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">Nomor : '.$nomor_spt.'</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 2
    $html .= '<table border="0" >';
    $html .= '<tr>';
    $html .= '<td rowspan="4" width="80px">Dasar</td>';
    $html .= '<td rowspan="4" width="20px">:</td>';
    $html .= '<td width="20px">1. </td>';
    $html .= '<td width="500px">'.$dasar1.'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">2. </td>';
    $html .= '<td width="500px">'.$dasar2.'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">3. </td>';
    $html .= '<td width="500px">'.$dasar3.'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td width="20px">4. </td>';
    $html .= '<td width="500px">'.$dasar4.'</td>';
    $html .= '</tr>';
    $html .= '</table>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 3
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;">MENUGASKAN</span></div>';

    // Spacing
    $html .= '<div style="width:300px;text-align:center;border:none;line-height:1px"><span style="font-weight: bold;"></span></div>';

    // Section 4
    $html .= '<table border="0" width="200px">';
    $html .= '<tr>';
    $html .= '<td width="80px">Kepada</td>';
    $html .= '<td width="20px">:</td>';
    $html .= '</tr>';
    $html .= '</table>';
    // Get data petugas pengawas
    // foreach ($data_pengawas as $key) {
      
    // }
    
    // $html .= '<table border="0" width="400px">';
    // $html .= '<tr>';
    // $html .= '<td width="20px">1. </td>';
    // $html .= '<td width="90px">Nama</td>';
    // $html .= '<td width="20px">:</td>';
    // $html .= '<td width="300px">'.$dasar1.'</td>';
    // $html .= '</tr>';
    // $html .= '</table>';
    /*$query1 = "SELECT NAMA_LOKASI, WITEL FROM master_access_point WHERE ID_LOKASI='".$id_lokasi."'";
    $result1 = mysql_query($query1);
    while($row1 = mysql_fetch_array($result1)){
        $nama_lokasi = $row1[0];
        $witel = $row1[1];
        $html .= '<span style="font-weight: normal;">ID Lokasi : '.$id_lokasi.' </span><br/>';
        $html .= '<span style="font-weight: normal;">Nama Lokasi : '.$nama_lokasi.' </span><br/>';
        $html .= '<span style="font-weight: normal;">Witel : '.$witel.' </span><br/><br/>';
    }*/
    $html .='';
    
    // output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    //$pdf->lastPage();
    //$pdf->Write(5, 'Some sample text');
    $pdf->Output('SPT-'.$nomor_spt.'.pdf', 'I');
  }
  function getDataSPT(){
    // $id_spt = $this->input->post('id');
    $id_spt = json_decode($_POST["id"], false);
    $this->load->model('m_main');
    $data_spt = $this->m_main->getDataSPT($id_spt);
    echo json_encode($data_spt);
  }
  function getDataPasal(){
    // $id_spt = $this->input->post('id');
    $id_pasal = json_decode($_POST["id"], false);
    $this->load->model('m_main');
    $data_pasal = $this->m_main->getDataPasal_p($id_pasal);
    echo json_encode($data_pasal);
  }
  function getPasal_t(){

    $jenis = json_decode($_POST["jenis"], false);
    $id_spt = json_decode($_POST["id_spt"], false);

    $this->load->model('m_main');

    $id_pasal = $this->m_main->getIDPasal($id_spt);
    $data_pasal = $this->m_main->getSelectedPasal($id_pasal,$jenis);

    // $data_pasal = $this->m_main->getDataPasal_t($jenis);
    echo json_encode($data_pasal);
    // var_dump($id_pasal);
  }
  function pemilihan_petugas(){
    $id_pengadu = $this->input->post("id");
    $this->load->model('m_tk');
    $this->m_tk->generateSPT();
    $id_spt = $this->m_tk->getSPT();
    $this->m_tk->insertPengawas($id_spt);
    redirect('main/index/pemilihan-petugas-pengawas?success');
  }
  function edit_pengadu(){
    $user_id = $this->input->post("id_tk");
    $this->load->model('m_tk');
    $this->m_tk->editPengadu($user_id);
    redirect('main/index/edit-pengadu?id='.$user_id);
  }
  function UserActivated(){
        //$page_en = 'en/'.$page;
    $this->load->view('default/header');
    //$this->load->view('default/menu', $data);
    $this->load->view('pages/act_success');
    $this->load->view('default/footer');
  }
  function UserActivationFailed(){
        //$page_en = 'en/'.$page;
    $this->load->view('default/header');
    //$this->load->view('default/menu', $data);
    $this->load->view('pages/act_failed');
    $this->load->view('default/footer');
  }
  function activate(){
    $key = $this->input->get('key');
    $this->load->model('m_tk');
    $num_row = $this->m_tk->getTokenReg($key);
    if ($num_row!=0){
      $this->m_tk->activateUser($key);
      redirect("registrasi/UserActivated");
    }
    else{
      // $this->m_tk->activateUser($key);
      redirect("registrasi/UserActivationFailed");
    }
  }
  function success()
  {
        //$page_en = 'en/'.$page;
    $this->load->view('default/header');
    //$this->load->view('default/menu', $data);
    $this->load->view('pages/reg_success');
    $this->load->view('default/footer');
  }
	function generateRandomString($length = 30) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
	private function _regUserTK(){
		// $this->load->model('m_insert');
  //       $this->m_insert->saveTestimony();
		$email = $this->input->post("username");
		$token = $this->generateRandomString();
		$this->load->model('m_tk');
		
        $this->m_tk->regUserTK($token);

        $config = Array(
				'protocol' => 'smtp',
			  'smtp_host' => 'ssl://smtp.googlemail.com',
			  'smtp_port' => 465,
			  'smtp_user' => 'cs.aptk@gmail.com', // change it to yours
			  'smtp_pass' => 'aplikasipengaduantenagakerja', // change it to yours
			  'mailtype' => 'html',
			  'charset' => 'iso-8859-1',
			  'wordwrap' => TRUE
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.
		$this->email->from('cs.aptk@gmail.com', 'Venny Indrawati');
        $this->email->to($email); 
        $pesan = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title>Konfirmasi Akun</title>
    
    
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 164px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }

    </style>
</head>
<!--[if mso]>
<body class="mso-container" style="background-color:#FFFFFF;">
<![endif]-->
<!--[if !mso]><!-->
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
<!--<![endif]-->
  <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

        <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 30px; padding-bottom: 30px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <div align="center" class="img-container center" style="padding-bottom:50px;padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="http://localhost/aptk/aktivasi?key='.$token.'" target="_blank">
    <img class="center" align="center" border="0" src="http://3.bp.blogspot.com/-YJgB7NSrRmA/Ujy40DeBW-I/AAAAAAAAAYM/_i0PH66vKy0/s1600/Surabaya_Logo.svg.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 102px" width="102">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#61626F;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#61626F;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Segera aktifkan akun anda. Klik logo di atas atau klik tombol di bawah ini</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
	<div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><span style="font-size: 14px; line-height: 21px;">Untuk dapat menggunakan layanan Aplikasi Pengaduan Tenaga Kerja secara penuh. Klik tombol di atas atau klik tombol di bawah ini.</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    
<div align="center" class="button-container center" style="Margin-right: 10px;Margin-left: 10px;">
    <div style="line-height:15px;font-size:1px">&nbsp;</div>
  <a href="http://localhost/aptk/aktivasi?key='.$token.'" target="_blank" style="color: #ffffff; text-decoration: none;">
    <!--[if mso]>
      <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/aptk/aktivasi?key='.$token.'" style="height:42px; v-text-anchor:middle; width:146px;" arcsize="60%" strokecolor="#C7702E" fillcolor="#C7702E" >
      <w:anchorlock/><center style="color:#ffffff; font-family:Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:16px;">
    <![endif]-->
    <!--[if !mso]><!-->
    <div style="color: #ffffff; background-color: #C7702E; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 126px; width: 25%; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; text-align: center;">
    <!--<![endif]-->
      <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;" mce-data-marked="1">Aktifkan</span></span>
    <!--[if !mso]><!-->
    </div>
    <!--<![endif]-->
    <!--[if mso]>
          </center>
      </v:roundrect>
    <![endif]-->
  </a>
    <div style="line-height:10px;font-size:1px">&nbsp;</div>
</div>

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 0px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div></div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </div>


</body></html>';
        $this->email->subject('EMAIL KONFIRMASI');
        $this->email->message($pesan);

		//$result = $this->email->send();
		if($this->email->send())
	     {
	      // echo 'Email sent.';
        redirect('registrasi/success');    
	     }
	     else
	    {
	     show_error($this->email->print_debugger());  
	    }
        //redirect('login');
	}
	private function _regUserSK(){
		$email = $this->input->post("username");
    $token = $this->generateRandomString();
    $this->load->model('m_tk');
    
        $this->m_tk->regUserSK($token);

        $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'cs.aptk@gmail.com', // change it to yours
        'smtp_pass' => 'aplikasipengaduantenagakerja', // change it to yours
        'mailtype' => 'html',
        'charset' => 'iso-8859-1',
        'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");

    // Set to, from, message, etc.
    $this->email->from('cs.aptk@gmail.com', 'Venny Indrawati');
        $this->email->to($email); 
        $pesan = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!--[if IE]><html xmlns="http://www.w3.org/1999/xhtml" class="ie-browser" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><![endif]--><!--[if !IE]><!--><html style="margin: 0;padding: 0;" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]--><head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
    <title>Konfirmasi Akun</title>
    
    
    <style type="text/css" id="media-query">
      body {
  margin: 0;
  padding: 0; }

table, tr, td {
  vertical-align: top;
  border-collapse: collapse; }

.ie-browser table, .mso-container table {
  table-layout: fixed; }

* {
  line-height: inherit; }

a[x-apple-data-detectors=true] {
  color: inherit !important;
  text-decoration: none !important; }

[owa] .img-container div, [owa] .img-container button {
  display: block !important; }

[owa] .fullwidth button {
  width: 100% !important; }

.ie-browser .col, [owa] .block-grid .col {
  display: table-cell;
  float: none !important;
  vertical-align: top; }

.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid {
  width: 500px !important; }

.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
  line-height: 100%; }

.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4 {
  width: 164px !important; }

.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8 {
  width: 328px !important; }

.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col {
  width: 250px !important; }

.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col {
  width: 166px !important; }

.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col {
  width: 125px !important; }

.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col {
  width: 100px !important; }

.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col {
  width: 83px !important; }

.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col {
  width: 71px !important; }

.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col {
  width: 62px !important; }

.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col {
  width: 55px !important; }

.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col {
  width: 50px !important; }

.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col {
  width: 45px !important; }

.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col {
  width: 41px !important; }

@media only screen and (min-width: 520px) {
  .block-grid {
    width: 500px !important; }
  .block-grid .col {
    display: table-cell;
    Float: none !important;
    vertical-align: top; }
    .block-grid .col.num12 {
      width: 500px !important; }
  .block-grid.mixed-two-up .col.num4 {
    width: 164px !important; }
  .block-grid.mixed-two-up .col.num8 {
    width: 328px !important; }
  .block-grid.two-up .col {
    width: 250px !important; }
  .block-grid.three-up .col {
    width: 166px !important; }
  .block-grid.four-up .col {
    width: 125px !important; }
  .block-grid.five-up .col {
    width: 100px !important; }
  .block-grid.six-up .col {
    width: 83px !important; }
  .block-grid.seven-up .col {
    width: 71px !important; }
  .block-grid.eight-up .col {
    width: 62px !important; }
  .block-grid.nine-up .col {
    width: 55px !important; }
  .block-grid.ten-up .col {
    width: 50px !important; }
  .block-grid.eleven-up .col {
    width: 45px !important; }
  .block-grid.twelve-up .col {
    width: 41px !important; } }

@media (max-width: 520px) {
  .block-grid, .col {
    min-width: 320px !important;
    max-width: 100% !important; }
  .block-grid {
    width: calc(100% - 40px) !important; }
  .col {
    width: 100% !important; }
    .col > div {
      margin: 0 auto; }
  img.fullwidth {
    max-width: 100% !important; } }

    </style>
</head>
<!--[if mso]>
<body class="mso-container" style="background-color:#FFFFFF;">
<![endif]-->
<!--[if !mso]><!-->
<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">
<!--<![endif]-->
  <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

        <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top: 30px; padding-bottom: 30px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
  <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 10px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
                  
                    <div align="center" class="img-container center" style="padding-bottom:50px;padding-right: 0px;  padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px;" align="center"><![endif]-->
  <a href="http://localhost/aptk/aktivasi?key='.$token.'" target="_blank">
    <img class="center" align="center" border="0" src="http://3.bp.blogspot.com/-YJgB7NSrRmA/Ujy40DeBW-I/AAAAAAAAAYM/_i0PH66vKy0/s1600/Surabaya_Logo.svg.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;width: 100%;max-width: 102px" width="102">
  </a>
<!--[if mso]></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#61626F;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#61626F;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 25px; padding-bottom: 10px;">
  <div style="font-size:12px;line-height:14px;color:#ffffff;font-family:Arial, Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><span style="font-size: 24px; line-height: 28px;"><strong>Segera aktifkan akun anda. Klik logo di atas atau klik tombol di bawah ini</strong></span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;"><![endif]-->
<div style="padding-right: 10px; padding-left: 10px; padding-top: 0px; padding-bottom: 10px;">
  <div style="font-size:12px;line-height:18px;color:#B8B8C0;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><span style="font-size: 14px; line-height: 21px;">Untuk dapat menggunakan layanan Aplikasi Pengaduan Tenaga Kerja secara penuh. Klik tombol di atas atau klik tombol di bawah ini.</span></p></div>
</div>
<!--[if mso]></td></tr></table><![endif]-->

                  
                  
                    
<div align="center" class="button-container center" style="Margin-right: 10px;Margin-left: 10px;">
    <div style="line-height:15px;font-size:1px">&nbsp;</div>
  <a href="http://localhost/aptk/aktivasi?key='.$token.'" target="_blank" style="color: #ffffff; text-decoration: none;">
    <!--[if mso]>
      <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://localhost/aptk/aktivasi?key='.$token.'" style="height:42px; v-text-anchor:middle; width:146px;" arcsize="60%" strokecolor="#C7702E" fillcolor="#C7702E" >
      <w:anchorlock/><center style="color:#ffffff; font-family:Arial, "Helvetica Neue", Helvetica, sans-serif; font-size:16px;">
    <![endif]-->
    <!--[if !mso]><!-->
    <div style="color: #ffffff; background-color: #C7702E; border-radius: 25px; -webkit-border-radius: 25px; -moz-border-radius: 25px; max-width: 126px; width: 25%; border-top: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-left: 0px solid transparent; padding-top: 5px; padding-right: 20px; padding-bottom: 5px; padding-left: 20px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; text-align: center;">
    <!--<![endif]-->
      <span style="font-size:16px;line-height:32px;"><span style="font-size: 14px; line-height: 28px;" data-mce-style="font-size: 14px;" mce-data-marked="1">Aktifkan</span></span>
    <!--[if !mso]><!-->
    </div>
    <!--<![endif]-->
    <!--[if mso]>
          </center>
      </v:roundrect>
    <![endif]-->
  </a>
    <div style="line-height:10px;font-size:1px">&nbsp;</div>
</div>

                  
                  
                    <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
  <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
  <div align="center"><div style="border-top: 0px solid transparent; width:100%;">&nbsp;</div></div>
  <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
</div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>    <div style="background-color:#ffffff;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#ffffff;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

              <!--[if (mso)|(IE)]><td align="center" width="500" style=" width:500px; padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:30px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
            <div class="col num12" style="min-width: 320px;max-width: 500px;width: 500px;width: calc(18000% - 89500px);background-color: transparent;">
              <div style="background-color: transparent; width: 100% !important;">
              <!--[if (!mso)&(!IE)]><!--><div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:30px; padding-bottom:30px; padding-right: 0px; padding-left: 0px;"><!--<![endif]-->

                  
                    <div></div>

                  
              <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
              </div>
            </div>
          <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
        </div>
      </div>
    </div>   <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
  </div>


</body></html>';
        $this->email->subject('EMAIL KONFIRMASI');
        $this->email->message($pesan);

    //$result = $this->email->send();
    if($this->email->send())
       {
        // echo 'Email sent.';
        redirect('registrasi/success');    
       }
       else
      {
       show_error($this->email->print_debugger());  
      }
	}
	function validateForm(){

		$email = $this->input->post("username");
		$password = $this->input->post("password");
		$passwordconf = $this->input->post("passwordconf");

		$jenis_tk = $this->input->post("jenis_tk");
		if($jenis_tk=='perorangan'){
			$nama_tk = $this->input->post("nama_tk");
			$no_ktp = $this->input->post("no_ktp");
			$alamat_tk = $this->input->post("alamat_tk");
			$tempat_lahir_tk = $this->input->post("tempat_lahir_tk");
			$tgl_lahir_tk = $this->input->post("tgl_lahir_tk");
			$jenis_kel = $this->input->post("jenis_kelamin_tk");
			$agama_tk = $this->input->post("agama_tk");
			$status_kawin = $this->input->post("status_kawin_tk");
			$pekerjaan_tk = $this->input->post("pekerjaan_tk");
			$kwn_tk = $this->input->post("kwn_tk");

			$this->load->model('m_tk');
			$email_data = $this->m_tk->getUserID1($email);
			if($email_data===0){
				// redirect("main/index/pengguna");
				$this->_regUserTK();
			}
			elseif($email_data===1){
				redirect("registrasi");
				
			}
		}
		elseif($jenis_tk=='perserikatan'){
			$nama_sk = $this->input->post("nama_sk");
			$alamat_sk = $this->input->post("alamat_sk");
			$telepon_sk = $this->input->post("telepon_sk");
			$nama_perusahaan = $this->input->post("nama_perusahaan");
			$alamat_perusahaan = $this->input->post("alamat_perusahaan");
			$telp_perusahaan = $this->input->post("telp_perusahaan");
			$telp_hrd_serikat = $this->input->post("telp_hrd_serikat");

			$this->load->model('m_tk');
			$email_data = $this->m_tk->getUserID1($email);
			if($email_data===0){
				// redirect("main/index/pengguna");
				$this->_regUserSK();
			}
			elseif($email_data===1){
				redirect("registrasi");
				
			}
		}
	}
}
