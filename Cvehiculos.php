<?php
	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM vehiculos;";
	$Resultado=Consultar($Con, $SQL);
	$n=mysqli_num_rows($Resultado);

?>
<table border = "1">
<tr>
<th>ID</th>
<th>ORIGEN</th>
<th>VIGENCIA</th>
<th>COLOR</th>
<th>MARCA</th>
<th>MODELO</th>
<th>TIPO</th>
<th>USO</th>
<th>NÚMERO DE MOTOR</th>
<th>SERIE</th>
<th>PUERTA</th>
<th>CILINDRO</th>
<th>COMBUSTIBLE</th>
<th>NIV</th>
<th>PERMISO</th>
<th>PLACA</th>
<th>PROPIETARIO</th>
</tr>
<?php
for($f=0;$f<$n;$f++){
	print("<tr>");
	$Fila=mysqli_fetch_row($Resultado);
	print("<th>".$Fila[0]."</th><th>".$Fila[1]."</th><th>".$Fila[2]."</th><th>".$Fila[3]."</th><th>".$Fila[4]."</th><th>".$Fila[5]."</th><th>".$Fila[6]."</th><th>".$Fila[7]."</th><th>".$Fila[8]."</th><th>".$Fila[9]."</th><th>".$Fila[10]."</th><th>".$Fila[11]."</th><th>".$Fila[12]."</th><th>".$Fila[13]."</th><th>".$Fila[14]."</th><th>".$Fila[15]."</th><th>".$Fila[16]."</th>");
	
}
	print($n);
	mysqli_close($Con);
?>
</table>