<?php
	$ID=$_GET['ID'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM verificaciones WHERE ID='$ID'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>