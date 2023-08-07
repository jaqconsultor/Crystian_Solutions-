<?php

class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        // Controlador Nombre
        $data['controlador'] = 'servicios';
        
        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('contenido/servicios', $data);
        $this->load->view('templates/footer');
    }

}

?>
