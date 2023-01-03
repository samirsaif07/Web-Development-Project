<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .inputf{
        font-family: Arial, Helvetica ,sans-serif;   
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 50%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:black;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
    }
    body{
      background-color:#f5f5f5;
      font-family: Arial, Helvetica ,sans-serif;  
    }
    .wrapper{
        background-color:#fcfcfc;
        width:800px;
        padding:25px;
        height:100%;
        margin:25px auto 0;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
    }
    .wrapper h1,h4{
        background-color:#fcfcfc;
        text-align:center;

        
    }
    .wrapper h2{
        background-color:#fcfcfc;
        text-align:center;
        border: 1px groove #333;
        box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
        
        box-sizing: border-box; 
    }
    .inputf input[type="text"]
    
    {
        font-family: Arial, Helvetica ,sans-serif;   
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 2px;
	width: 50%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:black;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}

    
    
    
.inputf input[type="text"]:focus{
    background:#d2d9dd;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}



.divc {
  background-color: gray;
  
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;

  
}
    </style>
</head>
<body>
    

    

       
       
<?php
$conn=mysqli_connect("localhost", "root", "", "pranta");
if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}
$sql = "SELECT fb,banik.orderno,dd,gpn,cusname,i,ron,c,oq,s,p,pq from banik INNER JOIN b ON banik.orderno = b.orderno INNER JOIN ba ON banik.orderno = ba.orderno INNER JOIN ban ON banik.orderno=ban.orderno order by orderno desc limit 1";
$result = $conn-> query($sql);

    while ($row = $result-> fetch_assoc()){
        ?>
        <div class="wrapper">
        
 
 <h1>PRANTA TRIMS LTD</h1>
 <h4>2/3 Basundhora,Dhaka</h4>
 <h4>Phone:016......</h4>
 <h2>DELIVERY CHALLAN</h2>
        
         <form action="" method="POST">
       <div class="inputf">
       
        
        
        <label ><b><i>Challan No  :</i></b><input type="text" placeholder="Challan No:" name="fb" value="<?php echo $row['fb']; ?>"></label><br>
       <label><b><i>Delivery Date  :</i></b><input type="text" placeholder="Delivery Date" name="dd" value="<?php echo $row['dd']; ?>"></label><br>
       
       
      <label><b><i>Gate Pass No  :<i></b><input type="text" placeholder="Gate Pass No" value="<?php echo $row['gpn']; ?>"></label><br>
    
       
      <label><b><i>Customer Name  :</i></b><input type="text" placeholder="Customer Name" name="cusname" value="<?php echo $row['cusname']; ?>"> </label><br>
       
    
      <label><b><i>Customer Address  :<i></b><input type="text" placeholder="Customer Address" name="i" value="<?php echo $row['i']; ?>"></label><br>
      </div>
     
      </form>
  <div>   
<table>
<tr>
       <th>Order No</th>
       <th>Ref Order No</th>
       <th>Colour</th>

    <th>Order QTY</th>

      <th>Size</th>
    <th>Price</th>



<th>Delievery QTY</th>


</tr>
    
          <tr>
          
          <td><?php echo $row['orderno']; ?></td>
            
            
            
            <td><?php echo $row['ron']; ?></td>
            
            <td><?php echo $row['c']; ?></td>
            
            <td><?php echo $row['oq']; ?></td>
            
            <td><?php echo $row['s']; ?></td>
            <td><?php echo $row['p']; ?></td>
            

            
            <td><?php echo $row['pq']; ?></td>
            
            
            </tr>
            <tr>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            </tr>
            </tr>
           
            </tr>
            <tr>
            <td><br></td>
            <td><br></td>
            <td><br></td>
            <td><b>Total</b></td>
            <td><br></td>
            <td><?php echo $row['p']; ?></td>
            <td><br></td>
            </tr>
            
            
        </table>
        </div> <br><br>
        <div>
        <p><b>Received By.........................................................Checked By............................................Authorized Signature</b></p>
        </div>

        
 
           
           
           
           
           </div> <br><br><br> 
           <div class="divc">
           <button onclick="window.print()" type="submit" class="button">Print</button>
           </div>

    <?php
    } 
    
   
?>
       


    
</body>
</html>