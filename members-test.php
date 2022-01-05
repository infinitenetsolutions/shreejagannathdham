<?php
include "header.php";
include 'admin/connection.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>



  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Members</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Members</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->


<!-- Testimonials Start -->
  <section class="section sigma_testimonial-sec">

    <div class="container testimonial-section ">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-title text-start">
            <p class="subtitle">Testimonials</p>
            <h4 class="title">What Our Temple Trusties Say</h4>
            <p>We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. This is where you should start Temple is place where hindu worship  consectetur adipisicing elit, sed do Temple is place where hindu worship  consectetur adipisicing elit, sed do</p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="sigma_testimonial style-4">
            <div class="sigma_testimonial-body">
              <div class="sigma_testimonial-image d-none d-lg-block">
                <div class="row justify-content-center align-items-center g-0">
                  <!--<div class="col-md-3">
                    <img src="assets/img/testimonials/c-img01.png" alt="img">
                  </div>
                  <div class="col-md-5 ms-3">
                    <img src="assets/img/testimonials/c-img04.png" alt="img">
                  </div>-->
                  <div class="col-md-3 ms-3">
                    <img src="assets/img/testimonials/c-img03.png" alt="img">
                  </div>
                </div>
              </div>
              <i class="flaticon-right-quote icon"></i>
              <div class="sigma_testimonial-slider-1">
              <?php 
         	$select = "SELECT * FROM `jag_member` WHERE type= 'trustee'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>

                <div class="sigma_testimonial-slider-item">
                <div style="text-align:-webkit-center;">
                <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="border-radius:40px 0px 40px 0px!important;">
                </div>
                 
                  <div class="sigma_testimonial-author" style="text-align:center;">
                    <cite><?php echo $row['name']; ?></cite>
                  </div>
                </div>
                <?php } ?>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Testimonials End -->

<!-- Portfolio Start -->
  <div class="section section-padding bg-cover portfolio-section secondary-overlay" style="background-image: url(assets/img/bg2.jpg)">
    <div class="container">

      <div class="section-title section-title-2 flex-title">
        <div>
          
          <h4 class="text-white title mb-lg-0">Temple Commitee Members</h4>
        </div>
        <div class="sigma_arrows">
          <i class="far fa-chevron-left slick-arrow slider-prev"></i>
          <i class="far fa-chevron-right slick-arrow slider-next"></i>
        </div>
      </div>

      <div class="portfolio-slider">
<?php 
         	$select = "SELECT * FROM `jag_member` WHERE type='commitee member'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="sigma_portfolio-item style-3">
        <div style="text-align:-webkit-center">
          <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"'?> alt="portfolio" style="border-radius:50%;width: 280px;
    height: 270px;">
          </div>
          <div class="sigma_portfolio-item-content">
            <div class="sigma_portfolio-item-content-inner">
              <a href="#"><?php echo $row['name']; ?></a>
              <h5> <a href="puja-details.html"><?php echo $row['name']; ?> </a> </h5>
            </div>
            <a href="puja-details.html"><i class="far fa-arrow-right"></i></a>
          </div>
        </div>
<?php } ?>      

      </div>

    </div>
  </div>
  <!-- Portfolio End -->


















  <!-- volunteers Start -->
  <div class="section ">
    <div class="container">
 	
    <div class="section-title text-center">
        <h4 class="title">Temple Trusties</h4>
    </div>
      
      <div class="row">
		<?php 
         	$select = "SELECT * FROM `jag_member` WHERE type= 'trustee'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
             <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p>Temple Memember</p>
                <h5>
                  <a href="volunteer-detail.html"><?php echo $row['name']; ?></a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>
      
      <div class="section-title text-center">
        <h4 class="title">Temple Commitee Members</h4>
    </div>
      
      <div class="row">
		<?php 
         	$select = "SELECT * FROM `jag_member` WHERE type='commitee member'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
             <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p>Temple Memember</p>
                <h5>
                  <a href="volunteer-detail.html"><?php echo $row['name']; ?></a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>

 <div class="section-title text-center">
        <h4 class="title">Temple Other Members</h4>
    </div>
      
      <div class="row">
		<?php 
         	$select = "SELECT * FROM `jag_member` WHERE type='patron'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
             <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p>Temple Memember</p>
                <h5>
                  <a href="volunteer-detail.html"><?php echo $row['name']; ?></a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>


    </div>
  </div>
  <!-- volunteers End -->

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/maharatri/volunteers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 11:05:33 GMT -->
</html>
<?php
include "footer.php";
?>