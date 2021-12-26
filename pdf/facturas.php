<?php
if ($_POST["generar_factura"] == "true")
{

//Recibir detalles de factura


//variable que guarda el nombre del archivo PDF
$archivo="compras.pdf";

//Llamada al script fpdf
require('fpdf.php');


$archivo_de_salida=$archivo;

$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.


//logo de la tienda
$pdf->Image('../empresa.jpg' , 0 ,0, 40 , 40,'JPG', 'http://php-estudios.blogspot.com');

// Encabezado de la factura
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190, 10, "Ultimas Compras", 0, 2, "C");
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5, "AECN: "."\n"."Compras ultimo Mes: ", 0, "C", false);
$pdf->Ln(2);

$pdf->SetFont('Arial','B',12);
$top_datos=45;
$pdf->SetXY(10, $top_datos);
$pdf->Cell(70, 10, "Nombre:", 0, 0, "C", 0); 
$pdf->Cell(35, 10, "Precio:", 0, 0, "C", 0); 
$pdf->Cell(35,10, "Cantidad:", 0, 0, "C", 0); 
$pdf->Cell(35,10, "Subtotal:", 0, 1, "C", 0); 
$server="localhost";
$username="root";
$password="";
$db='alquiladora';
$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
$re="select * from compras";
$resultado = mysqli_query( $con, $re ) or die ( "Algo ha ido mal en la consulta a la base");

while ($f=mysqli_fetch_array($resultado)) {
                    
$pdf->Cell(70, 10, $f['nombre'], 0, 0, "C", 0); 
$pdf->Cell(35, 10, $f['precio'], 0, 0, "C",0);  
$pdf->Cell(35,10, $f['cantidad'], 0, 0, "C",0); 
$pdf->Cell(35, 10, $f['subtotal'], 0, 1, "C",0);    
                        
            } 

$pdf->Output($archivo_de_salida);//cierra el objeto pdf

//Creacion de las cabeceras que generarán el archivo pdf
header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$archivo");
header("Content-Length: " . filesize("$archivo"));
$fp = fopen($archivo, "r");
fpassthru($fp);
fclose($fp);

//Eliminación del archivo en el servidor
unlink($archivo);
}