<?php

class Fin extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        // Controlador de Final de Sesion
        $data['controlador'] = 'FIN';
        
        // Titulo de la Pagina
        $data['title'] = 'FIN: Aulas Cursos YA';

        // Login en cero
        $_SESSION['blogin'] = 0;

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('fin', $data);
        $this->load->view('templates/footer');
    }

}

?>
