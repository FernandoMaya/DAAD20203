<?php
	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM multas;";
	$Resultado=Consultar($Con, $SQL);
	$n=mysqli_num_rows($Resultado);

?>
<table border = "1">
<tr>
<th>ID</th>
<th>HORA</th>
<th>FECHA</th>
<th>FUNDAMENTO</th>
<th>GARANTÍA</th>
<th>AGENTE</th>
<th>LICENCIA</th>
<th>VEHÍCULO</th>
</tr>
<?php
for($f=0;$f<$n;$f++){
	print("<tr>");
	$Fila=mysqli_fetch_row($Resultado);
	print("<th>".$Fila[0]."</th><th>".$Fila[1]."</th><th>".$Fila[2]."</th><th>".$Fila[3]."</th><th>".$Fila[4]."</th><th>".$Fila[5]."</th><th>".$Fila[6]."</th><th>".$Fila[7]."</th>");
	
}
	print($n);
	mysqli_close($Con);
?>
</table>