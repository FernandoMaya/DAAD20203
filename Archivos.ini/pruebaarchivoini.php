<?php
	$Resultado=parse_ini_file("InformacionAlumno.ini");
	print("Expediente=".$Resultado['Expediente']);
	print("Inscrito=".$Resultado['Inscrito']);
?>