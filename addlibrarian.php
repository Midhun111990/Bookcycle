<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<script>
function validate()
{
  var pass=document.getElementById("txtpass").value;
  var cpass=document.getElementById("confpass").value;
  if(pass!=cpass){ 
  alert("password mismatched");
  }
}
</script>

<?php
include("librarian_header.php");
include("connection.php");
if(isset($_POST['btnsubmit']))
{
  $id=$_POST['librarianid'];
  $fname=$_POST['librarianfname'];
  $lname=$_POST['librarianlname'];
  $email=$_POST['librarianemail'];
  $pass=$_POST['password'];
  $gender=$_POST['radio'];
  $add=$_POST['address'];
  $dob=$_POST['librariandob'];
  $contact=$_POST['contactno'];
  $pin=$_POST['pincode'];
  $district=$_POST['slcdistrict'];
  $status=$_POST['librarianstatus'];
  $libid=$_POST['libraryid'];
  $utype=$_POST['usertype'];
   
  mysqli_query($con,"insert into login values(null,'$email','$pass','$utype')");
    $id=mysqli_insert_id($con);
    
  mysqli_query($con,"insert into addlibrarian values('$id','$fname','$lname','$email','$pass','$gender','$add','$dob','$contact','$pin','$district','$status','$libid','$utype')")or die(mysqli_errno($con));
    ?>
    <script>
     alert("Librarian Added...");
   window.location='addlibrarian.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Add Librarian</h2></center>
  <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
  <tr>
    <th scope="row">Id</th>
    <td><label for="librarianid"></label>
      <input type="text" name="librarianid" id="librarianid" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">First Name</th>
    <td><label for="librarianfname"></label>
      <input type="text" name="librarianfname" id="librarianfname" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Last Name</th>
    <td><label for="librarianlname"></label>
      <input type="text" name="librarianlname" id="librarianlname" size="20" required /></td>
  </tr>
 <tr>
    <th scope="row">Email</th>
    <td><label for="librarianemail"></label>
      <input type="text" name="librarianemail" id="librarianemail" size="20" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/></td>
  </tr>
  <tr>
    <th scope="row">Password</th>
    <td><label for="password"></label>
      <input type="text" name="password" id="password" size="20" required /></td>
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
    <td><label for="address"></label>
      <textarea name="address" id="address" cols="45" rows="5" required></textarea></td>
  </tr>
  <tr>
    <th scope="row">Date of Birth</th>
    <td><label for="librariandob"></label>
      <input type="date" name="librariandob" id="librariandob" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Contact no.</th>
    <td><label for="contactno"></label>
      <input type="number" name="contactno" id="contactno" size="20" required pattern="[789][0-9]{9}"/></td>
  </tr>
  <tr>
    <th scope="row">Pin</th>
    <td><label for="pincode"></label>
      <input type="text" name="pincode" id="pincode" size="20" required pattern="[0-9]{6}"/></td>
  </tr>
  <tr>
    <th scope="row">District</th>
    <td><label for="slcdistrict"></label>
      <select name="slcdistrict" id="slcdistrict" required>
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
    <td><label for="librarianstatus"></label>
      <input type="text" name="librarianstatus" id="librarianstatus" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Library id</th>
    <td><label for="libraryid"></label>
      <input type="number" name="libraryid" id="libraryid" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Type</th>
    <td><label for="usertype"></label>
      <input type="text" name="usertype" id="usertype" size="20" required="required" value="user" readonly title="Type only user"/></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div class="form-group form-button"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="form-submit" size="10" /></th>
  </tr>
</table>
</form></center>
</body>
</html>


