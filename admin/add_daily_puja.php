<?php
$msg = "";
$cat = " ";
$status = " ";
include 'function.inc.php';


if (isset($_POST['insert'])) {
  $title = simplename($_POST['title']);
  $description = simplename($_POST['description']);
  $timing = simplename($_POST['timing']);
      if ($cat != null) {

        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['Image']['tmp_name'])) {

                $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
                //$imageProperties = getimageSize($_FILES['Image']['tmp_name']);

                $sql = "INSERT INTO `jag_daily_puja`(`name`,`timing`,`description`,`image`) VALUES ('$title','$timing','$description','$imgData')";

                $current_id = mysqli_query($connection, $sql); 
                
                if ($current_id) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> Daily Puja Schedule inserted successfully!!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        
                    echo "<script>
                    setTimeout(function() {
                        window.location.replace('daily_puja.php');
        
                      }, 1000);
        
                </script>";
                } else {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Alert!</strong>  '.$connection->error.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                }
            }
        }
    }
}

$select1 = "SELECT * FROM `jag_daily_puja`";
$result2 = mysqli_query($connection, $select1);


?>

<div class="modal fade" id="add_daily_puja" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="background: #e7cb44;">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" style="color: #f72000;"><u>Add New Daily Puja Schedule</u></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body mx-10">
                   	<div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Puja Name</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Puja Timing</label>
                        <input name="timing" type="time" class="form-control" id="timing">
                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Upload Puja Image</label>
                        <input name="Image" type="file" class="form-control" id="Image">


                    </div>
                    <div class="form-group">
                        <label class="a-color" for="exampleFormControlSelect1">Enter Puja Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="emailHelp"></textarea>


                    </div>
                    </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button name="insert" class="btn btn-default" style="background:#f75b00;color:black;font-weight:700;">Add New Daily Puja Schedule</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // Initialize CKEditor
    //CKEDITOR.inline( 'short_desc' );

    CKEDITOR.replace('description', {

        width: "100%",
        height: "200px"

    });
</script>