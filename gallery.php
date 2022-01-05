<?php
include "header.php";
include 'admin/connection.inc.php';
$year = $_GET['year'];
  $select = "SELECT * FROM `jag_gallery` where `year` = $year";
 // $select = "SELECT * FROM `jag_gallery` group by `event`";
  $result = mysqli_query($connection, $select);
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/Our Gallery.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <div class="section">
    <div class="container">

      <div class="entry-content">                                     
       
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) {?>
          <div class="col-md-3">
            <a href="assets/img/puja/details/4.jpg" class="gallery-thumb">
              <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              <!--<span style="text-align: center;"><h5><?php echo $row['event']; ?></h5></span>-->
            </a>
          </div>
        <?php } ?>
          <!--<div class="col-md-3">
            <a href="assets/img/puja/details/5.jpg" class="gallery-thumb">
              <img src="assets/img/puja/details/5.jpg" alt="post">
            </a>
          </div>
          <div class="col-md-3">
            <a href="assets/img/puja/details/6.jpg" class="gallery-thumb">
              <img src="assets/img/puja/details/6.jpg" alt="post">
            </a>
          </div>
          <div class="col-md-3">
            <a href="assets/img/puja/details/6.jpg" class="gallery-thumb">
              <img src="assets/img/puja/details/6.jpg" alt="post">
            </a>
          </div>-->

        </div>

      </div>

    </div>
  </div>
<?php

include "footer.php";
?>