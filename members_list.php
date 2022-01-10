<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT DISTINCT YEAR(pdate1) AS 'Year', MONTH(pdate1) AS 'Month' FROM jag_nirman_donation";
  $result = mysqli_query($connection, $select);

?>
  <!-- partial:partia/__subheader.html -->
  <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/FAQs.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

<section class="section">
    <div class="container table-responsive">
  
  <select class="form-control" style="border: 2px solid #ff4906;color:#ff4906;font-weight:800" onchange="getData(this.value)">
    <option>Select Month & Year</option>
    <?php 
      $mon='';
      while($row = mysqli_fetch_assoc($result)) {
      $mon = $row['Month'].' '.$row['Year'];
      ?>
    <option value = "<?php echo $mon; ?>"><?php echo date("F", mktime(null, null, null, $row['Month'])).' '.$row['Year'];?></option>
      <?php } ?>
    <!-- <option>nov 2021</option>s
    <option>dec 2021</option> -->
  </select>
  <br/><br/>
<!--Table-->
<div id="tbl_seva">
<table class="table table-hover table-fixed">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Sevarathi Name</th>
      <th>Father's Name</th>
      <th>Residential Address</th>
      <th>Proposed Day</th>
    </tr>
  </thead>
  <!--Table head-->
  
  </table>
  </div>
<!--Table-->

    </div>
  </section>


  <?php
include "footer.php";
  ?>

   <script>
         function getData(datee) {
          //make the ajax call
           $.ajax({
             url: './getData.php',
             type: 'POST',
             data: {datee : datee},
             success: function(result) {
             $("#tbl_seva").html(result);

             }
           });
          }
         </script>