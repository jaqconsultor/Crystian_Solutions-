<?php

class Inicio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        // Titulo de la Pagina
        $data['title'] = 'titulo';

        $this->load->view('login/auth-login', $data);
    }
    
    public function registroDeUsuario()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $this->load->view('login/auth-register', $data);
    }
    
    public function olvidoContrasena()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $this->load->view('login/auth-forgot-password', $data);
    }
    

    public function cambioDeClave()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $this->load->view('login/auth-reset-password', $data);
    }
    
    public function layoutBlank()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $data["menu"] = $this->load->view('layout/menu1', $data, true);

        $this->load->view('login/layout-top-navigation', $data);
    }
    
    public function layout_data_table()
    {
        
        // Titulo de la Pagina
        $data['title'] = 'titulo';
        
        $this->load->view('login/layout-data-table', $data);
    }
	
    function pdf_lista() {
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
