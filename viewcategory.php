
<?php
include('connection.php');
//include('addcategory.php');
$sql="SELECT * FROM addcat";
$result=$con->Query($sql);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("viewheader.php")?>
<body>
<form>

<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
<tr  style="font-size: 150%">
    <td  >Id.</td>
    <td>Name</td>
    <td align="center" colspan="2">Operations</td>
</tr>
<?php
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
?>

<tr>
    <td><?php echo $row['catid']?></td> 
    <td><?php echo $row['catname']?></td>
    <td align="center"><a href="deletecategory.php?id=<?php echo $row['catid']?>"><input type="button" value="Delete"></a>
   <a href="updatecategory.php?id=<?php echo $row['catid']?>"><input type="button" value="Update"></a></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's no data found!!!</th>
</tr>
<?php
}
?>

</table>
</form>

<h3 align="center"><a href="addcategory.php">BACK</a></h3>    

</body>
</html>