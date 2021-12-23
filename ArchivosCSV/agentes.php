<?php 
	$Clave = $_POST['Clave'];
	$Nombre = $_POST['Nombre'];
	$Grupo = $_POST['Grupo'];
	$RFC = $_POST['RFC'];

	print("Clave: ".$Clave."<br>");
	print("Nombre: ".$Nombre."<br>");
	print("Grupo: ".$Grupo."<br>");
	print("RFC: ".$RFC."<br>");

	//Enviar datos al SMBD
	include("funciones.php");
	$Con=Conectar();
	$SQL="INSERT INTO agentes (Clave, Nombre, Grupo, RFC) VALUES ('$Clave','$Nombre','$Grupo','$RFC')";
	$Resultado=Consultar($Con,$SQL);
	print($Resultado);
	Desconectar($Con);

	$Manejador=fopen("agentes.csv","a+");
	if(fgets($Manejador)==""){
		fputs($Manejador,"Clave,Nombre,Grupo,RFC");
		$Manejador=fopen("agentes.csv","a+");
	}
	fputs($Manejador, "\n$Clave,$Nombre,$Grupo,$RFC");
	fclose($Manejador);
?>