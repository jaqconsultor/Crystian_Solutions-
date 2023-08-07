<?php
class Lista extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
    }

    
    public function index($id_institucion = 0)
    {
        $this->lista_lista($id_institucion = 0);
    }


    public function lista_lista($id_institucion = 0)
    {

        $id = 0;

        $titulo_datos = "";

        $botona = "Agregar";
        $urla = "";

        $titulo = "Titulo de la Consulta";
        $boton0 = "Seleccionar";
        $url0 = "";

        $botonm = "Modificar";
        $urlm = "";

        $botone = "Eliminar";
        $urle = "";

        $botonr = "Regresar";
        $urlr = "";

        $id_table = "table-10";
        if( $id_institucion == 1 ) {
                $titulo = "Clientes";
                $id_table = "table-10";
                $boton0 = "";
                $urlr = site_url('institucion');
                $id = $id_institucion;
                $urle = "";
                $urla = site_url('lista/agregar/'. $id . '/' . $id_institucion );

                $sql = "SELECT * from clientes";
                $query = $this->db->query($sql);
                $datos = $query->result_array();

                $titulo_datos = "";
                $titulo_datos = $titulo_datos . '<th>' . 'Opciones' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Id' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Descripcion' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Acciones' . '</th>';

                $tx_datos = "";
                foreach ($datos as $value) {

                    $codigo = $value['id'];
                    //if( $id_institucion = 1 ) {
                        $url0 = site_url('lista/lista_lista/'.$id_institucion.'/'.$codigo);
                    //}

                    $urle = site_url('lista/borrar/'.$codigo.'/'.$id_institucion);

                    $tx_datos = $tx_datos . '<td>' ;
                    //. '<a type="button" class="btn btn-info" href="'.$url0.'">'.$boton0.'</a>' . '</td>';
                    $tx_datos = $tx_datos . '<th>' . $value['id'] . '</th>';
                    $tx_datos = $tx_datos . '<th>' . $value['descripcion'] . '</th>';
                    $tx_datos = $tx_datos . '<td>' . 
                   // '<a type="button" class="btn btn-primary" href="'.$urlm.'">'.$botonm.'</a>' .
                    '<a type="button" class="btn btn-danger" href="'.$urle.'">'.$botone.'</a>';
                    $tx_datos = $tx_datos . '</tr>';                    

                }

        }

        if( $id_institucion == 2 ) {
                $titulo = "Obras";
                $id_table = "table-10";
                $boton0 = "";
                $urlr = site_url('institucion');
                $id = $id_institucion;
                $urle = "";
                $urla = site_url('lista/agregar/'. $id . '/' . $id_institucion );

                $sql = "SELECT * from obras";
                $query = $this->db->query($sql);
                $datos = $query->result_array();

                $titulo_datos = "";
                $titulo_datos = $titulo_datos . '<th>' . 'Opciones' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Id' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Descripcion' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Acciones' . '</th>';

                $tx_datos = "";
                foreach ($datos as $value) {

                    $codigo = $value['id'];
                    //if( $id_institucion = 1 ) {
                        $url0 = site_url('lista/lista_lista/'.$id_institucion.'/'.$codigo);
                   // }

                    $urle = site_url('lista/borrar/'.$codigo.'/'.$id_institucion);

                    $tx_datos = $tx_datos . '<td>' ;
                    //. '<a type="button" class="btn btn-info" href="'.$url0.'">'.$boton0.'</a>' . '</td>';
                    $tx_datos = $tx_datos . '<th>' . $value['id'] . '</th>';
                    $tx_datos = $tx_datos . '<th>' . $value['descripcion'] . '</th>';
                    $tx_datos = $tx_datos . '<td>' . 
                   // '<a type="button" class="btn btn-primary" href="'.$urlm.'">'.$botonm.'</a>' .
                    '<a type="button" class="btn btn-danger" href="'.$urle.'">'.$botone.'</a>';
                    $tx_datos = $tx_datos . '</tr>';                    

                }

        }

        if( $id_institucion == 3 ) {
                $titulo = "Actividades";
                $id_table = "table-10";
                $boton0 = "";
                $urlr = site_url('institucion');
                $id = $id_institucion;
                $urle = "";
                $urla = site_url('lista/agregar/'. $id . '/' . $id_institucion );

                $sql = "SELECT * from actividades";
                $query = $this->db->query($sql);
                $datos = $query->result_array();

                $titulo_datos = "";
                $titulo_datos = $titulo_datos . '<th>' . 'Opciones' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Id' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Descripcion' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Acciones' . '</th>';

                $tx_datos = "";
                foreach ($datos as $value) {

                    $codigo = $value['id'];
                   // if( $id_institucion = 1 ) {
                        $url0 = site_url('lista/lista_lista/'.$id_institucion.'/'.$codigo);
                   // }

                    $urle = site_url('lista/borrar/'.$codigo.'/'.$id_institucion);

                    $tx_datos = $tx_datos . '<td>' ;
                    //. '<a type="button" class="btn btn-info" href="'.$url0.'">'.$boton0.'</a>' . '</td>';
                    $tx_datos = $tx_datos . '<th>' . $value['id'] . '</th>';
                    $tx_datos = $tx_datos . '<th>' . $value['descripcion'] . '</th>';
                    $tx_datos = $tx_datos . '<td>' . 
                   // '<a type="button" class="btn btn-primary" href="'.$urlm.'">'.$botonm.'</a>' .
                    '<a type="button" class="btn btn-danger" href="'.$urle.'">'.$botone.'</a>';
                    $tx_datos = $tx_datos . '</tr>';                    

                }

        }

        if( $id_institucion == 4 ) {
                $titulo = "Empleados";
                $id_table = "table-10";
                $boton0 = "";
                $urlr = site_url('institucion');
                $id = $id_institucion;
                $urle = "";
                $urla = site_url('lista/agregar/'. $id . '/' . $id_institucion );

                $sql = "SELECT * from empleados";
                $query = $this->db->query($sql);
                $datos = $query->result_array();

                $titulo_datos = "";
                $titulo_datos = $titulo_datos . '<th>' . 'Opciones' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Id' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Nombre del Empleado' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Correo' . '</th>';
                $titulo_datos = $titulo_datos . '<th>' . 'Acciones' . '</th>';

                $tx_datos = "";
                foreach ($datos as $value) {

                    $codigo = $value['id'];
                    //if( $id_institucion = 1 ) {
                        $url0 = site_url('lista/lista_lista/'.$id_institucion.'/'.$codigo);
                    //}

                    $urle = site_url('lista/borrar/'.$codigo.'/'.$id_institucion);

                    $tx_datos = $tx_datos . '<td>' ;
                    //. '<a type="button" class="btn btn-info" href="'.$url0.'">'.$boton0.'</a>' . '</td>';
                    $tx_datos = $tx_datos . '<th>' . $value['id'] . '</th>';
                    $tx_datos = $tx_datos . '<th>' . $value['descripcion'] . '</th>';
                    $tx_datos = $tx_datos . '<th>' . $value['correo'] . '</th>';
                    $tx_datos = $tx_datos . '<td>' . 
                   // '<a type="button" class="btn btn-primary" href="'.$urlm.'">'.$botonm.'</a>' .
                    '<a type="button" class="btn btn-danger" href="'.$urle.'">'.$botone.'</a>';
                    $tx_datos = $tx_datos . '</tr>';                    

                }

        }


        $urlr = "javascript:history.back()";

        $datos_table = "";
        //$datos_table = $datos_table . '<a href="'.$urlr.'"><button class="btn btn-primary">'.$botonr.'</button></a>';

      $datos_table = $datos_table . '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">';
      $datos_table = $datos_table . $botona;
      $datos_table = $datos_table . '</button>';
      $datos_table = $datos_table . '<div class="collapse" id="collapseExample">';
      $datos_table = $datos_table . '    <div class="card card-body">';

    $datos_table = $datos_table . '<form action="'.$urla.'" method="post">';

      $datos_table = $datos_table . '<h1>Formulario Agregar</h1>';

        $datos_table = $datos_table . '<input id="id" name="id" type="hidden" value="'.$id.'">';

                    if( $id_institucion == 1 ) {

$datos_table = $datos_table . '
                  <input name="id" type="hidden"   value="'.$id.'" readonly> 
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input id="descripcion" name="descripcion" type="text" class="form-control">
                    </div>
';
                    }

                    if( $id_institucion == 2 ) {

$datos_table = $datos_table . '
                  <input name="id" type="hidden"   value="'.$id.'" readonly> 
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input id="descripcion" name="descripcion" type="text" class="form-control">
                    </div>
';
                    }
                    if( $id_institucion == 3 ) {

$datos_table = $datos_table . '
                  <input name="id" type="hidden"   value="'.$id.'" readonly> 
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input id="descripcion" name="descripcion" type="text" class="form-control">
                    </div>
';
                    }

                    if( $id_institucion == 4 ) {

$datos_table = $datos_table . '
                  <input name="id" type="hidden"   value="'.$id.'" readonly> 
                    <div class="form-group">
                      <label>Descripcion</label>
                      <input id="descripcion" name="descripcion" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Correo</label>
                      <input id="correo" name="correo" type="email" class="form-control">
                    </div>
';
                    }

        $datos_table = $datos_table . '<input class="btn btn-primary" type="submit" value="Agregar Datos">';
        $datos_table = $datos_table . '</form>';

      $datos_table = $datos_table . '    </div>';
      $datos_table = $datos_table . '</div>';

       $datos_table = $datos_table . '<table class="table table-striped" id="' . $id_table . '">';
 
        $datos_table = $datos_table . '<thead>';

        $datos_table = $datos_table . '<tr>';

         $datos_table = $datos_table . $titulo_datos;

        $datos_table = $datos_table . '</tr>';

        $datos_table = $datos_table . '</thead>';

        $datos_table = $datos_table . '<tbody>';

        $datos_table = $datos_table . $tx_datos;

        $datos_table = $datos_table . '</tbody>';
        $datos_table = $datos_table . '</table>';

        $data["titulo"]  = $titulo;

        $data["datos_id_institucion"]  = "";
        $data["datos_id_institucion"]  = $datos_table;
        $data["menu"] = $this->load->view('layout/menu', $data, true);
        //$this->load->view('lista', $data);
        $this->load->view('login/layout-top-navigation', $data);

}

public function borrar($id = 0, $id_institucion = 0)
    {

        $tabla = "";
        $codigo = "";
        $valor = $id;
        $campo = "";

        if( $id_institucion == 1 ) {
                    $codigo = 'id';
                    $tabla = "clientes";

        }
        if( $id_institucion == 2 ) {
                    $codigo = 'id';
                    $tabla = "obras";

        }
        if( $id_institucion == 3 ) {
                    $codigo = 'id';
                    $tabla = "actividades";

        }

        if( $id_institucion == 4 ) {
                    $codigo = 'id';
                    $tabla = "empleados";

        }


            $this->db->delete( $tabla, array( $codigo => $valor ) ); 

        $this->lista_lista($id_institucion);

    }

public function agregar($id = 0, $id_institucion = 0, $id_estructura = 0, $Id_est_niveles = 0, $Id_est_tiempo = 0, $Id_est_intervalo = 0, $Id_est_temas = 0, $Id_est_actividad = 0)
    {

        $tabla = "";
        $codigo = "";
        $valor = $id;
        $campo = "";

 if( $id_institucion == 1 ) {
                    $codigo = 'id';
                    $tabla = "clientes";

        }
        if( $id_institucion == 2 ) {
                    $codigo = 'id';
                    $tabla = "obras";

        }
        if( $id_institucion == 3 ) {
                    $codigo = 'id';
                    $tabla = "actividades";

        }

        if( $id_institucion == 4 ) {
                    $codigo = 'id';
                    $tabla = "empleados";

        }

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


        if( $id_institucion == 1 ) {
                   $data = array(

            'id' => $id,

            'descripcion' => $_POST['descripcion'],

            'in_activo' => 1

        );
        }

        if( $id_institucion == 2 ) {
                   $data = array(

            'id' => $id,

            'descripcion' => $_POST['descripcion'],

            'in_activo' => 1

        );
        }

        if( $id_institucion == 3 ) {
                   $data = array(

            'id' => $id,

            'descripcion' => $_POST['descripcion'],

            'in_activo' => 1

        );
        }

        if( $id_institucion == 4 ) {
                   $data = array(

            'id' => $id,

            'descripcion' => $_POST['descripcion'],
            
            'correo' => $_POST['correo'],

            'in_activo' => 1

        );
        }
    //    $sql = $this->db->set($data)->get_compiled_insert($tabla);

        $this->db->insert($tabla, $data);

        $this->lista_lista($id_institucion);

    }

}


?>