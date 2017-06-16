<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
$path_tcpdf = base_url('assets/tcpdf/tcpdf.php');
require_once($path_tcpdf);
//require_once('koneksi/conn.php');

$witel=1;
$bulan=2;
$konfig=3;

$setting='';
if($konfig==='0'){
    $setting='YEAR(DT.WAKTU_MULAI) = YEAR(CURRENT_DATE) AND MONTH(DT.WAKTU_MULAI) = MONTH(CURRENT_DATE)';
}
elseif($konfig==='1'){
    $setting='YEAR(DT.WAKTU_MULAI) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(DT.WAKTU_MULAI) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)';
}
/*$nama_lokasi=$_GET['nama_lokasi'];
$witel=$_GET['witel'];*/
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'LogoTelkom.jpg';
        $this->Image($image_file, 10, 5, 55, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 12);
        // Title
        $this->Cell(90, 23, 'Laporan MTTR WITEL '.$_GET['witel'], 0, false, 'C', 0, '', 0, false, 'T', 'B');
        //$this->Cell(0, 30, 'Laporan MTTR WITEL '.$_GET['witel'], 1, false, 'R', 0, '', 0, false, 'T', 'B');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        //$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('AddeectCodeWorks');
$pdf->SetTitle('Laporan Gangguan Berulang');
$pdf->SetSubject('Telkom ');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Laporan Gangguan Berulang', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 43, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(50);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// add a page
$pdf->AddPage();
// Print a table
//$style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => '10,20,5,10', 'phase' => 10, 'color' => array(255, 0, 0));
$pdf->Line(15, 39, 195, 39, '');


// create some HTML content

$html = '<span style="font-weight: bold;">PERIODE BULAN '.strtoupper($bulan).'</span><br/><br/>';
/*$query1 = "SELECT NAMA_LOKASI, WITEL FROM master_access_point WHERE ID_LOKASI='".$id_lokasi."'";
$result1 = mysql_query($query1);
while($row1 = mysql_fetch_array($result1)){
    $nama_lokasi = $row1[0];
    $witel = $row1[1];
    $html .= '<span style="font-weight: normal;">ID Lokasi : '.$id_lokasi.' </span><br/>';
    $html .= '<span style="font-weight: normal;">Nama Lokasi : '.$nama_lokasi.' </span><br/>';
    $html .= '<span style="font-weight: normal;">Witel : '.$witel.' </span><br/><br/>';
}*/

$html .='<table cellpadding="1" cellspacing="1" border="1" style="text-align:center;">
<tr style="background-color:#f0f8ff"><td width="100px">TANGGAL</td><td>JENIS KERUSAKAN</td><td>TINDAKAN</td><td>KETERANGAN</td><td>MERK ACCESS POINT</td><td>STATUS</td></tr>';



$html .= '</table><br/>';
$html .= '<br/><span style="font-weight: bold;">REKOMENDASI</span><br/>';
$html .= '<span style="font-weight: normal;">Lakukan Pergantian SHIFT KERJA PADA TEKNISI LAPANGAN  :</span><br/>';
$html .= '<span style="font-weight: normal;">Tiket Open : '; 

$html .= '</span><br/>';
$html .= '<span style="font-weight: normal;">Tiket Close : '; 

$html .= '</span><br/>';
$html .= '<span style="font-weight: normal;">Tiket Pending : '; 

$html .= '</span><br/>';
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print all HTML colors



// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('ci_laporan_tes2.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+