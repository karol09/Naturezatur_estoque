<?php

	$host= "localhost";
	$user="root";
	$pass= "";
	$banco= "estoque";

	$mysqli = new mysqli($host, $user, $pass, $banco);
	
	
	if (!$mysqli) {
		
    die("Tentativa de conexão falhou!" . mysqli_error());
	
		}

?>