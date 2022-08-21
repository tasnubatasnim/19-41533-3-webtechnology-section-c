<?php  
include('../control/editProduct.php');

?>
<!DOCTYPE html>
<html>
<body>
<form name="" action="" method="post">
<?php echo $uperror; ?>
<table>
    <br><br>
<caption> EDIT PRODUCT
<tr>
    <td> Name </td>
</tr>
<tr>
    <td> <input type="text" name="epname" value="<?php echo $ppname; ?>"></td>
</tr>
<tr>
    <td>Buying Price</td>
</tr>
<tr>
    <td> <input type="text" name="ebprice" value="<?php echo $pbprice; ?>"></td>
</tr>
<tr>
    <td>Selling Price</td>
</tr>
<tr>
    <td> <input type="text" name="esprice" value="<?php echo $psprice; ?>"> </td>
</tr>
<tr>
    <td><input type="checkbox" name="edisplay" value="" checked> Display </td>
</tr>
<tr>
    <td><input type="submit" name="esave" value="SAVE"> </td>
</tr>
</form>

</body>
</html>