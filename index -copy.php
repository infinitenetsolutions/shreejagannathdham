<?php
include "header.php";
include 'admin/connection.inc.php';
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .portfolio-slider li {
            list-style-type: upper-latin;
            color: red;
            //upper-latin!important;
            font-size:13px;
        }
        
        .background:after {
            opacity: 0.5;
            content: " ";
            background-color: red;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        
        .carousel-indicators li {
            background-color: #f00;
        }
        
        .carousel-indicators .active {
            background-color: #000;
        }
        
        .secondary-overlay::before{
        background-color: rgb(255 73 6 / 25%);
        }
    </style>


    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>

        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner/Lord of Universe-1.jpg" alt="shreejagannatha" width="1100" height="500">

            </div>


            <div class="carousel-item">
                <img src="assets/img/banner/Lord of Universe-2.jpg" alt="shreejagannatha" width="1100" height="500">

            </div>

            <div class="carousel-item">
                <img src="assets/img/banner/Ratha Yatra-3.jpg" alt="shreejagannatha" width="1100" height="500">

            </div>

            <div class="carousel-item">
                <img src="assets/img/banner/Witness the Cultural Heritage.jpg" alt="shreejagannatha" width="1100" height="500">

            </div>


        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


 <!-- About Start -->
  <section class="section section-md light-bg">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-30">
          <div class="section-title section-title-2 text-start">
            <p class="subtitle">About Us</p>
            <h4 class="title">We are a Hindu that believe in Ram.</h4>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure</p>
          </div>
          <div class="d-flex align-items-center mt-5">
            <div class="sigma_round-button me-4 sm">
              <span> <b class="counter" data-to="75" data-from="0">0</b> <span class="custom-primary">%</span> </span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 197 197" enable-background="new 0 0 197 197" xml:space="preserve">
                <circle class="sigma_round-button-stroke" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
                <circle data-to="290" class="sigma_progress-round sigma_round-button-circle" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
              </svg>
            </div>
            <div>
              <h5 class="mb-2">Hindu Community</h5>
              <p class="mb-0">If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner</p>
            </div>
          </div>
          <div class="d-flex align-items-center mt-5">
            <div class="sigma_round-button me-4 sm">
              <span> <b class="counter" data-to="50" data-from="0">0</b> <span class="custom-secondary">%</span> </span>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 197 197" enable-background="new 0 0 197 197" xml:space="preserve">
                <circle class="sigma_round-button-stroke" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
                <circle data-to="400" class="sigma_progress-round sigma_round-button-circle secondary" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
              </svg>
            </div>
            <div>
              <h5 class="mb-2">Active Members</h5>
              <p class="mb-0">If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="me-lg-30 img-group-2">
            <img src="assets/img/homepage.png" alt="about" style="height:417px;width:340px;">
            <img src="assets/img/about-group2/jag-17.jpg" alt="about" style="height:320px;width:350px;">
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- About End -->
  
  <section class="section pt-0 mt-5">
    <div class="container">
      <div class="row">
		<div class="col-lg-12">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start">
              <p class="subtitle">Education for all rural children</p>
              <h4 class="title">We Are A Hindu That Believes In Rama.</h4>
            </div>
            <p class="blockquote bg-transparent"> We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. </p>
            <div class="row">
              <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-temple"></i>-->
                    <img src="./././assets/img/pooja.png">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Pooja </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-powder-1"></i>-->
                    <img src="./././assets/img/suchi.png">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Seva Suchi </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>

               <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-powder-1"></i>-->
                    <img src="./././assets/img/book.png">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Book Seva </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>

               <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-powder-1"></i>-->
                    <img src="./././assets/img/prasad.png">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Prasad </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>

               <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-powder-1"></i>-->
                    <img src="./././assets/img/member.png" style="height: 100px;">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Be a Member </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>

               <div class="col-lg-6">
                <div class="sigma_icon-block icon-block-3">
                  <div class="icon-wrapper">
                    <!--<i class="flaticon-powder-1"></i>-->
                    <img src="./././assets/img/flag12.png">
                  </div>
                  <div class="sigma_icon-block-content">
                    <h5> Flag </h5>
                    <p>Donation is a good act amet quam vehicula elementum sed.</p>
                  </div>
                </div>
              </div>


            </div>
            <!-- <a href="about-us.html" class="sigma_btn-custom light">Learn More <i class="far fa-arrow-right"></i> </a> -->
          </div>
        </div>
      </div>

    </div>
  </section>

 
    <!-- holi Start -->
    <div class="section section-padding bg-cover portfolio-section secondary-overlay" style="background-image: url(assets/img/bg2.jpg)">
        <div class="container">

            
                
                 <div class="section-title text-center">
        <p class="subtitle text-white">Volunteers</p>
        <h4 class="title text-white">Puja Schedules</h4>
      </div>

           

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <a href="services.php" class="sigma_service style-1 primary-bg" style="height: 350px;">
                        <div class="sigma_service-thumb">
                            <!--<i class="text-white flaticon-temple"></i>-->
                        </div>
                        <div class="sigma_service-body">
                            <h5 class="text-white">Yearly Puja Schedules</h5>
                            <!--<p class="text-white">Temple is place where hindu worship consectetur adipisicing elit, sed do </p>-->
                            <ul>
                            <?php
                                 $select = "SELECT * FROM `jag_yearly_puja` WHERE 1";
                                 $result = mysqli_query($connection, $select);
                            ?>
                            <!-- <marquee direction="up" scrolldelay="150"> -->
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                           <li class="text-white"><img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 50px;"/><?php echo $row['name']; ?> - <span><?php echo $row['timing']; ?></span></li>
                           <!--<li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>
                           <li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>
                           <li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>-->
                           <?php } ?>
                           <!-- </marquee> -->
                           
                            </ul>
                        </div>
                        <!-- <span class="btn-link text-white">Learn More <i class="text-white far fa-arrow-right"></i> </span> -->
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 mt-negative-sm">
                    <a href="services.php" class="sigma_service style-1 secondary-bg" style="height: 350px;">
                        <div class="sigma_service-thumb">
                            <!--<i class="custom-primary flaticon-hindu-1"></i>-->
                        </div>
                        <div class="sigma_service-body">
                            <h5 class="text-white">Daily Puja Schedules</h5>
                             <ul>
                             <?php
                                 $select = "SELECT * FROM `jag_daily_puja` WHERE 1";
                                 $result = mysqli_query($connection, $select);
                            ?>
                            <!-- <marquee direction="up" scrolldelay="150"> -->
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>

                           <li class="text-white"><img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 50px;"/><?php echo $row['name']; ?> - <span><?php echo $row['timing']; ?></span></li>
                           <!--<li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>
                           <li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>
                           <li class="text-white">Akshay Trutiya <span>05/07/2017</span></li>-->
                           <?php } ?>
                           <!-- </marquee> -->
                            </ul>
                        </div>
                        <!-- <span class="text-white btn-link">Learn More <i class="text-white far fa-arrow-right"></i> </span> -->
                    </a>
                </div>

                

            </div>

            <!-- <div class="text-end">
                <a href="services.php" class="btn-link text-white"> Get Started Now <i class="custom-primary far fa-arrow-right"></i> </a>
            </div> -->

        </div>
    </div>
    <!-- holi End -->

    <!-- Progress bar Start -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <img src="assets/img/progress-bar/1.jpg" alt="img">
                </div>
                <div class="col-lg-4 p-3 p-lg-0">
                    <div class="sigma_box sigma_box-absolute sigma_box-lg m-0 sigma_box-progress">
                        <i class="flaticon-hindu"></i>
                        <div class="sigma_round-button mb-4">
                            <span> <b class="counter" data-from="0" data-to="75">0</b> <span class="custom-primary">%</span> </span>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 197 197" enable-background="new 0 0 197 197" xml:space="preserve">
                <circle class="sigma_round-button-stroke" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
                <circle class="sigma_progress-round sigma_round-button-circle" data-to="290" stroke-linecap="round" cx="98.5" cy="98.6" r="97.5"></circle>
              </svg>
                        </div>

                        <h6>Donnation Success Rate</h6>
                        <p class="m-0 blockquote bg-transparent"> Design better websites and spend less time without restricting </p>
                    </div>
                </div>
                <div class="col-lg-4 z-index-3">
                    <img src="assets/img/progress-bar/2.jpg" alt="img">
                </div>

            </div>
        </div>
    </div>
    <!-- Progress bar End -->

    <!-- volunteers Start -->
  <div class="section section-padding bg-cover secondary-overlay bg-center bg-norepeat" style="background-image: url(assets/img/bg2.jpg)">
    <div class="container">

      <div class="section-title text-center">
        <p class="subtitle text-white">Who</p>
        <h4 class="title text-white">Our Volunteers</h4>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
              <img src="assets/img/volunteers/4.jpg" alt="volunteers">
              <ul class="sigma_sm">
                <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              </ul>
            </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p class="text-white">Temple Pandit</p>
                <h5 class="text-white">
                  <a href="volunteer-detail.html">Rakesh K Pandey</a></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
              <img src="assets/img/volunteers/6.jpg" alt="volunteers">
              <ul class="sigma_sm">
                <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              </ul>
            </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p class="text-white">Temple Memember</p>
                <h5 class="text-white">
                  <a href="volunteer-detail.html">Yesh Chopra</a>
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
              <img src="assets/img/volunteers/5.jpg" alt="volunteers">
              <ul class="sigma_sm">
                <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              </ul>
            </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p class="text-white">Temple Memember</p>
                <h5 class="text-white">
                  <a href="volunteer-detail.html">M Kapoor</a>
                </h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
              <img src="assets/img/volunteers/3.jpg" alt="volunteers">
              <ul class="sigma_sm">
                <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              </ul>
            </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p class="text-white">Temple Memember</p>
                <h5 class="text-white">
                  <a href="volunteer-detail.html">Mohan Das</a>
                </h5>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!-- volunteers End -->
    
    <!-- Donation Start -->
    <div class="section section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <p class="subtitle">Make a Donation</p>
                <h4 class="title">Donate Us To Help</h4>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-2">
                        <div class="sigma_service-thumb">
                            <img src="assets/img/donation/5.jpg" alt="img">
                        </div>
                        <div class="sigma_service-body">
                            <h5>
                                <a href="donation.php">Protecting Children</a>
                            </h5>
                            <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
                            <div class="sigma_service-progress">
                                <div class="progress-content">
                                    <p>Raised: $52,384</p>
                                    <p>Goal: $85,000</p>
                                </div>
                                <div class="sigma_progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="donation.php" class="sigma_btn-custom">
                Donate
              </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-2">
                        <div class="sigma_service-thumb">
                            <img src="assets/img/donation/6.jpg" alt="img">
                        </div>
                        <div class="sigma_service-body">
                            <h5>
                                <a href="donation.php">Donate Ngos</a>
                            </h5>
                            <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
                            <div class="sigma_service-progress">
                                <div class="progress-content">
                                    <p>Raised: $49,444</p>
                                    <p>Goal: $78,000</p>
                                </div>
                                <div class="sigma_progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="donation.php" class="sigma_btn-custom">
                Donate
              </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-2">
                        <div class="sigma_service-thumb">
                            <img src="assets/img/donation/7.jpg" alt="img">
                        </div>
                        <div class="sigma_service-body">
                            <h5>
                                <a href="donation.php">Feed Poors</a>
                            </h5>
                            <p>Temple is place where hindu worship consectetur adipisicing elit, sed do </p>
                            <div class="sigma_service-progress">
                                <div class="progress-content">
                                    <p>Raised: $78,334</p>
                                    <p>Goal: $96,400</p>
                                </div>
                                <div class="sigma_progress">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="donation.php" class="sigma_btn-custom">
                Donate
              </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Donation End -->

    <!-- volunteers Start -->
    <section class="section section-padding light-bg">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 mb-lg-30">
                    <div class="section-title mb-0 text-start">
                        <p class="subtitle">volunteers</p>
                        <h4 class="title">Our Volunteers Achievments</h4>
                    </div>
                    <p class="blockquote bg-transparent"> We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. </p>
                    <div class="basic-dot-slider light-dots">
                        <div class="slide-item">
                            <p class="mb-0">You need to be sure there isn???t anything embarrassing hidden in the middle of text. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; generators on the Internet tend We are a Hindu that
                                believe in Ram</p>
                        </div>
                        <div class="slide-item">
                            <p class="mb-0">You need to be sure there isn???t anything embarrassing hidden in the middle of text. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; generators on the Internet tend We are a Hindu that
                                believe in Ram</p>
                        </div>
                        <div class="slide-item">
                            <p class="mb-0">You need to be sure there isn???t anything embarrassing hidden in the middle of text. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; generators on the Internet tend We are a Hindu that
                                believe in Ram</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="me-lg-30">
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="sigma_volunteers volunteers-5">
                                    <div class="sigma_volunteers-thumb">
                                        <img src="assets/img/volunteers/1.jpg" alt="volunteers">
                                        <ul class="sigma_sm">
                                            <li>
                                                <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-instagram"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sigma_volunteers-body">
                                        <div class="sigma_volunteers-info">
                                            <p>Temple Memember</p>
                                            <h5>
                                                <a href="volunteer-detail.php">Yesh Chopra</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="sigma_volunteers volunteers-5">
                                    <div class="sigma_volunteers-thumb">
                                        <img src="assets/img/volunteers/2.jpg" alt="volunteers">
                                        <ul class="sigma_sm">
                                            <li>
                                                <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fab fa-instagram"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sigma_volunteers-body">
                                        <div class="sigma_volunteers-info">
                                            <p>Temple Memember</p>
                                            <h5>
                                                <a href="volunteer-detail.php">Mukesh Singh</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- volunteers End -->

    <!-- Portfolio Start -->
    <div class="section section-padding bg-cover secondary-overlay bg-center bg-norepeat" style="background-image: url(assets/img/textures/abstract.png)">
        <div class="container">

            <div class="section-title section-title-2 flex-title">
                <div>
                    <a href="packages.php" class="text-light subtitle light">View Packages</a>
                    <h4 class="text-white title mb-lg-0">Our Packages</h4>
                </div>
                <div class="sigma_arrows">
                    <i class="far fa-chevron-left slick-arrow slider-prev"></i>
                    <i class="far fa-chevron-right slick-arrow slider-next"></i>
                </div>
            </div>

            <div class="portfolio-slider">
                <?php 
         	$select = "SELECT * FROM `jag_member_type` WHERE 1";
  			$result = mysqli_query($connection, $select);
  			while($row=mysqli_fetch_assoc($result)){
        ?>
                <div class="sigma_portfolio-item style-3">
                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row[ 'image']) . '"' ?> alt="portfolio" style="width:500px;height:300px;"/>
                    <!--<img src="assets/img/puja/style-3/1.jpg" alt="portfolio">-->
                    <div class="sigma_portfolio-item-content">
                        <div class="sigma_portfolio-item-content-inner">
                            <!-- <a href="#">Temple</a> -->
                            <h5 class="text-center">
                                <?php echo $row['name']; ?>
                            </h5>
                            <?php echo $row['description']; ?>
                         
                            <h5 class="" style="color:#fff;text-align: center;background: red;padding: 10px;border-radius: 20px;">Donation amount <b style="color:#fff;">Rs. <?php echo $row['donation_amount']; ?>/</b></h5>
                        </div>

                    </div>
                </div>
                <?php } ?>

                

            </div>

        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonials Start -->
    <section class="section pt-0">

        <div class="container testimonial-section bg-contain bg-norepeat bg-center" style="background-image: url(assets/img/textures/map-2.png)">

            <div class="section-title text-center">
                <p class="subtitle">Testimonials</p>
                <h4 class="title">What Our Congregation Say</h4>
            </div>

            <div class="sigma_testimonial style-2">
                <div class="sigma_testimonial-slider">

                    <div class="sigma_testimonial-inner">
                        <div class="sigma_testimonial-thumb">
                            <img src="assets/img/testimonials/1.jpg" alt="testimonial">
                        </div>
                        <div>
                            <div class="sigma_testimonial-body">
                                <div class="sigma_rating-wrapper">
                                    <div class="sigma_rating">
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <p>If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner it is got rid of, the better.</p>
                            </div>
                            <div class="sigma_testimonial-footer">
                                <div class="sigma_testimonial-author">
                                    <cite>Mukesh Singh</cite>
                                    <span>Pandit</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma_testimonial-inner">
                        <div class="sigma_testimonial-thumb">
                            <img src="assets/img/testimonials/2.jpg" alt="testimonial">
                        </div>
                        <div>
                            <div class="sigma_testimonial-body">
                                <div class="sigma_rating-wrapper">
                                    <div class="sigma_rating">
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <p>If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner it is got rid of, the better.</p>
                            </div>
                            <div class="sigma_testimonial-footer">
                                <div class="sigma_testimonial-author">
                                    <cite>Das Gupta</cite>
                                    <span>Executive</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sigma_testimonial-inner">
                        <div class="sigma_testimonial-thumb">
                            <img src="assets/img/testimonials/3.jpg" alt="testimonial">
                        </div>
                        <div>
                            <div class="sigma_testimonial-body">
                                <div class="sigma_rating-wrapper">
                                    <div class="sigma_rating">
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="fas fa-star active"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <p>If money help a man to do well to others, it is of some value; but if not, it is simply a mass of evil, and the sooner it is got rid of, the better.</p>
                            </div>
                            <div class="sigma_testimonial-footer">
                                <div class="sigma_testimonial-author">
                                    <cite>Mukesh Singh</cite>
                                    <span>Pandit</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="text-center mt-4">
                <div class="sigma_arrows style-2">
                    <i class="far fa-chevron-left slick-arrow slider-prev"></i>
                    <i class="far fa-chevron-right slick-arrow slider-next"></i>
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonials End -->

   

    <!-- Form Start -->
    <div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat" style="background-image: url(assets/img/bg1.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-lg-30">
                    <form method="post">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" class="form-control transparent" placeholder="First Name" name="fname" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-user"></i>
                                    <input type="text" class="form-control transparent" placeholder="Last Name" name="lname" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-pencil"></i>
                                    <input type="text" class="form-control transparent" placeholder="Subject" name="subject" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <i class="far fa-envelope"></i>
                                    <input type="text" class="form-control transparent" placeholder="Email Address" name="email" value="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control transparent" placeholder="Enter Message" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="sigma_btn-custom d-block w-100" name="button"> Get a Quote <i class="far fa-arrow-right"></i> </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/1.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/2.png" alt="client">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/3.png" alt="client">
                            </div>
                        </div>
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
                        <div class="col-lg-6">
                            <div class="sigma_client">
                                <img src="assets/img/clients/6.png" alt="client">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

    <!-- Blog Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="section-title text-center">
                <p class="subtitle">Blog</p>
                <h4 class="title">News Feed</h4>
            </div>

            <div class="row">

                <!-- Article Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.php">
                                <img src="assets/img/blog/2.jpg" alt="post">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-meta">
                                <div class="me-3">
                                    <i class="fas fa-om"></i>
                                    <a href="blog-details.php" class="sigma_post-category">Temple</a>,
                                    <a href="blog-details.php" class="sigma_post-category">Love</a>
                                </div>
                                <a href="blog-details.php" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                            </div>
                            <h5> <a href="blog-details.php">Temple companies are being so transparent with their work</a> </h5>
                            <div class="sigma_post-single-author">
                                <img src="assets/img/people/1.jpg" alt="author">
                                <div class="sigma_post-single-author-content">
                                    By
                                    <p>Miha Boukor</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article End -->

                <!-- Article Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.php">
                                <img src="assets/img/blog/1.jpg" alt="post">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-meta">
                                <div class="me-3">
                                    <i class="fas fa-om"></i>
                                    <a href="blog-details.php" class="sigma_post-category">Temple</a>,
                                    <a href="blog-details.php" class="sigma_post-category">Love</a>
                                </div>
                                <a href="blog-details.php" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                            </div>
                            <h5> <a href="blog-details.php">How to abide by Puja rules without any risks</a> </h5>
                            <div class="sigma_post-single-author">
                                <img src="assets/img/people/2.jpg" alt="author">
                                <div class="sigma_post-single-author-content">
                                    By
                                    <p>Aime Bill</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article End -->

                <!-- Article Start -->
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.php">
                                <img src="assets/img/blog/3.jpg" alt="post">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-meta">
                                <div class="me-3">
                                    <i class="fas fa-om"></i>
                                    <a href="blog-details.php" class="sigma_post-category">Temple</a>,
                                    <a href="blog-details.php" class="sigma_post-category">Love</a>
                                </div>
                                <a href="blog-details.php" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                            </div>
                            <h5> <a href="blog-details.php">Education for all rural children are necessary.</a> </h5>
                            <div class="sigma_post-single-author">
                                <img src="assets/img/people/1.jpg" alt="author">
                                <div class="sigma_post-single-author-content">
                                    By
                                    <p>Yesh Chopra</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Article End -->

            </div>

        </div>

        <div class="spacer spacer-bottom spacer-lg light-bg pattern-triangles"></div>

    </div>
    <!-- Blog End -->
    <?php

include "footer.php";
?>