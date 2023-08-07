<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymsg {

	// Clase Constructor Cargando las Funcion de CI
	public function __construct()
	{
		$CI =& get_instance();
	}

	// Funcion que coloca los mensaje en blanco
    public function setblanco()
    {

        // Inicializar las Variables
		unset($_SESSION['msgdanger']);
		unset($_SESSION['msgsuccess']);
		unset($_SESSION['msginfo']);
		unset($_SESSION['msgwarning']);

		return 1;
    }
}

/* End of file Someclass.php */