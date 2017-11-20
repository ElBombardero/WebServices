<?php

header("Content-Type: application/json");

function MostrarAlumnos(){
	$alumno =array(
		"nombre"=>"Jose",
		"apellido"=>"diaz",
		"curso"=>"segundo",
		"pais"=>"PR",
		"usuario"=>"Jose27"
	);
	return $alumno;
}
echo json_encode(MostrarAlumnos());


?>