
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<?php include("viewheader1.php")?>
<body>
<?php
include('connection.php');
//include('addcategory.php');
$sql="SELECT * FROM adduser";
$result=$con->Query($sql);
?>
<form action="" method="POST">
</form>
  <h1 align="center">Search</h1>
  <form action="" method="GET"><center>
  <input type="text" placeholder="Type the Email of user here" name="search">&nbsp;
  <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary"></center>

<table class="table table-striped table-responsive">
<tr>
<td>Id</td>
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
    <td>Library</td>
<td>Operation</td>
</tr>


<?php
include("connection.php");

$sql = "SELECT * FROM adduser";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));



    $sql = "SELECT * FROM adduser WHERE email ='$name' or contact='$name'";
}
$result = $con->query($sql) or die($con->error);;
?>

<?php
$i=1;

while($row = $result->fetch_assoc()){
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
   <td><?php echo $row['libname']?></td>
   
     <td  align="center">
   <a href="updateuser.php?id=<?php echo $row['id']?>"><input type="button" value="Update"></a></td>
    
    </tr>
 <?php 

 $i++; 
}

?>    

</table>


<h3 align="center"><a href="adduser.php">BACK</a></h3>    

</body>
</html>