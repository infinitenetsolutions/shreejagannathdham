<?php
include "header.php";
include 'admin/connection.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<body>
  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="https://shreejagannathdham.com/temp/shreejagannatha/assets/img/subheader.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- volunteers Start -->
  <div class="section ">
    <div class="container">
 	
    <div class="section-title text-center">
        <h4 class="title" style="font-size: 40px">Committee Members</h4>
    </div>
      
      <div class="row">
		<?php 
         	$select = "SELECT * FROM `jag_trustee` WHERE type= 'committee member'";
            print_r($select);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
             <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
                <h4><?php echo $row['name']; ?></h4>
                <p><?php echo $row['description']; ?></p>
                <h5>
                  <a href="volunteer-detail.html"><?php echo $row['name']; ?></a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>
      
      <div class="section-title text-center">
        <h4 class="title" style="font-size: 40px">Temple Trustees</h4>
    </div>
      
      <div class="row">
		<?php 
         	$select = "SELECT * FROM `jag_trustee` WHERE type='trustee'";
            print_r($selec);
  			$result = mysqli_query($connection, $select);
  			while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="sigma_volunteers volunteers-4">
            <div class="sigma_volunteers-thumb">
             <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" style="height: 200px !important;"/>
              </div>
            <div class="sigma_volunteers-body">
              <div class="sigma_volunteers-info">
              <h4><?php echo $row['name']; ?></h4>
                <p><?php echo $row['description']; ?></p>
                <h5>
                  <a href="volunteer-detail.html"><?php echo $row['name']; ?></a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>  
      </div>

    </div>
  </div>
  <!-- volunteers End -->

</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/maharatri/volunteers.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 11:05:33 GMT -->
</html>
<?php
include "footer.php";
?>