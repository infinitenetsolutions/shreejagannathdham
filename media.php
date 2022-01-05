<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_gallery` group by year";
  $result = mysqli_query($connection, $select);
?>


  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
      <img src="assets/img/Our Gallery.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <div class="section">
    <div class="container">

      <div class="entry-content">                                     
       
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) {
       $img= $row['image']
        ?>
        
         <div class="col-md-4">
            <a <?php echo ' href="data:image/jpeg;base64,' . base64_encode($img) . '"' ?> class="gallery-thumb">            
                    <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($img) . '"' ?> alt="" width="" height="" />                
   </a>
  </div>                                                       
          
        <?php } ?>                                                          
          
                    

        </div>

      </div>

    </div>
  </div>
<?php

include "footer.php";
?>