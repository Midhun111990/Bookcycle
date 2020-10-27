
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("bookheader.php");
include("connection.php");
if(isset($_POST['btnsubmit']))
{
  
  $name=$_POST['bookname'];
  $author=$_POST['aut'];
  $publication=$_POST['pub'];
  $status=$_POST['status'];
  $edition=$_POST['edi'];
  $category=$_POST['cat'];
  $price=$_POST['bprice'];
  $copies=$_POST['bcopies'];
  $library=$_POST['libraryname'];
  $description=$_POST['desc'];
  $yearofpub=$_POST['yearp'];
  $ownership=$_POST['owner'];
  $date=$_POST['date'];
    
  
    mysqli_query($con,"insert into addbook values(null,'$name','$author','$publication','$status','$edition','$category','$price','$copies','$library','$description','$yearofpub','$ownership','$date')") or die(mysqli_errno($con));
  ?>
    <script>
     alert("Book Added...");
   window.location='addbook.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Add Book</h2></center>
  <center>
<form action="" method="POST"  enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
 
  <tr>
    <th scope="row">Book Name</th>
    <td><label for="bookname"></label>
      <input type="text" name="bookname" id="bookname" size="20" required /></td>
  </tr>
 <tr>
    <th scope="row">Author Name</th>
    <td><label for="aut"></label>
      <input type="text" name="aut" id="aut" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Publication</th>
    <td><label for="pub"></label>
      <input type="text" name="pub" id="pub" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Book Status</th>
    <td><label for="status"></label>
      <input type="text" name="status" id="status" size="20" required /></td>
  </tr>
 
  <tr>
    <th scope="row">Edition</th>
    <td><label for="edi"></label>
      <input type="number" name="edi" id="edi" size="20" required pattern="[0-9]{6}"/></td>
  </tr>



 <tr>

    <th scope="row">Category</th>
    <td><select  name="cat">
        <option value=""0 selected>Choose...</option>
    <?php     
                     include("connection.php");
                    $qry="select catid,catname from addcat";

                    $run=mysqli_query($con,$qry);

                    while ($rows=mysqli_fetch_array($run))
                    {
                    echo '<option value="' . $rows['catid'] . '">' . $rows['catname'] . '</option>';
                   }
         ?>
        </select>
</td>


  </tr>
   <tr>
    <th scope="row">Price</th>
    <td><label for="bprice"></label>
      <input type="text" name="bprice" id="bprice" size="20" required /></td>
  </tr>
 <tr>
    <th scope="row">Copies</th>
    <td><label for="bcopies"></label>
      <input type="text" name="bcopies" id="bcopies" size="20" required /></td>
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
    <th scope="row">Description</th>
    <td><label for="desc"></label>
      <textarea name="desc" id="desc" cols="45" rows="5" required></textarea></td>
  </tr>
<tr>
    <th scope="row">Year of Publication</th>
    <td><label for="yearp"></label>
      <input type="text" name="yearp" id="yearp" size="20" required /></td>
  </tr>
  <tr>
    <th scope="row">Ownership</th>
    <td><label for="owner"></label>
      <input type="text" name="owner" id="owner" size="20" required="required" value="Library" readonly title="Ownership"/></td>
  </tr>
  <tr>
    <th scope="row">Todays date</th>
    <td><label for="date"></label>
      <input type="date" name="date" id="date" size="20" required /></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><div class="form-group form-button"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="form-submit" size="10" /></th>
  </tr>
</table>
</form></center>
</body>
</html>


