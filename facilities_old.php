<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_facilities` WHERE 1";
  $result = mysqli_query($connection, $select);
 

?>

  <!-- partial:partia/__subheader.html -->
  <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/facilities.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- Services Start -->
  <div class="section section-padding">
    <div class="container">
      <div class="row">
		
        <?php 
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <div class="col-lg-4 col-md-6">
          <span  class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              <!--<i class="flaticon-temple"></i>-->
            </div>
            <div class="sigma_service-body">
              <h5 class="text-white"><?php echo $row['title']; ?></h5>
            </div>
            <a href="facilities_single.php?var=<?php echo $row['id']; ?>" class="btn-link text-white">View More <i class="far fa-arrow-right text-white"></i> </a>
          </span>
        </div>
		<?php 
        }
        ?>
        
        <!--<div class="col-lg-4 col-md-6">
          <a href="holi-details.html" class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <i class="flaticon-hindu-2"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Puja</h5>
              <p>Temple is place where hindu worship  consectetur adipisicing elit, sed do </p>
            </div>
            <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="holi-details.html" class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <i class="flaticon-pooja"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Prashad</h5>
              <p>Temple is place where hindu worship  consectetur adipisicing elit, sed do </p>
            </div>
            <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="holi-details.html" class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <i class="flaticon-hindu-wedding-1"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Bhoomi Puja</h5>
              <p>Temple is place where hindu worship  consectetur adipisicing elit, sed do </p>
            </div>
            <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="holi-details.html" class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <i class="flaticon-hindu-wedding"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Car Puja</h5>
              <p>Temple is place where hindu worship  consectetur adipisicing elit, sed do </p>
            </div>
            <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
          </a>
        </div>

        <div class="col-lg-4 col-md-6">
          <a href="holi-details.html" class="sigma_service style-1">
            <div class="sigma_service-thumb">
              <i class="flaticon-arti"></i>
            </div>
            <div class="sigma_service-body">
              <h5>Marriage</h5>
              <p>Temple is place where hindu worship  consectetur adipisicing elit, sed do </p>
            </div>
            <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
          </a>
        </div>-->

      </div>
    </div>
  </div>
  <!-- Services End -->

  <!-- Clients Start -->
 <!-- <div class="section section-padding primary-bg pattern-map">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-4">
              <div class="sigma_client">
                <img src="assets/img/clients/1.png" alt="client">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sigma_client">
                <img src="assets/img/clients/2.png" alt="client">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sigma_client">
                <img src="assets/img/clients/3.png" alt="client">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="row">
            <div class="col-lg-6">
              <div class="sigma_client">
                <img src="assets/img/clients/4.png" alt="client">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sigma_client">
                <img src="assets/img/clients/5.png" alt="client">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>-->
  <!-- Clients End -->
<?php

include "footer.php";
?>