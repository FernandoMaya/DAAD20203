<?php
	$Manejador=fopen("Informacion.txt", "r");
	$Manejador2=fopen("Informacion2.txt", "w");
	copy("Informacion.txt", "Informacion2.txt");
	
	fclose($Manejador);
?>