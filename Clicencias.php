<?php
	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM licencias;";
	$Resultado=Consultar($Con, $SQL);
	$n=mysqli_num_rows($Resultado);

?>
<table border = "1">
<tr>
<th>NUMERO DE LICENCIA</th>
<th>ESTADO</th>
<th>VIGENCIA</th>
<th>OBSERVACIONES</th>
<th>CONDUCTOR</th>
</tr>
<?php
for($f=0;$f<$n;$f++){
	print("<tr>");
	$Fila=mysqli_fetch_row($Resultado);
	print("<th>".$Fila[0]."</th><th>".$Fila[1]."</th><th>".$Fila[2]."</th><th>".$Fila[3]."</th><th>".$Fila[4]."</th>");
	
}
	print($n);
	mysqli_close($Con);
?>
</table>