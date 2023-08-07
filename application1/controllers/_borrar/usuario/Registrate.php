<?php

class Registrate extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        // Controlador Nombre
        $data['controlador'] = 'INICIO';
        
        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('usuario/registrate', $data);
        $this->load->view('templates/footer');
    }

}

?>
