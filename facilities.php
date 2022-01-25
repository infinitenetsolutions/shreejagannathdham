<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_facilities` WHERE 1";
  $result = mysqli_query($connection, $select);
 

?>
<style>
  .zoom:hover {
    -ms-transform: scale(1.5);
    /* IE 9 */
    -webkit-transform: scale(1.5);
    /* Safari 3-8 */
    transform: scale(1.1);
    transition: transform .2s;
    box-sizing: border-box;
}
</style>
  <!-- partial:partia/__subheader.html -->
  <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/facilities.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->
<body>

  <!-- Services Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row">
      <?php 
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <div class="col-lg-3 zoom">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 180px !important;padding: 0 35px;}"/>
            </div>
            <div class="sigma_box">
              <h6 class="title mb-0"><?php echo $row['title']; ?></h6>
              <span ><a class="subtitle" href="facilities_single.php?var=<?php echo $row['id']; ?>" class="btn-link text-white">View More <i class="far fa-arrow-right text-white"></i> </a></span>
            </div>
          </div>
        </div>
        <?php 
        }
        ?>


      
     
    </div>
  </div>
  </div>
  <!-- Services End -->

  

</body>
</html>
<?php

include "footer.php";
?>
