<?php

	try{
		$servername = 'localhost';
		$user = 'root';
		$pass = '';
		$name = 'greencode';
		$db = mysqli_connect($servername,$user,$pass,$name);
	}

	catch (Exception $e){
		echo $e->errorMessage();
	}
?>