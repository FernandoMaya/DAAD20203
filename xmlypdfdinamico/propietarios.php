<?php 
	$RFC = $_GET['RFC'];
	$Nombre = $_GET['Nombre'];
	$Localidad = $_GET['Localidad'];
	$Municipio = $_GET['Municipio'];

	print("RFC: ".$RFC."<br>");
	print("Nombre: ".$Nombre."<br>");
	print("Localidad: ".$Localidad."<br>");
	print("Municipio: ".$Municipio."<br>");

	include("funciones.php");
	$Con=Conectar();
	$SQL="INSERT INTO propietarios VALUES('$RFC','$Nombre','$Localidad','$Municipio')";
	$Resultado=Consultar($Con,$SQL);
	print($Resultado);
	Desconectar($Con);

	$Manejador=fopen("propietarios.csv","a+");
	if(fgets($Manejador)==""){
		fputs($Manejador,"RFC,Nombre,Localidad,Municipio");
		$Manejador=fopen("propietarios.csv","a+");
	}
	fputs($Manejador, "\n$RFC,$Nombre,$Localidad,$Municipio");
	fclose($Manejador);	

	//Enviar datos a un archivo xml.
	$Manejador=fopen("Propietarios.csv","a+");
	if(fgets($Manejador)==""){
		fputs($Manejador,"Folio, Nombre, Direccion, FechadeNacimiento, CURP, RFC");
		$Manejador=fopen("Propietarios.csv","a+");
	}
	$a = fputs($Manejador, "\n$Folio, \Nombre, $Direccion, $FechadeNacimiento, $CURP, $RFC");
	print($a);
	fclose($Manejador);

	//Enviar datos a un archivo xml
	$xml = new SimpleXMLElement('1.0', 'UTF-8');
	  
	$Propietarios = $xml->createElement('propietarios');
	$Propietarios = $xml->appendChild($Propietarios);
	  
	    $Propietario = $xml->createElement('Propietario');
	    $Propietario = $Propietarios->appendChild($Propietario);
	    $RFC = $xml->createElement('RFC', $RFC);
	    $RFC = $Propietario->appendChild($RFC);
	    $Nombre = $xml->createElement('Nombre', $Nombre);
	    $Nombre = $Propietario->appendChild($Nombre);
	    $Localidad = $xml->createElement('Localidad', $Localidad);
	    $Localidad = $Propietario->appendChild($Localidad);
            $Municipio = $xml->createElement('Municipio', $Municipio);
	    $Municipio = $Propietario->appendChild($Municipio);
	   

	$xml->formatOutput = true;
	$el_xml = $xml->saveXML();
	$xml->save('Propietarios.xml');
?>