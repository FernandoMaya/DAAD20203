<?php
	include('fpdf.php');
	//Obtener datos
	include("funciones.php");
	$Con=Conectar();
	$SQL="Select c.Nombre, l.Tipo from conductores c licencias l where l.id=1 c.id= l.conductor";
	$Result= Consulta($Con,$SQL);
	$Fila=mysqli_fetch_row($Result);
	Desconectar();

	$pdf= new FPDF('P','mm',array(148,105));
	$pdf->AddPage();
	$pdf->Image('heraldica.png',10,10,-300);   
	$pdf->Image('linea.png',15,8,-300);
	$pdf->SetFont('Arial','',8);
	$pdf->Text(25,11,'Estados Unidos Mexicanos');
	$pdf->Text(25,15,'Poder Ejecutivo del Estado de Queretaro');
	$pdf->SetFont('Arial','B',8);
	$pdf->Text(25,19,'Secretaria de Seguridad Ciudadana');
	$pdf->SetFont('Arial','B',10);
	$pdf->Text(25,23,'Licencia para conducir');
	$pdf->SetXY(65,30);
	$pdf->Cell(35,45,'FOTO',1,1,'C');
	$pdf->SetFont('Arial','',8);
	$pdf->Text(43,62,'No. de Licencia');
	$pdf->SetFont('Arial','',16);
	$pdf->SetTextColor(255,0,0);
	$pdf->Text(32,69,'Q141287-16');
	$pdf->SetFont('Arial','B',9);
	$pdf->SetTextColor(0,0,0);
	$pdf->Text(37,75,'AUTOMOVILISTA');
	$pdf->SetFont('Arial','',6);	
	$pdf->Text(91,78,'Nombre');
	$pdf->SetFont('Arial','',20);
	$pdf->Text(69,85,'RANGEL');
	$pdf->Text(64,92,'CABRERA');
	$pdf->SetFont('Arial','B',20);
	$pdf->Text(67,100,'ANDRES');
	$pdf->SetFont('Arial','',6);
	$pdf->Text(82,103,'Observaciones');
	$pdf->SetFont('Arial','',14);
	$pdf->Text(20,109,'G-ALERGIA A ANTIHISTAMINICOS');
	$pdf->Text(10,111,'03/05/1996');
	$pdf->Text(10,117,'14/11/2016');
	$pdf->Text(10,123,'14/11/2021');
	$pdf->Text(10,129,'0');
	$pdf->SetFont('Arial','B',8);
	$pdf->Text(10,107,'Fecha de Nacimiento');
	$pdf->Text(10,113,'Fecha de Expedicion');
	$pdf->Text(10,119,'Valido hasta');
	$pdf->Text(50,119,'Firma');
	$pdf->Text(10,125,'Antiguedad');
	$pdf->SetFont('Arial','B',20);
	
	$pdf->Text(10,139,'A');
	$pdf->SetFont('Arial','',6);
	$pdf->Text(30,137,'AUTORIZO PARA QUE LA PRESENTE');
	$pdf->Text(30,139,'SEA RECABADA COMO GARANTIA DE');
	$pdf->Text(40,141,'INFRACCION');
	
	$pdf->AddPage();
	if (file_exists("Codigobarras/$Fila[0].png"))
	pdf->Image('Codigobarras/300.png',12, 97, -97);
	$pdf->Image('066.png',10,10,-500);
 	$pdf->Image('089.png',80,10,-500);
	$pdf->SetFont('Arial','B',20);
	$pdf->Text(33,20,'B211021114');
	$pdf->SetFont('Arial','B',8);
	$pdf->Text(84,33,'Domicilio');
	$pdf->Text(10,75,'Restricciones');
	$pdf->Text(72,75,'Grupo Sanguineo');
	$pdf->Text(68,84,'Donador de Organos');
	$pdf->Text(64,93,'Numero de Emergencias');
	$pdf->Text(30,120,'M. EN A.P. JUAN MARCOS GRANADOS TORRES');
	$pdf->Text(39,124,'SECRETARIO DE SEGURIDAD CIUDADANA');
	$pdf->Text(10,125,'Fundamento Legal');
	$pdf->SetFont('Arial','',12);
	$pdf->Text(76,38,'CALLE 27');
	$pdf->Text(89,42,'221');
	$pdf->Text(43,46,'LOMAS DE CASA BLANCA');
	$pdf->Text(75,50,'C.P. 76080');
	$pdf->Text(70,54,'QUERETARO');
	$pdf->Text(10,79,'9 NINGUNA');
	$pdf->Text(84,80,'ARH+');
	$pdf->Text(88,89,'NO');
	$pdf->Text(60,97,'000-000-224-1353');
	$pdf->SetFont('Arial','',6);
	$pdf->Text(10,127, 'Articulos 19 fraccion Xlll y 33 fraccion ll de la Ley Organica del Poder Ejecutivo'); 
	$pdf->Text(10,129, 'del Estado de Queretaro, articulo 9 fraccion Xll y 55 de la Ley de Transito del'); 
	$pdf->Text(10,131, 'Estado de Queretaro, articulo 4 de la Ley de Procedimientos Administrativos del');
	$pdf->Text(10,133, 'Estado de Queretaro, articulo 28 del Reglamento de Transito del Estado de');
	$pdf->Text(10,135, 'Queretaro y articulo 14 fraccion V del Reglamento Interior de la Secretaria de'); 
	$pdf->Text(10,137, 'Seguridad Ciudadana');













	   

	$pdf->Output();
?>