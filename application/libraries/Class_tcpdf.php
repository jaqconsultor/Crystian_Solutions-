<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Class_tcpdf {
	
	var $g1;
	
	// Clase Constructor Cargando las Funcion de CI
	public function __construct()
	{
		$CI =& get_instance();
		//$CI->load->helper('url');

		// Hacer el Include del DOMPDF
		$ruta = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)));
//		$lenguaje = $ruta . "/tcpdf60/config/lang/spa.php";
		$clasetcpdf = $ruta . "/TCPDF/tcpdf.php";
		
//		require_once( $lenguaje );

		$this->g1 = Array();

		// PAGE META DESCRIPTORS --------------------------------------

		$this->g1['a_meta_charset'] = 'UTF-8';
		$this->g1['a_meta_dir'] = 'ltr';
		$this->g1['a_meta_language'] = 'es';

		// TRANSLATIONS --------------------------------------
		$this->g1['w_page'] = 'página';

        require_once( $clasetcpdf );

	}

	public function mget1()
	{
		return $this->g1;
	}

}

