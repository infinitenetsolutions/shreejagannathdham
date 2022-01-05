<?php
include "header.php";
?>

  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Buy Now</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Buy Now</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <!-- Form Start -->
  <div class="section">
    <div class="container">
      <div class="section-title text-center">
        <p class="subtitle">DONATE TO HELP</p>
        <h4 class="title">Fill Your Details</h4>
      </div>
      
      <form method="post">
        <div class="form-row sigma_donation-form">
                  
          <div class="col-12">
            <div class="form-group">
              <h5>Donator Details</h5>
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" placeholder="Full Name" name="name">
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="email" placeholder="Email Address" name="Email" class="form-control">
                </div>
<h5></h5>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="number" placeholder="Mobile" name="Email" class="form-control">
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="text" placeholder="Enter City" name="Email" class="form-control">
                </div>
                <h5></h5>
            <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="number" placeholder="Enter Pincode" name="Email" class="form-control">
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                  <input type="text" placeholder="Enter Amount" name="Email" class="form-control">
                </div>
<h5></h5>
<div class="col-lg-6 mt-3 mt-lg-0">
  <h5>Seva Start From</h5>
                  <input type="date" placeholder="Enter Amount" name="Email" class="form-control">
                </div>


           <div class="col-lg-6 mt-3 mt-lg-0">
             <h5>Seva Start To</h5>
                  <input type="date" placeholder="Enter Amount" name="Email" class="form-control">
                </div>

          </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center">
            <button type="submit" class="sigma_btn-custom" name="button"> Pay Now </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Form End -->

<?php 

include "footer.php";
?>