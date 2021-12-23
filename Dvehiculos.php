<?php
	$Id=$_GET['Id'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM vehiculos WHERE Id='$Id'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>