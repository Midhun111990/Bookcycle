<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php include("viewheader.php")?>
<body>
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
          <h3 align="center">Announcements</h3>
      </div>
      </div>
      <table class="table table-bordered">


          <thead>
                <tr>
                    <th>Id</th>
                         <th>Announcement</th>
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

        </form>
        </tbody>

     <?php }
           ?>

             </tbody>
       </table>

    </div>

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




</body>
</html>
