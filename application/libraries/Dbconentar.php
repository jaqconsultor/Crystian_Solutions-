<?php

/**
 * CodeIgniter NO Captcha ReCAPTCHA a.k.a reCAPTCHA Version 2.0 library
 * 
 * This library is based on official reCAPTCHA library for PHP
 * https://github.com/google/ReCAPTCHA
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbconectar {

	// Clase Constructor Cargando las Funcion de CI
	public function __construct()
	{
		$CI =& get_instance();
/*	
	//$CI->load->helper('url');

		// Hacer el Include del DOMPDF
		$ruta = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)));
//		$lenguaje = $ruta . "/tcpdf60/config/lang/spa.php";
		$clasetcpdf = $ruta . "/tcpdf60/tcpdf.php";
		
//		require_once( $lenguaje );

		$this->g1 = Array();

		// PAGE META DESCRIPTORS --------------------------------------

		$this->g1['a_meta_charset'] = 'UTF-8';
		$this->g1['a_meta_dir'] = 'ltr';
		$this->g1['a_meta_language'] = 'es';

		// TRANSLATIONS --------------------------------------
		$this->g1['w_page'] = 'página';

        require_once( $clasetcpdf );
*/
	}
    
	    public function prueba() {
			$return = "";

				/*  
				  SHOW TABLE STATUS FROM `lrvl-web72`;
				SHOW FUNCTION STATUS WHERE `Db`='lrvl-web72';
				SHOW PROCEDURE STATUS WHERE `Db`='lrvl-web72';
				*/

				$conexion = new mysqli("localhost", "root", "password2017", "aulascur_de2");

				$result = $conexion->query("SHOW TABLE STATUS FROM `aulascur_de2`");
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {                
						$return = $return . $row['Name'] .' / ';
					}
				}

/*
				echo '<br/>' . '<br/>';
				  
				$result = $conexion->query("SHOW COLUMNS FROM `projects`");
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {                
						echo $row['Field'] . " - " . $row['Type'] . " - " . $row['Null'] . " - " . $row['Key'] . " - " . $row['Default'] . " - " . $row['Extra'] .'<br/>';
					}
				}

				 */
			
        return $return;
    }

    
}
