<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("cat_header.php");
include("connection.php");
if(isset($_POST['btnsubmit']))
{
  
  $name=$_POST['catname'];
  
      mysqli_query($con,"insert into addcat values(null,'$name')") or die(mysqli_errno($con));
  ?>
    <script>
     alert("Category Added...");
   window.location='addcategory.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Add Category</h2></center>
  <center>
<form action="" method="POST" enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
  
  <tr>
    <th scope="row">Category Name</th>
    <td><label for="catname"></label>
      <input type="text" name="catname" id="catname" size="20" required /></td>
  </tr>
  <tr>

    <th colspan="2" scope="row"><div class="form-group form-button"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="form-submit" size="10" /></th>
     </tr>
</table>
</form></center>
</body>
</html>


