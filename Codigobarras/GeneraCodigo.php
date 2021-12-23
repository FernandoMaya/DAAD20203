<?php
//Obtener datos
include("funciones.php");
$Con=Conectar();
$SQL="Select Id from propietarios where Id=1"
$Resultado=Consultar($Con,$SQL);
$Fila=mysqli_fetch_row($Resultado);
$Dato=$Fila[0];
Desconectar($Con);

////Generar el Codigo de Barras	

print("<img src= barcode.php?filepath=./Codigobarras/Imagen1.png&
text=$Dato&size=40&codetype=Code39&print=true />");
?>