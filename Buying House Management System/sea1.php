<?php
$orderno= $_POST['orderno'];


  $sql = "SELECT * from banik where orderno='$orderno' ";
  $result = $conn-> query($sql);
  while ($row = $result-> fetch_assoc()){
    ?>
    <form action="" method="POST">
    <tbody>
      <tr>
         <td><?php echo $row['orderno']; ?></td>
        <td><?php echo $row['mainb']; ?></td>
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
        <td><a href="update.php?orderno=<?php echo $row['orderno']; ?>"><button type="submit" name="edit">Edit</button></a></td>
        <td><a href="delete.php?orderno=<?php echo $row['orderno']; ?>"><button type="submit" name="delete">Delete</button></a></td>
        </tr>
        </tbody>
        </form>
<?php
}
?>