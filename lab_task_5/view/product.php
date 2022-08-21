<?php include ('../control/productControl.php'); ?>
<!DOCTYPE html>
<html>
<body>
<form name="" action="" method="post">
<?php echo $error; ?>
<table>
<caption> ADD PRODUCT
<tr>
    <td> Name </td>
</tr>
<tr>
    <td> <input type="text" name="pname" placeholder="enter product name"> <?php echo $pnameerr; ?></td>
</tr>
<tr>
    <td>Buying Price</td>
</tr>
<tr>
    <td> <input type="text" name="bprice" placeholder="enter buying price"> <?php echo $bpriceerr; ?></td>
</tr>
<tr>
    <td>Selling Price</td>
</tr>
<tr>
    <td> <input type="text" name="sprice" placeholder="enter selling price"> <?php echo $spriceerr; ?></td>
</tr>
<tr>
    <td><input type="checkbox" name="display" value="Yes"> Display </td>
</tr>
<tr>
    <td><input type="submit" name="save" value="SAVE"> </td>
</tr>
</form>

<?php  
    $product = allPrd();
?>
      <table border="1">
        <br><br>
      <caption> DISPLAY
      	<th>Name</th>
          <th>Profit</th>
          
<?php  
     
     foreach ($product as $p) 
          {
               echo "<tr>";
               echo "<td>" .$p["pname"]. "</td>";
               echo "<td>" .$p["profit"]. "</td>";
               echo "<td><a href='./edit.php?upname=" .$p["pname"]. "'>edit</a></td>";
               echo "<td><a href='./delete.php?delname=" .$p["pname"]. "'>delete</a></td>";
               echo "</td>";
               echo "</tr>";
          }
?>
</table>

<form method="post">
      <table border="1">
        <br><br>
      <caption> SEARCH
      	<th>Name</th>
          <th>Profit</th>
          <tr>
    <td> <input type="text" name="srcname" placeholder="enter product name"> <?php echo $srcerr; ?></td>
          <td><input type="submit" name="search" value="Search By Name"> </td>
        </tr>
<?php  
     
     foreach ($search as $s) 
          {
               echo "<tr>";
               echo "<td>" .$s["pname"]. "</td>";
               echo "<td>" .$s["profit"]. "</td>";
               echo "<td><a href='./edit.php?upname=" .$s["pname"]. "'>edit</a></td>";
               echo "<td><a href='./delete.php?delname=" .$s["pname"]. "'>delete</a></td>";
               echo "</td>";
               echo "</tr>";
          }
?>
</table>
        </form>


</body>
</html>