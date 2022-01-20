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
             
              <h6 class="title mb-0">
                <!-- <a href="holi-details.html">Holi- The Colour Festival</a> -->
                <?php echo $row['title']; ?>
              </h6>
              <span >
              <a class="subtitle" href="facilities_single.php?var=<?php echo $row['id']; ?>" class="btn-link text-white">View More <i class="far fa-arrow-right text-white"></i> </a>
              </span>
              <!-- <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul> -->
              <!-- <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul> -->
              </div>
            </div>
        </div>
        <?php 
        }
        ?>


       <!-- <div class="col-lg-4">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
              <img src="assets/img/holi/2.jpg" alt="holi">
            </div>
            <div class="sigma_box">
              <span class="subtitle">Chaar Dhaam</span>
              <h4 class="title mb-0">
                <a href="holi-details.html">Chaar Dhaam Yatra</a>
              </h4>
              <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul>
              <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul>
              </div>
            </div>
        </div>


        <div class="col-lg-4">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
              <img src="assets/img/holi/3.jpg" alt="holi">
            </div>
            <div class="sigma_box">
              <span class="subtitle">Diwali</span>
              <h4 class="title mb-0">
                <a href="holi-details.html">Deepawali</a>
              </h4>
              <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul>
              <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul>
              </div>
            </div>
        </div>


        <div class="col-lg-4">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
              <img src="assets/img/holi/4.jpg" alt="holi">
            </div>
            <div class="sigma_box">
              <span class="subtitle">Dusseshra</span>
              <h4 class="title mb-0">
                <a href="holi-details.html">Durga Puja</a>
              </h4>
              <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul>
              <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul>
              </div>
            </div>
        </div>


        <div class="col-lg-4">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
              <img src="assets/img/holi/5.jpg" alt="holi">
            </div>
            <div class="sigma_box">
              <span class="subtitle">RamNavmi</span>
              <h4 class="title mb-0">
                <a href="holi-details.html">Janmashtami</a>
              </h4>
              <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul>
              <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul>
              </div>
            </div>
        </div>


        <div class="col-lg-4">
          <div class="sigma_sermon-box">
            <div class="sigma_sermon-image">
              <img src="assets/img/holi/6.jpg" alt="holi">
            </div>
            <div class="sigma_box">
              <span class="subtitle">Basaant Panchami</span>
              <h4 class="title mb-0">
                <a href="holi-details.html">Basaant Panchami</a>
              </h4>
              <ul class="sigma_sermon-info mb-0">
                <li>
                  <i class="far fa-user"></i>
                  Message From
                  <a href="#" class="ms-2"><u>Yeshvant Parsad</u></a>
                </li>
                <li  class="mt-0 ms-4">
                  <i class="far fa-calendar-check"></i>
                  Aug 12, 2022
                </li>
              </ul>
              <ul class="sigma_sm square">
                <li>
                  <a href="#">
                    <i class="fas fa-music"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="far fa-file-pdf"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fas fa-share-alt"></i>
                  </a>
                </li>
              </ul>
              </div>
            </div>
        </div>
      </div> -->
     
    </div>
  </div>
  <!-- Services End -->

  

</body>
</html>
<?php

include "footer.php";
?>
