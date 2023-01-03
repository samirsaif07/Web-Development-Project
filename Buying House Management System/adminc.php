<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "pranta";
$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){
    
       $query="SELECT * FROM `admin_pass`  WHERE `sn`='$_POST[sn]' AND `sc`='$_POST[sc]'";
       $result=mysqli_query($conn,$query);
       if(mysqli_num_rows($result)==1){
           session_start();
           $_SESSION['ai']=$_POST['sn'];
           header("location:k.php");
       }
       else{
        echo '<script>alert("Wrong name or code")</script>';
       }
}


?>