<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
      class nuSoap_lib{
		  
	// Clase Constructor Cargando las Funcion de CI
	public function __construct()
	{
		$CI =& get_instance();
		//$CI->load->helper('url');

		// Hacer el Include del DOMPDF
		$archivo = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)));
		$archivo = $archivo . "/NuSOAP/lib/nusoap.php";

//		$archivo = $archivo . "/NuSOAP/lib/nusoapmime.php";
		require_once( $archivo );
	}
		  
      }
?>