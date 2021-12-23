<?php
	


// Abriendo el archivo
	$Manejador = fopen("Informacion.txt", "r");

// Recorremos todas las lineas del archivo
	while(!feof($Manejador)){
// Leyendo una linea
	$Texto = fgets($Manejador);
// Imprimiendo una linea
	echo nl2br($Texto);
}

// Cerrando el archivo
	fclose($Manejador);

?>