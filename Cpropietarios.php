<?php
	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM propietarios;";
	$Resultado=Consultar($Con, $SQL);
	$n=mysqli_num_rows($Resultado);

?>
<table border = "1">
<tr>
<th>RFC</th>
<th>NOMBRE</th>
<th>LOCALIDAD</th>
<th>MUNICIPIO</th>
</tr>
<?php
for($f=0;$f<$n;$f++){
	print("<tr>");
	$Fila=mysqli_fetch_row($Resultado);
	print("<th>".$Fila[0]."</th><th>".$Fila[1]."</th><th>".$Fila[2]."</th><th>".$Fila[3]."</th>");
	
}
	print($n);
	mysqli_close($Con);
?>
</table>
