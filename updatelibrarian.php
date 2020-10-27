  <?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM addlibrarian WHERE id=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
}
if(isset($_POST['btnupdate']))
{

$fname=$_POST['fnamel'];
$lname=$_POST['lnamel'];
$email=$_POST['emaill'];
$password=$_POST['passwordl'];
$gender=$_POST['genderl'];
$address=$_POST['addressl'];
$dob=$_POST['dobl'];
$contact=$_POST['contactl'];
$pincode=$_POST['pincodel'];
$district=$_POST['districtl'];
$libname=$_POST['libnamel'];


$update="UPDATE addlibrarian SET fname='$fname', lname='$lname', email='$email', password='$password', gender='$gender', address='$address', dob='$dob', contact='$contact', pincode='$pincode', district='$district', libname='$libname' WHERE id=".$_GET['id'];
$up=mysqli_query($con,$update);
if(!isset($sql)){
die("error $sql".mysqli_connect_error());
}
else
{
header("location:viewlibrarian.php");
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
  <td>First name <center><input type="text" name="fnamel" value="<?php echo $row['fname'];?>"></center></td></tr>
  <tr><td>Last name <center><input type="text" name="lnamel" value="<?php echo $row['lname'];?>"></center></td></tr>
  <tr><td>E-mail <center><input type="text" name="emaill" value="<?php echo $row['email'];?>"></center></td></tr>
  <tr><td>Password <center><input type="text" name="passwordl" value="<?php echo $row['password'];?>"></center></td></tr>
  <tr><td>Gender <center><input type="text" name="genderl" value="<?php echo $row['gender'];?>"></center></td></tr>
  <tr><td>Address <center><input type="text" name="addressl" value="<?php echo $row['address'];?>"></center></td></tr>
  <tr><td>Date of Birth <center><input type="text" name="dobl" value="<?php echo $row['dob'];?>"></center></td></tr>
  <tr><td>Contact <center><input type="text" name="contactl" value="<?php echo $row['contact'];?>"></center></td></tr>
  <tr><td>Pincode <center><input type="text" name="pincodel" value="<?php echo $row['pincode'];?>"></center></td></tr>
  <tr><td>District <center><input type="text" name="districtl" value="<?php echo $row['district'];?>"></center></td></tr>
  <tr><td>Library <center><input type="text" name="libnamel" value="<?php echo $row['libname'];?>"></center></td></tr>
   



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