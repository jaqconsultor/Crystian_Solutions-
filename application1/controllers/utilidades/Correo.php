<?php

class Correo extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

//$this->load->library('email');


$config['mailtype'] = 'html';
//$config['protocol'] = 'sendmail';
//$config['mailpath'] = '/usr/sbin/sendmail';
//$config['charset'] = 'iso-8859-1';
//$config['wordwrap'] = TRUE;

$this->email->initialize($config);

$this->email->from('jaqconsultor@gmail.com', 'INFO: Aulas Cursos YA!...');
$this->email->to('jaqconsultor@gmail.com');
$this->email->cc('edwinreyes308@gmail.com');
//$this->email->bcc('them@their-example.com');

$this->email->subject('Email Test: From CodeIgniter Correo');

$html = '';
$html = $html . '<h1>Encabezado Titulo 1</h1><br />';
$html = $html . '<img src="' . base_url() . 'imagenes/clasesonline.jpg"' .' alt="Imagen">' . '<br />';
$html = $html . '<h2>Fin del Mensaje</h2><br />';

$this->email->message( $html );

$ok = '0';  

if ( $this->email->send() )
{
        $ok = '1';
}

        $data['ok'] = $ok;

        // Controlador Nombre
        $data['controlador'] = 'CORREO';
        
        // Titulo de la Pagina
        $data['title'] = 'CORREO: Aulas Cursos YA';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('utilidades/correo', $data);
        $this->load->view('templates/footer');
    }
    
}

?>

