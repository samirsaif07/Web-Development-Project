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
      padding: .8rem;
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
        content:"Final Buyer:";
      }
      
      td:nth-child(3)::before{
        content:"Product Item Code:";
      }
      
      td:nth-child(4)::before{
        content:"Size:";
      }
      td:nth-child(5)::before{
        content:"Delievery QTY:";
      }
      td:nth-child(6)::before{
        content:"Delievery Date:";
      }
      
      td:nth-child(7)::before{
        content:"Remarks:";
      }
      
      td:nth-child(8)::before{
        content:"Action:";
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
<table id="myTable">
<h1>CHALLAN</h1>
<div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By Order No.." title="Type in a name"><br><br>
</div>
<thead>
<tr id="header">
<tr>
       <th>Order No</th>
       <th>Ref Order No</th>
       <th>Colour</th>

    <th>Order QTY</th>

      <th>Size</th>
    <th>Price</th>



<th>Delievery QTY</th>
<th colaspan="2">Action</th>


</tr>
</thead>
<?php
$conn=mysqli_connect("localhost", "root", "", "pranta");
if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}
$sql = "SELECT fb,banik.orderno,dd,gpn,cusname,i,ron,c,oq,s,p,pq from banik INNER JOIN b ON banik.orderno = b.orderno INNER JOIN ba ON banik.orderno = ba.orderno INNER JOIN ban ON banik.orderno=ban.orderno order by orderno desc ";
$result = $conn-> query($sql);

    while ($row = $result-> fetch_assoc()){
        ?>
        <tbody>
        <tr>
          
          <td><?php echo $row['orderno']; ?></td>
            
            
            
            <td><?php echo $row['ron']; ?></td>
            
            <td><?php echo $row['c']; ?></td>
            
            <td><?php echo $row['oq']; ?></td>
            
            <td><?php echo $row['s']; ?></td>
            <td><?php echo $row['p']; ?></td>
            

            
            <td><?php echo $row['pq']; ?></td>
            
            <td><a href="delete2 copy.php?orderno=<?php echo $row['orderno']; ?>"><button type="submit" name="delete">Delete</button></a></td>
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