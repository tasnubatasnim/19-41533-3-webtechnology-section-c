<?php  
include('../control/deleteProduct.php');
?>
<!DOCTYPE html>
<html>
<body>
<form name="" action="" method="post">
    <br> <br>
    DELETE PRODUCT <br>
    Name: <?php echo $ppname; ?> <br>
    Buying Price: <?php echo $pbprice; ?> <br>
    Selling PRice: <?php echo $psprice; ?> <br>
    Displayable: <?php echo $pdisplay; ?> <br>
<?php echo $delerror; ?> <br>

    <td><input type="submit" name="delete" value="DELETE"> </td>
</form>

</body>
</html>