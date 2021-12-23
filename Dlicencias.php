<?php
	$NumerodeLicencia=$_GET['NumerodeLicencia'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM licencias WHERE NumerodeLicencia='$NumerodeLicencia'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>