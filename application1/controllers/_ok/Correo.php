<?php
class Correo extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
     
   public function index(){
	    $this->enviar();
        $this->load->view('welcome_message');
   }
    
   public function enviar(){
      /*
       * Cuando cargamos una librería
       * es similar a hacer en PHP puro esto:
       * require_once("libreria.php");
       * $lib=new Libreria();
       */

/*
Nombre de usuario: 	contacto@jaqconsultor.com
Contraseña: 	Utilice la contraseña de la cuenta de correo electrónico.
Servidor entrante: 	mail.jaqconsultor.com

    IMAP Port: 993 POP3 Port: 995 

Servidor de correo: 	mail.jaqconsultor.com

    SMTP Port: 465 

IMAP, POP3 y SMTP require authentication.
*/
        
       //Cargamos la librería email
       $this->load->library('email');
        
       /*
        * Configuramos los parámetros para enviar el email,
        * las siguientes configuraciones es recomendable
        * hacerlas en el fichero email.php dentro del directorio config,
        * en este caso para hacer un ejemplo rápido lo hacemos
        * en el propio controlador
        */
        
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'host-mail';
         
       //Nuestro usuario
        $config["smtp_user"] = 'contacto@correo.com';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'password';   
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;

	//
		$config['smtp_crypto'] = 'tls';		
		
		 
       //El email debe ser valido 
       $config['validate'] = true;
       
        
      //Establecemos esta configuración
        $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('jaqconsultor@gmail.com', 'Jesus Aquino');
         
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('jaqconsultor@gmail.com', 'Jesus Aquino');
         
      //Definimos el asunto del mensaje
        $this->email->subject( "asunto: Prueba de Correo" );
         
      //Definimos el mensaje a enviar
        $this->email->message( "Email: "."Mi Correo"." Mensaje: "."Mi Mensaje de Datos" );
         
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
            $this->session->set_flashdata('envio', 'Email enviado correctamente');
			Echo "Si";
        }else{
            $this->session->set_flashdata('envio', 'No se a enviado el email');
			Echo "No";
        }

   }   
}
 
?>