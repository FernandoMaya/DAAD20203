<?php
	$Clave=$_GET['Clave'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM agentes WHERE Clave='$Clave'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>