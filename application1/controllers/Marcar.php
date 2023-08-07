<?php

class Marcar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/auth-login', $data);
    }
    
    public function marcar()
    {

        $data['nb_empleado'] = $_SESSION["nb_empleado"];
        $data['id_empleado'] = $_SESSION["id_empleado"];

        $sql = "SELECT jornada.id AS id_jornada, CONCAT(obras.descripcion, ' / ' , jornada.fe_jornada ) As descripcion FROM jornada, obras WHERE jornada.id_obra = obras.id AND jornada.in_abierto = 1 order BY jornada.fe_jornada asc";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        foreach ($datos as $news_item) {
            $keys[] = $news_item['id_jornada'];
            $values[] = $news_item['descripcion'];
        }
        $data_usuarios = array_combine($keys, $values);
        unset($keys);
        unset($values);
        $data["sel_jornada"] = form_dropdown('id_jornada', $data_usuarios, '1');

        $sql = "SELECT * FROM actividades;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        foreach ($datos as $news_item) {
            $keys[] = $news_item['id'];
            $values[] = $news_item['descripcion'];
        }
        $data_usuarios = array_combine($keys, $values);
        unset($keys);
        unset($values);
        $data["sel_actividades"] = form_dropdown('id_actividad', $data_usuarios, '1');

        $DateAndTime = date('Y-m-d h:i:s', time());  
        $data["DateAndTime"] = $DateAndTime;

        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu1', $data, true);
        $data["cuerpo"] = $this->load->view('marcaje/marcar', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }
	
    public function consultar()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu1', $data, true);
        $data["cuerpo"] = $this->load->view('marcaje/consulta', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }


    public function marcaje()
    {

        $tabla = "";
        $codigo = "";
        $valor = "";
        $campo = "";

        $codigo = 'id';
        $tabla = "jornada_empleado";

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
            'fe_jornada' => $_POST['fe_marcaje'],
            'id_jornada' => $_POST['id_jornada'],
            'id_empleado' => $_SESSION["id_empleado"],
            'id_actividad' => $_POST['id_actividad'],
            'in_estado' => 1
       );

 

        $this->db->insert($tabla, $data);

        $this->registrado();

    }

    public function registrado()
    {
        $data["titulo"] = "";
        $data["menu"] = $this->load->view('layout/menu1', $data, true);
        $data["cuerpo"] = $this->load->view('marcaje/registrado', $data, true);
        $this->load->view('login/layout-top-navigation', $data);
    }


}

?>
