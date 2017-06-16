<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    //Page header
		    public function Header() {
		        // Logo
		        $image_file = K_PATH_IMAGES.'Logo_RRI_News_1.jpg';
		        $this->Image($image_file, 15, 12, 25, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		        // Set font
		        $this->SetFont('helvetica', 'B', 12);

		        $this->MultiCell(65, 5, 'RADIO REPUBLIK INDONESIA', 0, 'L', 0, 1, '45', '14', true);
				//$pdf->MultiCell(55, 5, '[RIGHT] '.$txt, 1, 'R', 0, 1, '', '', true);
				$this->MultiCell(109, 5, 'JL. Pemuda No. 82-90, Genteng, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271', 0, 'L', 0, 0, '45', '', true);
				//$this->Ln(2);
				$this->Line(15, 39, 195, 39, '');
		        // Title
		        // $this->Cell(68, 7, 'RADIO REPUBLIK INDONESIA', 0, false, 'C', 0, '', 0, false, 'T', 'B');
		        // $this->Cell(0, 15, 'JL. Pemuda No. 72 Surabaya - Jawa Timur', 0, false, 'C', 0, '', 0, false, 'T', 'B');
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
// CUSTOM


/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */