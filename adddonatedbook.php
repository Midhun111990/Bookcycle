<?php
include('connection.php');
if(isset($_GET['id']))
{
$sql="SELECT * FROM donatedbook WHERE id=".$_GET['id'];
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
$bookowner=$_POST['owner'];
$bookaddeddate=$_POST['date'];


 $sql=mysqli_query($con,"insert into addbook values(null,'$bookname','$bookauthor','$bookpublication','$bookstatus','$bookedition','$bookcategory','$bookprice','$bookcopies','$booklibrary','$bookdescription','$bookyearofpub','$bookowner','$bookaddeddate')") or die(mysqli_errno($con));
  
}
?>
<html>
<head>

</head>
<body bgcolor="fe687" >
<form method="POST">
<table width="80" border="10" cellpadding="0" align="center" style="font-size: 100%">
  <center><tr>
 <td>Book name<center><input type="text" name="name" readonly title="Type only user"value="<?php echo $row['bookname'];?>"></center></td></tr>
    <tr><td>Author<center><input type="text" name="author"readonly title="Type only user" value="<?php echo $row['author'];?>"></center></td></tr>
    <tr><td>Publication<center><input type="text" name="pub"readonly title="Type only user" value="<?php echo $row['publication'];?>"></center></td></tr>
     <tr><td>Status<center><input type="text" name="status" readonly title="Type only user"value="<?php echo $row['status'];?>"></center></td></tr>
      <tr><td>Edition<center><input type="text" name="edi" readonly title="Type only user"value="<?php echo $row['edition'];?>"></center></td></tr>
     <tr><td>Category<center><input type="text" name="cat"readonly title="Type only user" value="<?php echo $row['cat'];?>"></center></td></tr>
      <tr><td>Price<center><input type="text" name="price" readonly title="Type only user"value="<?php echo $row['price'];?>"></center></td></tr>
    <tr><td>Copies<center><input type="text" name="copies" readonly title="Type only user"value="<?php echo $row['copies'];?>"></center></td></tr>
     <tr><td>Library<center><input type="text" name="library"readonly title="Type only user" value="<?php echo $row['library'];?>"></center></td></tr>
      <tr><td>Description<center><input type="text" name="description" readonly title="Type only user"value="<?php echo $row['des'];?>"></center></td></tr>
       <tr><td>Year of Publication<center><input type="text" name="yearofpub" readonly title="Type only user"value="<?php echo $row['yop'];?>"></center></td></tr>
   <tr><td>Ownership<center><input type="text" name="owner" readonly title="Type only user"value="<?php echo $row['username'];?>"></center></td></tr>
       <tr><td>Date<center><input type="text" name="date"readonly title="Type only user" value="<?php echo $row['date'];?>"></center></td></tr>
   
<tr><td align="center"><button type="submit" name="btnupdate" id="btnupdate" onClick="update()"><strong>Add to Library</strong></button></td></tr>
<tr><td align="center"><a href="donatedbook.php"><button type="button" value="button">Cancel</button></a></center></td>
</tr>
</center>
</table>
</form>
<script>
function update(){
var x;
if(confirm("Book added to library successfully")==true){
x="update";
}
}
</script>
</body>
</html>