<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Login</title>
</head>
<?php
include("log_header.php");
include("connection.php");
if(isset($_POST['btnlogin']))
{
	$uname=$_POST['txtname'];
	$pass=$_POST['txtpassword'];
	session_start();
	
	$res=mysqli_query($con,"select *from login where username='$uname' 					and password='$pass'");
	if(mysqli_num_rows($res)>0){
		
		$row=mysqli_fetch_array($res);
		$type=$row[3];

		$_SESSION['uname']=$uname;
		
		if($type=='admin'){
			header("location:adminHome.php");
			
		}
		else if($type=='student'){
					$_SESSION['student-name'] = $row['username'];
					
			header("location:studentportal.php");
		}
		else if($type=='user'){
			header("location:librarianhome.php");
		}
		else{
			?>
			<script> 
			alert("not valid ");
            </script>
			<?php
		}
	}
	else
	{
	?>
    <script>alert("invalid username or password")</script>
    
    
	<?php
    
	}}
	

?>
	
<body>
<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-form">
	<center><h2><span>Log - IN</span></h2></center>
<form id="form1" name="form1" method="post" action="" class="register-form">

      <table width="200" border="0" cellpadding="10" cellspacing="0" align="center">
        <tr>
          <th scope="row">Username</th>
          <td> <div class="form-group"><label for="txtname"></label>
            <input type="text" name="txtname" id="txtname" required="required" title="Registered Username/ E-mail" /></div>
            </td>
          </tr>
        <tr>
          <th scope="row">Password</th>
          <td> <div class="form-group"><label for="txtpassword"></label>
            <input type="password" name="txtpassword" id="txtpassword" required="required" title="Password" /> </div></td>
          </tr>
        
          <th colspan="2" scope="row"> <div class="form-group form-button"><input type="submit" name="btnlogin" id="btnlogin" value="LOGIN" class="form-submit"/></div></th>
          </tr>
      </table>
    </div>
  </form>
</div>
</div>
</div>
</section>
</body>
<?php include("footer.php")?>
</html>
