<?php

require 'fpdf/fpdf.php';

//////////////////////////////////////////////// Hacer conexion base de datos
include '..\Conecta.php';
$Con = Conectar();
$SQL =  'SELECT l.Id, c.nombre, c.FechaDeNac, c.Firma, l.FechaDeExp, l.Vigencia,
c.Direccion, c.TipoDeSangre , l.Restricciones, c.Donador FROM licencias L,
conductores C WHERE l.Conductor = c.IdConductores AND l.Id = 13';

$Result = Consultar($Con,$SQL);
$Fila = mysqli_fetch_row($Result);
///////////////////////////////////////////////


$pdf = new FPDF();

$imagen = 'Imagen.jpg';
$ImagenDos = 'ImagenDos.jpg';
$pdf-> Addpage();
$pdf-> SetFont('Arial','B','15');


$pdf-> SetX(20);
$pdf-> Cell(50,50,$pdf->Image($imagen,$pdf->GetX(), $pdf->GetY(), 40),0,1,'C',false);

$pdf-> SetY(10);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'Estados Unidos Mexicanos   Poder Ejecutivo del Estado De Queretaro',0,'L','0');

$pdf-> SetY(30);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'Secretaria de seguridad Ciudadana',0,'L','0');

$pdf-> SetY(40);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'Licencia para conducir',0,'L','0');

$pdf-> SetY(70);
$pdf-> SetX(135);
$pdf-> Cell(50,50,$pdf->Image($ImagenDos,$pdf->GetX(), $pdf->GetY(), 45),0,1,'C',false);

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(120);
$pdf-> SetX(150);
$pdf-> MultiCell(20,10,'Nombre',0,'R','0');

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(125);
$pdf-> SetX(150);
$pdf-> MultiCell(20,10,$Fila[1],0,'R','0');


$pdf-> SetFont('Arial','B','5');
$pdf-> SetY(140);
$pdf-> SetX(150);
$pdf-> MultiCell(25,10,'Observaciones',0,'R','0');


$pdf-> SetFont('Arial','B','11');
$pdf-> SetY(70);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'No. de licencia',0,'L','0');

$pdf->setTextColor(255, 0, 0);
$pdf-> SetFont('Arial','B','14');
$pdf-> SetY(75);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'Q101134-15',0,'L','0');

$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','14');
$pdf-> SetY(80);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'AUTOMOVILISTA',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','9');
$pdf-> SetY(150);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,'Fecha de nacimiento',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','','9');
$pdf-> SetY(155);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,$Fila[2],0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','9');
$pdf-> SetY(160);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,'Fecha de Expedicion',0,'L','0');

$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','','9');
$pdf-> SetY(165);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,$Fila[4],0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','9');
$pdf-> SetY(170);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,'Valida hasta',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','9');
$pdf-> SetY(175);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,$Fila[5],0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','','9');
$pdf-> SetY(180);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,'Antiguedad',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','','9');
$pdf-> SetY(185);
$pdf-> SetX(25);
$pdf-> MultiCell(100,10,'3',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','B','9');
$pdf-> SetY(170);
$pdf-> SetX(100);
$pdf-> MultiCell(100,10,'Firma',0,'L','0');


$pdf->setTextColor(0, 0, 0);
$pdf-> SetFont('Arial','','9');
$pdf-> SetY(180);
$pdf-> SetX(100);
$pdf-> MultiCell(100,10,$Fila[3],0,'L','0');


//// Parte posterior /////////////////////////////


$pdf-> Addpage();
$pdf-> SetFont('Arial','B','15');
$ImagenEmergencias = '911.jpg';
$DenunciaAnonima = 'DenunciaAnonima.jpg';
$CarroNegro = 'CarroNegro.jpg';
$pdf-> SetX(20);
$pdf-> Cell(50,50,$pdf->Image($ImagenEmergencias,$pdf->GetX(), $pdf->GetY(), 20),0,1,'C',false);

$pdf-> SetFont('Arial','B','30');
$pdf-> SetY(10);
$pdf-> SetX(75);
$pdf-> MultiCell(100,10,'B211238399',0,'L','0');


$pdf-> SetY(10);
$pdf-> SetX(180);
$pdf-> Cell(50,50,$pdf->Image($DenunciaAnonima,$pdf->GetX(), $pdf->GetY(), 20),0,1,'C',false);


$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(20);
$pdf-> SetX(180);
$pdf-> MultiCell(30,10,'Domicilio',0,'L','0');

$pdf-> SetFont('Arial','','10');
$pdf-> SetY(30);
$pdf-> SetX(180);
$pdf-> MultiCell(30,10,$Fila[6],0,'L','0');

$pdf-> SetY(50);
$pdf-> SetX(170);
$pdf-> Cell(50,50,$pdf->Image($CarroNegro,$pdf->GetX(), $pdf->GetY(), 30),0,1,'C',false);
$pdf-> SetY(50);
$pdf-> SetX(130);
$pdf-> Cell(50,50,$pdf->Image($CarroNegro,$pdf->GetX(), $pdf->GetY(), 30),0,1,'C',false);
$pdf-> SetY(50);
$pdf-> SetX(80);
$pdf-> Cell(50,50,$pdf->Image($CarroNegro,$pdf->GetX(), $pdf->GetY(), 30),0,1,'C',false);
$pdf-> SetY(50);
$pdf-> SetX(30);
$pdf-> Cell(50,50,$pdf->Image($CarroNegro,$pdf->GetX(), $pdf->GetY(), 30),0,1,'C',false);

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(70);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,'Grupo Sanguineo',0,'L','0');

$pdf-> SetFont('Arial','','10');
$pdf-> SetY(75);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,$Fila[7],0,'L','0');

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(70);
$pdf-> SetX(20);
$pdf-> MultiCell(50,10,'Restricciones',0,'L','0');

$pdf-> SetFont('Arial','','10');
$pdf-> SetY(75);
$pdf-> SetX(20);
$pdf-> MultiCell(50,10,$Fila[8],0,'L','0');

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(90);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,'Donador de organos',0,'L','0');

$pdf-> SetFont('Arial','','10');
$pdf-> SetY(95);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,$Fila[9],0,'L','0');

$pdf-> SetFont('Arial','B','10');
$pdf-> SetY(100);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,'Numero de emergencias',0,'L','0');

$pdf-> SetFont('Arial','','10');
$pdf-> SetY(105);
$pdf-> SetX(160);
$pdf-> MultiCell(50,10,'000-442-145-9897',0,'L','0');



$pdf -> Output();

 ?>
