<?php
include('connection.php');
$i=$_GET['id'];
$sql="DELETE FROM add_library WHERE id='$i'";
if($con->Query($sql)===TRUE){
echo "deleted successfully";
}
else
{
echo "error".$con->error;
}
header("location:viewlibrary.php");
$con->close();
?>