<?php
	
	require_once "../Nusoap/lib/nusoap.php";
	
	function mostrarDatos(){
		$datos="Esto son los datos que se van a mostrar";
		return $datos;
	}
	
	function mostrarImagen($categoria){
		if($categoria =='espacio'){
			$imagen='charmeleon.png';
		}else{
			$imagen='colores.png';
		}
		$resultado ="<img src='img/".$imagen."'>";
		return $resultado;
	}
	if(!isset($HTTP_RAW_POST_DATA)){
		$HTTP_RAW_POST_DATA=file_get_contents('php://input');
	}
	
	
	$server = new soap_server();
	//Describir Web server: Al incluir esta funcion solo se mostraran las funciones que tengan todos definido
	$server->configureWSDL("info datos", "urn:infoDatos");
	//-Describir Web server
	$server-> register("mostrarDatos",
		array(),	//parametro
		array("return"=> "xsd:string"),	//respuesta
		"urn:infoDatos",	//namespace
		"urn:infoDatos#mostrarDatos",	//accion
		"rpc",	//estilo
		"encoded",	//uso
		"Muestra el contenido");	//descripcion
		
	$server-> register("mostrarImagen",
		array("categoria"=> "xsd:string"),	//parametro
		array("return"=> "xsd:string"),	//respuesta
		"urn:infoDatos",	//namespace
		"urn:infoDatos#mostrarImagen",	//accion
		"rpc",	//estilo
		"encoded",	//uso
		"Muestra una imagen");
	$server->service($HTTP_RAW_POST_DATA);

?>