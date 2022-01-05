<style>
.sigma_box{
background-color: #ff4906!important;
}
</style>

<?php
include "header.php";
include 'admin/connection.inc.php';


  $select = "SELECT * FROM `jag_site_info` WHERE 1";
  $result = mysqli_query($connection, $select);
  $row = mysqli_fetch_assoc($result);
  
  		if (isset($_POST['button'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
     
                $sql = "INSERT INTO `jag_contact`(`con_name`,`con_mobile`,`con_email`,`con_query`) VALUES ('$name','$phone','$email','$message')";

                $current_id = mysqli_query($connection, $sql); 
                if ($current_id) {

                    echo "<script>
                        alert('Your Details are sent to us. We\'ll get back to you soon!!!');
                        window.location.replace('contact.php');
                        </script>";
                         }
                         else {
                    echo "<script>alert('Your data is not submitted. Please try again!!');</script>";
                }
            } 
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/banner/Contact us.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- Map Start -->
  <div class="sigma_map">
    <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin"      allowfullscreen=""></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.6733092350655!2d86.45870591495857!3d22.51643718521167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1df6e188d6878d%3A0xfe933e7ec4598d25!2sShree%20Shree%20Jagannath%20Temple%2CNo.2%20Area%2CMosabani!5e0!3m2!1sen!2sin!4v1638184774034!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>  
  <!-- Map End -->

  <!-- Contact form Start -->
  <div class="section mt-negative pt-0">
    <div class="container">

      <form class="sigma_box box-lg m-0 mf_form_validate ajax_submit" action="" method="post">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-user"></i>
              <input type="text" placeholder="Full Name" class="form-control dark" name="name">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-envelope"></i>
              <input type="email" placeholder="Email Address" class="form-control dark" name="email">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-phone"></i>
              <input type="number" placeholder="Phone" class="form-control dark" name="phone">
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" placeholder="Enter Message" cols="45" rows="5" class="form-control dark"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="sigma_btn-custom" name="button">Submit Now</button>
          <div class="server_response w-100">
          </div>
        </div>
      </form>

    </div>
  </div>
  <!-- Contact form End -->

  <!-- Icons Start -->
  <div class="section section-padding pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7" style="height: 317px;">
            <i class="flaticon-email"></i>
            <div class="sigma_icon-block-content">
              <span>Send Email <i class="far fa-arrow-right"></i> </span>
              <h5> Email Address</h5>
              <p><?php echo $row['email']; ?></p>
             </div>
            <div class="icon-wrapper">
              <i class="flaticon-email"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7" style="height: 317px;">
            <i class="flaticon-call"></i>
            <div class="sigma_icon-block-content">
              <span>Call Us Now <i class="far fa-arrow-right"></i> </span>
              <h5> Phone Number </h5>
              <p><?php echo $row['phone1']; ?> </p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-call"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7" style="height: 317px;">
            <i class="flaticon-location"></i>
            <div class="sigma_icon-block-content">
              <span>Find Us Here <i class="far fa-arrow-right"></i> </span>
              <h5> Location </h5>
              <p><?php echo $row['address']; ?></p>
             </div>
            <div class="icon-wrapper">
              <i class="flaticon-location"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->
<?php 
include "footer.php";

?>