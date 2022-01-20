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
         .dis
        {
        	list-style-type:disclosure-closed;
        	color:yellow;
            font-weight:500;
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
  <section class="section section-md light-bg" style="padding: 50px 0 60px !important;">
    <div class="container">

      <div class="row align-items-center">
      
        <div class="col-lg-6 mb-lg-30">
          <div class="section-title section-title-2 text-start">
            <p class="subtitle">About Us</p>
                <?php 
                $select = "SELECT * FROM `jag_about_us`";
                $result = mysqli_query($connection, $select);
                $row12 = mysqli_fetch_assoc($result);
                ?>
            <h4 class="title"><?php echo $row12['title']; ?></h4>
            <p><?php echo $row12['description'];?></p>
            <!-- <a href="about-us.php" class="sigma_btn-custom secondary">Read More <i class="far fa-arrow-right"></i> </a> -->
          </div>
          
          <div class="d-flex align-items-center mt-5">
            <div class="sigma_round-button me-4 sm">
              
              
            </div>
            
          </div>
        </div>
        
        
        <div class="col-lg-6 d-none d-lg-block">
          <div class="me-lg-30 img-group-2">
            <img src="assets/img/homepage.png" alt="about" style="height:417px;width:340px;">
            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row[ 'image']) . '"' ?> alt="portfolio"/>
            <!-- <img src="assets/img/about-group2/jag-17.jpg" alt="about" style="height:320px;width:350px;"> -->
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- About End -->

    <!-- holi Start -->
    <div class="section section-padding bg-cover portfolio-section secondary-overlay" style="background-image: url(assets/img/bg2.jpg)">
        <div class="container">
                            
         <div class="section-title text-center">
        <p class="subtitle text-white">Volunteers</p>
        <h4 class="title text-white">Puja Schedules</h4>
      </div>
           
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a href="" class="sigma_service style-1 primary-bg" style="height: 300px;">
                       <div class="sigma_service-body">
                            <h5 class="text-white">Yearly Puja Schedules</h5>
                            <ul>
                            <?php
                                 $select = "SELECT * FROM `jag_yearly_puja` WHERE 1";
                                 $result = mysqli_query($connection, $select);
                            ?>
                            <!-- <marquee direction="up" scrolldelay="150"> -->
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <li class="dis" ><?php echo $row['name']; ?> - <span  class="text-white"><?php echo $row['timing']; ?></span></li>
                                    </div>
                                </div>                          
                           <?php } ?>
                           <!-- </marquee> -->                           
                            </ul>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 mt-negative-sm">
                    <a href="" class="sigma_service style-1 secondary-bg" style="height: 300px;">
                        <div class="sigma_service-body">
                            <h5 class="text-white">Daily Puja Schedules</h5>
                             <ul>
                             <?php
                                 $select = "SELECT * FROM `jag_daily_puja` WHERE 1";
                                 $result = mysqli_query($connection, $select);
                            ?>
                            <!-- <marquee direction="up" scrolldelay="150"> -->
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                <li class="dis"><?php echo $row['name']; ?> - <span class="text-white"><?php echo $row['s_timing']; ?> to <?php echo $row['e_timing']; ?></span></li>
                            <?php } ?>
                           <!-- </marquee> -->
                            </ul>
                        </div>                       
                    </a>
                </div>            
            </div>
        </div>
    </div>
    <!-- holi End -->

  <!--another section -->
  <section class="section pt-0 mt-5">
    <div class="container">
      <div class="row">
		<div class="col-lg-12">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start" style="max-width:100% !important;">
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

    <!-- volunteers Start -->
  <div class="section section-padding bg-cover secondary-overlay bg-center bg-norepeat" style="background-image: url(assets/img/bg2.jpg)">
    <div class="container">

      <div class="section-title text-center">
        <p class="subtitle text-white">Who</p>
        <h4 class="title text-white">Our Volunteers</h4>
      </div>

      <div class="row">
		<?php 
        	 $select = "SELECT * FROM `jag_volunteer`";
             $result = mysqli_query($connection, $select);
             while($row = mysqli_fetch_assoc($result)) { 
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
                <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row[ 'image']) . '"' ?> alt="portfolio"/>
             <!-- <ul class="sigma_sm">
                <li> <a href="#" class="trigger-volunteers-socials"> <i class="fal fa-plus"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
              </ul> -->
            </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <p class="text-white"><?php echo $row['desig']; ?></p>
                <h5 class="text-white">
                  <a href="volunteer.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h5>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

       <!-- <div class="col-lg-3 col-md-6">
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
                  <a href="volunteer.php">Yesh Chopra</a>
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
        </div> -->

      </div>

    </div>
  </div>
  <!-- volunteers End -->
    
  <!-- Testimonials Start -->
    <section class="section pt-0" style="margin-top: 60px;">

        <div class="container testimonial-section bg-contain bg-norepeat bg-center" style="background-image: url(assets/img/textures/map-2.png)">

            <div class="section-title text-center">
                <p class="subtitle">Testimonials</p>
                <h4 class="title">What Our Congregation Say</h4>
            </div>

            <div class="sigma_testimonial style-2">
                <div class="sigma_testimonial-slider">
					<?php
                                 $select = "SELECT * FROM `jag_testimonial` WHERE status='Approved'";
                                 $result = mysqli_query($connection, $select);
                                 while($row = mysqli_fetch_assoc($result)) { 
                     ?>
                    <div class="sigma_testimonial-inner">
                        <div class="sigma_testimonial-thumb">
                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row[ 'image']) . '"' ?> alt="portfolio"/>
                        </div>
                        <div>
                            <div class="sigma_testimonial-body">
                                <p><?php echo $row['message']; ?></p>
                            </div>
                            <div class="sigma_testimonial-footer">
                                <div class="sigma_testimonial-author">
                                    <cite><?php echo $row['name']; ?></cite>
                                    <span><?php echo $row['desig']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                    <!--<div class="sigma_testimonial-inner">
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
                    </div>-->

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