<?php
	$FUsuario=$_POST['FUsuario'];
	$FPassword=$_POST['FPassword'];

	include("funciones.php");
	$Con=Conectar();
	$SQL="SELECT * FROM cuentas WHERE username='$FUsuario' OR = '$FAdministrador';";
	$Resultado=Consultar($Con,$SQL);
	$n=mysqli_num_rows($Resultado);
	if(n==1){
		$Fila=mysqli_fetch_row($Resultado);
		if($FPassword==$Fila[1]){
			if($Fila[3]==1){
				if($Fila[4]==0){
					print("Acceso correcto");
					}else{
					print("Cuenta bloqueada");
					}
			}else{
			print("Usuario no activo");
			}
	}else{
		print("Contrasena incorrecta");
		$SQL="UPDATE cuentas SET intentos=intentos+1" WHERE username='$FUsuario'";
		Consultar($Con, $SQL);
		if($Fila[5]>2){
		$SQL="UPDATE cuentas Bloqueado=1 WHERE username='$FUsuario'";
		}
	}
	}else{
		print("El usuario no existe");
	}
	Desconectar($Con);
?>