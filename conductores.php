<?php 
	$ID = $_POST['ID'];
	$Foto = $_POST['Foto'];
	$Gruposanguineo = $_POST['Gruposanguineo'];
	$Nombre = $_POST['Nombre'];
	$FechadeNacimiento = $_POST['FechadeNacimiento'];
	$Direccion = $_POST['Direccion'];
	$Firma = $_POST['Firma'];
	$Donador = $_POST['Donador'];
	$Restricciones = $_POST['Restricciones'];

	print("ID: ".$ID."<br>");
	print("Foto: ".$Foto."<br>");
	print("Grupo sanguíneo: ".$Gruposanguineo."<br>");
	print("Nombre: ".$Nombre."<br>");
	print("Fecha de Nacimiento: ".$FechadeNacimiento."<br>");
	print("Dirección: ".$Direccion."<br>");
	print("Firma: ".$Firma."<br>");
	print("Donador: ".$Donador."<br>");
	print("Restricciones: ".$Restricciones."<br>");

	//Enviar datos al SMDB
	include("funciones.php");
	$Con=Conectar();
	$SQL="INSERT INTO conductores (ID, Foto, Gruposanguineo, Nombre, FechadeNacimiento, Direccion, Firma, Donador, Restricciones) VALUES('$ID','$Foto','$Gruposanguineo','$Nombre','$FechadeNacimiento','$Direccion','$Firma','$Donador','$Restricciones')";
	$Resultado=Consultar($Con,$SQL);
	print($Resultado);
	Desconectar($Con);
?>