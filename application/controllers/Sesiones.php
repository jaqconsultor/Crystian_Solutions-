<?php

class Sesiones extends CI_Controller
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

        $sql = "SELECT * FROM obras;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        foreach ($datos as $news_item) {
            $keys[] = $news_item['id'];
            $values[] = $news_item['descripcion'];
        }
        $data_usuarios = array_combine($keys, $values);
        unset($keys);
        unset($values);
        $data["sel_obras"] = form_dropdown('id_obra', $data_usuarios, '1');

        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/abrir', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	
    public function cerrar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $sql = "SELECT * FROM periodos WHERE in_abierto = 0";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $tx_tabla = "";
        foreach ($datos as $value) {
            $tx_tabla  = $tx_tabla . "<tr>";
            $tx_tabla  = $tx_tabla . "<th scope='row'>".$value['id']."</th>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['fe_desde'] . "</td>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['fe_hasta'] . "</td>";
            $d = "Cerrado";
            if( $value['in_abierto'] == 0 ) {
                $d = "Abierto";
            }
            $tx_tabla  = $tx_tabla . "<td>" . $d . "</td>";
            $tx_tabla  = $tx_tabla . '<td><a type="button" class="btn btn-danger" href="'.site_url('sesiones/cerrarsesion').'/'.$value['id'].'">Cerrar</a></td>';
            $tx_tabla  = $tx_tabla . "</tr>";
        }
        
        $tx_datos = $tx_tabla;
        $data["tx_datos"] = $tx_datos;


        $data["cuerpo"] = $this->load->view('periodos/cerrar', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function consultar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);


        $sql = "SELECT periodos.id AS id_periodo, CONCAT(periodos.fe_desde, ' <br> ' , periodos.fe_hasta ) AS tx_periodo, obras.descripcion AS nb_obra, periodos.in_abierto  
from periodos, obras
WHERE 
 periodos.id_obra = obras.id";       
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $tx_tabla  = "";

        foreach ($datos as $value) {
            $tx_tabla  = $tx_tabla . "<tr>";
            $tx_tabla  = $tx_tabla . "<th scope='row'>".$value['id_periodo']."</th>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['tx_periodo'] . "</td>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['nb_obra'] . "</td>";
            $d = "Cerrado";
            if( $value['in_abierto'] == 0 ) {
                $d = "Abierto";
            }
            if( $value['in_abierto'] == 3 ) {
                $d = "Calculado";
            }
            $tx_tabla  = $tx_tabla . "<td>" . $d . "</td>";
            $tx_tabla  = $tx_tabla . "</tr>";
        }
        
        $tx_datos = $tx_tabla;
        $data["tx_datos"] = $tx_datos;

        $data["cuerpo"] = $this->load->view('periodos/sesiones', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function calculo()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/calculo', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function abierto()
    {
        // Buscar todos los Empleados de la Obra y Colocar su Cantidad de Horas Calculadas

        $sql = "delete from periodos_calculos ";
    $query = $this->db->query($sql);

// Query Para detectar los marcajes del empleado

$sql1 = "
SELECT  jornada_empleado.fe_jornada, periodos.id AS id_periodo,
empleados.id as id_empleado, empleados.descripcion AS nb_empleado
from jornada_empleado, jornada, periodos, empleados 
WHERE jornada.id_obra = periodos.id_obra AND 
jornada_empleado.id_empleado = empleados.id  
AND jornada_empleado.id_jornada = jornada.id 
and periodos.in_abierto = 0 
AND empleados.id = 1
AND periodos.id = 8
ORDER BY jornada_empleado.fe_jornada
";    

// Query para Detectar los Empleados asociados a la jornada y el periodo y la obra 
$sql = "
SELECT  
periodos.id AS id_periodo,  
empleados.id as id_empleado
from jornada_empleado, jornada, periodos, empleados 
WHERE jornada.id_obra = periodos.id_obra AND 
jornada_empleado.id_empleado = empleados.id  
AND jornada_empleado.id_jornada = jornada.id 
and periodos.in_abierto = 0
GROUP BY periodos.id,  
empleados.id
";    

        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $ca_horas = 0;
        $ca_horas = $ca_horas + 1; 

        $codigo = 'id';
        $tabla = "periodos_calculos";

        foreach ($datos as $value) {

            $this->db->select_max($codigo);
            $query = $this->db->get($tabla);
            $datos = $query->result_array();
            $id = 0;
            foreach ($datos as $news_item) {
                $id = $news_item[$codigo];
            }
            if( !isset( $id ) )
            {
                $id = 1;
            } else {
                $id = $id + 1;
            }


            $ca_horas = $this->calculoh( $value['id_empleado'], $value['id_periodo'] );


            $data = array(
                'id' => $id,
                'id_periodo' => $value['id_periodo'],
                'id_empleado' => $value['id_empleado'],
                'ca_horas' => $ca_horas
            );

            $ca_horas = $ca_horas + 1;

            $this->db->insert($tabla, $data);

        }



        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/abierto', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function agregarperiodo()
    {

        $tabla = "";
        $codigo = "";
        $valor = "";
        $campo = "";

        $codigo = 'id';
        $tabla = "periodos";

        $this->db->select_max($codigo);
        $query = $this->db->get($tabla);
        $datos = $query->result_array();
        $id = 0;
        foreach ($datos as $news_item) {
            $id = $news_item[$codigo];
        }
        if( !isset( $id ) )
        {
            $id = 1;
        } else {
            $id = $id + 1;
        }


          $data = array(

            'id' => $id,

           'fe_desde' => $_POST['fe_desde'],
           'fe_hasta' => $_POST['fe_hasta'],

            'id_obra' => $_POST['id_obra'],

            'in_abierto' => 0

        );

 

        $this->db->insert($tabla, $data);

        $this->abierto();

    }

    public function cerrarsesion($id)
    {

        $sql = "UPDATE periodos ";
        $sql = $sql . " SET in_abierto = 1";
        $sql = $sql . " WHERE id = " . $id;

    $query = $this->db->query($sql);

    $this->cerrada();

    }

    public function cerrada()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('periodos/cerrada', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function calculoh( $id_empleado = 0, $id_periodo = 0 )
    {

        $sql1 = "
        SELECT  jornada_empleado.fe_jornada, periodos.id AS id_periodo,
        empleados.id as id_empleado, empleados.descripcion AS nb_empleado
        from jornada_empleado, jornada, periodos, empleados 
        WHERE jornada.id_obra = periodos.id_obra AND 
        jornada_empleado.id_empleado = empleados.id  
        AND jornada_empleado.id_jornada = jornada.id 
        and periodos.in_abierto = 0 
        AND empleados.id = " . $id_empleado . "
        AND periodos.id = ". $id_periodo . "
        ORDER BY jornada_empleado.fe_jornada
        "; 

        $query = $this->db->query($sql1);
        $datos = $query->result_array();


        $f1 = "";
        $f2 = "";
        $par = 1;
        $hours = 0;
        foreach ($datos as $value) {
            if( $par == 1 ) {
                $f1 = $value['fe_jornada'];
                $f2 = "";
            }
            if( $par == 2 ) {
                $f2 = $value['fe_jornada'];
            }

            if( $par == 2 ) {
                $hours = $hours + $this->diferencia( $f1, $f2 );
                $par = 0;        
            }
                $par = $par + 1;

        }

        return $hours;
    }


    public function diferencia( $desde, $hasta )
    {
        $start = new \DateTime( $desde );
        $end = new \DateTime( $hasta );
        $interval = new \DateInterval('PT1H');
        $periods = new \DatePeriod($start, $interval, $end);
        $hours = iterator_count($periods);
        $diff = $end->getTimestamp() - $start->getTimestamp();
        $hours = $diff / ( 60 * 60 );
        return $hours;
    }

}

?>
