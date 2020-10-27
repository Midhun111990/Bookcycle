<?php
include("bookheader.php");
include("connection.php");
?>
<div class="container">
    <!-- navbar ends -->
	<!-- info alert -->
	

	</div>
	<div class="container">
		<div class="panel panel-default">
		  <!-- Default panel contents -->
		  <div class="panel-heading">
		  		
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
		                  <th>Message</th>
		                  <th>Replied</th>
		                  <th>ACTION</th>
		                </tr>    
		          </thead>  

		           <?php 
include("connection.php");
$rs=mysqli_query($con,"select * from noti");
$i=1;
while($row=mysqli_fetch_array($rs))
{

                  		
                   ?>

		          <tbody> 
		            <tr> 
		             <td><?php echo $row['msgid']; ?></td>
		             <td><?php echo $row['username']; ?></td>
		             <td><?php echo $row['message']; ?></td>
		             <td><?php echo $row['reply']; ?></td>
		             
		             <td><form action="noti.php" method="post"> 
                  		<input type="hidden" value="<?php echo $row['msgid']; ?>" name="del-btn">
                      
   <a href="reply.php?id=<?php echo $row['msgid']?>"><input type="button" value="Reply" class="class="btn btn-warning"></a></td>

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