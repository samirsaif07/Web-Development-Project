<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "pranta";
$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){
    if(!empty($_POST['orderno'])  && !empty($_POST['dq'])){

        $orderno= $_POST['orderno'] ;
      
        $dq= $_POST['dq'] ;
        
        
        $query="insert into ba(orderno,dq) values('$orderno' , '$dq')";

        $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            header("location:ddd.php");
        
        
        }
        else{
            echo "not successfull";
        }
    }
    
        
    else{
        echo "all re";
    }
}


?>