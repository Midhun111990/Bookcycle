<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("luserview.php")?>
<body>
<form action="" method="POST">
</form>
 

<form action="" method="post">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td align="center">Book Name</td>
<td align="center" colspan="2">Information</td>    
    </tr>
<?php
include("connection.php");
$rs=mysqli_query($con,"select * from addbook");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
 <td><?php echo $row['bookname']?></td>
    <td align="center">
   <a href="aviewbook.php?id=<?php echo $row['id']?>"><input type="button" value="View"></a></td>
</tr>

  <?php $i++; }?>
</table>
</form>
</body>
</html>