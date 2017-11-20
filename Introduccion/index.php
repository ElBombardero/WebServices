<?php
	
	$curl = curl_init("http://localhost:8080/practicas/WebServices/introduccion/base.txt");
	
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
	
	$Respuesta= curl_exec($curl);
	$info= curl_getinfo($curl);
	
	if($info['http_code']==200){
		$datos = explode(",",$Respuesta);
		
		echo"<h1 style='color:dodgerBlue'>Esto es lo que hay</h1>";
		
		foreach($datos as $fruta){
			echo"->".$fruta."<br>";
		}
	}else{
		echo"Error".curl_error($curl);
	}
?>