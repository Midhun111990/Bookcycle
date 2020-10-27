<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("userheader.php");
include("connection.php");

$clg_id=$_SESSION['lid'];
if(isset($_POST['btnsubmit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $gender=$_POST['radio'];
  $add=$_POST['add'];
  $dob=$_POST['dob'];
  $contact=$_POST['contact'];
  $pin=$_POST['pin'];
  $district=$_POST['district'];
  $status=$_POST['status'];
   
  mysqli_query($con,"insert into login values(null,'$email','$pass',null)");
    $id=mysqli_insert_id($con);
    
  mysqli_query($con,"insert into adduser values(null,'$fname','$lname','$email','$pass','$gender','$add','$dob','$contact','$pin','$district','$status')")or die(mysqli_errno($con));
    ?>
    <script>
     alert("User Added...");
   window.location='adduser.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Add User</h2></center>
  <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="row">First Name</th>
    <td><label for="fname"></label>
      <input type="text" name="fname" id="fname" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Last Name</th>
    <td><label for="lname"></label>
      <input type="text" name="lname" id="lname" size="20" required /></td>
  </tr>
 <tr>
    <th scope="row">Email</th>
    <td><label for="email"></label>
      <input type="text" name="email" id="email" size="20" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></td>
  </tr>
  <tr>
    <th scope="row">Password</th>
    <td><label for="pass"></label>
      <input type="text" name="pass" id="pass" size="20" required /></td>
  </tr>
   <tr>
    <th scope="row">Gender</th>
    <td>
      <label for="radio">
        <input type="radio" name="radio" id="radio" value="male" size="10" />Male 
      </label>
      <label for="radio2">
        <input type="radio" name="radio" id="radio2" value="female" size="10" />Female
      </label>
    </td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><label for="add"></label>
      <textarea name="add" id="add" cols="45" rows="5" required></textarea></td>
  </tr>
  <tr>
    <th scope="row">Date of Birth</th>
    <td><label for="dob"></label>
      <input type="date" name="dob" id="dob" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Contact no.</th>
    <td><label for="contact"></label>
      <input type="number" name="contact" id="contact" size="20" required pattern="7890-9"/></td>
  </tr>
  <tr>
    <th scope="row">Pin</th>
    <td><label for="pin"></label>
      <input type="text" name="pin" id="pin" size="20" required pattern="[0-9]{6}"/></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><label for="district"></label>
      <select name="district" id="district" required>
        <option>select</option>
        <option>Thiruvananthapuram</option>
        <option>Kollam</option>
        <option>Pathanamthitta</option>
        <option>Alappuzha</option>
        <option>Kottayam</option>
        <option>Idukki</option>
        <option>Ernakulam</option>
        <option>Thrissur</option>
        <option>Palakkad</option>
        <option>Malappuram</option>
        <option>Kozhikode</option>
        <option>Wayanad</option>
        <option>Kannur</option>
        <option>Kasaragod</option>
        
      </select></td>
  </tr>
 
  

  <tr>
    <th scope="row">Status</th>
    <td><label for="status"></label>
      <input type="text" name="status" id="status" size="20" /></td>
  </tr>






<tr>
    <th colspan="2" scope="row"><div class="form-group form-button"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="form-submit" size="10" /></th>
  </tr>
</table>
</form></center>
</body>
</html>


