<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #myInput {
  background-color:purple;
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 15%; /* Full-width */
  font-size: 15px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  color:black;
}

    body{
      
    
      background-color:purple;
      
      
    }
    table{
      font-family:sans-serif;
    }
    th{
      background-color: black;
      color: blue;
    }
    th,td{
        padding: .7rem;
      font-size:.8rem;
    }
    tbody{
      background-color: #333;
      color: white;
    }
    @media screen and (max-width: 600px){
      #myInput {
  background-color:purple;
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 20%; /* Full-width */
  font-size: 10px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  color:black;
}
      thead{
        display:none;
      }
      td{
        display:block;
      }
      td:first-child{
        
        background-color:black;
        color:blue;
        text-align:center;
      }
      td:nth-child(2)::before{
        content:"Main Buyer:";
      }
      td:nth-child(3)::before{
        content:"Final Buyer:";
      }
      td:nth-child(4)::before{
        content:"Customer Name:";
      }
      td:nth-child(5)::before{
        content:"Ref Order No:";
      }
      td:nth-child(6)::before{
        content:"Product Item Code:";
      }
      td:nth-child(7)::before{
        content:"Product Type:";
      }
      td:nth-child(8)::before{
        content:"Item Type:";
      }
      td:nth-child(9)::before{
        content:"Additional Activities:";
      }
      td:nth-child(10)::before{
        content:"Measurment:";
      }
      td:nth-child(11)::before{
        content:"Colour:";
      }
      td:nth-child(12)::before{
        content:"OPD:";
      }
      td:nth-child(13)::before{
        content:"Delivery Date:";
      }
      td:nth-child(14)::before{
        content:"Order QTY:";
      }
      td:nth-child(15)::before{
        content:"Unit:";
      }
      td:nth-child(16)::before{
        content:"Size:";
      }
      td:nth-child(17)::before{
        content:"Price:";
      }
      td:nth-child(18)::before{
        content:"Instruction:";
      }
      td:nth-child(19)::before{
        content:"Production Discription:";
      }
      td:nth-child(20)::before{
        content:"Production Start Time:";
      }
      td:nth-child(21)::before{
        content:"Production Finish Time:";
      }
      td:nth-child(22)::before{
        content:"Production QTY:";
      }
      td:nth-child(23)::before{
        content:"Remarks:";
      }
      td:nth-child(24)::before{
        content:"Delievery QTY:";
      }
      
      td{
        text-align:right;
      }
      td::before{
        float:left;
        margin-right:3rem;
        font-weight:bold;
      }
      
      
    }
    </style>
</head>
<body>
<table class="container" id="myTable">
<h1>FOLLOW UP</h1>
<div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Order No.." title="Type in a name"><br><br>
</div>
<thead>
<tr>
<th>Order No</th>
<th>Main Buyer</th>
<th>Challan No</th>
<th>Customer Name</th>

<th>Ref Order No</th>
<th>Product Item Code</th>
<th>Product Type</th>
<th>Item Type</th>
<th>Additional Activities</th>
<th>Measurment</th>
<th>colour</th>
<th>OPD</th>
<th>Delivery date</th>
<th>Order QTY</th>
<th>Unit</th>
<th>Size</th>
<th>Price</th>
<th>Customer Address</th>

<th>Production Discription</th>
<th>Production Start Time</th>
<th>Production Finish Time</th>
<th>Production QTY</th>
<th>Remarks</th>
<th>Delievery QTY</th>

</tr>
</thead>
<?php
$conn=mysqli_connect("localhost", "root", "", "pranta");
if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}
$sql = "SELECT * from banik  INNER JOIN ba ON banik.orderno = ba.orderno INNER JOIN ban ON banik.orderno=ban.orderno ";
$result = $conn-> query($sql);

    while ($row = $result-> fetch_assoc()){
        ?>
        <tbody>
          <tr>
          <td><?php echo $row['orderno']; ?></td>
            <td><?php echo $row['mainb']; ?></td>
            <td><?php echo $row['fb']; ?></td>
            <td><?php echo $row['cusname']; ?></td>
            
            <td><?php echo $row['ron']; ?></td>
            <td><?php echo $row['pic']; ?></td>
            <td><?php echo $row['pt']; ?></td>
            <td><?php echo $row['it']; ?></td>
            <td><?php echo $row['aa']; ?></td>
            <td><?php echo $row['m']; ?></td>
            <td><?php echo $row['c']; ?></td>
            <td><?php echo $row['opd']; ?></td>
            <td><?php echo $row['dd']; ?></td>
            <td><?php echo $row['oq']; ?></td>
            <td><?php echo $row['u']; ?></td>
            <td><?php echo $row['s']; ?></td>
            <td><?php echo $row['p']; ?></td>
            <td><?php echo $row['i']; ?></td>

            <td><?php echo $row['pd']; ?></td>
            <td><?php echo $row['pst']; ?></td>
            <td><?php echo $row['pft']; ?></td>
            <td><?php echo $row['pq']; ?></td>
            <td><?php echo $row['r']; ?></td>
            <td><?php echo $row['dq']; ?></td>
            
            </tr>
            </tbody>
    <?php
    }
   
?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>