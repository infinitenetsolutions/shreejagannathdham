<?php
include "header.php";
include 'admin/connection.inc.php';
$var = $_GET['var'];

  $select = "SELECT * FROM `jag_facilities` WHERE `id` = '$var'";
  $result = mysqli_query($connection, $select);
 	$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maharatri - Temple HTML Template</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

  <!-- partial:partial/__stylesheets.html -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
  <!-- Template Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- partial -->

</head>

<body>


 
  <!-- partial:partia/__mobile-nav.html -->
  <aside class="sigma_aside sigma_aside-left">

    <a class="navbar-brand" href="index.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <!-- Menu -->
   

  </aside>
  <div class="sigma_aside-overlay aside-trigger-left"></div>
  <!-- partial -->

  <!-- partial:partia/__header.html -->
  <header class="sigma_header header-3 can-sticky header-absolute">

  

  </header>
  <!-- partial -->


  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/facilities.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- Post Content Start -->
  <div class="section">
    <div class="container">

      <div class="entry-content">

        <div class="sigma_post-single-thumb">
          <!--<img src="assets/img/service/details/1.jpg" alt="post">-->
           <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" />
         
        	<p><?php echo $row['description']; ?></p><br/><br/>
		 </div>

    </div>
  </div>
  <!-- Post Content End -->

 
  

   

   


</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/maharatri/holi-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 11:05:54 GMT -->
</html>
<?php

include "footer.php";
?>