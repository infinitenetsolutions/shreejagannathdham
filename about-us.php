<?php 
include "header.php";
include 'admin/connection.inc.php';
                    ?>

<!--<div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">
    <div class="container">
        <div class="sigma_subheader-inner">
            <div class="sigma_subheader-text">
                <h1>About Us</h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>-->
<!-- partial -->


<div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="https://shreejagannathdham.com/temp/shreejagannatha/assets/img/subheader.jpg" style="width:100%;">
      </div>
    </div>
  </div>


<!-- About Start -->
<section class="section">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block" >
                <div class="sigma_img-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="assets/img/service/details/jag2.jpg" alt="service" style="height: 300px;">
                            <img class="ms-0" src="assets/img/service/details/jag5.jpg" alt="service" style="height: 300px;">
                        </div>
                        <div class="col-lg-6 mt-0 mt-lg-5">
                            <img src="assets/img/service/details/jag9.jpg" alt="service" style="height: 300px;width: 250px;">
                            <img class="ms-0" src="assets/img/service/details/jag8.jpg" alt="service" style="height: 300px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="me-lg-30">
                    <div class="section-title mb-0 text-start">
                        <p class="subtitle">EDUCATION FOR ALL RURAL CHILDREN</p>
                        <h4 class="title">We are a Hindu that believe in Ram</h4>
                    </div>
                    <p class="blockquote bg-transparent"> We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. </p>
                    <?php 
                    $select = "SELECT * FROM `jag_about` LIMIT 2";
                    $result = mysqli_query($connection, $select);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="sigma_icon-block icon-block-3">
                        <div class="icon-wrapper">
                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?> alt="portfolio"/>
                        </div>
                        <div class="sigma_icon-block-content">
                            <h5> <?php echo $row['title']; ?> </h5>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                    <!--<div class="sigma_icon-block icon-block-3">
                        <div class="icon-wrapper">
                            <img src="assets/img/textures/icons/2.png" alt="">
                        </div>
                        <div class="sigma_icon-block-content">
                            <h5> Puja </h5>
                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>

    </div>
        
  <div class="container" style="margin-top: 30px; margin-left: 135px;">
    <div class="row ">
             <?php 
                    $select = "SELECT * FROM `jag_about` LIMIT 10 offset 2";
                    $result = mysqli_query($connection, $select);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
         		<div class="col-lg-6 " >
                    <div class="sigma_icon-block icon-block-3">
                        <div class="icon-wrapper">
                            <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['images']) . '"' ?> alt="portfolio"/>
                        </div>
                        <div class="sigma_icon-block-content">
                            <h5> <?php echo $row['title']; ?> </h5>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                    </div>
          		</div>
                    <?php } ?>
         </div>
  </div>

 
    
</section>
<!-- About End -->

<!-- History Start -->
<div class="section light-bg">
    <div class="container">

        <div class="sigma_timeline">

            <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                    <h4>Some Important Life Lessons From Bhagwat Gita</h4>
                    <p>Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type, People ask questions related to
                        Hinduism. specimen book. </p>
                </div>
                <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                    <i class="far fa-circle"></i>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                    <span>2019</span><br><span class="sigma_timeline-month">JUN 1</span>
                </div>
            </div>
            <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                    <h4>People ask questions related to Hinduism</h4>
                    <p>People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever since the 1500s, when an unknown</p>
                </div>
                <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                    <i class="far fa-circle"></i>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                    <span>2020</span><br><span class="sigma_timeline-month">JUN 1</span>
                </div>
            </div>
            <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                    <h4>Some Important Life Lessons From Bhagwat Gita</h4>
                    <p>Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type, People ask questions related to
                        Hinduism. specimen book. </p>
                </div>
                <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                    <i class="far fa-circle"></i>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                    <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                </div>
            </div>
            <div class="row g-0 justify-content-end justify-content-md-around align-items-start sigma_timeline-nodes">
                <div class="col-12 col-md-5 order-3 order-md-1 sigma_timeline-content">
                    <h4>People ask questions related to Hinduism</h4>
                    <p>People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever since the 1500s, when an unknown</p>
                </div>
                <div class="col-2 col-sm-1 px-md-3 order-2 sigma_timeline-image text-md-center">
                    <i class="far fa-circle"></i>
                </div>
                <div class="col-12 col-md-5 order-1 order-md-3 pb-3 sigma_timeline-date">
                    <span>2022</span><br><span class="sigma_timeline-month">JUN 1</span>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- History End -->

<!-- About Start -->
<!--<section class="section">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="me-lg-30">
                    <div class="section-title mb-0 text-start">
                        <p class="subtitle">Our Approach</p>
                        <h4 class="title">Our mission is to share the Good of Hinduism</h4>
                    </div>
                    <p class="blockquote bg-transparent"> We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. </p>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-om"></i> Holi </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <i class="far fa-church"></i> Temple</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <i class="far fa-user"></i> Pandit</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <p>
                                Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p>
                                Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                            </p>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <p>
                                Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <img src="assets/img/about.jpg" alt="about">
            </div>

        </div>

    </div>
</section>-->
<!-- About End -->

<!-- Form Start -->
<!--<div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat" style="background-image: url(assets/img/bg1.jpg)">
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
</div>-->
<!-- Form End -->

<!-- Blog Start -->
<!--<div class="section section-padding">
    <div class="container">

        <div class="section-title text-center">
            <p class="subtitle">Blog</p>
            <h4 class="title">News Feed</h4>
        </div>

        <div class="row">-->

            <!-- Article Start -->
           <!-- <div class="col-lg-4 col-md-6">
                <article class="sigma_post">
                    <div class="sigma_post-thumb">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/2.jpg" alt="post">
                        </a>
                    </div>
                    <div class="sigma_post-body">
                        <div class="sigma_post-meta">
                            <div class="me-3">
                                <i class="fas fa-om"></i>
                                <a href="blog-details.html" class="sigma_post-category">Temple</a>,
                                <a href="blog-details.html" class="sigma_post-category">Love</a>
                            </div>
                            <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                        </div>
                        <h5> <a href="blog-details.html">Education for all rural children are necessary.</a> </h5>
                        <div class="sigma_post-single-author">
                            <img src="assets/img/people/1.jpg" alt="author">
                            <div class="sigma_post-single-author-content">
                                By
                                <p>Yesh Chopra</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>-->
            <!-- Article End -->

            <!-- Article Start -->
            <!--<div class="col-lg-4 col-md-6">
                <article class="sigma_post">
                    <div class="sigma_post-thumb">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/1.jpg" alt="post">
                        </a>
                    </div>
                    <div class="sigma_post-body">
                        <div class="sigma_post-meta">
                            <div class="me-3">
                                <i class="fas fa-om"></i>
                                <a href="blog-details.html" class="sigma_post-category">Temple</a>,
                                <a href="blog-details.html" class="sigma_post-category">Love</a>
                            </div>
                            <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                        </div>
                        <h5> <a href="blog-details.html">Education for all rural children are necessary.</a> </h5>
                        <div class="sigma_post-single-author">
                            <img src="assets/img/people/2.jpg" alt="author">
                            <div class="sigma_post-single-author-content">
                                By
                                <p>Yesh Chopra</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>-->
            <!-- Article End -->

            <!-- Article Start -->
            <!--<div class="col-lg-4 col-md-6">
                <article class="sigma_post">
                    <div class="sigma_post-thumb">
                        <a href="blog-details.html">
                            <img src="assets/img/blog/3.jpg" alt="post">
                        </a>
                    </div>
                    <div class="sigma_post-body">
                        <div class="sigma_post-meta">
                            <div class="me-3">
                                <i class="fas fa-om"></i>
                                <a href="blog-details.html" class="sigma_post-category">Temple</a>,
                                <a href="blog-details.html" class="sigma_post-category">Love</a>
                            </div>
                            <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> May 20, 2022</a>
                        </div>
                        <h5> <a href="blog-details.html">Education for all rural children are necessary.</a> </h5>
                        <div class="sigma_post-single-author">
                            <img src="assets/img/people/1.jpg" alt="author">
                            <div class="sigma_post-single-author-content">
                                By
                                <p>Yesh Chopra</p>
                            </div>
                        </div>
                    </div>
                </article>
            </div>-->
            <!-- Article End -->

       <!-- </div>

    </div>
</div> -->
<!-- Blog End -->

<?php include 'footer.php'; ?>
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


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/maharatri/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 11:05:32 GMT -->

</html>