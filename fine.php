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
	$msg = "Paid";
$update="UPDATE borrow set `fine` = '$msg' where borrowId = '$id'";
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
	    <strong>Fines</strong> Table
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
		                  <th>User Name</th>
		                  <th>Book Name</th>
		                  <th>Borrow date</th>
		                  <th>Return Date</th>
		                  <th>Overdue Charges</th>
		                  <th>ACTION</th>
		                </tr>    
		          </thead>  

		           <?php 
include("connection.php");
$rs=mysqli_query($con,"select * from borrow");
$i=1;
while($row=mysqli_fetch_array($rs))
{

                  		
                   ?>

		          <tbody> 
		            <tr> 
		             <td><?php echo $row['borrowId']; ?></td>
		             <td><?php echo $row['username']; ?></td>
		             <td><?php echo $row['bookname']; ?></td>
		             <td><?php echo $row['borrowdate']; ?></td>
		             <td><?php echo $row['returndate']; ?></td>
		             <td><?php echo $row['fine']; ?></td>
		             <td><form action="fine.php" method="post"> 

                     		<input type="hidden" value="<?php echo $row['borrowId']; ?>" name="del-btn">
                      <button class="btn btn-warning" name="del">STOP COUNT</button>
                     	</form>
		             </td>
		            </tr> 
		            <?php } ?> 
		         </tbody> 
		   </table>
		 
	  </div>
	</div>
	<div class="mod modal fade" id="popUpWindow">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Are you sure you want to delete this book?</p>
        			</div>

        			<!-- button -->
        			<div class="modal-footer ">
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-warning pull-right"  style="margin-left: 10px" class="close" data-dismiss="modal">
        					No
        				</button>&nbsp;
        				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-success pull-right"  class="close" data-dismiss="modal" data-toggle="modal" data-target="#info">
        					Yes
        				</button>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="modal fade" id="info">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<!-- header begins here -->
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        				<h3 class="modal-title"> Warning</h3>
        			</div>

        			<!-- body begins here -->
        			<div class="modal-body">
        				<p>Book deleted <span class="glyphicon glyphicon-ok"></span></p>
        			</div>

        		</div>
        	</div>
        </div>
		




<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>	
</body>
</html>