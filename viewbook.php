<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("luserview.php")?>
<body>
<form action="" method="POST">
<table width="1000" border="50" cellspacing="0" cellpadding="10" align="center">
  <tr style="font-size: 150%">
    <td  >ID</td>
    <td>Book Name</td>
    <td>Author Name</td>
    <td>Publication</td>
    <td>Book Status</td>
    <td>Edition</td>
    <td>Category</td>
    <td>Price</td>
    <td>Copies</td>
    <td>Library</td>
    <td>Description </td>
    <td>Year of publication</td>
    <td>Books Ownership</td>
    <td>Date of book added</td>
<td align="center" colspan="2">Operations</td>    
    </tr>
<?php
include("connection.php");
$rs=mysqli_query($con,"select * from addbook");
$i=1;
while($row=mysqli_fetch_array($rs))
{
?>
  <tr>
    <td><?php echo $row['id']?></td>
 <td><?php echo $row['bookname']?></td>
    <td><?php echo $row['bookauthor']?></td>
    <td><?php echo $row['bookpublication']?></td>
     <td><?php echo $row['bookstatus']?></td>
      <td><?php echo $row['bookedition']?></td>
    <td><?php echo $row['bookcategory']?></td>
     <td><?php echo $row['bookprice']?></td>
    <td><?php echo $row['bookcopies']?></td>
     <td><?php echo $row['booklibrary']?></td>
      <td><?php echo $row['bookdescription']?></td>
       <td><?php echo $row['bookyearofpub']?></td>
        <td><?php echo $row['bookowner']?></td>
       <td><?php echo $row['bookaddeddate']?></td>
   
    <td  align="center"><a href="deletebook.php?id=<?php echo $row['id']?>"><input type="button" value="Delete"></a>
   <a href="updatebook.php?id=<?php echo $row['id']?>"><input type="button" value="Update"></a></td>
</tr>

  <?php $i++; }?>
</table>
</form>
</body>
</html>