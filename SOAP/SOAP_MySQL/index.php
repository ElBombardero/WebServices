<?php
	require_once "../Nusoap/lib/nusoap.php";
	$cliente=new nusoap_client("http://localhost:8080/practicas/WebServices/Soap/SOAP_MySQL/ServiceSoapMySQL.php");
	$articulos=$cliente->call("MostrarArticulos");
	echo "<h2>Articulos</h2>";
	echo "<ul>";
	$arreglo=["Hermano","Monto","Fecha","Admin"];
	echo $arreglo[0];
	foreach($articulos as $item){
		echo"<li>".$item['Hermano']. "</li>";
		echo"<li>".$item['Monto']. "</li>";
		echo"<li>".$item['Fecha']. "</li>";
		echo"<li>".$item['Admin']. "</li><br>";
	}
	echo "</ul>";

?>