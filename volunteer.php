<?php
include "header.php";
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/volunteer.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- Post Content Start -->
  <div class="section">
    <div class="container">

      <?php 
        	 $id = $_GET['id'];
             $select = "SELECT * FROM `jag_volunteer` where `id`='$id'";
             $result = mysqli_query($connection, $select);
             $row = mysqli_fetch_assoc($result);
           
        ?>
        <div class="sigma_volunteer-detail mb-5">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="sigma_member-image style-1">
                      <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row[ 'image']) . '"' ?> alt="portfolio"/ style="width:445px; height:570px;">
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="sigma_volunteer-detail-inner mt-5 mt-lg-0 ps-0 ps-lg-4">
                      <h3 class="sigma_member-name"><?php echo $row['name']; ?></h3>
                      <span class="sigma_volunteer-detail-category"><?php echo $row['desig']; ?></span>
                      <ul class="sigma_volunteer-detail-info" style="margin-top:10px!important;">
                        <li>
                          <i class="fas fa-phone"></i>
                          <span class="title">Phone:</span><?php echo $row['phone']; ?>
                        </li>
                        <li>
                          <i class="fas fa-envelope"></i>
                          <span class="title">Email:</span><?php echo $row['email']; ?>
                        </li>
                        <li>
                          <i class="fas fa-map-marker-alt"></i>
                          <span class="title">Address Info:</span><?php echo $row['address']; ?>
                        </li>
                      </ul>
                      <ul class="sigma_volunteer-detail-info">
                        <h4>About <?php echo $row['name']; ?></h4>
                        <p><?php echo $row['description']; ?></p>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
    </div>
  </div>
  <!-- Post Content End -->
<?php
include "footer.php";
?>