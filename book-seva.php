<?php
include "header.php";
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_seva_booking` WHERE 1";
  $result = mysqli_query($connection, $select);


  /*modal submission start*/
  
 
  ?>
<link rel="stylesheet" href="assets/css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.sigma_btn-custom
{
background-color:#e44300!important;
float: right;
padding: 5px 22px !important;
margin-top: -60px;
}
.orange
{
background-color:#fe1a00;
border-color:#fe1a00;
color:white;
}
.products
{
    border: 4px solid red;
    padding: 15px;
    border-style: double;
    margin: 100px auto;
}
</style>

<!-- partial:partia/__subheader.html -->
<div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="assets/img/Book Seva.jpg" style="width:100%;">
      </div>
    </div>
  </div>
<!-- partial -->


<!-- new section starts -->
  <div class="products products-table container container">
    <div class="row">
    
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class=" col-md-6">
      <div class="product">
        <div class="product-img">
         <img <?php echo ' src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"' ?> alt="portfolio" />
        </div>
        <div class="product-content">
          <h3><?php echo $row['name']; ?>
            <small></small>
          </h3>
          <p class="product-text price">Rs <?php echo $row['amount']; ?>/-</p>
          <!--<p class="product-text genre">DVD Rental</p>-->
          <button type="button" data-toggle="modal" data-target="#myModal" data-seva="<?php echo $row['name']; ?>" data-amount="<?php echo $row['amount']; ?>" class="sigma_btn-custom addAttr">Book Seva</button>
       </div>
      </div>
    </div>
    
    <?php } ?>
   
    </div>
    </div>
<!-- new section ends -->

<!--Modal form starts -->
<div class="container">
 
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" aria-describedby="emailHelp" style="color: #db4242;font-size: 30px;font-weight: 700;">Book Your Seva Here!!</h4>
         <br><p class="form-text text-muted">Your information is safe with us.</p>
        </div>
        <form>
        <div class="modal-body" style="padding:20px 50px;">
               	<div class="row">
            		<div class="col-6">
                        <div class="form-group">
                          <label for="name">Full Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Full Name">
                        </div>
                    </div>
                     
                    <div class="col-6">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter Email" >
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="form-group">
                          <label for="mobile">Mobile</label>
                          <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile">
                        </div>
                 	</div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="city">City</label>
                          <input type="city" class="form-control" id="city" placeholder="Enter City">
                        </div>
                 	</div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="address">Postal Address</label>
                          <textarea class="form-control" id="address" placeholder="Enter Addres"></textarea>
                        </div>
                 	</div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="seva">Seva</label>
                          <input type="text" class="form-control" id="seva" name="seva" placeholder="Seva" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="pin">Pincode</label>
                          <input type="text" class="form-control" id="pin" placeholder="Enter Pincode">
                        </div>
                    </div>
                     
                    <div class="col-6">
                        <div class="form-group">
                          <label for="amount">Amount</label>
                          <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" readonly>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label for="name">Select Seva From</label>
                          <input type="date" class="form-control" id="start" >
                        </div>
                    </div>
                     
                    <div class="col-6">
                        <div class="form-group">
                          <label for="email">Select Seva To</label>
                          <input type="date" class="form-control" id="end" onChange="test()">
                        </div>
                    </div>
                    <div id="new"></div>
             </div>
         
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center" style="padding: 5px 15px">
          <button type="submit" class="btn orange">Submit</button>
        </div>
      </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!--Modal form ends-->


<?php
include "footer.php";
?>
<!-- Previous date disabled code start -->
<script>
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#start').attr('min', minDate);
    $('#end').attr('min', minDate);
});
</script>
<!-- Previous date disabled code end -->

<!-- show data on modal code start -->
<script>
    $('.addAttr').click(function() {
    var seva = $(this).data('seva');  
    var amount = $(this).data('amount');     
   
    $('#seva').val(seva);  
    $('#amount').val(amount);  
    } );
 </script>
 <!-- show data on modal code end -->

 <!-- calculate date difference code start -->
 <script>
function test(){
  var v = document.getElementById('amount').value;
  var dd1 = document.getElementById('start').value;
  if(!Date.parse(dd1))
 {
    alert('Please First Select the Seva From Date!!');
    $('#end').val(''); 
 }
 
 else
 { var dd2 = document.getElementById('end').value;
  var date1 = new Date(dd1);
  var date2 = new Date(dd2);
  var diffTime = Math.abs(date2 - date1);
  var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
  var res = v*(diffDays+1);
  $('#amount').val(res); 
 }
// document.getElementById('new').value(diffDays);
//alert(diffDays);
//  alert(diffDays + " days");
}

</script>
<!-- calculate date difference code end -->
