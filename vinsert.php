<?php  

 $connect = mysqli_connect("localhost", "root", "", "greencode");  
 $sql = "INSERT INTO volunteers(first_name, last_name) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')"; 

 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data is inserted!';  
 }  
 
 ?>