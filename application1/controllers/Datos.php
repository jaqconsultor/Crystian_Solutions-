<?php

class Datos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
    public function index()
    {

        // Titulo de la Pagina
        $data['title'] = 'titulo';

        $this->load->view('login/auth-login', $data);
    }
    */
   
    public function datosConsulta()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT TOP 5 * from datos order by nu_control desc;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;
        
        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos', $data);
    }
    
    public function datosFormulario( $nro = 0 )
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';

        // Lista de Empresa
        $sql = "SELECT * FROM empresas;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["emrpesas"] = $datos;

        // Lista CLiente / Proveedor
        $sql = "SELECT * FROM clients;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["clientes"] = $datos;

        // Lista de LIbrason
        $sql = "SELECT * FROM livraison;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["livraison"] = $datos;
        
        // Lista de Camion
        $sql = "SELECT * FROM camion;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["camion"] = $datos;

        // Lista de Chofer 1
        $sql = "SELECT * FROM chauffeur;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["chauffeur1"] = $datos;

        // Lista de Chofer 2
        $sql = "SELECT * FROM chauffeur;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["chauffeur2"] = $datos;

        $sql = "SELECT * from datos where nu_control = " . $nro . " ;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["nro"] = $nro;

        $data['id_empresa'] = "";
        $data['nu_control'] = "";
        $data['fe_factura'] = "";
        $data['nu_factura'] = "";
        $data['nu_comanda'] = "";
        $data['in_impreso'] = "";
        $data['in_external'] = "";
        $data['in_activo'] = "";
        $data['id_cliente'] = "";
        $data['ca_pal_azul_138'] = "0";
        $data['ca_pal_amar_138'] = "0";
        $data['ca_pal_azul_116'] = "0";
        $data['ca_pal_amar_116'] = "0";
        $data['ca_tot_138'] = "0";
        $data['ca_tot_116'] = "0";
        $data['in_sin_paletas'] = "";
        $data['id_lugar'] = "";
        $data['id_camion'] = "";
        $data['ca_viaje'] = "";
        $data['id_chofer'] = "";
        $data['nu_requisicion'] = "";
        $data['fe_entrega'] = "";
        $data['ho_entrega'] = "";
        $data['fe_hrrdv'] = "";
        $data['nu_rdv'] = "";
        $data['id_chofer2'] = "";
        $data['nu_requisicion2'] = "";
        $data['fe_entrega2'] = "";
        $data['ho_entrega2'] = "";
        $data['fe_hrrdv2'] = "";
        $data['nu_rdv2'] = "";

        foreach ($datos as $news_item) {

            $data['id_empresa'] = $news_item['id_empresa'];
            $data['nu_control'] = $news_item['nu_control'];
            $data['fe_factura'] = $news_item['fe_factura'];
            $data['nu_factura'] = $news_item['nu_factura'];
            $data['nu_comanda'] = $news_item['nu_comanda'];
            $data['in_impreso'] = $news_item['in_impreso'];
            $data['in_external'] = $news_item['in_external'];
            $data['in_activo'] = $news_item['in_activo'];
            $data['id_cliente'] = $news_item['id_cliente'];
            $data['ca_pal_azul_138'] = $news_item['ca_pal_azul_138'];
            $data['ca_pal_amar_138'] = $news_item['ca_pal_amar_138'];
            $data['ca_pal_azul_116'] = $news_item['ca_pal_azul_116'];
            $data['ca_pal_amar_116'] = $news_item['ca_pal_amar_116'];
            $data['ca_tot_138'] = $news_item['ca_tot_138'];
            $data['ca_tot_116'] = $news_item['ca_tot_116'];
            $data['in_sin_paletas'] = $news_item['in_sin_paletas'];
            $data['id_lugar'] = $news_item['id_lugar'];
            $data['id_camion'] = $news_item['id_camion'];
            $data['ca_viaje'] = $news_item['ca_viaje'];
            $data['id_chofer'] = $news_item['id_chofer'];
            $data['nu_requisicion'] = $news_item['nu_requisicion'];
            $data['fe_entrega'] = $news_item['fe_entrega'];
            $data['ho_entrega'] = $news_item['ho_entrega'];
            $data['fe_hrrdv'] = $news_item['fe_hrrdv'];
            $data['nu_rdv'] = $news_item['nu_rdv'];
            $data['id_chofer2'] = $news_item['id_chofer2'];
            $data['nu_requisicion2'] = $news_item['nu_requisicion2'];
            $data['fe_entrega2'] = $news_item['fe_entrega2'];
            $data['ho_entrega2'] = $news_item['ho_entrega2'];
            $data['fe_hrrdv2'] = $news_item['fe_hrrdv2'];
            $data['nu_rdv2'] = $news_item['nu_rdv2'];

        }

        if( $nro == 0 ) {
            $data["accionFormulario"] = 'datos/insertarDatosFormulario';
        } else {
            $data["accionFormulario"] = 'datos/modificarDatosFormulario';
        }

        $data["menu"] = $this->load->view('layout/menu', $data, true);


        $this->load->view('datos/data-table-formulario', $data);

    }
    
    public function insertarDatosFormulario()
    {
        

        $sql = 'SELECT MAX( nu_control ) + 1 as maximo FROM datos';
        $query = $this->db->query($sql);
        $maximo = $query->row_array();
        $identificador = $maximo['maximo'];
        if (!isset($identificador)) {
            $identificador = 1;
        }

        // Titulo de la Pagina
        $data['title'] = 'titulo';

        // Insert Datos
        $data = array(
            'id_empresa' => $_POST['id_empresa'],
           'nu_control' => $identificador,
           'fe_factura' => $_POST['fe_factura'],
           'nu_factura' => $_POST['nu_factura'],
           'nu_comanda' => $_POST['nu_comanda'],
		   'in_impreso' => $_POST['in_impreso'],
		   'in_external' => $_POST['in_external'],
		   'in_activo' => $_POST['in_activo'],
           'id_cliente' => $_POST['id_cliente'],
           'ca_pal_azul_138' => $_POST['ca_pal_azul_138'],
           'ca_pal_amar_138' => $_POST['ca_pal_amar_138'],
           'ca_pal_azul_116' => $_POST['ca_pal_azul_116'],
           'ca_pal_amar_116' => $_POST['ca_pal_amar_116'],
           'ca_tot_138' => $_POST['ca_tot_138'],
           'ca_tot_116' => $_POST['ca_tot_116'],
		   'in_sin_paletas' => $_POST['in_sin_paletas'],
           'id_lugar' => $_POST['id_lugar'],
           'id_camion' => $_POST['id_camion'],
		   'ca_viaje' => $_POST['ca_viaje'],
            'id_chofer' => $_POST['id_chofer'],
           'nu_requisicion' => $_POST['nu_requisicion'],
           'fe_entrega' => $_POST['fe_entrega'],
           'ho_entrega' => $_POST['ho_entrega'],
           'fe_hrrdv' => $_POST['fe_hrrdv'],
           'nu_rdv' => $_POST['nu_rdv'],
		   'id_chofer2' => $_POST['id_chofer2'],
           'nu_requisicion2' => $_POST['nu_requisicion2'],
           'fe_entrega2' => $_POST['fe_entrega2'],
           'ho_entrega2' => $_POST['ho_entrega2'],
           'fe_hrrdv2' => $_POST['fe_hrrdv2'],
           'nu_rdv2' => $_POST['nu_rdv2']
        );
    
        
        // Insertar el Registro
        $sql = $this->db->insert_string('datos', $data);
        $query = $this->db->query($sql);

        // Consultoar la Informacion
        $sql = "SELECT TOP 5 * from datos order by nu_control desc;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;
        
        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos', $data);
    }


    public function modificarDatosFormulario()
    {
        
        // Insert Datos
        $data1 = array(
            'id_empresa' => $_POST['id_empresa'],
           'nu_control' => $_POST['nu_control'],
           'fe_factura' => $_POST['fe_factura'],
           'nu_factura' => $_POST['nu_factura'],
           'nu_comanda' => $_POST['nu_comanda'],
		   'in_impreso' => $_POST['in_impreso'],
		   'in_external' => $_POST['in_external'],
		   'in_activo' => $_POST['in_activo'],
           'id_cliente' => $_POST['id_cliente'],
           'ca_pal_azul_138' => $_POST['ca_pal_azul_138'],
           'ca_pal_amar_138' => $_POST['ca_pal_amar_138'],
           'ca_pal_azul_116' => $_POST['ca_pal_azul_116'],
           'ca_pal_amar_116' => $_POST['ca_pal_amar_116'],
           'ca_tot_138' => $_POST['ca_tot_138'],
           'ca_tot_116' => $_POST['ca_tot_116'],
		   'in_sin_paletas' => $_POST['in_sin_paletas'],
           'id_lugar' => $_POST['id_lugar'],
           'id_camion' => $_POST['id_camion'],
		   'ca_viaje' => $_POST['ca_viaje'],
            'id_chofer' => $_POST['id_chofer'],
           'nu_requisicion' => $_POST['nu_requisicion'],
           'fe_entrega' => $_POST['fe_entrega'],
           'ho_entrega' => $_POST['ho_entrega'],
           'fe_hrrdv' => $_POST['fe_hrrdv'],
           'nu_rdv' => $_POST['nu_rdv'],
		   'id_chofer2' => $_POST['id_chofer2'],
           'nu_requisicion2' => $_POST['nu_requisicion2'],
           'fe_entrega2' => $_POST['fe_entrega2'],
           'ho_entrega2' => $_POST['ho_entrega2'],
           'fe_hrrdv2' => $_POST['fe_hrrdv2'],
           'nu_rdv2' => $_POST['nu_rdv2']
        );
    
        $where = " nu_control = " . $_POST['nu_control'] ;
        //echo $where;
        $sql = $this->db->update_string('datos', $data1, $where);
        //echo $sql;
        $query = $this->db->query($sql);

        //die();

        // Consultoar la Informacion
        $sql = "SELECT TOP 5 * from datos order by nu_control desc;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        // Titulo de la Pagina
        $data['title'] = 'titulo';

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos', $data);
    }



    public function datosConsultaUsuario()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from usuarios;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-usuario', $data);
    }


    public function datosConsultaEmpresa()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from empresas;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-empresa', $data);
    }

    public function datosConsultaCliente()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from Clients where in_tipo_cli = 'C';";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-cliente', $data);
    }

    public function datosConsultaProveedor()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from Clients where in_tipo_cli = 'P';";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-proveedor', $data);
    }

    public function datosConsultaCamion()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from Camion;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-camion', $data);
    }


    public function datosConsultaTranspor()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from Chauffeur;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-transpor', $data);
    }

    public function datosConsultaLivraison()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from Livraison;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-livraison', $data);
    }


    public function datosConsultaEmbarquement()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from embarquement;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-embarquement', $data);
    }

    public function datosConsultaSaison()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from temporada;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-temporada', $data);
    }

    public function datosConsultaCompagnie()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $sql = "SELECT * from aereolineas;";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $data["datos"] = $datos;

        $data["menu"] = $this->load->view('layout/menu', $data, true);

        $this->load->view('datos/data-table-datos-aereolineas', $data);
    }


    

}

?>
