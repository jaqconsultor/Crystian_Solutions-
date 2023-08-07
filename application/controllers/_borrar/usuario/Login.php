<?php

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


    public function index() {

        // Controlador Nombre
        $data['controlador'] = 'INICIO';
        
        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        // Leer los Valores de los Mensajes
        $data['msgdanger']   =   $this->session->msgdanger;
        $data['msgsuccess']  =   $this->session->msgsuccess;
        $data['msginfo']     =   $this->session->msginfo;
        $data['msgwarning']  =   $this->session->msgwarning;


        if ( ! isset( $this->session->blogin ) ) {
            $this->session->blogin = 0 ;
        } ;


        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('usuario/login', $data);
        $this->load->view('templates/footer');

        // Clase que coloca los men sajes en Nulos
        $this->mymsg->setblanco();
        
    }


    public function entrada() {

        // Controlador Nombre
        $data['controlador'] = 'ENTRADA';
        
        // Titulo de la Pagina
        $data['title'] = 'ENTRADA: Aulas Cursos YA';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('usuario/entrada', $data);
        $this->load->view('templates/footer');

        // Clase que coloca los men sajes en Nulos
        $this->mymsg->setblanco();

    }


    public function validar() {

        // Controlador Nombre
        $data['controlador'] = 'VALIDAR_LOGIN';
        
        // Titulo de la Pagina
        $data['title'] = 'VALIDAR LOGIN: Aulas Cursos YA';

        // Validar el Formulario de Login
        $usuario = $this->input->post('username');
        $clave = $this->input->post('password');
        $msgerror = '';

        if ( !isset($usuario) ) { 
            $msgerror = $msgerror . '<li>El correo no puede estar vacio</li>'; 
        }
        if ($usuario === ''){
            $msgerror = $msgerror . '<li>El correo no puede estar vacio</li>';    
        }

        if ( !isset($clave) ) { 
            $msgerror = $msgerror . '<li>La Clave no puede estar vacia</li>'; 
        }
        if ( $clave === '' ) { 
            $msgerror = $msgerror . '<li>La Clave no puede estar vacia</li>'; 
        }

        // Catch the user's answer
//        $captcha_answer = $this->input->post('g-recaptcha-response');

        // Verify user's answer
//        $response = $this->recaptcha->verifyResponse($captcha_answer);


        // Processing ...
//        if (!$response['success']) {
//            $msgerror = $msgerror . '<li>El Captcha no esta seleccionado</li>';     
//        }


        if ( strlen( $msgerror ) > 0 ) { 

            $this->session->blogin = 0;

            $this->session->msgdanger = '<br><br>' . $msgerror;
            redirect(site_url("usuario/login/index"));            

        } else {

            $this->session->blogin = 1;

            redirect(site_url("usuario/login/entrada"));            

        }

    }

    
       public function validar1() {

        // Controlador Nombre
        $data['controlador'] = 'VALIDAR_LOGIN';
        
        // Titulo de la Pagina
        $data['title'] = 'VALIDAR LOGIN: Aulas Cursos YA';

        // Validar el Formulario de Login
        $usuario = $this->input->get('username');
        $clave = $this->input->get('password');
        $msgerror = '';

        if ( !isset($usuario) ) { 
            $msgerror = $msgerror . '<li>El correo no puede estar vacio</li>'; 
        }
        if ($usuario === ''){
            $msgerror = $msgerror . '<li>El correo no puede estar vacio</li>';    
        }

        if ( !isset($clave) ) { 
            $msgerror = $msgerror . '<li>La Clave no puede estar vacia</li>'; 
        }
        if ( $clave === '' ) { 
            $msgerror = $msgerror . '<li>La Clave no puede estar vacia</li>'; 
        }

//        // Catch the user's answer
//        $captcha_answer = $this->input->post('g-recaptcha-response');
//
//        // Verify user's answer
//        $response = $this->recaptcha->verifyResponse($captcha_answer);


        // Processing ...
//        if (!$response['success']) {
//            $msgerror = $msgerror . '<li>El Captcha no esta seleccionado</li>';     
//        }


        if ( strlen( $msgerror ) > 0 ) { 

            $this->session->blogin = 0;

            $this->session->msgdanger = '<br><br>' . $msgerror;
            redirect(site_url("usuario/login/index"));            

        } else {

            $this->session->blogin = 1;

            redirect(site_url("usuario/login/entrada"));            

        }

    }
 
    
}

?>
