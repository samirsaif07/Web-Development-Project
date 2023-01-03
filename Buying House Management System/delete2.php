<?php
  $server= "localhost";
  $username= "root";
  $password= "" ;
  $dbname= "project";
  $conn = mysqli_connect($server , $username , $password , $dbname) ;
  
  $orderno = $_GET['id'];
  $dquery="delete from userinfo where orderno=$orderno";
  
  $runn=mysqli_query($conn,$dquery) or die(mysqli_error($conn));
  if($runn){
            
    header("location:ddd.php");
      
  }
  else{
      echo "not succesfull";
  }

?>