<?php 
	$RFC = $_GET['RFC'];
	$Nombre = $_GET['Nombre'];
	$Localidad = $_GET['Localidad'];
	$Municipio = $_GET['Municipio'];

	print("RFC: ".$RFC."<br>");
	print("Nombre: ".$Nombre."<br>");
	print("Localidad: ".$Localidad."<br>");
	print("Municipio: ".$Municipio."<br>");

	include("funciones.php");
	$Con=Conectar();
	$SQL="INSERT INTO propietarios VALUES('$RFC','$Nombre','$Localidad','$Municipio')";
	$Resultado=Consultar($Con,$SQL);
	print($Resultado);
	Desconectar($Con);

	$Manejador=fopen("propietarios.csv","a+");
	if(fgets($Manejador)==""){
		fputs($Manejador,"RFC,Nombre,Localidad,Municipio");
		$Manejador=fopen("propietarios.csv","a+");
	}
	fputs($Manejador, "\n$RFC,$Nombre,$Localidad,$Municipio");
	fclose($Manejador);	

?>