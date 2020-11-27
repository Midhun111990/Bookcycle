

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php
include("viewheader.php");
include("connection.php");
$aid=$_SESSION['uname'];

?>
<body>
<form action="" method="POST" >

  <table  align="center" width="50%" cellpadding="10" style="font-size: 200%" style="font-variant: small-caps;width: 50%">
                    <?php 
$rs=mysqli_query($con,"select * from addlibrarian inner join add_library on addlibrarian.libname=add_library.id where addlibrarian.email='$aid' ");
                    
$i=1;

                    while($row = mysqli_fetch_assoc($rs)) {

                     ?>
                                 
                  <tbody> 
                    <tr> 
                    
                     <td >First Name : </td>
                     <td><?php echo $row['fname']; ?></td>
                     
                    </tr> 
                    <tr> 
                     
                     <td>Last name : </td>
                     <td><?php echo $row['lname']; ?></td>
                    </tr> 
                    <tr> 
                     
                     <td>Email : </td>
                     <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                     <tr> 
                    
                     <td>Password : </td>
                     <td><?php echo $row['password']; ?></td>
                    </tr>
                    
                    
                    <tr>
                     
                     <td>Gender : </td>
                     <td><?php echo $row['gender']; ?></td>
                    </tr> 
                    <tr>
                    
                     <td>Address : </td>
                     <td><?php echo $row['address']; ?></td>
                    </tr> 
                    <tr>
                     
                     <td>DOB : </td>
                     <td><?php echo $row['dob']; ?></td>
                    </tr>

                    <tr>
                     
                     <td>Contact : </td>
                     <td><?php echo $row['contact']; ?></td>
                    </tr>  
                    <tr>
                     
                     <td>Pincode : </td>
                     <td><?php echo $row['pincode']; ?></td>
                    </tr>  
                    <tr>
                     

                     <td>District : </td>
                     <td><?php echo $row['district']; ?></td>
                    </tr>    
                   
                     <td>Library : </td>
                     <td><?php echo $row['libname']; ?></td>
                    </tr>    
                   
                 </tbody> 
                 <?php } ?>
           </table>
         
</table>
</form>
<h3 align="center"><a href="studentportal.php">BACK</a></h3>    

</body>
</html>

