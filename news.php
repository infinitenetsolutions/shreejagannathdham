<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_news`";
  $result = mysqli_query($connection, $select);
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/banner/Temple News.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <div class="section">
    <div class="container">

      <div class="row">

       
        <div class="col-lg-12">
          <div class="row">

            <?php 
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <!-- Article Start -->
            <div class="col-md-3">
              <article class="sigma_post">
                <div class="sigma_post-thumb">
                  <a href="<?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?>" class="gallery-thumb">
                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
                  </a>
                </div>
                <div class="sigma_post-body">
                  <div class="sigma_post-meta">
                    <div class="me-3">
                      <i class="fas fa-om"></i>
                      <a href="blog-details.html" class="sigma_post-category">Temple News</a>
                    </div>
                    <a href="blog-details.html" class="sigma_post-date"> <i class="far fa-calendar"></i> <?php echo $row['year']; ?></a>
                  </div>
                  <h5> <a href="blog-details.html"><?php echo $row['event']; ?></a> </h5>
                 <!-- <div class="sigma_post-single-author">
                    <img src="assets/img/people/1.jpg" alt="author">
                    <div class="sigma_post-single-author-content">
                      By <p>Yesh Chopra</p>
                    </div>
                  </div> -->
                </div>
              </article>
            </div>
            <!-- Article End -->
            <?php } ?>

            <!-- Article Start -->
            <!--<div class="col-md-3">
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
                  <h5> <a href="blog-details.html">Varanasi At Night</a> </h5>
                  <div class="sigma_post-single-author">
                    <img src="assets/img/people/2.jpg" alt="author">
                    <div class="sigma_post-single-author-content">
                      By <p>Yesh Chopra</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>-->
            <!-- Article End -->

            <!-- Article Start -->
            <!--<div class="col-md-3">
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
                  <h5> <a href="blog-details.html">OM Mahashivratri</a> </h5>
                  <div class="sigma_post-single-author">
                    <img src="assets/img/people/1.jpg" alt="author">
                    <div class="sigma_post-single-author-content">
                      By <p>Yesh Chopra</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>-->
            <!-- Article End -->

            <!-- Article Start -->
            <!--<div class="col-md-3">
              <article class="sigma_post">
                <div class="sigma_post-thumb">
                  <a href="blog-details.html">
                    <img src="assets/img/blog/4.jpg" alt="post">
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
                  <h5> <a href="blog-details.html">Chaar Dhaam Yatra</a> </h5>
                  <div class="sigma_post-single-author">
                    <img src="assets/img/people/1.jpg" alt="author">
                    <div class="sigma_post-single-author-content">
                      By <p>Yesh Chopra</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>-->
            <!-- Article End -->                      
          </div>
          
        </div>

      </div>

    </div>
  </div>
<?php
include "footer.php";
?>