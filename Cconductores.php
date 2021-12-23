<?php
	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM conductores;";
	$Resultado=Consultar($Con, $SQL);
	$n=mysqli_num_rows($Resultado);

?>
<table border = "1">
<tr>
<th>ID</th>
<th>FOTO</th>
<th>GRUPO SANGUÍNEO</th>
<th>NOMBRE</th>
<th>FECHA DE NACIMIENTO</th>
<th>DIRECCIÓN</th>
<th>FIRMA</th>
<th>DONADOR</th>
<th>RESTRICCIONES</th>
</tr>
<?php
for($f=0;$f<$n;$f++){
	print("<tr>");
	$Fila=mysqli_fetch_row($Resultado);
	print("<th>".$Fila[0]."</th><th>".$Fila[1]."</th><th>".$Fila[2]."</th><th>".$Fila[3]."</th><th>".$Fila[4]."</th><th>".$Fila[5]."</th><th>".$Fila[6]."</th><th>".$Fila[7]."</th><th>".$Fila[8]."</th>");
	
}
	print($n);
	mysqli_close($Con);
?>
</table>