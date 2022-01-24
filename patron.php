<?php
include "header.php";
include 'admin/connection.inc.php';

?>
<style>
@media (max-width: 992px){
.chair {
    display: block!important;
}
}

.section-title{
max-width: 1000px;
}

.section.section-md {
    padding: 60px 0 10px;
}
</style>
  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/patron1.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

 <section class="section section-md light-bg">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-8 mb-lg-30">
          <div class="section-title section-title-2 text-start">
            
            <h4 class="title">Chief Patron</h4>
			<?php
            	$select = "SELECT * FROM `jag_patron`";
  				$result = mysqli_query($connection, $select);
                $row = mysqli_fetch_assoc($result);
            ?>
            <p class="p-normal"><?php echo $row['description']; ?></p>
            <h6 class="mb-2"><?php echo $row['title']; ?></h6>
           <!-- <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>-->
          </div>
          <div class="d-flex align-items-center mt-5">
            <div class="sigma_round-button me-4 sm">
                         
            </div>
            <!--<div>
              <h5 class="mb-2">Hindu Community</h5>
              <p class="mb-0">If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner</p>
            </div>-->
          </div>
          <div class="d-flex align-items-center mt-5">
            <div class="sigma_round-button me-4 sm">                           
            </div>
            <!--<div>
              <h5 class="mb-2">Active Members</h5>
              <p class="mb-0">If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner</p>
            </div>-->
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block chair">
          <div class="me-lg-30 img-group-2">
          <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio"/>
            <!--<img src="assets/img/about-group2/2.jpg" alt="about">-->
          </div>
        </div>
      </div>

    </div>
  </section>
<?php

include "footer.php";
?>