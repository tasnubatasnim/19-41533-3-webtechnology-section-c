<?php
//include('../db/database.php');
include('../view/product.php');

$ename= $_GET["upname"];
$epname=$edisplay=$ppname=$pbprice=$psprice=$pdisplay=$chk=$uperror="";
$eprofit= $esprice =$ebprice = 0;

if (!empty($ename))
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->CheckPro($conobj,"product",$ename);
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

if (isset($_POST["esave"]))
{
    if (!isset($_REQUEST["edisplay"]))
    {
        $edisplay= "No";
    }
    if (isset($_REQUEST["edisplay"]))
    {
        $edisplay= "Yes";
    }
$pname=$_POST['epname'];
$bprice=$_POST['ebprice'];
$sprice=$_POST['esprice'];
$eprofit=$esprice-$ebprice;

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateProduct($conobj,"product",$ppname,$epname,$ebprice,$esprice,$eprofit,$edisplay);

if ($userQuery===TRUE) 
{
$uperror = "Product Data Update";
}
else 
{
$uperror = "Product Data not updated";
}
$connection->CloseCon($conobj);

}

?>