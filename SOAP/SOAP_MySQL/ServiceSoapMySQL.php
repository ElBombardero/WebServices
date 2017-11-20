<?php
require_once "../Nusoap/lib/nusoap.php";

$conn=mysql_connect('localhost','root','');
	mysql_select_db('ccp',$conn);
	/*
$consulta = mysql_query("select * from diez where hermano ='dd'");
while($filas=mysql_fetch_assoc($consulta)){
			$Hermano=$filas['Hermano'];
			$Monto=$filas['Monto'];
			$Admin=$filas['Admin'];
	}
	echo $Admin."<br>";
	echo $Monto."<br>";
	echo $Hermano."<br>";
	*/
function MostrarArticulos(){
	$resultado= mysql_query("Select * from diez");
	while($columnas=mysql_fetch_array($resultado)){
		$todas[]=$columnas;
	}
	return $todas;
}
	if(!isset($HTTP_RAW_POST_DATA)){
		$HTTP_RAW_POST_DATA=file_get_contents('php://input');
	}

	$server = new soap_server();
	$server ->register("MostrarArticulos");
	$server->service($HTTP_RAW_POST_DATA);
	exit;
?>