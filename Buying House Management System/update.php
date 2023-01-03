<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
  box-sizing: border-box;
}

input[type=text], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<body>
 <div class="container">
    <form action="" method="POST">
    <div class="row">
   

   <?php
   $server= "localhost";
   $username= "root";
   $password= "" ;
   $dbname= "pranta";
   $conn = mysqli_connect($server , $username , $password , $dbname) ;

      
   





   if(isset($_GET['orderno'])){
    $orderno = isset($_GET['orderno']) ? $_GET['orderno'] : '';
    $sql = "SELECT * FROM `banik` WHERE orderno=$orderno";
    $result = $conn->query($sql);
    $row = $result-> fetch_array();
   }

  if(isset($_POST['submit'])){
    
          $mainb= $_POST['mainb'] ;
          $cusname= $_POST['cusname'] ;
          
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
          $query="update banik set mainb='$mainb',cusname='$cusname',ron='$ron',pic='$pic',pt='$pt',it='$it',aa='$aa',m='$m',c='$c',opd='$opd',dd='$dd',oq='$oq',u='$u',s='$s',p='$p',i='$i' where orderno=$orderno";
  
          $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
          if($run){
            
            header("location:kk.php");
              
          }
          else{
              echo "not succesfull";
          }
      }
      
          
      
  


   ?>


      <div class="col-25">
        <label>Main Buyer</label>
      </div>
      <div class="col-75">
        <select  name="mainb" value="<?php echo $row['mainb']; ?>">
          <option>Pranta</option>
          <option>Samir</option>
          
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label >Customer Name</label>
      </div>
      <div class="col-75">
        <input type="text"  name="cusname" value="<?php echo $row['cusname']; ?>">
      </div>
    </div>
    
<div class="row">
      <div class="col-25">
        <label>Ref Order No</label>
      </div>
      <div class="col-75">
        <select  name="ron" value="<?php echo $row['ron']; ?>">
          <option>K</option>
          <option>F</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Product Item Code</label>
      </div>
      <div class="col-75">
        <input type="text"  name="pic" value="<?php echo $row['pic']; ?>">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label>Product Type</label>
      </div>
      <div class="col-75">
        <select  name="pt" value="<?php echo $row['pt']; ?>">
          <option>K</option>
          <option>L</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Item Type</label>
      </div>
      <div class="col-75">
        <select  name="it" value="<?php echo $row['it']; ?>">
          <option>K</option>
          <option>L</option>
          
        </select>
      </div>
    </div>
    
<div class="row">
      <div class="col-25">
        <label>Additional Activities</label>
      </div>
      <div class="col-75">
        <select  name="aa" value="<?php echo $row['aa']; ?>">
          <option>S</option>
          <option>P</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Measurment</label>
      </div>
      <div class="col-75">
        <input type="text"  name="m" value="<?php echo $row['m']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Colour</label>
      </div>
      <div class="col-75">
        <input type="text"  name="c" value="<?php echo $row['c']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>OPD</label>
      </div>
      <div class="col-75">
        <input type="text"  name="opd" value="<?php echo $row['opd']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Delivery Date</label>
      </div>
      <div class="col-75">
        <input type="text"  name="dd" value="<?php echo $row['dd']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Order QTY</label>
      </div>
      <div class="col-75">
        <input type="text"  name="oq" value="<?php echo $row['oq']; ?>">
      </div>
    </div>
<div class="row">
      <div class="col-25">
        <label>Unit</label>
      </div>
      <div class="col-75">
        <select  name="u" value="<?php echo $row['u']; ?>">
          <option>L</option>
          <option>M</option>
          
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Size</label>
      </div>
      <div class="col-75">
        <input type="text"  name="s" value="<?php echo $row['s']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Price</label>
      </div>
      <div class="col-75">
        <input type="text"  name="p" value="<?php echo $row['p']; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Instruction</label>
      </div>
      <div class="col-75">
        <input type="text"  name="i" value="<?php echo $row['i']; ?>">
      </div>
    </div>
    <div class="row">
        
      <input type="submit" name="submit" value="Update">
    </div>
  
    </form>
 </div>
</body>
</body>
</html>