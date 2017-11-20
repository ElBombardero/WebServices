<?php

	require_once "..//Nusoap/lib/nusoap.php";
	$cliente= new nusoap_client("http://localhost:8080/practicas/WebServices/SOAP/soapBasico/ServiceSoap.php?wsdl&debug=0","wsdl");
	//Variable que almacenara los valores obtenidos del servicio Soap
	$datos= $cliente->call("mostrarDatos");
	//la URL http://localhost:8080/practicas/WebServices/Soap/index.php?dato=espacio
	$imagen= $cliente->call("mostrarImagen",array("categoria"=>$_GET["dato"]));
	
	echo "<h2 style='color:dodgerBlue' align='center'>Mostrando Datos</h2>";
	echo "<p align='center'>".$datos."</p>";
	echo $imagen;

?>