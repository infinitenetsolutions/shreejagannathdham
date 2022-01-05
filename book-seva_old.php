<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_seva_booking` WHERE 1";
  $result = mysqli_query($connection, $select);
  ?>
<!-- partial:partia/__subheader.html -->
<div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="https://shreejagannathdham.com/temp/shreejagannatha/assets/img/subheader.jpg" style="width:100%;">
      </div>
    </div>
  </div>
<!-- partial -->

<!-- Services Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-lg-4 col-md-6">
                <a href="holi-details.html" class="sigma_service style-1">
                    <div class="sigma_service-thumb">
                        <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
                    </div>
                    <div class="sigma_service-body">
                        <h5><?php echo $row['name']; ?></h5>
                        <span>Rs <?php echo $row['amount']; ?>/-</span>
                        <span>Daily</span>
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
                    </div>
                    <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                </a>
            </div>
            <?php } ?>

            <!--<div class="col-lg-4 col-md-6">
                <a href="holi-details.html" class="sigma_service style-1">
                    <div class="sigma_service-thumb">
                        <i class="flaticon-hindu-2"></i>
                    </div>
                    <div class="sigma_service-body">
                        <h5>Puja</h5>
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
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
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
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
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
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
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
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
                        <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
                    </div>
                    <span class="btn-link">Learn More <i class="far fa-arrow-right"></i> </span>
                </a>
            </div>-->

        </div>
    </div>
</div>
<!-- Services End -->


<?php
include "footer.php";
?>

<!-- partial:partia/__scripts.html -->
<script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/imagesloaded.min.js"></script>
<script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/jquery.waypoints.min.js"></script>
<script src="assets/js/plugins/jquery.counterup.min.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/jquery.inview.min.js"></script>
<script src="assets/js/plugins/jquery.event.move.js"></script>
<script src="assets/js/plugins/wow.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/ion.rangeSlider.min.js"></script>

<script src="assets/js/main.js"></script>
<!-- partial -->

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/maharatri/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 11:05:35 GMT -->

</html>