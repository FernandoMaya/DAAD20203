<?php
$FId=$_GET['FId'];
	include("funciones.php");
$Con=Conectar();
$SQL="Select * from propietarios where Id="$FId";
$Resultado=Consultar($Con,$SQL);
$Fila=mysqli_fetch_row($Resultado);
$Dato=$Fila[0]."-".$Fila[1]."-".$Fila[2]."-".$Fila[3];
Desconectar($Con);
	
	require "phpqrcode/qrlib.php";
	//Parametros de configuracion
	$Texto = $Datos;
	$tamano = 5;
	$level = 'L';
	$framSize = 3;
	$filename ="Codigosqr/QR1.png";
	//Enviamos los parametros a la funcion pra generar condigo qr
	
	QRcode::png($Texto, $filename, $level, $tamano, $framSize);


>?