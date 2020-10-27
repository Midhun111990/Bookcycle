<?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM addcat WHERE catid=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
}
if(isset($_POST['btnupdate']))
{
$catname=$_POST['category'];
$update="UPDATE addcat SET catname='$catname' WHERE catid=".$_GET['id'];
$up=mysqli_query($con,$update);
if(!isset($sql)){
die("error $sql".mysqli_connect_error());
}
else
{
header("location:viewcategory.php");
}
}
?>
<html>
<head>

</head>
<body bgcolor="b465">
<form method="POST">
<table width="1000" border="10" cellspacing="0" cellpadding="10" align="center" style="font-size: 150%">
  <center><tr>
<td>Category name<center><input type="text" name="category" value="<?php echo $row['catname'];?>"></center></td></tr>
<tr><td><center><button type="submit" name="btnupdate" id="btnupdate" onClick="update()"><strong>Update</strong></button></td></tr>
	<tr><td></center><a href="viewcategory.php"><center><button type="button" value="button">Cancel</center></button></a></center></td>
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