<?php

class Jornada extends CI_Controller
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

        $DateAndTime = date('Y-m-d h:i:s', time());  
//        echo "The current date and time are $DateAndTime.";
        $data["DateAndTime"] = $DateAndTime;


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

/*        $data_gender1 = array(
            'P' => 'Personas',
            'E' => 'Empresa'
            );
        $data["sel_activo1"] = form_dropdown('in_tipo', $data_gender1, 'E');
*/

        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('jornada/abrir', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	
    public function cerrar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);


        $sql = "SELECT jornada.id as id_jornada, jornada.fe_jornada, obras.descripcion, jornada.in_abierto FROM jornada, obras WHERE in_abierto = 1 and jornada.id_obra = obras.id";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        
        $tx_tabla  = "";
        foreach ($datos as $value) {
            $tx_tabla  = $tx_tabla . "<tr>";
            $tx_tabla  = $tx_tabla . "<th scope='row'>".$value['id_jornada']."</th>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['fe_jornada'] . "</td>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['descripcion'] . "</td>";
            $tx_tabla  = $tx_tabla . "<td>" . "SI" . "</td>";
            $tx_tabla  = $tx_tabla . '<td><a type="button" class="btn btn-danger" href="'.site_url('jornada/cerrarjornada').'/'.$value['id_jornada'].'">Cerrar</a></td>';
            $tx_tabla  = $tx_tabla . "</tr>";
        }
        

        $data["tx_tabla"] = $tx_tabla;
        $data["cuerpo"] = $this->load->view('jornada/cerrar', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function consultar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);


        $sql = "SELECT jornada.id as id_jornada, jornada.fe_jornada, obras.descripcion, jornada.in_abierto FROM jornada, obras WHERE jornada.id_obra = obras.id";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $tx_tabla  = "";

        foreach ($datos as $value) {
            $tx_tabla  = $tx_tabla . "<tr>";
            $tx_tabla  = $tx_tabla . "<th scope='row'>".$value['id_jornada']."</th>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['fe_jornada'] . "</td>";
            $tx_tabla  = $tx_tabla . "<td>" . $value['descripcion'] . "</td>";
            $d = "SI";
            if( $value['in_abierto'] == 0 ) {
                $d = "NO";
            }
            $tx_tabla  = $tx_tabla . "<td>" . $d . "</td>";
            $tx_tabla  = $tx_tabla . "</tr>";
        }
        
        $tx_datos = $tx_tabla;
        $data["tx_datos"] = $tx_datos;

        

        $data["cuerpo"] = $this->load->view('jornada/jornadas', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function abierto()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('jornada/abierto', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
    
    public function cerrada()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        $data["cuerpo"] = $this->load->view('jornada/cerrada', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }

    public function agregarjornada()
    {

        $tabla = "";
        $codigo = "";
        $valor = "";
        $campo = "";

        $codigo = 'id';
        $tabla = "jornada";

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

           'fe_jornada' => $_POST['fe_jornada'],

            'id_obra' => $_POST['id_obra'],

            'in_abierto' => 1

        );

 

        $this->db->insert($tabla, $data);

        $this->abierto();

    }

    public function cerrarjornada($id)
    {

        $sql = "UPDATE jornada ";
        $sql = $sql . " SET in_abierto = 0";
        $sql = $sql . " WHERE id = " . $id;

    $query = $this->db->query($sql);

    $this->cerrada();

    }



}

?>
