<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("librarian_header.php");
include("connection.php");

$clg_id=$_SESSION['lid'];
if(isset($_POST['btnsubmit']))
{
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
  $libname=$_POST['libraryname'];
  $utype=$_POST['usertype'];
   
  mysqli_query($con,"insert into login values(null,'$email','$pass','$utype')");
    $id=mysqli_insert_id($con);
    
  mysqli_query($con,"insert into addlibrarian values(null,'$fname','$lname','$email','$pass','$gender','$add','$dob','$contact','$pin','$district','$libname','$utype')")or die(mysqli_errno($con));
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
      <input type="number" name="contactno" id="contactno" size="20" required pattern="7890-9"/></td>
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

    <th scope="row">Library</th>
    <td><select  name="libraryname">
        <option value=""0 selected>Choose...</option>
    <?php     
                     include("connection.php");
                    $qry="select id,libname from add_library";

                    $run=mysqli_query($con,$qry);

                    while ($rows=mysqli_fetch_array($run))
                    {
                    echo '<option value="' . $rows['id'] . '">' . $rows['libname'] . '</option>';
                   }
         ?>
        </select>
</td>


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


