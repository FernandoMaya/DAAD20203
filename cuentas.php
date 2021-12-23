<?php 
	$username = $_GET['username'];
	$password = $_GET['password'];
	$tipo = $_GET['tipo'];
	$status = $_GET['status'];
	$activo = $_GET['bloqueado'];
	$intentos = $_GET['intentos'];

	print("Username: ".$username."<br>");
	print("Password: ".$password."<br>");
	print("Tipo: ".$tipo."<br>");
	print("Status: ".$status."<br>");
	print("Activo: ".$bloqueado."<br>");
	print("Intentos: ".$intentos."<br>");
	
	//Enviar datos al SMDB
	include("funciones.php");
	$Con=Conectar();
	$SQL="INSERT INTO propietarios (username, password, tipo, status, activo, intentos) VALUES('$username','$password','$tipo','$status','$activo','$intentos')";
	$Resultado=Consultar($Con,$SQL);
	print($Resultado);
	Desconectar($Con);  
?>
