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

  <!-- Checkout Start -->
  <div class="section">
    <div class="container">

      <form method="post">
        <div class="row">
        <div class="col-xl-4 checkout-billing">
            <!-- Order Details Start -->
            <h4>Donation Details</h4>
            <h6>Address : Mosaboni No. 2, Mosaboni Main Road,
            Dist. : East Singhbhum, JH-832104 ,
            Web : www.shreejagannathdham.com l Email : info@shreejagannathdham.com , 
            Contact : 9386513681 / 6299002340 / 7209753005 / 9234878584

            </h6>
                  
            <!-- Order Details End -->
          </div>
          <div class="col-xl-8">

            <!-- Login -->
           
            <div class="sigma_notice-content">
              <div class="row">
              



                <div class="col-xl-6 form-group">
                  <label>Email Address</label>
                  <input type="text" class="form-control" name="login-email" placeholder="Email Address" value="">
                </div>
                <div class="col-xl-6 form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="login-pass" placeholder="Password" value="">
                </div>
                <div class="col-12 form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="sigma_btn-custom" name="button">Login</button>
                </div>
              </div>
            </div>
            <!-- Coupon Code -->
           
            <div class="sigma_notice-content">
              <p>If you have a coupon code, apply it below</p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Coupon Code">
                <div class="input-group-append">
                  <button class="sigma_btn-custom shadow-none btn-sm" type="button">Apply Code</button>
                </div>
              </div>
            </div>

            <!-- Buyer Info Start -->
            <h4>Donation Form</h4>
            <div class="row">
            <div class="col-12">
            <div class="form-group mb-5">
              
              <div class="d-flex align-items-center">
                <!-- <div class="d-flex align-items-center">
                 <input type="radio" id="radio" name="member" value="PATRON">
                 <label for="radio" class="mb-0">PATRON</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio2" name="member" value="PIOUS">
                 <label for="radio2" class="mb-0">PIOUS</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio3" name="member" value="1">
                 <label for="radio2" class="mb-0">1</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio3" name="member" value="DEVOTEE">
                 <label for="radio2" class="mb-0">DEVOTEE</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio4" name="member" value="FAMILY">
                 <label for="radio2" class="mb-0">FAMILY</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="radio5" name="member" value="LIFE">
                 <label for="radio2" class="mb-0">LIFE</label>
               </div> -->

              <div class="d-flex align-items-center ms-4">
                <input type="radio" id="patron" name="member" value="patron" onclick="document.getElementById('date-1').disabled = false;document.getElementById('date-2').disabled = false;document.getElementById('date-3').disabled = false;document.getElementById('date-4').disabled = false;document.getElementById('date-5').disabled = false;document.getElementById('date-6').disabled = false;document.getElementById('date-7').disabled = false;">
                <label for="patron">PATRON</label>
              </div>
              <div class="d-flex align-items-center ms-4">
              <input type="radio" id="pious" name="member" value="pious" onclick="document.getElementById('date-1').disabled = false;document.getElementById('date-2').disabled = false;document.getElementById('date-3').disabled = false;document.getElementById('date-4').disabled = false;document.getElementById('date-5').disabled = false;document.getElementById('date-6').disabled = true;document.getElementById('date-7').disabled = true;">
                <label for="pious">PIOUS</label>
              </div>
              <div class="d-flex align-items-center ms-4">
              <input type="radio" id="devotee" name="member" value="devotee"  onclick="document.getElementById('date-1').disabled = false;document.getElementById('date-2').disabled = false;document.getElementById('date-3').disabled = false;document.getElementById('date-4').disabled = true;document.getElementById('date-5').disabled = true;document.getElementById('date-6').disabled = true;document.getElementById('date-7').disabled = true;">
                <label for="devotee">DEVOTEE</label>
              </div>
            <div class="d-flex align-items-center ms-4">
              <input type="radio" id="family" name="member" value="family"  onclick="document.getElementById('date-1').disabled = false;document.getElementById('date-2').disabled = false;document.getElementById('date-3').disabled = true;document.getElementById('date-4').disabled = true;document.getElementById('date-5').disabled = true;document.getElementById('date-6').disabled = true;document.getElementById('date-7').disabled = true;">
                <label for="family">FAMILY</label>
            </div>
            <div class="d-flex align-items-center ms-4">
              <input type="radio" id="life" name="member" value="life" onclick="document.getElementById('date-1').disabled = false;document.getElementById('date-2').disabled = true;document.getElementById('date-3').disabled = true;document.getElementById('date-4').disabled = true;document.getElementById('date-5').disabled = true;document.getElementById('date-6').disabled = true;document.getElementById('date-7').disabled = true;">
                <label for="life">LIFE</label>
            </div>



              </div>
            </div>
          </div>

              <div class="form-group col-xl-6">
                <label>Full Name <span class="text-danger">*</span></label>
                <input type="text" placeholder="Full Name" name="fname" class="form-control" value="" required="">
              </div>
              <div class="form-group col-xl-6">
                <label>Father’s Name/Spouse Name <span class="text-danger">*</span></label>
                <input type="text" placeholder="Father's Name" name="pname" class="form-control" value="" required="">
              </div>
              <div class="form-group col-xl-6 mb-0">
                <label>Permanent Address</label>
                <textarea name="p_address" rows="5" class="form-control" placeholder="Permanent Address"></textarea>
              </div>
              <div class="form-group col-xl-6 mb-0">
                <label>Residential Address</label>
                <textarea name="r_address" rows="5" class="form-control" placeholder="Residential Address"></textarea>
              </div>

              <div class="form-group col-xl-6">
                <label>Phone Number</label>
                <input type="text" placeholder="Phone Number" name="phone" class="form-control" value="">
              </div>
              <div class="form-group col-xl-6">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" class="form-control" value="">
              </div>
               <div class="form-group col-xl-12 mb-0">
                <label>Office Address</label>
                <textarea name="ofc_address" rows="5" class="form-control" placeholder="Office Address"></textarea>
              </div>

              <div class="form-group col-xl-6">
                <label>Date of Birth</label>
                <input type="text" placeholder="Date of Birth" name="dob" class="form-control" value="">
              </div>
              <div class="form-group col-xl-6">
                <label>Date of Marriage</label>
                <input type="text" placeholder="Date of Marriage" name="marriage_date" class="form-control" value="">
              </div>


              <div class="form-group col-xl-4">
                <label>Rashi</label>
                <input type="text" placeholder="Rashi" name="rashi" class="form-control" value="">
              </div>
              <div class="form-group col-xl-4">
                <label>Gotra</label>
                <input type="text" placeholder="Gotra" name="gotra" class="form-control" value="">
              </div>
              <div class="form-group col-xl-4">
                <label>Nationality</label>
                <input type="text" placeholder="Nationality" name="nationality" class="form-control" value="">
              </div>



<h6>Puja/Prasad options proposed dates other then point (7) and (8)</h6>
              

              <div class="form-group col-xl-4">
                <label>Option - 1 </label>
                <input type="date" name="date-1" id="date-1" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 2 </label>
                <input type="date" name="date-2" id="date-2" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 3 </label>
                <input type="date" name="date-3" id="date-3" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 4 </label>
                <input type="date" name="date-4" id="date-4" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 5 </label>
                <input type="date" name="date-5" id="date-5" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 6 </label>
                <input type="date" name="date-6" id="date-6" class="form-control" value="" disabled>
              </div>
              <div class="form-group col-xl-4">
              <label>Option - 7 </label>
                <input type="date" name="date-7" id="date-7" class="form-control" value="" disabled>
              </div>

              <h6>Marital Status (tick the appropriate)</h6>

               <div class="form-group mb-5 col-xl-12">
              
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                 <input type="radio" id="male" name="marital" value="unmarried">
                 <label for="male" class="mb-0">Unmarried</label>
               </div>

               <div class="d-flex align-items-center ms-4">
                 <input type="radio" id="female" name="marital" value="married">
                 <label for="female" class="mb-0">Married</label>
               </div>                                            

              </div>
            </div>
      


             <div class="form-group col-xl-4">
                <label>Importance of Proposed Dates</label>
                <input type="text" placeholder="Proposed Date" name="cname" class="form-control" value="">
              </div>

                <div class="form-group col-xl-4">
                <label>If Married (Name of Spouse)</label>
                <input type="text" placeholder="Spouse Name" name="cname" class="form-control" value="">
              </div>

              <div class="form-group col-xl-4">
                <label>No. of Children</label>
                <input type="text" placeholder="No. of Children" name="cname" class="form-control" value="">
              </div>

              
              <h6>Are you a member of any social/ cultural/ literary/ political organisation</h6>

<div class="form-group mb-5 col-xl-3">

<div class="d-flex align-items-center">
 <div class="d-flex align-items-center">
  <input type="radio" id="yes" name="sure" value="yes"  onclick="document.getElementById('ex_member').disabled = false;">
  <label for="yes" class="mb-0">Yes</label>
</div>

<div class="d-flex align-items-center ms-4">
  <input type="radio" id="no" name="sure" value="no" onclick="document.getElementById('ex_member').disabled = true;">
  <label for="no" class="mb-0">No</label>
</div>                                            

</div>
</div>

 <div class="form-group col-xl-9">
    <label>If yes, specify the name, address of organisation and your designation (if any)</label>
    <input type="text" placeholder="Specify Details" id="ex_member" name="cname" class="form-control" value="" disabled>
</div>                                            
                      <hr>

       <button type="submit" class="sigma_btn-custom primary d-block w-100">Place Order</button>
       </div>
            <!-- Buyer Info End -->

          </div>

         

        </div>
      </form>

    </div>
  </div>
  <!-- Checkout End -->
<?php
include "footer.php";
?>