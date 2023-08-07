<?php

class Pdfs extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $data['title'] = 'PDF Implementaciones';

        // Controlador Nombre
        $data['controlador'] = 'PDFS';

        // Titulo de la Pagina
        $data['title'] = 'PDFS: Aulas Cursos YA';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('pdfs/index', $data);
        $this->load->view('templates/footer');
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
        $pdf->setLanguageArray($lenguaje);

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

    function tcpdfview() {

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
        $pdf->setLanguageArray($lenguaje);

// ---------------------------------------------------------
// set font
        $pdf->SetFont('times', 'BI', 20);

// add a page
        $pdf->AddPage();


        // Controlador Nombre
        $data['controlador'] = 'PDF';

        $string = '';
        $string = $string . $this->load->view('pdfs/index', $data, true);

// output the HTML content
        $pdf->writeHTML($string, true, false, true, false, '');


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

        $html = '<html><body>' .
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

    function pdompdfview() {

        $this->load->library('Class_dompdf');
        //require_once( "application/appdesktop/libraries/dompdf/dompdf_config.inc.php");


        $data['title'] = 'PDF Implementaciones';

        // Cargar los Templates ( Header y Footer )
        // Cargar la Pagina 
        $string = '';
        // $string = $this->load->view('templates/header', $data, true);
        $string = $string . $this->load->view('pdfs/index', $data, true);
        //$string  = $string . $this->load->view('templates/footer', true);

        $html = $string;

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
        $this->load->library('Class_fpdf');
    
        //$this->load->library('fpdf17/fpdf');
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

}

?>
