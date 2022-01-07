<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_nirman_donation`";
  $result = mysqli_query($connection, $select);

$year = date('Y', strtotime($date));
$month = date('F', strtotime($date));
echo $month.' '.$year;

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
  
  <select class="form-control w-auto" style="border: 2px solid #ff4906;color:#ff4906;font-weight:800">
    <option>Select Month & Year</option>
    <?php while($row = mysqli_fetch_assoc($result)) {
       $date = $row['pdate1'];
       
       ?>
    <option>oct 2021</option>
    <option>nov 2021</option>
    <option>dec 2021</option>
  </select>
  <br/><br/>
<!--Table-->
<table class="table table-hover table-fixed">

  <!--Table head-->
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Father's Name</th>
      <th>Residential Address</th>
      <th>Proposed Day</th>
      <th>Sevarathi</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>

    <tr>
      <th scope="row">4</th>
      <td>Jerry</td>
      <td>Horwitz</td>
      <td>Italy</td>
      <td>Bari</td>
      <td>Editor-in-chief</td>
    </tr>
    
  </tbody>
  <!--Table body-->

</table>
<!--Table-->

    </div>
  </section>


  <?php
include "footer.php";
  ?>