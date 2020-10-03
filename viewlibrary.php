<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("admin_header.php")?>
<body>
<form action="" method="POST">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td  >ID</td>
    <td>Name</td>
    <td>Address</td>
    <td>Number</td>
    <td>Work Time</td>
    <td>Pin</td>
    <td>District</td>
    

  </tr>
<?php
include("connection.php");
$rs=mysqli_query($con,"select * from add_library");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['libname']?></td>
    <td width="100%"><?php echo $row['address']?></td>
    <td><?php echo $row['cellno']?></td>
    <td><?php echo $row['worktime']?></td>
    <td><?php echo $row['pin']?></td>
    <td><?php echo $row['district']?></td>
   
   </tr>
  <?php $i++; }?>
</table>
</form>
</body>
</html>