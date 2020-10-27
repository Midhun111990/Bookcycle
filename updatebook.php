<?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM addbook WHERE id=".$_GET['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
}
if(isset($_POST['btnupdate']))
{

$bookname=$_POST['name'];
$bookauthor=$_POST['author'];
$bookpublication=$_POST['pub'];
$bookstatus =$_POST['status'];
$bookedition=$_POST['edi'];
$bookcategory=$_POST['cat'];
$bookprice =$_POST['price'];
$bookcopies=$_POST['copies'];
$booklibrary=$_POST['library'];
$bookdescription=$_POST['description'];
$bookyearofpub=$_POST['yearofpub'];


$update="UPDATE addbook SET bookname='$bookname', bookauthor='$bookauthor', bookpublication='$bookpublication', bookstatus='$bookstatus', bookedition='$bookedition', bookcategory='$bookcategory',bookprice='$bookprice', bookcopies='$bookcopies',booklibrary='$booklibrary', bookdescription='$bookdescription',bookyearofpub='$bookyearofpub' WHERE id=".$_GET['id'];
$up=mysqli_query($con,$update);
if(!isset($sql)){
die("error $sql".mysqli_connect_error());
}
else
{
header("location:viewbook.php");
}
}
?>
<html>
<head>

</head>
<body bgcolor="fe687">
<form method="POST">
<table width="500" border="10" cellspacing="0" cellpadding="0" align="center" style="font-size: 150%">
  <center><tr>
 <td>Book name<center><input type="text" name="name" value="<?php echo $row['bookname'];?>"></center></td></tr>
    <tr><td>Author<center><input type="text" name="author" value="<?php echo $row['bookauthor'];?>"></center></td></tr>
    <tr><td>Publication<center><input type="text" name="pub" value="<?php echo $row['bookpublication'];?>"></center></td></tr>
     <tr><td>Status<center><input type="text" name="status" value="<?php echo $row['bookstatus'];?>"></center></td></tr>
      <tr><td>Edition<center><input type="text" name="edi" value="<?php echo $row['bookedition'];?>"></center></td></tr>
     <tr><td>Category<center><input type="text" name="cat" value="<?php echo $row['bookcategory'];?>"></center></td></tr>
      <tr><td>Price<center><input type="text" name="price" value="<?php echo $row['bookprice'];?>"></center></td></tr>
    <tr><td>Copies<center><input type="text" name="copies" value="<?php echo $row['bookcopies'];?>"></center></td></tr>
     <tr><td>Library<center><input type="text" name="library" value="<?php echo $row['booklibrary'];?>"></center></td></tr>
      <tr><td>Description<center><input type="text" name="description" value="<?php echo $row['bookdescription'];?>"></center></td></tr>
       <tr><td>Year of Publication<center><input type="text" name="yearofpub" value="<?php echo $row['bookyearofpub'];?>"></center></td></tr>
   
<tr><td align="center"><button type="submit" name="btnupdate" id="btnupdate" onClick="update()"><strong>Update</strong></button></td></tr>
<tr><td align="center"><a href="viewlibrarian.php"><button type="button" value="button">Cancel</button></a></center></td>
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