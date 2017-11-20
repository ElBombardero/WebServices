<?php
	require_once "../Nusoap/lib/nusoap.php";
	$cliente=new nusoap_client("http://wsf.cdyne.com/weatherws/weather.asmx?wsdl","wsdl");
?>