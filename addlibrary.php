<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("admin_header.php");
include("connection.php");
if(isset($_POST['btnsubmit']))
{
  $name=$_POST['libname'];
  $add=$_POST['txtadd'];
  $cell=$_POST['number'];
  $pin=$_POST['txtpin'];
  $district=$_POST['slcdistrict'];
  
  
    mysqli_query($con,"insert into add_library values(null,'$name','$add','$cell','$pin','$district')") or die(mysqli_errno($con));
  ?>
    <script>
     alert("Library Added...");
   window.location='addlibrary.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Add Library</h2></center>
  <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
 
  <tr>
    <th scope="row">Library Name</th>
    <td><label for="libname"></label>
      <input type="text" name="libname" id="libname" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><label for="txtadd"></label>
      <textarea name="txtadd" id="txtadd" cols="45" rows="5" required></textarea></td>
  </tr>
  <tr>
    <th scope="row">Cell number</th>
    <td><label for="number"></label>
      <input type="text" name="number" id="number" size="20" required pattern="[789][0-9]{9}"/></td>
  </tr>
 
  <tr>
    <th scope="row">Pin</th>
    <td><label for="txtpin"></label>
      <input type="text" name="txtpin" id="txtpin" size="20" required pattern="[0-9]{6}"/></td>
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

    <th colspan="2" scope="row"><div class="form-group form-button"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="form-submit" size="10" /></th>
     </tr>
</table>
</form></center>
</body>
</html>


