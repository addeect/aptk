<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Cpdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    
}
// CUSTOM


/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */