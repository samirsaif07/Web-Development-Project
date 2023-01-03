<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "pranta";
$conn = mysqli_connect($server , $username , $password , $dbname) ;
if(isset($_POST['submit'])){
    if(!empty($_POST['mainb']) && !empty($_POST['cusname']) && !empty($_POST['orderno']) && !empty($_POST['ron']) && !empty($_POST['pic']) && !empty($_POST['pt']) && !empty($_POST['it']) && !empty($_POST['aa']) && !empty($_POST['m']) && !empty($_POST['c']) && !empty($_POST['opd']) && !empty($_POST['dd']) && !empty($_POST['oq']) && !empty($_POST['u']) && !empty($_POST['s']) && !empty($_POST['p']) && !empty($_POST['i'])){
        $mainb= $_POST['mainb'] ;
        $cusname= $_POST['cusname'] ;
        $orderno= $_POST['orderno'] ;
        $ron= $_POST['ron'] ;
        $pic= $_POST['pic'] ;
        $pt= $_POST['pt'] ;
        $it= $_POST['it'] ;
        $aa= $_POST['aa'] ;
        $m= $_POST['m'] ;
        $c= $_POST['c'] ;
        $opd= $_POST['opd'] ;
        $dd= $_POST['dd'] ;
        $oq= $_POST['oq'] ;
        $u= $_POST['u'] ;
        $s= $_POST['s'] ;
        $p= $_POST['p'] ;
        $i= $_POST['i'] ;
        $query="insert into banik(mainb,cusname,orderno,ron,pic,pt,it,aa,m,c,opd,dd,oq,u,s,p,i) values('$mainb' , '$cusname' , '$orderno' , '$ron' , '$pic' , '$pt' , '$it' , '$aa' , '$m' , '$c' , '$opd' , '$dd' , '$oq' , '$u' , '$s' , '$p' , '$i')";

        $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            header("location:kk.php");
        
        
        }
        else{
            echo "not succesfull";
        }
    }
    
        
    else{
        echo "all required";
    }
}


?>