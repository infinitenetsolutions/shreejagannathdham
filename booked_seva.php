<?php
include "header.php";
?>


  <!-- partial:partia/__subheader.html -->
  <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="https://shreejagannathdham.com/temp/shreejagannatha/assets/img/subheader.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">




<div class="section">
    <div class="container">

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Address</th>
            <th>Booked Seva</th>
          </tr>
        </thead>
 
        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Address</th>
            <th>Booked Seva</th>
          </tr>
        </tfoot>
 
        <tbody>
        <?php 
              $cnt = 1;
             $select = "SELECT * FROM `jag_booked_seva`";
             $result = mysqli_query($connection, $select);
             while($row12 = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <td class=""><?php echo $cnt; ?></td>
            <td class=""><?php echo $row12['name']; ?></td>
            <td class=""><?php echo $row12['email']; ?></td>
            <td class=""><?php echo $row12['city']; ?></td>
            <td class=""><?php echo $row12['address']; ?></td>
            <td class=""><?php echo $row12['seva']; ?></td>
          </tr>
             <?php } ?>
        </tbody>
    </table>
      
    </div>
  </div>  

<?php
include "footer.php";
?>

<script>
$(document).ready(function() {
    $('#example').dataTable();
} );
</script>