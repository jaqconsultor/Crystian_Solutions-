<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_fpdf {
	
	// Clase Constructor Cargando las Funcion de CI
	public function __construct()
	{
		$CI =& get_instance();
		//$CI->load->helper('url');

		// Hacer el Include del DOMPDF
		$archivo = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)));
		$archivo = $archivo . "/fpdf182/fpdf.php";
		require_once( $archivo );
		
        //require_once( "application/appdesktop/libraries/dompdf/dompdf_config.inc.php");

	}

}

