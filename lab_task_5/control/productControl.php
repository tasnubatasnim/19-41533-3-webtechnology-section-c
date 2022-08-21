<?php
include('../db/database.php');

// store session data
$pname=$bprice=$sprice=$profit=$display=$pnameerr=$bpriceerr=$spriceerr=$error=$srcerr="";
$search=array();
if (isset($_POST['save'])) 
{
    if (empty($_POST["pname"])) 
    {
        $pnameerr = "Product name is required";
    } 
    if (empty($_POST['bprice']))
    {
        $bpriceerr = "Buying price is required";
    }
    if (empty($_POST['sprice']))
    {
        $spriceerr = "Selling price is required";
    }
    if (!isset($_REQUEST["display"]))
    {
        $display= "No";
    }
    if (isset($_REQUEST["display"]))
    {
        $display= "Yes";
    }

if ($pnameerr=="" && $bpriceerr=="" && $spriceerr=="")
{
$pname=$_POST['pname'];
$bprice=$_POST['bprice'];
$sprice=$_POST['sprice'];
$profit=$sprice-$bprice;

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertProduct($conobj,"product",$pname,$bprice,$sprice,$profit,$display);

if ($userQuery===TRUE) 
{
   $error = "Product Data inserted";
}
else 
{
   $error = "Product Data not inserted";
}
$connection->CloseCon($conobj);

}
}

function allPrd()
{
$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->ShowAll($conobj,"product");
return $userQuery;
$connection->CloseCon($conobj);
}

if (isset($_POST['search'])) 
{
    if(empty($_POST["srcname"])) 
    {
        $srcerr="Enter product name";
    }
    if ($srcerr=="")
    {
        $srcname=$_POST['srcname'];
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowSrc($conobj,"product",$srcname);
    $search=$userQuery;
    $connection->CloseCon($conobj);
    }
}

?>