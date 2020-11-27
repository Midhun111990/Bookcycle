<?php  
include "borrowheader.php"; 
if(isset($_POST['submit'])){
	
	$bn = trim($_POST['bookTitle']);
	$bdate = trim($_POST['borrowDate']);
	$due = trim($_POST['dueDate']);
mysqli_query($con,"select email from adduser");
 
$name=trim($_POST['email']);
	
	

	$sql = "INSERT INTO borrow(memberName, bookName, borrowDate, returnDate) values('$name', '$bn', '$bdate', '$due')";
	$query = mysqli_query($con, $sql);
	$error = false;
	if($query){
		$error = true;

?>
<script>
     alert("Successfully Borrowed...");
   window.location='borrowstudent.php';
    </script>
<?php
	}
	else {
		echo "
		<script>
		alert('Unsuccessful');
		</script>
	";
	}

}
	
?>


<div class="container">
    
	<div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 30px">
		<div class="jumbotron login col-lg-10 col-md-11 col-sm-12 col-xs-12">
			 <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Added Successfully!</strong>
            </div>
            <?php } ?>
			<h2 align="center">BORROW BOOK</h2>

			<div class="container">
				<form class="form-horizontal" role="form" action="lend-student.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label  for="Book Title" class="col-sm-2 control-label">BOOK TITLE</label>
						<div class="col-sm-10">
							<select class="form-control" name="bookTitle">
								<option>SELECT BOOK</option>
								<?php 
								$sql = "SELECT bookname FROM addbook";
								$query = mysqli_query($con, $sql);
								while ($row = mysqli_fetch_assoc($query)) { ?>
                                <option><?php echo $row['bookname']; ?></option>
                                <?php	} ?>
								 ?>

							</select>
						</div>		
					</div>
							
<?php 
$rs=mysqli_query($con,"select * from adduser inner join add_library on adduser.libname=add_library.id where adduser.email='$aid' ");
                    
$i=1;

                    while($row = mysqli_fetch_assoc($rs)) { ?>
                                 
                  <tbody> 
                    <tr> 
                    
                     <h2 align="right">Name : <?php echo $row['First_name']; ?></h2>
                     

<h1 align="right">
<input type="text" align="left" name="email" value="<?php 
								$sql = "select email from adduser inner join add_library on adduser.libname=add_library.id where adduser.email='$aid'";
								$query = mysqli_query($con, $sql);
								while ($row = mysqli_fetch_assoc($query)) { ?>
                                <?php echo $row['email']; ?>
                                <?php	} ?>"
								 







</h1>
                 
</tbody> 
                 <?php } ?>
           










		</div>
					<div align="center" class="form-group">
						<label for="Borrow Date" class="col-sm-2 control-label">BORROW DATE</label>
						<div class="col-sm-10">
             			 <input type="date" class="form-control" name="borrowDate" id="brand">
						</div>		
					</div>
					<div align="center" class="form-group">
						<label for="Password" class="col-sm-2 control-label">RETURN DATE</label>
						<div class="col-sm-10" id="show_product">
              			<input type='date' class='form-control' name='dueDate'>
						</div>		
					</div>
					

					
					<div align="center"class="form-group ">
						<div class="col-sm-offset-2 col-sm-10 ">
							<button type="submit" class="btn btn-info col-lg-4 " name="submit">
								Submit
							</button>
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>