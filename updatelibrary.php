<?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM add_library WHERE id=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
}
if(isset($_POST['btnupdate']))
{
$libname=$_POST['name'];
$address=$_POST['add'];
$cellno=$_POST['no'];
$pin=$_POST['pino'];
$district=$_POST['dis'];


$update="UPDATE add_library SET libname='$libname', address='$address', cellno='$cellno', pin='$pin', district='$district' WHERE id=".$_GET['id'];
$up=mysqli_query($con,$update);
if(!isset($sql)){
die("error $sql".mysqli_connect_error());
}
else
{
header("location:viewlibrary.php");
}
}
?>
<html>
<head>

</head>
<body bgcolor="b125">
<form method="POST">
<table width="500" border="10" cellspacing="0" cellpadding="1" align="center" style="font-size: 150%">
  <center><tr >
<td >Library name <center><input type="text" name="name" value="<?php echo $row['libname'];?>"></center></td></tr>
<tr><td>Address<center><input type="text" name="add" value="<?php echo $row['address'];?>"></center></td></tr>
<tr><td>Contact no.<center><input type="text" name="no" value="<?php echo $row['cellno'];?>"></center></td></tr>
<tr><td>Pincode<center><input type="text" name="pino" value="<?php echo $row['pin'];?>"></center></td></tr>
<tr><td>District<center><input type="text" name="dis" value="<?php echo $row['district'];?>"></center></td></tr>


<tr>
<td align="center"><button type="submit" name="btnupdate" id="btnupdate" onClick="update()"><strong>Update</strong></button></td></tr>
<tr align="center"><td><a href="viewlibrary.php"><button type="button" value="button">Cancel</button></a></center></td>
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