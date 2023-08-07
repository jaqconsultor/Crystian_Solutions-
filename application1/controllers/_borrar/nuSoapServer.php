<?php
class NuSoapServer extends CI_Controller {
	function __construct() {
		parent::__construct();

/*
		$this->load->library("nuSoap_lib");
		$this->nusoap_server = new soap_server();

//		$this->nusoap_server = new SoapServer();

		$miURL = "urn:ws_ddrsistemas";

		$this->nusoap_server->configureWSDL("ws_ddrsistemas", $miURL);
		$this->nusoap_server->wsdl->schemaTargetNamespace=$miURL;

		$this->nusoap_server->register('getRespuesta', // Nombre de la funcion
		 array('parametro' => 'xsd:string'), // Parametros de entrada
		 array('return' => 'xsd:string'), // Parametros de salida
		 $miURL);
		 
		$this->nusoap_server->register('getInternet', // Nombre de la funcion
		 array('parametro' => 'xsd:string'), // Parametros de entrada
		 array('return' => 'xsd:string'), // Parametros de salida
		 $miURL);
*/	

		$this->server = new SoapServer("ws_ddrsistemas.wsdl");
		 
		$this->server->AddFunction("sumar");
		$this->server->AddFunction("restar");
		$this->server->handle();
	
	}
	function index() {

//		if(!extension_loaded("soap")){
//			  dl("php_soap.dll");
//		}
		 
//		ini_set("soap.wsdl_cache_enabled","0");


		/*
		echo 'QUERY_STRING' . "<br>";
		echo $_SERVER['QUERY_STRING'];
		echo $this->uri->segment(0);
		echo $this->uri->segment(1);
		echo $this->uri->segment(2);
		echo $this->uri->segment(3);
		die();
		*/
/*
		if($this->uri->segment(3) == "wsdl") {
			$_SERVER['QUERY_STRING'] = "wsdl";
		} else {
			$_SERVER['QUERY_STRING'] = "";
		}

		if ( !isset( $HTTP_RAW_POST_DATA ) )
		$HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );

		$this->nusoap_server->service($HTTP_RAW_POST_DATA);
*/
		//$this->nusoap_server->service( file_get_contents("php://input") );
	}

/*
	function getRespuesta($parametro){
	 //return new soapval('return', 'xsd:string', 'soy servidor y devuelvo: '.$parametro);
	 return "Parametro " . $parametro;
	}

	function getInternet($parametro){
	 //return new soapval('return', 'xsd:string', 'SI');
	 return "SI";
	}
*/

		function sumar($operando1,$operando2){
			  return $operando1+$operando2;
		}
		 
		function restar($operando1,$operando2){
			  return $operando1-$operando2;
		}


}


?>


