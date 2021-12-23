<?php
	$username=$_GET['username'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM cuentas WHERE username='$username'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>