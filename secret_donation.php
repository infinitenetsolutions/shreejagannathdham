<style>
.sigma_box{
background-color: #ff4906!important;
}
</style>

<?php
include "header.php";
include 'admin/connection.inc.php';


if(isset($_POST['submit1']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pan = $_POST['pan'];
$address = $_POST['address'];
$amount1 = $_POST['amount'];
$amount = number_format((float)$amount1, 2, '.', '');

$_SESSION["name"] = $name ;
//$_SESSION["promoted_class"] = $promoted_class;
// $_SESSION["course_session"] = $course_session;
// $_SESSION["name"] = $name;
$_SESSION["phone_no"] = $phone;
$_SESSION["email"] = $email;
$_SESSION["amount"] = $amount;

$_SESSION["surl"] = "https://shreejagannathdham.com/response.php";
$_SESSION["surl"] = "https://shreejagannathdham.com/response.php";    

echo $query = "INSERT INTO `jag_secret`(`name`, `email`, `phone`, `pan`, `address`) 
                            VALUES('$name', '$email', '$phone', '$pan', '$address')";
$result1 = mysqli_query($connection , $query);
if($result1){    
   echo '<script> window.location.replace("easebuzz.php") </script>';
}
} 
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/Secret Donation.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  
  <!-- Contact form Start -->
  <div class="section section-padding">
    <div class="container" style="border: 4px solid red;">
	<div class="row" style="margin: 40px 5px;">
    <div class="col-6">
	    <img src="assets/img/jagannath3.jpg" style="border-radius:15px;border-style: double;height: 520px">
    </div>
    <div class="col-6">    
      <form class="sigma_box box-lg m-0 mf_form_validate ajax_submit" action="" method="post">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <i class="far fa-user"></i>
              <input type="text" placeholder="Full Name" class="form-control dark" name="name" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <i class="far fa-envelope"></i>
              <input type="" placeholder="Email Address" class="form-control dark" name="email">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <i class="far fa-phone"></i>
              <input type="number" placeholder="Phone" class="form-control dark" name="phone" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <i class="far fa-inr"></i>
              <input type="number" placeholder="Amount" class="form-control dark" name="amount" required>
            </div>
          </div>
        </div>
        <div class="form-group">
        <input type="number" placeholder="Pan No" class="form-control dark" name="pan">
        </div>
        <div class="form-group">
          <textarea name="address" placeholder="Enter Address" cols="45" rows="5" class="form-control dark"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="sigma_btn-custom" name="submit1">Pay Now</button>
          <div class="server_response w-100">
          </div>
        </div>
      </form>
      </div>
      </div>

    </div>
  </div>
  <!-- Contact form End -->

  
<?php 
include "footer.php";
?>