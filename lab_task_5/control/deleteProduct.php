<?php
//include('../db/database.php');
include('../view/product.php');

$dname= $_GET["delname"];
$dpname=$ppname=$pbprice=$psprice=$pdisplay=$chk=$eprofit=$delerror="";

if (!empty($dname))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckPro($conobj,"product",$dname);
    if ($userQuery->num_rows > 0 && $userQuery->num_rows < 2)
    {
        while($row = $userQuery->fetch_assoc())
        {
            $ppname=$row['pname'];
            $pbprice= $row['bprice'];
            $psprice=$row['sprice'];
            $pdisplay=$row['display'];
        }
    }
    $connection->CloseCon($conobj);
}

if (isset($_POST["delete"]))
{
$pname=$ppname;

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->DeleteProduct($conobj,"product",$ppname);

if ($userQuery===TRUE) 
{
$delerror = "Product Data Deleted";
}
else 
{
$delerror = "Product Data not Deleted";
}
$connection->CloseCon($conobj);

}

?>