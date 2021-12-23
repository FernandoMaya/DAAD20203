<?php
	function Conectar(){
		$Resultado=parse_ini_file("ConfiguracionBD.ini");
		$Server=$Resultado['Server'];
		$User=$Resultado['User'];
		$Password=$Resultado['Password'];
		$BD=$Resultado['BD'];
		$Con=mysqli_connect($Server,$User,$Password,$BD);
		return $Con;
	}
	function Consultar($Con, $SQL){
		$Query=mysqli_query($Con, $SQL) or die(mysqli_error($Con));
		return $Query; 
	}
	function Desconectar($Con){
		mysqli_close($Con);
	}
?>