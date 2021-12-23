<?php
	$RFC=$_GET['RFC'];
	include("funciones.php");
	$Con=Conectar();
	$SQL="DELETE FROM propietarios WHERE RFC='$RFC'";
	$Result=Consultar($Con, $SQL);
	print "Affected rows: " . mysqli_affected_rows($Con);
	Desconectar($Con);
?>