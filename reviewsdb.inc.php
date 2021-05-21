<?php

	$conn = mysqli_connect('localhost', 'root', '', 'greencode');

	if(!$conn){
		die("Connection failed: ".myslqi_connect_error());
	}
?>