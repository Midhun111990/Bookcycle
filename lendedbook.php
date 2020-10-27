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


 mysqli_query($con,"insert into addbook values(null,'$name','$author','$publication','$status','$edition','$category','$price','$copies','$library','$description','$yearofpub','$ownership','$date')") or die(mysqli_errno($con));
  
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
		                  <th>Author</th>
		                  <th>Publication</th>
		                  <th>Status</th>
		                  <th>Edition</th>
		                  <th>Category</th>
		                  <th>Price</th>
		                  <th>Copies</th>
		                  <th>Library</th>
		                  <th>Description</th>
		                  <th>Year of Publication</th>
		                  
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
		             <td><?php echo $row['author']; ?></td>
		             <td><?php echo $row['publication']; ?></td>
 					 <td><?php echo $row['status']; ?></td>
 					 <td><?php echo $row['edition']; ?></td>
 					 <td><?php echo $row['cat']; ?></td>
		             <td><?php echo $row['price']; ?></td>
		             <td><?php echo $row['copies']; ?></td>
		             <td><?php echo $row['library']; ?></td>
		             <td><?php echo $row['des']; ?></td>
	                 <td><?php echo $row['yop']; ?></td>
	 			     <td><?php echo $row['username']; ?></td>
		             <td><?php echo $row['date']; ?></td>
		             <td><form action="lendedbook.php" method="post"> 

                     		<input type="hidden" value="<?php echo $row['id']; ?>" name="del-btn">
                      <button class="btn btn-warning" name="del">Add to library</button>
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