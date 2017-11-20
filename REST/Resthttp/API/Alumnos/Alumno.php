<?php
	header("Content-Type: application/json");
	
	function mostrarCursos(){
		
		$cursos= array("AngularJS","MongoDB","PHP","UX","Ruby");
		return $cursos;
	}
	
	function mostrarAlumnos(){
		
		$Alumnos= array("jose","Juan","Pedro","Pablo","Carlos");
		return $Alumnos;
	}
	if($_GET["solicitud"]=="cursos"){
		
		$resultado=mostrarCursos();
		
	}else if($_GET["solicitud"]=="lista"){
		
		$resultado=mostrarAlumnos();
		
	}else{
		header("http/1.1 405 Method Not Allowed");
		exit;
	}
	echo json_encode($resultado);
?>