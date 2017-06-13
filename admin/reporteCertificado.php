<?php

header("Content-Type: text/html;charset=utf-8");
require_once('fpdf.php');
//header("Content-Type: text/html;charset=utf-8");

 $idEs=$_POST['idestudiante'];
 $fech=$_POST['fecha'];
 class PDF extends FPDF{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logoiescj.gif',10,8,30);
     $this->Ln(6);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(40);
     $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $txt=utf8_decode("   INSTITUCIÓN EDUCATIVA SAGRADO CORAZÓN DE JESÚS\n                                     EL INGENIO SANDONÁ     \n                              RES 2534 DEL 30 DE SEP 2002 \n                    SECRETARIA DE EDUCACIÓN DE NARIÑO   \n                                           NIT 814001838-2  \n                                      DANE: 252683000565 \n");
     $this->MultiCell(0,5,$txt, 'c');
  
    // Título    utf8_decode("
    /*$this->Cell(30,10,utf8_decode("Instituto de Capacitación para el Trabajo y Desarrollo Humano"),0,1,'C');
    $this->Cell(60);
    $this->Cell(30,10,utf8_decode("Aprobado mediante Resolución 0883 de 30 marzo de 2010"),0,2,'C');
    $this->Cell(1);
    $this->Cell(30,10,utf8_decode("Por la Secretaria de Educación y Cultura de Nariño"),0,3,'C');*/
    // Salto de línea
    $this->Ln(2);
}
     
// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-46);
    // Arial italic 8
    $this->SetFont('Times','I',10);
    $this->Cell(2);
     //$this->SetDrawColor(0,80,180);
    $this->SetFillColor(255,255,255);
     $txt=utf8_decode("                                                                                       El Ingenio, Sandoná\n                                                                          Teléfono: 3107102731 - 3175859382         \n                                                                             Correo: iesagrado@gmail.com       ");
     $this->MultiCell(0,4,$txt,0,1, 'C');
    // Número de página
    $this->Cell(0,2,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
}

//funcion tabla

     
 }
 //declarar hoja
 $pdf= new PDF('P', 'mm', 'Letter');
 $pdf->SetMargins(14,18);
 $pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->FancyTable($header,$data);
 $pdf->Ln(2);
 //http://www.fpdf.org/   dato del título
 /*$pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont("TIMES","b",14);
 $pdf->SetFillColor(232,232,232);//este
 
 //$pdf->Cell(0,100,utf8_decode(''),1,1,'');//ver si da marco
 
 $pdf->Cell(190,9,utf8_decode('Certificado de estudios'),1,1,'C');//el uno hace un salto de linea y c para centrar*/
 //datos de conección
 mysqli_connect("localhost", "root", "");
 mysqli_select_db("bdiescj");
 //mostrar la tabla
  $pdf->Line(12,70,190,70);
  $pdf->Ln(6);
 //$pdf->Ln(6);//salto de linea
$pdf->Ln(12);//salto de linea
$pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont("TIMES","b",12);
 $pdf->SetFillColor(255,255,255);//este es el color de relleno del texto
$txt=utf8_decode("                                            EL RECTOR DE LA INSTITUCIÓN EDUCATIVA SAGRADO \n                                                          CORAZÓN DE JESÚS EL INGENIO-SANDONÁ");
$pdf->MultiCell(0,6,$txt,0,1,'C');
 $pdf->Ln(2);//salto de linea
 
 //Contenido del certificado
 $pdf->Ln(12);//salto de linea
$pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont("TIMES","b",12);
 $pdf->SetFillColor(255,255,255);//este es el color de relleno del texto
$txt=utf8_decode("                                                                                HACE CONSTAR: ");
$pdf->MultiCell(0,6,$txt,0,1,'C');
 $pdf->Ln(4);//salto de linea
//DATOS DE CONEXION
 mysqli_connect("localhost", "root", "");
 mysqli_select_db("bdiescj");
 //consulta
 $sql1="SELECT nomdocente, estudiante.*, certificado. * FROM estudiante, docentes, certificado WHERE certificado.idestudiante = estudiante.idestudiante AND certificado.iddocente = docentes.iddocente AND certificado.idestudiante='".$idEs."' AND certificado.fecha='".$fech."'";
 $rec1=mysqli_query($sql1);
 
 $nomE="";
 $idE="";
 $tipoD="";
 $lugarE="";
 $agrado="";
 $folio="";
 $libro="";
 $fecha="";
 $idD="";
 $nomD="";
 while($row1=mysqli_fetch_array($rec1)){
 $nomE=$row1['nomestudiante'];
 $idE=$row1['idestudiante'];
 $tipoD=$row1['tipodocumento'];
 $lugarE=$row1['lugarexpedicion'];
 $agrado=$row1['agrado'];
 $folio=$row1['numfolio'];
 $libro=$row1['numlibro'];
 $fecha=$row1['fecha'];
 $idD=$row1['iddocente'];
 $nomD=$row1['nomdocente'];
}
 $pdf->Ln(12);//salto de linea
$pdf->SetTextColor(0x00, 0x00, 0x00);
 $pdf->SetFont("Arial","",12);
 $pdf->SetFillColor(255,255,255);//este es el color de relleno del texto
$txt=utf8_decode("Que revisados los archivos institucionales se verifica que ").$nomE.(","); //$pdf->Cell(120,8,($prog),1,1,'C',95);
$pdf->MultiCell(0,6,$txt,0,1,'');
$txt=utf8_decode("identificado(a) con ").$tipoD.(" No. ").$idE.(" de ").$lugarE.utf8_decode(", cursó y aprobó el grado once en el año ").$agrado.", "; //$pdf->Cell(120,8,($prog),1,1,'C',95);
$pdf->MultiCell(0,6,$txt,0,1,'');
$txt=utf8_decode("anotado(a) en el libro número ").$libro.utf8_decode(" y el folio número ").$folio.(".");
$pdf->MultiCell(0,6,$txt,0,1,'');
$pdf->Ln(6);//salto de linea
setlocale (LC_TIME,"spanish");
$txt1=strftime(" %d de %B del %Y");//lee el formato fecha en letras
$txt=utf8_decode("La presente se firma en El Ingenio-Sandoná, el ").$txt1.".";  
$pdf->MultiCell(0,6,$txt,0,1,'');


$pdf->Ln(20);//salto de linea
$pdf->Ln(6);//salto de linea
$pdf->Ln(12);//salto de linea
$txt=utf8_decode("                                             ___________________________________\n                                                     ").$nomD."\n                                                                          Rector\n                                                            C.C. ".$idD.utf8_decode(" de Túquerres");
$pdf->MultiCell(0,6,$txt,0,1,'C');




//fin contenido

//$txt1=utf8_decode("Sandoná, ");
//$pdf->Cell(0,8, utf8_decode("Sandoná"),0,1);
//$pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
// $pdf->SetFont("Arial","i",10);
 //$pdf->Cell(40,4,$txt1.date('d/m/Y'),0,1,'L');
 $pdf->Output();
 //$pdf=>Output("Notas.pdf", "pdf.pdf");
 //reporteNotas1="Notas.pdf";
 //tipo_output="D";
?>
