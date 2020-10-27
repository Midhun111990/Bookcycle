<?php
include("bookheader.php");
include("connection.php");


//if(isset($_GET['id']))
//{
//$sql="SELECT * FROM borrow WHERE borrowId = '$id'";
//$result=mysqli_query($con,$sql);
//$row=mysqli_fetch_array($result);
//}


if(isset($_POST['del']))
{
	$id = trim($_POST['del-btn']);
	$msg = "Donated";
$update="UPDATE donatedbook set `donated` = '$msg' where id = '$id'";
$sql=mysqli_query($con,$update);
if($sql){
$error = true;
}




}




?>














<div class="container">
    <!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong>Donated</strong> Book by the<strong> USER</strong>
	</div>

	</div>
	<div class="container">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  	 <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Updated Successfully!</strong>
            </div>
            <?php } ?>
		  	<div class="row">
		  	  
			  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
			  	<!-- <form >
			  		<div class="input-group pull-right">
				      <span class="input-group-addon">
				        <label>Search</label> 
				      </span>
				      <input type="text" class="form-control">
			      </div>
			  	</form> -->
			    
			  </div><!-- /.col-lg-6 -->
  
			</div>
		  </div>
		  <table class="table table-bordered">
		          <thead>
		               <tr> 
		                  <th>ID</th>
		                  <th>Book Name</th>
		                  
		                  <th>Ownership</th>
		                  <th>Date</th>
		                  <th>ACTION</th>
		                </tr>    
		          </thead>  

		           <?php 
include("connection.php");
$rs=mysqli_query($con,"select * from donatedbook");
$i=1;
while($row=mysqli_fetch_array($rs))
{

                  		
                   ?>

		          <tbody> 
		            <tr> 
		             <td><?php echo $row['id']; ?></td>
		             <td><?php echo $row['bookname']; ?></td>
		             <td><?php echo $row['username']; ?></td>
		             <td><?php echo $row['date']; ?></td>
		             <td><?php echo $row['donated']; ?></td>
		             
		             <td><form action="donatedbook.php" method="post"> 

                     		<input type="hidden" value="<?php echo $row['id']; ?>" name="del-btn">
                      <button class="btn btn-warning" name="del"><a href="adddonatedbook.php?id=<?php echo $row['id']?>">Donate</a></button>
                     	

                     	</form>
		             
		             </td>
		            </tr> 
		            <?php } ?> 
		         </tbody> 
		   </table>
		 
	  </div>
	</div>
		




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	



</body>
</html>