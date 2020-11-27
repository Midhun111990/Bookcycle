
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<?php
include("borrowheader.php");
include("connection.php");
if(isset($_POST['btnsubmit']))
{
  $isbn=$_POST['isbn'];
  $name=$_POST['bookname'];
  $author=$_POST['aut'];
  $publication=$_POST['pub'];
  $status=$_POST['status'];
  $edition=$_POST['edi'];
  $category=$_POST['cat'];
  $price=$_POST['bprice'];
  $copies=$_POST['bcopies'];
  //$library=$_POST['libraryname'];
  $description=$_POST['desc'];
  $yearofpub=$_POST['yearp'];
  //$ownership=$_POST['email'];
 
$ownership=trim($_POST['email']);


  $date=$_POST['date'];
    
  
  
    mysqli_query($con,"insert into lendedbook values(null,'$name','$author','$category','$copies','$date','$description','$edition','$price','$publication','$status','$ownership','$yearofpub','$isbn')") or die(mysqli_errno($con));
    ?>
    <script>
     alert("Book Lended...");
   window.location='lendstudent.php';
    </script>
    <?php
  }
?>

<body>
  <center><h2>Lend Book</h2></center>
  <center>
<form action="" method="POST"  enctype="multipart/form-data">
<table width="800" cellspacing="0" cellpadding="10">
 
  <tr>
    <th scope="row">ISBN</th>
    <td><label for="isbn"></label>
      <input type="text" name="isbn" id="isbn" size="20" required /></td>
  </tr>
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
    <td><label for="email"></label>

<input type="text"name="email" value="<?php $sql = "select email from adduser inner join add_library on adduser.libname=add_library.id where adduser.email='$aid'";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($query)) { ?>
                                <?php echo $row['email']; ?>
                                <?php } ?>"
                 
               </td>
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


