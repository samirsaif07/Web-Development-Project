<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:rgb(30,30,40); }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }


[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
    </style>
</head>
<body>
<body>
<div class="con">
<form action="" method="POST">
<?php
   $server= "localhost";
   $username= "root";
   $password= "" ;
   $dbname= "pranta";
   $conn = mysqli_connect($server , $username , $password , $dbname) ;
   if(isset($_GET['orderno'])){
    $orderno = isset($_GET['orderno']) ? $_GET['orderno'] : '';
    $sql = "SELECT * FROM `ba` WHERE orderno=$orderno";
    $result = $conn->query($sql);
    $row = $result-> fetch_array();
   }
   if(isset($_POST['submit'])){
      
          
          
           $dq= $_POST['dq'] ;
           
           
           $query="update ba set dq='$dq' where orderno=$orderno";
   
           $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
           if($run){
               header("location:ddd.php");
           
           
           }
           else{
               echo "not succesfull";
           }
       }
       
   
   

?>





<label>Delievery QTY</label> <input type="text" name="dq" class="feedback-input" placeholder="Delievery QTY" value="<?php echo $row['dq']; ?>"><br>

<button type="submit" name="submit">Update </button>

</form>
</div>
</body>
</html>