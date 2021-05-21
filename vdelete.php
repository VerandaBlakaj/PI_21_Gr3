<?php  

 $connect = mysqli_connect("localhost", "root", "", "greencode"); 

 $sql = "DELETE FROM volunteers WHERE id = '".$_POST["id"]."'"; 
  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data deleted!';  
 }  
 ?>