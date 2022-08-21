<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wtproject";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
 function CheckPro($conn,$table,$pname)
 {
   $result = $conn->query("SELECT * FROM $table WHERE pname='$pname'");
   return $result;
 }

 function UpdateProduct($conn,$table,$pname,$epname,$ebprice,$esprice,$eprofit,$edisplay)
 {
  $result = $conn->query("UPDATE $table SET pname='$epname',bprice='$ebprice',sprice='$esprice',profit='$eprofit' ,display='$edisplay' WHERE pname='$pname'");
  return $result;
 }

 function InsertProduct($conn,$table,$pname,$bprice,$sprice,$profit,$display)
 {
  $result = $conn->query("INSERT INTO $table (pname, bprice, sprice, profit, display) VALUES ('$pname','$bprice', '$sprice', '$profit', '$display')");
  return $result;
 }

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table WHERE display='Yes'");
 return $result;
 }

 function ShowSrc($conn,$table,$pname)
 {
  $result = $conn->query("SELECT * FROM  $table WHERE pname LIKE '%$pname%' ");
  return $result;
 }

 function DeleteProduct($conn,$table,$pname)
 {
  $result = $conn->query("DELETE FROM $table WHERE pname='$pname' ");
  return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>