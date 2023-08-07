<?php

class Edocuenta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/auth-login', $data);
    }
    
    public function abrir()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/abrir', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	
    public function cerrar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/cerrar', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function consultar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $data["tx_cabecera"] = '
                        <th scope="col">#</th>
                          <th scope="col">Rango Periodo</th>
                          <th scope="col">Obra</th>
                          <th scope="col">Empleado</th>
                          <th scope="col">Cantidad Horas</th>
        ';


$sql = "
SELECT periodos_calculos.id_periodo, CONCAT(periodos.fe_desde, ' <br> ' , periodos.fe_hasta ) AS tx_periodo, obras.descripcion AS nb_obra, periodos_calculos.id_empleado, empleados.descripcion AS nb_empleado, SUM( periodos_calculos.ca_horas ) AS ca_horas  
from periodos_calculos, periodos, empleados, obras
WHERE periodos.id = periodos_calculos.id_periodo 
AND empleados.id = periodos_calculos.id_empleado
AND periodos.id_obra = obras.id
GROUP BY periodos_calculos.id_periodo, periodos_calculos.id_empleado
";          
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $tx_datos = "";
        foreach ($datos as $value) {

                $tx_datos = $tx_datos .'<tr>';
                $tx_datos = $tx_datos .'<th scope="row">'.$value['id_periodo'].'</th>';
                $tx_datos = $tx_datos .'<td>'.$value['tx_periodo'].'</td>';
                $tx_datos = $tx_datos .'<td>'.$value['nb_obra'].'</td>';
                $tx_datos = $tx_datos .'<td>'.$value['nb_empleado'].'</td>';
                $tx_datos = $tx_datos .'<td>'.$value['ca_horas'].'</td>';
                $tx_datos = $tx_datos .'</tr>';

        }

        $data["tx_datos"] = $tx_datos;

        $data["cuerpo"] = $this->load->view('edocuenta/edoempleados', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function calculo()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/calculo', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }


}

?>
