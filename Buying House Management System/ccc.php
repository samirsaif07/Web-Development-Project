<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "pranta";
$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){
    if(!empty($_POST['orderno']) && !empty($_POST['gpn'])){

        $orderno= $_POST['orderno'] ;
        $gpn= $_POST['gpn'] ;
        
        
        $query="insert into b(orderno,gpn) values('$orderno' , '$gpn')";

        $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            header("location:cccc.php");
        
        
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