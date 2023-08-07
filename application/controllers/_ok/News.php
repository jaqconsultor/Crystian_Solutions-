<?php

class News extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('news_model');
		
		// cargar el modelo desde una carpeta
		$this->load->model('noticias/news_model');
    }

    public function index() {

        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug) {
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('texto', 'texto', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        } else {
            $this->news_model->set_news();
            //$this->load->view('news/success');
            redirect(site_url("news"));
        }
    }

    public function edit($slug) {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('texto', 'texto', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
        } else {

            $this->news_model->set_update_news($slug);
            redirect(site_url("news"));
        }
    }

    function tcpdf() {

        $this->load->library('Class_tcpdf');
//        require_once( "application/appdesktop/libraries/tcpdf60/config/lang/eng.php");
//        require_once( "application/appdesktop/libraries/tcpdf60/tcpdf.php");

// create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 002');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

//set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
		$lenguaje = $this->class_tcpdf->mget1();
        $pdf->setLanguageArray( $lenguaje );

// ---------------------------------------------------------
// set font
        $pdf->SetFont('times', 'BI', 20);

// add a page
        $pdf->AddPage();

// set some text to print
        $txt = <<<EOD
TCPDF Example 002

Default page header and footer are disabled using setPrintHeader() and setPrintFooter() methods.
EOD;

// print a block of text using Write()
        $pdf->Write($h = 0, $txt, $link = '', $fill = 0, $align = 'C', $ln = true, $stretch = 0, $firstline = false, $firstblock = false, $maxh = 0);

// ---------------------------------------------------------
//Close and output PDF document
        $pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE                                                
//============================================================+
    }

    function pdompdf() {

        $this->load->library('Class_dompdf');
        //require_once( "application/appdesktop/libraries/dompdf/dompdf_config.inc.php");

        $html =
                '<html><body>' .
                '<p>Put your html here, or generate it with your favourite ' .
                'templating system.</p>' .
                '</body></html>';

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->render();
        $op = array('Attachment' => 0, 'Accept-Ranges' => 0);
        $dompdf->stream("sample.pdf", $op);

        /* $this->dompdf = new DOMPDF();
          $papersize = "legal”";
          $orientation = 'landscape';
          $this->dompdf->load_html($html);
          $this->dompdf->set_paper($papersize, $orientation);
          $this->dompdf->render();

          $output = $this->dompdf->output();
          file_put_contents('Brochure.pdf', $output);
         */

        /* $dompdf = new DOMPDF();
          $dompdf->load_html($html);
          $dompdf->render();
          $op = array( 'Attachment' => 0, 'Accept-Ranges' => 0 );
          $dompdf->stream("sample.pdf", $op );
         */
    }

    function pfpdf() {

        $this->load->library('fpdf17/fpdf');
        //$fpdf_font = 'application/appdesktop/libraries/fpdf17/font/';
        //define('FPDF_FONTPATH', $fpdf_font);


        $productos [] = array('Codigo' => '001', 'Producto' => 'Impresora', 'Precio' => '200.00', 'Stock' => '100');
        $productos [] = array('Codigo' => '002', 'Producto' => 'Teclado', 'Precio' => '40.00', 'Stock' => '100');
        $productos [] = array('Codigo' => '003', 'Producto' => 'Mouse', 'Precio' => '20.00', 'Stock' => '100');
        $productos [] = array('Codigo' => '004', 'Producto' => 'Monitor', 'Precio' => '200.00', 'Stock' => '100');
        $productos [] = array('Codigo' => '005', 'Producto' => 'Router', 'Precio' => '100.00', 'Stock' => '100');


        //Ahora tendremos que definir los parametros para la generación del PDF y la cabecera.

        $pdf = new FPDF();                         //INSTANCIANDO LA CLASE
        $pdf->AliasNbPages();                   //DEFINE UN ALIAS PARA EL TOTAL DE PAGINAS
        $pdf->AddPage();                        //AGREGA UNA PAGINA
        //INICIO DE CABECERA
        $pdf->SetFont('Arial', 'B', 6);           //FUENTE DE LETRA
        $pdf->SetXY(5, 10);                      //COORDENADAS X y Y
        $pdf->SetFillColor(236, 235, 236);        //COLOR DE FONDO EN RGB
        $pdf->Cell(10, 4, 'Codigo', 0, 0, 'C', 1); //COLUMNA UNO
        $pdf->Cell(60, 4, 'Productos', 0, 0, 'L', 1); //COLUMNA UNO
        $pdf->Cell(50, 4, 'Precio', 0, 0, 'R', 1);    //COLUMNA DOS
        $pdf->Cell(50, 4, 'Stock', 0, 0, 'R', 1);     //COLUMNA TRES
        //FIN DE CABECERA
        //Aquí haremos una iteración al array creado anteriormente
        //CONTENIDO
        $pos_y = 14;                         // 4 MAS DE LA CABECERA

        foreach ($productos as $producto) {
            $pdf->SetFont('Arial', 'B', 6);
            $pdf->SetXY(5, $pos_y);
            $pdf->SetFillColor(999, 999, 999);
            $pdf->Cell(10, 4, $producto ['Codigo'], 0, 0, 'C', 1);
            $pdf->Cell(60, 4, $producto ['Producto'], 0, 0, 'L', 1);
            $pdf->Cell(50, 4, $producto ['Precio'], 0, 0, 'R', 1);
            $pdf->Cell(50, 4, $producto ['Stock'], 0, 0, 'R', 1);
            $pos_y+=4;
        }
        //FIN DE CONTENIDO
        //Finalmente retornaremos el PDF

        $pdf->Output();
        //SALIDA DEL PDF
    }

    function delete($slug) {
        $this->load->helper('url');
        $this->news_model->set_delete($slug);
        redirect(site_url("news"));
    }

    // Usar la Libreria NUSOAP como Cliente
    function wscliente() {

        $this->load->helper('url');

        // Cargagr la Libreria NUSOAP para el Cliente
        $this->load->library("Class_nusoap");
		
        //require_once( "application/appdesktop/libraries/nusoap-0.9.5/lib/nusoap.php");

        //
        // Crear un cliente apuntando al script del servidor (Creado con WSDL) - 
        // Las proximas 3 lineas son de configuracion, y debemos asignarlas a nuestros parametros

        $serverURL = site_url("news/wsservidor");
        $serverScript = 'ws_mail.php';
        $metodoALlamar = 'setCorreo';

        // Crear un cliente de NuSOAP para el WebService
        $cliente = new nusoap_client("$serverURL/$serverScript?wsdl", 'wsdl');

        // Se pudo conectar?
        $error = $cliente->getError();
        if ($error) {
            echo '<pre style="color: red">' . $error . '</pre>';
            echo '<p style="color:red;' > htmlspecialchars($cliente->getDebug(), ENT_QUOTES) . '</p>';
            die();
        }

        // 1. Llamar a la funcion getRespuesta del servidor
        $result = $cliente->call(
                "$metodoALlamar", // Funcion a llamar
                array('correodestino' => 'aquino.betancourt@gmail.com', 'asunto' => 'Correo GMAIL', 'mensaje' => 'Prueba de Correo'), // Parametros pasados a la funcion
                "uri:$serverURL/$serverScript", // namespace
                "uri:$serverURL/$serverScript/$metodoALlamar" // SOAPAction
        );
        // Verificacion que los parametros estan ok, y si lo estan. mostrar rta.
        if ($cliente->fault) {
            echo '<b>Error: ';
            print_r($result);
            echo '</b>';
        } else {
            $error = $cliente->getError();
            if ($error) {
                echo '<b style="color: red">Error: ' . $error . '</b>';
            } else {
                echo 'Respuesta: ' . $result;
            }
        }
    }

    // Usar la Libreria NUSOAP como Cliente
    function wscliente1() {

        $this->load->helper('url');

        // Cargagr la Libreria NUSOAP para el Cliente
        //$this->load->library("nusoap-0.9.5/lib/nusoap");
        $this->load->library("Class_nusoap");
        //require_once( "application/appdesktop/libraries/nusoap-0.9.5/lib/nusoap.php");

        //
        // Crear un cliente apuntando al script del servidor (Creado con WSDL) - 
        // Las proximas 3 lineas son de configuracion, y debemos asignarlas a nuestros parametros

        $serverURL = site_url("news/wsservidor");
        $serverScript = 'ws_mail.php';
        $metodoALlamar = 'setNombre';

        // Crear un cliente de NuSOAP para el WebService
        $cliente = new nusoap_client("$serverURL/$serverScript?wsdl", 'wsdl');

        // Se pudo conectar?
        $error = $cliente->getError();
        if ($error) {
            echo '<pre style="color: red">' . $error . '</pre>';
            echo '<p style="color:red;' > htmlspecialchars($cliente->getDebug(), ENT_QUOTES) . '</p>';
            die();
        }

        // 1. Llamar a la funcion getRespuesta del servidor
        $result = $cliente->call(
                "$metodoALlamar", // Funcion a llamar
                array('nombre' => 'Jesus Guillermo', 'apellido' => 'Aquino Betancourt'), // Parametros pasados a la funcion
                "uri:$serverURL/$serverScript", // namespace
                "uri:$serverURL/$serverScript/$metodoALlamar" // SOAPAction
        );
        // Verificacion que los parametros estan ok, y si lo estan. mostrar rta.
        if ($cliente->fault) {
            echo '<b>Error: ';
            print_r($result);
            echo '</b>';
        } else {
            $error = $cliente->getError();
            if ($error) {
                echo '<b style="color: red">Error: ' . $error . '</b>';
            } else {
                echo 'Respuesta: ' . $result;
            }
        }
    }

    function wsservidor() {

        $this->load->helper('url');

        //$this->load->library("nusoap-0.9.5/lib/nusoap");
        $this->load->library("Class_nusoap");
        //require_once( "application/appdesktop/libraries/nusoap-0.9.5/lib/nusoap.php");

		// Cargar el View wsservidor
        $this->load->view('news/wsservidor');

    }


}

?>
