<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php include("viewheader.php")?>
<body>
<h1 align="center">Search</h1>
<form action="" method="GET"><center>
<input type="text" placeholder="Type the Username here" name="search">&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary"></center>

<table class="table table-striped table-responsive">
<tr>
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Password</th>
<th>Gender</th>
<th>Address</th>
<th>Date of birth</th>
<th>Contact</th>
<th>Pincode</th>
<th>District</th>
<th>Status</th>
<th>Library id</th>
<th></th>
</tr>


<?php
include("connection.php");

$sql = "SELECT * FROM adduser";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM adduser WHERE email ='$name'";
}
$result = $con->query($sql) or die($con->error);;
?>

<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['First_name']; ?></td>
    <td><?php echo $row['Last_name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
     <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['dob']; ?></td>
     <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['pincode']; ?></td>
    <td><?php echo $row['district']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['libname']; ?></td>
    
    </tr>
    
    <?php
}
?>
</table>
<form action="" method="post">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td align="center">Name</td>
<td align="center" colspan="2">Username</td>    
    </tr>


<?php
include("connection.php");
$rs=mysqli_query($con,"select * from adduser");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
 <td><?php echo $row['First_name']?></td>
   <td><?php echo $row['email']?></td>
   
   </tr>

  <?php $i++; }?>
</table>

</form>

<h3 align="center"><a href="adminHome.php">BACK</a></h3>    

</body>
</html>