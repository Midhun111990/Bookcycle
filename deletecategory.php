<?php
include('connection.php');
$i=$_GET['id'];
$sql="DELETE FROM addcat WHERE catid='$i'";
if($con->Query($sql)===TRUE){
echo "deleted successfully";
}
else
{
echo "error".$con->error;
}
header("location:viewcategory.php");
$con->close();
?>