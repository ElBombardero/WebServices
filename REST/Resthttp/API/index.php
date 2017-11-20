<?php
$CursosURL="http://localhost:8080/practicas/WebServices/Rest/Resthttp/API/Alumnos/cursos";
$AlumnosURL="http://localhost:8080/practicas/WebServices/Rest/Resthttp/API/Alumnos/lista";
$CursosJSON=file_get_contents($CursosURL);
$AlumnosJSON=file_get_contents($AlumnosURL);
$cursos= json_decode($CursosJSON);
$Alumnos= json_decode($AlumnosJSON);
echo "<h2>Alumnos</h2>";
	echo"<ul>";
	foreach($Alumnos as $Alumnos){
		echo"<li>".$Alumnos."</li>";
	}
	echo"</ul>";
echo "<h2>Cursos</h2>";
	foreach($cursos as $cursos){
		echo"->".$cursos."<br>";
	}

?>