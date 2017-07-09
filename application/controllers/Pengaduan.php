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
  function pembuatan_SPT(){
    $id_spt = $this->input->post("no_spt");
    $id_jenis_keluhan = $this->input->post("id_jenis_keluhan");
    $this->load->model('m_tk');
    $this->m_tk->insertCaseSPT($id_spt,$id_jenis_keluhan);

    // Download PDF Document
    $this->downloadPDF();

    redirect('main/index/pembuatan-surat-perintah-tugas?success');
  }
  function downloadPDF(){
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
    
    $html = '<span style="font-weight: bold;">Nomor : '.$nomor_spt.'</span><br/><br/>';
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

        <div style="background-color:#323341;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#323341;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

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

        <div style="background-color:#323341;">
      <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;width: 500px;width: calc(19000% - 98300px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
        <div style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:#323341;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 500px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

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
