<?php
	include("fpdf.php");

	include('funciones.php');
	$Con=Conectar();
	$SQL=("SELECT Placa, Serie, Propietario FROM vehiculos"); 

	$pdf = new FPDF('L','mm',array(54,86));
	$pdf->SetTopMargin(7);
	$pdf->SetLeftMargin(5);
	$pdf->SetAutoPageBreak(0);
	$pdf->AddPage();
	if (file_exists("Codigosqr/$Fila[15].png"))
	$pdf->Image('Codigosqr/$Fila[15].png', 25, 110, -200);
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(22.8,1,'TIPO DE SERVICIO',0,0,'L');
		$pdf->Cell(11.3,1,'HOLOGRAMA',0,0,'L');
		$pdf->Cell(10.5,1,'FOLIO',0,0,'L');
		$pdf->Cell(11,1,'VIGENCIA',0,0,'L');
		$pdf->Cell(11,1,'PLACA',0,1,'L');
		}
	$pdf->SetFont('times','B',4.8);
		{
		$pdf->Cell(34.1,2.5,'PARTICULAR',0,0,'L');
		}
	$pdf->SetFont('times','B',4.8);
		{
		$pdf->Cell(10.4,2.5,'584993375',0,0,'L');
		$pdf->Cell(11,2.5,'INDEFINIDA',0,0,'L');
		}
	$pdf->SetFont('times','B',6);
		{
		$pdf->Cell(10,2.5,'2008/S3DF6*',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(10.7,1,'PROPIETARIO',0,0,'L');
		}
	$pdf->SetFont('times','B',4.8);
		{
		$pdf->Cell(30,2,'RANGEL CABRERA ANDRES',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,6,'#RFC',0,0,'L');
		$pdf->Cell(28.5,6,'NUMERO DE SERIE',0,0,'L');
		$pdf->Cell(15,6,'MODELO',0,0,'L');
		$pdf->Cell(2,4.3,' ',0,1,'L');	
		}
	$pdf->SetFont('times','B',5.3);
		{
		$pdf->Cell(20,1.3,'RACA9605032U2',0,0,'L');
		}
	$pdf->SetFont('times','B',6);
		{
		$pdf->Cell(28.5,1.3,'MD2A92CY9KCE01259',0,0,'L');
		$pdf->Cell(21,1.3,'2019',0,0,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(3,1,' ',0,1,'L');
		$pdf->Cell(20,2,'LOCALIDAD',0,0,'L');
		$pdf->Cell(28.5,2,'MARCA/LINEA/SUBLINEA',0,0,'L');
		$pdf->Cell(10,2,'OPERACION',0,1,'L');
		}
	$pdf->SetFont('times','B',4.8);
		{
		$pdf->Cell(20,1.3,'EL MARQUES',0,0,'L');
		$pdf->Cell(28.5,1.3,'BAJAJ/MOTOCICLETA/160CC',0,0,'L');
		$pdf->Cell(20,1.3,'2019/1875787*',0,1,'L');
		}
	$pdf->SetFont('times','B',4.9);
		{
		$pdf->Cell(20,1.8,'(CANADA)',0,0,'L');
		$pdf->Cell(28.5,1.8,'T/M 1CIL',0,0,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,1.8,'FOLIO',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,1.8,'MUNICIPIO',0,0,'L');
		$pdf->Cell(28.5,1.8,' ',0,0,'L');
		}
	$pdf->SetFont('times','B',4.9);
		{
		$pdf->Cell(20,1.8,'A      1928242',0,1,'L');
		}
	$pdf->SetFont('times','B',4.9);
		{
		$pdf->Cell(20,1.3,'EL MARQUES',0,0,'L');
		$pdf->Cell(28.5,1.8,' ',0,0,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,1,'PLACA ANT',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
			$pdf->Cell(20,5,'NUMERO DE CONSTANCIA',0,0,'L');
		$pdf->Cell(28.4,5,'CILINDRAJE         1             CVE VEHICULAR',0,0,'L');
		$pdf->Cell(20,5,'FECHA DE EXPEDICION',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,-2.6,'DE INSCRIPCION (NCI)',0,0,'L');
		$pdf->Cell(28.4,-2.6,'CAPACIDAD        0',0,0,'L');	
		}
	$pdf->SetFont('times','B',4.8);
		{
		$pdf->Cell(20,-2,'05-DIC-19',0,1,'L');	
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,5,'',0,0,'L');	
		$pdf->Cell(28.4,5,'PUERTAS               0             CLASE       5',0,0,'L');
		$pdf->Cell(28.4,5,'OFICINA EXPEDIDORA      9',0,0,'L');	
		$pdf->Cell(28.4,1,' ',0,1,'L');		
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,6,'ORIGEN',0,0,'L');
		$pdf->Cell(28.5,6,'ASIENTOS             2              TIPO          1',0,0,'L');
		$pdf->Cell(20,6,'MOVIMIENTO',0,1,'L');	
		}
	$pdf->SetFont('times','B',4.9);
		{
		$pdf->Cell(20,-2,'IMPORTADO',0,0,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(28.5,-2,'COMBUSTIBLE     1             USO          36',0,0,'L');
		$pdf->Cell(20,-2,'ALTA DE PLACA',0,1,'L');
		}
	$pdf->SetFont('times','B',3.5);
		{
		$pdf->Cell(20,5,'COLOR',0,0,'L');
		$pdf->Cell(28.5,5,'TRANSMISION                     RFA',0,0,'L');
		$pdf->Cell(20,5,'NUMERO DE MOTOR',0,1,'L');
		}
	$pdf->SetFont('times','B',4.9);
		{
		$pdf->Cell(20,-2,'NEGRO',0,0,'L');
		$pdf->Cell(28.5,-2,'ESTANDAR',0,0,'L');
		$pdf->Cell(28.5,-2,'JEYCJE56381',0,1,'L');
		}


	$pdf->Output();
	
?>