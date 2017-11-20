<?php
$url="";
$JSON=file_get_contents("http://localhost/practicas/WebServices/REST/basico/api/alumnos/Alumno.php");
$datos= json_decode($JSON);
echo "Nombre: ".$datos->nombre ." ".$datos->apellido ."<br>";
echo "Curso: ".$datos->curso ."<br>";
echo "pais: ".$datos->pais ."<br>";
echo "usuario: ".$datos->usuario;

?>