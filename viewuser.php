
<?php
include('connection.php');
//include('addcategory.php');
$sql="SELECT * FROM adduser";
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
<form action="" method="POST">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td >ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>E-mail</td>
    <td>Password</td>
    <td>Gender</td>
    <td>Address</td>
    <td>Date-of-Birth</td>
    <td>Contact</td>
    <td>Pin</td>
    <td>District</td>
    <td>Status</td>
  <td align="center" colspan="2">Operations</td>
</tr>
<?php
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
?>
  <tr>
    <td><?php echo $row['id']?></td>
 <td><?php echo $row['First_name']?></td>
    <td><?php echo $row['Last_name']?></td>
    <td><?php echo $row['email']?></td>
     <td><?php echo $row['password']?></td>
      <td><?php echo $row['gender']?></td>
    <td ><?php echo $row['address']?></td>
     <td><?php echo $row['dob']?></td>
    <td><?php echo $row['contact']?></td>
     <td><?php echo $row['pincode']?></td>
      <td><?php echo $row['district']?></td>
       <td><?php echo $row['status']?></td>
   
     <td  align="center"><a href="deleteuser.php?id=<?php echo $row['id']?>"><input type="button" value="Delete"></a>
   <a href="updateuser.php?id=<?php echo $row['id']?>"><input type="button" value="Update"></a></td>
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

<h3 align="center"><a href="adduser.php">BACK</a></h3>    

</body>
</html>