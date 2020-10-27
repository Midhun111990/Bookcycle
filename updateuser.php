  <?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM adduser WHERE id=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
}
if(isset($_POST['btnupdate']))
{

$First_name=$_POST['ufname'];
  $Last_name=$_POST['ulname'];
  $email=$_POST['uemail'];
  $password=$_POST['upass'];
  $gender=$_POST['ugender'];
  $address=$_POST['uadd'];
  $dob=$_POST['udob'];
  $contact=$_POST['ucontact'];
  $pincode=$_POST['upin'];
  $district=$_POST['udistrict'];
  $status=$_POST['ustatus'];


$update="UPDATE adduser SET First_name='$First_name', Last_name='$Last_name', email='$email', password='$password', gender='$gender', address='$address', dob='$dob', contact='$contact', pincode='$pincode', district='$district', status='$status' WHERE id=".$_GET['id'];
$up=mysqli_query($con,$update);
if(!isset($sql)){
die("error $sql".mysqli_connect_error());
}
else
{
header("location:viewuser.php");
}
}
?>
<html>
<head>

</head>
<body bgcolor="grey">
<form method="POST">
<table width="500" border="10" cellspacing="0" cellpadding="1" align="center" style="font-size: 150%">
  <center><tr>
  <td>First name <center><input type="text" name="ufname" value="<?php echo $row['First_name'];?>"></center></td></tr>
  <tr><td>Last name <center><input type="text" name="ulname" value="<?php echo $row['Last_name'];?>"></center></td></tr>
  <tr><td>E-mail <center><input type="text" name="uemail" value="<?php echo $row['email'];?>"></center></td></tr>
  <tr><td>Password <center><input type="text" name="upass" value="<?php echo $row['password'];?>"></center></td></tr>
  <tr><td>Gender <center><input type="text" name="ugender" value="<?php echo $row['gender'];?>"></center></td></tr>
  <tr><td>Address <center><input type="text" name="uadd" value="<?php echo $row['address'];?>"></center></td></tr>
  <tr><td>Date of Birth <center><input type="text" name="udob" value="<?php echo $row['dob'];?>"></center></td></tr>
  <tr><td>Contact <center><input type="text" name="ucontact" value="<?php echo $row['contact'];?>"></center></td></tr>
  <tr><td>Pincode <center><input type="text" name="upin" value="<?php echo $row['pincode'];?>"></center></td></tr>
  <tr><td>District <center><input type="text" name="udistrict" value="<?php echo $row['district'];?>"></center></td></tr>
  <tr><td>Status<center><input type="text" name="ustatus" value="<?php echo $row['status'];?>"></center></td></tr>
   



<tr>
<td align="center"><button type="submit" name="btnupdate" id="btnupdate" onClick="update()"><strong>Update</strong></button></td></tr>
<tr align="center"><td><a href="viewlibrarian	.php"><button type="button" value="button">Cancel</button></a></center></td>
</tr>
</center>
</table>
</form>
<script>
function update(){
var x;
if(confirm("updated data successfully")==true){
x="update";
}
}
</script>
</body>
</html>