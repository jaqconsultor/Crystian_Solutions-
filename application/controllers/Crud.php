<?php

class Crud extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/auth-login', $data);
    }
    
    public function crudclientes()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('crud/clientes', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	

    public function crudobras()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('crud/obras', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	
    public function crudempleados()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('crud/empleados', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function crudactividades()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('crud/actividades', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

}

?>
