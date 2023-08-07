<?php

class Aulas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Query_model');
    }

    public function index()
    {

        // Leer Datos del Query
        $data['datos'] = $this->Query_model->get_materias();
        $data['datos_j'] = json_encode($this->Query_model->get_materias());
        $data['datos_j'] = '{ "data": ' . $data['datos_j'] . ' } ';

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $data['Lista'] = $this->load->view('contenido/alista', $data, true);
        //$data['Formulario'] = $this->load->view('contenido/aforma', $data, true);
        //$data['Filtro'] = $this->load->view('contenido/afiltro', $data, true);
        //$data['Nuevo'] = $this->load->view('contenido/anuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/aulasp', $data);
        $this->load->view('templates/footer');
    }

    public function aulaspj()
    {
        // $data['datos_j'] = json_encode($this->Query_model->get_materias());
        // $data['datos_j'] = '{ "data": ' . $data['datos_j'] . ' } ';
        // $cars = array("Volvo", "BMW", "Toyota");
        $sql = "SELECT * from evalua_matematicas0;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $cars = array();
        $j = 0;
        
        
        // /contenido/aulas/enunciados
//<button onclick='mostrardatos(" . $item["id"] . ")' type='button' class='btn btn-danger'>Quitar</button>

        
        
        foreach ($datos as $item) {
            $cars[$j] = array(
                "<a href='" . site_url('/contenido/aulas/enunciados') . "/" . $item["id"] . "'> Ver Enunciados </a>",
                $item["id"],
                $item["nb_evaluacion"],
                $item["tx_imagen"],
                $item["fe_inicio"],
                $item["fe_final"],
                $item["ca_puntaje"],
                ""
            );
            $j = $j + 1;
        }

        $data['datos_j'] = '{ "data": ';
        $data['datos_j'] = $data['datos_j'] . json_encode($cars);
        $data['datos_j'] = $data['datos_j'] . ' } ';

        return $this->load->view('djson', $data);
    }

    public function capitulos( $mat = 0 )
    {

        // Leer Datos del Query
        $sql = 'SELECT m.* FROM materias_capitulos m where cod_area = ' . $mat . ' order by m.cod_capitulo';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $data['mat'] = $mat;
        $data['Lista'] = $this->load->view('contenido/clista', $data, true);
        $data['Formulario'] = $this->load->view('contenido/cforma', $data, true);
        $data['Filtro'] = $this->load->view('contenido/cfiltro', $data, true);
        $data['Nuevo'] = $this->load->view('contenido/cnuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/capitulos', $data);
        $this->load->view('templates/footer');
    }

    public function temas( $mat = 0, $cap = 0 )
    {

        $data['mat'] = $mat;
        $data['cap'] = $cap;

        // Leer Datos del Query
        $sql = 'SELECT m.* FROM tema_videos_ejercicios m where cod_area = ' . $mat . ' and cod_capitulo = ' . $cap . ' order by m.cod_tema';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $data['Lista'] = $this->load->view('contenido/tlista', $data, true);
        $data['Formulario'] = $this->load->view('contenido/tforma', $data, true);
        $data['Filtro'] = $this->load->view('contenido/tfiltro', $data, true);
        $data['Nuevo'] = $this->load->view('contenido/tnuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/temas', $data);
        $this->load->view('templates/footer');
    }

    public function evaluacion()
    {

        // Leer Datos del Query
        $sql = 'SELECT m.* FROM evalua_matematicas0 m order by m.id';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $campos = array(
            "Codigo",
            "Nombre Evaluaci�n",
            "Archivo Imagen",
            "Fecha Inicio",
            "Fecha Final",
            "Puntaje"
        );

        $data["campos"] = $campos;

        $data['Lista'] = $this->load->view('contenido/elista', $data, true);
        $data['Formulario'] = $this->load->view('contenido/eforma', $data, true);
        $data['Filtro'] = $this->load->view('contenido/efiltro', $data, true);
        $data['Nuevo'] = $this->load->view('contenido/enuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/evaluacion', $data);
        $this->load->view('templates/footer');
    }

    public function eva_insertar()
    {
        $sql = "SELECT MAX(id) AS id from evalua_matematicas0;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $id = 0;
        foreach ($datos as $item) {
            $id = $item["id"];
        }
        $id ++;

        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $tx_imagen = $this->input->post('tx_imagen');
        $fe_inicio = $this->input->post('fe_inicio');
        $fe_final = $this->input->post('fe_final');
        $ca_puntaje = $this->input->post('ca_puntaje');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'fe_inicio' => $fe_inicio,
            'fe_final' => $fe_final,
            'tx_imagen' => $tx_imagen,
            'ca_puntaje' => $ca_puntaje
        );
        $str = $this->db->insert_string('evalua_matematicas0', $data);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        //$this->load->view('si', $data);
        redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function eva_guardar()
    {

 setlocale(LC_TIME, "es_ES");
        $fe_informacion = strftime("%Y/%m/%d %H:%M:%S");

        $fe_archivo = strftime("%Y_%m_%d");
        $data['fe_informacion'] = $fe_informacion;
		
        $id = $this->input->post('codigo');
        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $userfile = $this->input->post('userfile');
        $fe_inicio = $this->input->post('fe_inicio');
        $fe_final = $this->input->post('fe_final');
        $ca_puntaje = $this->input->post('ca_puntaje');

        $config['upload_path'] = "./uploads/";
        $config['file_name'] = $fe_archivo . "_nombre_archivo";
        $config['allowed_types'] = 'pdf|jpg|png';
		
		
        //Se pueden configurar aun mas parámetros.
        //Cargamos la librería de subida y le pasamos la configuración 
        $this->load->library('upload', $config);

        $archivo = "";

        if (!$this->upload->do_upload('userfile')) {

            $error = array('error' => $this->upload->display_errors());

            /* 				foreach ($error as $item => $value) {
              echo $item . "-" . $value . "<br>";
              }


              die(); */
        } else {

            $data1 = array('upload_data' => $this->upload->data());
            /*
              [file_name]     => mypic.jpg
              [file_type]     => image/jpeg
              [file_path]     => /path/to/your/upload/
              [full_path]     => /path/to/your/upload/jpg.jpg
              [raw_name]      => mypic
              [orig_name]     => mypic.jpg
              [client_name]   => mypic.jpg
              [file_ext]      => .jpg
              [file_size]     => 22.2
              [is_image]      => 1
              [image_width]   => 800
              [image_height]  => 600
              [image_type]    => jpeg
              [image_size_str] => width="800" height="200"
             */

//				echo $this->upload->data('file_name');

            $archivo = $this->upload->data('userfile');
        }		
		
		
        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'fe_inicio' => $fe_inicio,
            'fe_final' => $fe_final,
            'userfile' => $archivo,
            'ca_puntaje' => $ca_puntaje
        );
        $where = "id = " . $id;
        $str = $this->db->update_string('evalua_matematicas0', $data, $where);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function eva_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas0 where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function sqls()
    {

        // $this->load->library('Class_QDB');

        // Leer Datos del Query
        $sql = 'SELECT * FROM [dbo].[aereolineas]';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $campos = array(
            "Codigo",
            "Nombre Evaluaci�n",
            "Archivo Imagen",
            "Fecha Inicio",
            "Fecha Final",
            "Puntaje"
        );

        $data["campos"] = $campos;

        // $data['Lista'] = $this->load->view('contenido/elista', $data, true);
        // $data['Formulario'] = $this->load->view('contenido/eforma', $data, true);
        // $data['Filtro'] = $this->load->view('contenido/efiltro', $data, true);
        // $data['Nuevo'] = $this->load->view('contenido/enuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/sqls.php', $data);
        $this->load->view('templates/footer');
    }

    public function enunciados( $evalua = 0)
    {

        // Leer Datos del Query
        $sql = 'SELECT m.* FROM evalua_matematicas m where id_evalua_mat0 = ' . $evalua . ' order by m.id';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $campos = array(
            "Codigo",
            "Enunciado",
            "Archivo Imagen"
        );

        
        $data["evalua"] = $evalua;
        $data["campos"] = $campos;

        $data['Lista'] = $this->load->view('contenido/enlista', $data, true);
        // $data['Formulario'] = $this->load->view('contenido/eforma', $data, true);
        // $data['Filtro'] = $this->load->view('contenido/efiltro', $data, true);

        $data['Nuevo'] = $this->load->view('contenido/ennuevo', $data, true);
        $data['Mod'] = $this->load->view('contenido/ennuevom', $data, true);
        $data['Eli'] = $this->load->view('contenido/ennuevoe', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        
		$this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        
        $this->parser->parse('contenido/enunciado', $data);
        
		$this->load->view('templates/footer');
    }

    public function enpj( $evalua = 0 )
    {
        // $data['datos_j'] = json_encode($this->Query_model->get_materias());
        // $data['datos_j'] = '{ "data": ' . $data['datos_j'] . ' } ';
        // $cars = array("Volvo", "BMW", "Toyota");
        $sql = "SELECT m.* FROM evalua_matematicas m where id_evalua_mat0 = " . $evalua . " order by m.id";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $cars = array();
        $j = 0;

//<button onclick='mostrardatos(" . $item["id"] . ")' type='button' class='btn btn-danger'>Quitar</button>

        foreach ($datos as $item) {
            $cars[$j] = array(
                "<a href='" . site_url('/contenido/aulas/respuestas') . "/" . $item["id"] . "'> Ver Respuestas </a>",
                $item["id"],
                $item["nb_evaluacion"],
                $item["tx_imagen"],
                ""
            );
            $j = $j + 1;
        }

        $data['datos_j'] = '{ "data": ';
        $data['datos_j'] = $data['datos_j'] . json_encode($cars);
        $data['datos_j'] = $data['datos_j'] . ' } ';

        return $this->load->view('djson', $data);
    }

    public function evan_insertar()
    {
        $sql = "SELECT MAX(id) AS id from evalua_matematicas;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $id = 0;
        foreach ($datos as $item) {
            $id = $item["id"];
        }
        $id ++;

        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $tx_imagen = $this->input->post('tx_imagen');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'tx_imagen' => $tx_imagen,
            'id_evalua_mat0' => 1
        );
        $str = $this->db->insert_string('evalua_matematicas', $data);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function evan_guardar()
    {
        $id = $this->input->post('codigo');
        $nb_evaluacion = $this->input->post('nb_evaluacion');
        $tx_imagen = $this->input->post('tx_imagen');

        $data = array(
            'id' => $id,
            'nb_evaluacion' => $nb_evaluacion,
            'tx_imagen' => $tx_imagen
        );
        $where = "id = " . $id;
        $str = $this->db->update_string('evalua_matematicas', $data, $where);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function evan_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    // ///////////////////////////////////
    public function respuestas( $evalua = 0 )
    {

        // Leer Datos del Query
        $sql = 'SELECT m.* FROM evalua_matematicas_resp m where id_evalua_matematicas = ' . $evalua .' order by m.id';
        $query = $this->db->query($sql);
        $data['datos'] = $query->result_array();

        // Controlador Nombre
        $data['controlador'] = 'aulas';

        // Titulo de la Pagina
        $data['title'] = 'INICIO: Aulas Cursos YA';

        $campos = array(
            "id",
            "Orden",
            "# Pregunta",
            "SIgno",
            "Valor Respuesta",
            "Potencia (SI/NO)",
            "in_notacion",
            "Respuesta Notación ",
            "Unidad de Medida",
            "Diferencia",
            "Puntaje"
        );

        $fcampos = array(
            "id",
            "nu_orden",
            "nb_acronym",
            "tx_signo",
            "nu_valor_respuesta",
            "in_potencia",
            "in_notacion",
            "nu_resp_notac",
            "tx_unidad_medidad",
            "nu_diferencia",
            "nu_puntaje"
        );
        
        $data["evalua"] = $evalua;
        $data["campos"] = $campos;
        $data["fcampos"] = $fcampos;

        $data['Lista'] = $this->load->view('contenido/relista', $data, true);
        // $data['Formulario'] = $this->load->view('contenido/eforma', $data, true);
        // $data['Filtro'] = $this->load->view('contenido/efiltro', $data, true);
        $data['Nuevo'] = $this->load->view('contenido/renuevo', $data, true);

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        // $this->load->view('contenido/aulas', $data);
        $this->parser->parse('contenido/respuestas', $data);
        $this->load->view('templates/footer');
    }

    public function resppj( $evalua = 0 )
    {
        // $data['datos_j'] = json_encode($this->Query_model->get_materias());
        // $data['datos_j'] = '{ "data": ' . $data['datos_j'] . ' } ';
        // $cars = array("Volvo", "BMW", "Toyota");
        $sql = "SELECT m.* FROM evalua_matematicas_resp m where id_evalua_matematicas = " . $evalua . " order by m.id";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $cars = array();
        $j = 0;

// <button onclick='mostrardatos(" . $item["id"] . ")' type='button' class='btn btn-danger'>Quitar</button>

        foreach ($datos as $item) {
            $cars[$j] = array(
                "",
                $item["id"],
                $item["nu_orden"],
                $item["nb_acronym"],
                $item["tx_signo"],
                $item["nu_valor_respuesta"],
                $item["in_potencia"],
                $item["in_notacion"],
                $item["nu_resp_notac"],
                $item["tx_unidad_medidad"],
                $item["nu_diferencia"],
                $item["nu_puntaje"],
                ""
            );
            $j = $j + 1;
        }

        $data['datos_j'] = '{ "data": ';
        $data['datos_j'] = $data['datos_j'] . json_encode($cars);
        $data['datos_j'] = $data['datos_j'] . ' } ';

        return $this->load->view('djson', $data);
    }

    public function resp_insertar()
    {
        $sql = "SELECT MAX(id) AS id from evalua_matematicas_resp;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();

        $id = 0;
        foreach ($datos as $item) {
            $id = $item["id"];
        }
        $id ++;

        $fcampos = array(
            "id",
            "nu_orden",
            "nb_acronym",
            "tx_signo",
            "nu_valor_respuesta",
            "in_potencia",
            "in_notacion",
            "nu_resp_notac",
            "tx_unidad_medidad",
            "nu_diferencia",
            "nu_puntaje"
        );

        $id_evalua_matematicas = 1;
        $nu_orden = $this->input->post('nu_orden');
        $nb_acronym = $this->input->post('nb_acronym');
        $tx_signo = $this->input->post('tx_signo');
        $nu_valor_respuesta = $this->input->post('nu_valor_respuesta');
        $in_potencia = $this->input->post('in_potencia');
        $in_notacion = $this->input->post('in_notacion');
        $tx_unidad_medidad = $this->input->post('tx_unidad_medidad');
        $nu_puntaje = $this->input->post('nu_puntaje');
        $nu_diferencia = $this->input->post('nu_diferencia');
        $nu_resp_notac = $this->input->post('nu_resp_notac');
        
        $data = array(
            'id' => $id,
            'id_evalua_matematicas' => 1,
            'nu_orden' => $nu_orden,
            'nb_acronym' => $nb_acronym,
            'tx_signo' => $tx_signo,
            'nu_valor_respuesta' => $nu_valor_respuesta,
            'in_potencia' => $in_potencia,
            'in_notacion' => $in_notacion,
            'nu_resp_notac' => $nu_resp_notac,
            'tx_unidad_medidad' => $tx_unidad_medidad,
            'nu_diferencia' => $nu_diferencia,
            'nu_puntaje' => $nu_puntaje
        );

        
        $str = $this->db->insert_string('evalua_matematicas_resp', $data);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function resp_guardar()
    {
        $id = $this->input->post('codigo');
        
        $fcampos = array(
            "id",
            "nu_orden",
            "nb_acronym",
            "tx_signo",
            "nu_valor_respuesta",
            "in_potencia",
            "in_notacion",
            "nu_resp_notac",
            "tx_unidad_medidad",
            "nu_diferencia",
            "nu_puntaje"
        );
        
        $id_evalua_matematicas = 1;
        $nu_orden = $this->input->post('nu_orden');
        $nb_acronym = $this->input->post('nb_acronym');
        $tx_signo = $this->input->post('tx_signo');
        $nu_valor_respuesta = $this->input->post('nu_valor_respuesta');
        $in_potencia = $this->input->post('in_potencia');
        $in_notacion = $this->input->post('in_notacion');
        $tx_unidad_medidad = $this->input->post('tx_unidad_medidad');
        $nu_puntaje = $this->input->post('nu_puntaje');
        $nu_diferencia = $this->input->post('nu_diferencia');
        $nu_resp_notac = $this->input->post('nu_resp_notac');
        
        $data = array(
            'id' => $id,
            'id_evalua_matematicas' => 1,
            'nu_orden' => $nu_orden,
            'nb_acronym' => $nb_acronym,
            'tx_signo' => $tx_signo,
            'nu_valor_respuesta' => $nu_valor_respuesta,
            'in_potencia' => $in_potencia,
            'in_notacion' => $in_notacion,
            'nu_resp_notac' => $nu_resp_notac,
            'tx_unidad_medidad' => $tx_unidad_medidad,
            'nu_diferencia' => $nu_diferencia,
            'nu_puntaje' => $nu_puntaje
        );
        
        $where = "id = " . $id;
        $str = $this->db->update_string('evalua_matematicas_resp', $data, $where);
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        //$this->load->view('si', $data);
        echo $str;
        // redirect(site_url("contenido/aulas/evaluacion"));
    }

    public function resp_quitar()
    {
        $id = $this->input->post('codigo');
        $str = 'delete from evalua_matematicas_resp where id = ' . $id;
        $query = $this->db->query($str);

        $data['valor'] = 'ok';
        $this->load->view('si', $data);
        // redirect(site_url("contenido/aulas/evaluacion"));
    }
}

?>
