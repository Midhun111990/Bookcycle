<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("viewheader.php")?>
<body>
<?php
include('connection.php');
//include('addcategory.php');
$sql="SELECT * FROM addlibrarian";
$result=$con->Query($sql);
?>
<form action="" method="POST">
</form>
  <h1 align="center">Search</h1>
  <form action="" method="GET"><center>
  <input type="text" placeholder="Type the Email of Librarian here" name="search">&nbsp;
  <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary"></center>

<table class="table table-striped table-responsive">
<tr>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Address</th>
<th>Date of Birth</th>
<th>Contact</th>
<th>Pincode</th>
<th>District</th>
</tr>


<?php
include("connection.php");

$sql = "SELECT * FROM addlibrarian";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM addlibrarian WHERE email ='$name'";
}
$result = $con->query($sql) or die($con->error);;
?>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['lname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['pincode']; ?></td>
    <td><?php echo $row['district']; ?></td>
    
    </tr>
    
    <?php
}
?>
</table>


<form action="" method="POST">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td  >ID</td>
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
    <td>Library</td>
  <td align="center" colspan="2">Operations</td>
</tr>




<?php
include("connection.php");
$rs=mysqli_query($con,"select * from addlibrarian");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $row['id']?></td>
 <td><?php echo $row['fname']?></td>
    <td><?php echo $row['lname']?></td>
    <td><?php echo $row['email']?></td>
     <td><?php echo $row['password']?></td>
      <td><?php echo $row['gender']?></td>
    <td ><?php echo $row['address']?></td>
     <td><?php echo $row['dob']?></td>
    <td><?php echo $row['contact']?></td>
     <td><?php echo $row['pincode']?></td>
      <td><?php echo $row['district']?></td>
       <td><?php echo $row['libname']?></td>
   
     <td  align="center"><a href="deletelibrarian.php?id=<?php echo $row['id']?>"><input type="button" value="Delete"></a>
   <a href="updatelibrarian.php?id=<?php echo $row['id']?>"><input type="button" value="Update"></a></td>
</tr>
  <?php $i++; }?>



</table>
</form>

<h3 align="center"><a href="addlibrarian.php">BACK</a></h3>    

</body>
</html>