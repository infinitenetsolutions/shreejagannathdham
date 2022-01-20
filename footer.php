 <?php
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_site_info` WHERE 1";
  $result = mysqli_query($connection, $select);
  $row = mysqli_fetch_assoc($result);
  
  
  $select1 = "SELECT * FROM `jag_news`";
  $result1 = mysqli_query($connection, $select1);
 
?>

<!-- CTA Start -->
 <div class="section pt-0" style="padding: 0px 0 !important;">
    <div class="container">

      <div class="row position-relative">
        <div class="col-lg-12 col-md-6">
          <div class="sigma_cta lg primary-bg">
            <img class="d-none d-lg-block" src="./././admin/dist/img/jagannath-top.png" alt="cta" style="width: 355px;height: 200px;">
            <div class="sigma_cta-content">
              <span class="fw-600 custom-secondary text-white"></span>
              <h4 class="text-white">Need Help, Call us! <?php echo $row['phone1']; ?></h4>
            </div>
            <img class="d-none d-lg-block" src="assets/img/cta/2.png" alt="cta" >
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- CTA End -->
  <!-- partial:partia/__footer.html -->
  <footer class="sigma_footer footer-2">

    <!-- Middle Footer -->
    <div class="sigma_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">About Us</h5>
            <p class="mb-4">It was an outstanding proposal of Mr, Bhikari Nayak, an ex employee of Hindustan Copper Ltd. Mosabani, who earlier initiated his plan before Utkal Association, Mosabani, but was not supported due to poor physical location and public awareness.</p>                      
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Information</h5>
            <ul>
              <li> <a href="about-us.php">About</a> </li>
              <li> <a href="facilities.php">Facilities</a> </li>
              <li> <a href="rath-jatra.php">Rath Jatra</a> </li>
              <li> <a href="be_member.php">Be a Member</a> </li>
              
            </ul>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
            <li> <a href="news.php">News</a> </li>
              <li> <a href="media.php">Our Gallery</a> </li>
              <li> <a href="faq.php">Faq</a> </li>
              <li> <a href="contact.php">Contact</a> </li>
             
            </ul>
          </div>
         
         
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Reach Us</h5>
           
            <div class="d-flex align-items-center justify-content-md-start justify-content-center">
              <i class="far fa-phone custom-primary me-3"></i>
              <span><?php echo $row['phone1']; ?></span>
            </div>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
              <i class="far fa-envelope custom-primary me-3"></i>
              <span><?php echo $row['email']; ?></span>
            </div>
            <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
              <i class="far fa-map-marker custom-primary me-3"></i>
              <span><?php echo $row['address']; ?></span>
            </div>
          </div>                  
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="sigma_footer-bottom">
      <div class="container-fluid">
        <div class="sigma_footer-copyright">
          <p class="text-white" style="font-size: 12px;"> Copyright © Shree Jagannathdham Trust - <?php echo date('Y');?> </p>
        </div>
        <div class="sigma_footer-logo" style="height: 108px">
          <img src="assets/img/header1.png" alt="logo">
        </div>
        <ul class="sigma_sm square">
          <li>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </footer>
  <!-- partial -->

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
</html>
