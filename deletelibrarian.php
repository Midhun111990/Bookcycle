<?php
include('connection.php');
$i=$_GET['id'];
$sql="DELETE FROM addlibrarian WHERE id='$i'";
if($con->Query($sql)===TRUE){
echo "deleted successfully";
}
else
{
echo "error".$con->error;
}
header("location:viewlibrarian.php");
$con->close();
?>