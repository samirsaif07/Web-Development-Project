<?php
  $server= "localhost";
  $username= "root";
  $password= "" ;
  $dbname= "pranta";
  $conn = mysqli_connect($server , $username , $password , $dbname) ;
  
  $orderno = $_GET['orderno'];
  $dquery="delete from ban where orderno=$orderno";
  
  $runn=mysqli_query($conn,$dquery) or die(mysqli_error($conn));
  if($runn){
            
    header("location:ppp.php");
      
  }
  else{
      echo "not succesfull";
  }

?>