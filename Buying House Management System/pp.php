<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "pranta";
$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){
    if(!empty($_POST['orderno']) && !empty($_POST['pd']) && !empty($_POST['pst']) && !empty($_POST['pft']) && !empty($_POST['pq']) && !empty($_POST['r'])){

        $orderno= $_POST['orderno'] ;
        $pd= $_POST['pd'] ;
        $pst= $_POST['pst'] ;
        $pft= $_POST['pft'] ;
        $pq= $_POST['pq'] ;
        $r= $_POST['r'] ;
        
        $query="insert into ban(orderno,pd,pst,pft,pq,r) values('$orderno' , '$pd' , '$pst' , '$pft' , '$pq' , '$r')";

        $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            header("location:ppp.php");
        
        
        }
        else{
            echo "not suck";
        }
    }
    
        
    else{
        echo "all re";
    }
}


?>