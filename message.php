<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("viewheader.php")?>
<body>
  <?php

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

<?php
include('connection.php');

?>
<?php

if(isset($_POST['submit']))
{  
  $news=$_POST['news'];
  mysqli_query($con,"insert into news values(null,'$news')") or die(mysqli_errno($con));
 }

     if(isset($_POST['del'])){

$id=$_POST['id'];
$sql="DELETE FROM news WHERE newsId='$id'";
if($con->Query($sql)===TRUE){
//echo "deleted successfully";
}
else
{
echo "error".$con->error;
}

}



  ?>




  </div>
  <div class="container">
    <div class="panel panel-default">

             <?php if(isset($error)===true) { ?>
        <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Record Updated Successfully!</strong>
            </div>
            <?php } ?>
      <!-- Default panel contents -->
      <div class="panel-heading">
        <div class="row">
          <h3 align="center">MeSaGesssssssssssss</h3>
      </div>
      </div>
      <table class="table table-bordered">


          <thead>
                <tr>
                    <th>Id</th>
                         <th>Announcement</th>

                          <th>Delete</th>
                </tr>
          </thead>

           <?php

          $sql2 = "SELECT * from news";

      $query2 = mysqli_query($con, $sql2);
      $counter = 1;
      while ($row = mysqli_fetch_array($query2)) {  ?>


        <tbody>
          <td><?php echo $counter++; ?></td>
          <td><?php echo $row['announcement']; ?></td>
         <form method='post' action='trysearch.php'>
        <input type='hidden' value="<?php echo $row['newsId']; ?>" name='id'>

        <td><button name='del' type='submit' value='Delete' class='btn btn-warning' onclick='return Delete()'>DELETE</button></td>
        </form>
        </tbody>

     <?php }
           ?>

             </tbody>
       </table>


    </div>

      <div class="panel panel-default">
          <div class="panel-heading">
            <h2 align="center" class="panel-title center-block">Message</h2>
          </div>
    <div class="panel-body">
      <form role="form" action="trysearch.php" method="post">
        <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <div class="form-group ">
               <center>
                 <textarea class="form-control" rows="5" cols="50" draggable="false" name="news">
                 </textarea></center>
            </div>
<center>
      <button class="btn btn-primary" name="submit">SUBMIT</button>
</center>
                </form>
          </div>
      </div>
  </div>

  <!-- Confirm delete modal begins here -->
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
        <!-- Confirm delete modal ends here -->
        <!-- delete message modal starts here -->
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
        <!-- delete message modal ends here -->
        <!-- update modal begins here -->

        <div class="modal fade" id="update">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- header begins here -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title"> Update</h2>
              </div>

              <!-- body begins here -->
          <form role="form" action="trysearch.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                  <div class="input-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> -->
                    <label for="name">Enter Id </label>
                    <input type="text" name="id" value=" <?php
                 echo $row['newsId'];
                 ?>
                ">
                 <div class="form-group ">
                          <label for="name">Announcement</label>
                           <textarea class="form-control" rows="3" draggable="false" name="text" value="
                      ">
                           </textarea>
                      </div>

                  </div>



              </div>

              <!-- button -->
              <div class="modal-footer">
                <button  name ="UpDat" class="col-lg-12 col-sm-12 col-xs-12 col-md-12 btn btn-success" data-target="alert">
                  UPDATE
                </button>
              </div>
          </form>

            </div>
          </div>
        </div>  
        <!-- update modal ends here -->



  <script type="text/javascript">

        function Delete() {
            return confirm('Would you like to delete the news');
        }

         function Update() {
            return confirm('Would you like to update the news');
        }

      </script>

</body>
</html>
