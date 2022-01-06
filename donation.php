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
        <div class="col-xl-12 checkout-billing">
          <!-- Order Details Start -->
          <h4>Donation Details</h4>
          <h6>Address : Mosaboni No. 2, Mosaboni Main Road,
            Dist. : East Singhbhum, JH-832104 ,
            Web : www.shreejagannathdham.com l Email : info@shreejagannathdham.com ,
            Contact : 9386513681 / 6299002340 / 7209753005 / 9234878584

          </h6>

          <!-- Order Details End -->
        </div>
        <div class="col-xl-12">

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
              <div class="form-group mb-12">

                <div class="d-flex align-items-center">
                
                  <div class="d-flex align-items-center ms-4">
                    <input type="radio" id="patron" name="member" value="patron" onchange="show1();">
                      <label for="patron">PATRON</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                      <input type="radio" id="pious" name="member" value="pious" onchange="show2();">
                      <label for="pious">PIOUS</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                      <input type="radio" id="devotee" name="member" value="devotee" onchange="show3();">
                      <label for="devotee">DEVOTEE</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                    <input type="radio" id="family" name="member" value="family" onchange="show4();">
                      <label for="family">FAMILY</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                    <input type="radio" id="life" name="member" value="life"  onchange="show5();">
                      <label for="life">LIFE</label>
                  </div>



                </div>
              </div>
            </div>

            <div class="form-group col-xl-4">
              <label>Full Name <span class="text-danger">*</span></label>
              <input type="text" placeholder="Full Name" name="fname" class="form-control" value="" required="">
            </div>
            <div class="form-group col-xl-4">
              <label>Father’s Name/Spouse Name <span class="text-danger">*</span></label>
              <input type="text" placeholder="Father's Name" name="pname" class="form-control" value="" required="">
            </div>
            <div class="form-group col-xl-4">
              <label>Phone Number</label>
              <input type="text" placeholder="Phone Number" name="phone" class="form-control" value="">
            </div>
            <div class="form-group col-xl-4">
              <label>Email</label>
              <input type="text" placeholder="Email" name="email" class="form-control" value="">
            </div>
            <div class="form-group col-xl-4">
              <label>Nationality</label>
              <input type="text" placeholder="Nationality" name="nationality" class="form-control" value="">
            </div>

            <div class="form-group mb-5 col-xl-4">
              <!-- <h6>Marital Status (tick the appropriate)</h6> -->
              <label>Marital Status (tick the appropriate)</label>
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


            <div class="form-group col-xl-4 mb-0">
              <label>Permanent Address</label>
              <textarea name="p_address" rows="5" class="form-control" placeholder="Permanent Address"></textarea>
            </div>
            <div class="form-group col-xl-4 mb-0">
              <label>Residential Address</label>
              <textarea name="r_address" rows="5" class="form-control" placeholder="Residential Address"></textarea>
            </div>


            <div class="form-group col-xl-4 mb-0">
              <label>Office Address</label>
              <textarea name="ofc_address" rows="5" class="form-control" placeholder="Office Address"></textarea>
            </div>

            <div class="form-group col-xl-4">
              <label>Date of Birth</label>
              <input type="date" placeholder="Date of Birth" name="dob" class="form-control" value="">
            </div>
            <div class="form-group col-xl-4">
              <label>Date of Marriage</label>
              <input type="date" placeholder="Date of Marriage" name="marriage_date" class="form-control" value="">
            </div>


            <div class="form-group col-xl-4">
              <label>Rashi</label>
              <input type="text" placeholder="Rashi" name="rashi" class="form-control" value="">
            </div>
            <div class="form-group col-xl-4">
              <label>Gotra</label>
              <input type="text" placeholder="Gotra" name="gotra" class="form-control" value="">
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


            <br>

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
  

            <div class="form-group mb-5 col-xl-3">

              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <input type="radio" id="yes" name="sure" value="yes"
                    onclick="document.getElementById('ex_member').disabled = false;">
                  <label for="yes" class="mb-0">Yes</label>
                </div>

                <div class="d-flex align-items-center ms-4">
                  <input type="radio" id="no" name="sure" value="no"
                    onclick="document.getElementById('ex_member').disabled = true;">
                  <label for="no" class="mb-0">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-xl-4">
              <label>If yes, specify the name, address of organisation and your designation (if any)</label>
              <input type="text" placeholder="Specify Details" id="ex_member" name="cname" class="form-control" value="" disabled>
            </div>
            <div class="form-group col-xl-4" id="amount1">
              <label>Amount1</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" onchange="TextChange(this)">
            </div>
            <!-- <div class="form-group col-xl-4" style="display: none;" id="amount2">
              <label>Amount2</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" >
            </div>
            <div class="form-group col-xl-4" style="display: none;" id="amount3">
              <label>Amount3</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" >
            </div>
            <div class="form-group col-xl-4" style="display: none;" id="amount4">
              <label>Amount4</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" >
            </div>
            <div class="form-group col-xl-4" style="display: none;" id="amount5">
              <label>Amount5</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" min="1" max="3000" step="1" id="n" oninput="(validity.valid)||(value='');">
            </div> -->
            <hr>

            <div class="form-group col-xl-6">
              <button type="submit" class="sigma_btn-custom primary d-block w-100">Pay</button>
            </div>
            <div class="form-group col-xl-6">
              <button type="reset" class="sigma_btn-custom primary d-block w-100">Reset</button>
            </div>
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

<script>
function TextChange(tBox) 
  {
    var amt = document.getElementById('amount').value;
    if(amt>0 && amt<=3000)
    {
      alert("You've selected Lifetime Member Package. Please Enter Amount in range 0-3000. Otherwise Your package is changed");
      document.getElementById("life").setAttribute("checked", "checked"); 
      show5();
    }
    else if(amt>10000 && amt<=24999)
    {
      alert("You've selected Family Member Package. Please Enter Amount in range 10000-24999. Otherwise Your package is changed");
      document.getElementById("family").setAttribute("checked", "checked"); 
      show4();
    }
    else if(amt>=25000 && amt<=49999)
    {
      alert("You've selected Devotee Member Package. Please Enter Amount in range 25000-49999. Otherwise Your package is changed");
      document.getElementById("devotee").setAttribute("checked", "checked"); 
      show3();
    }
    else if(amt>=50000 && amt<=99999)
    {
      alert("You've selected Pious Member Package. Please Enter Amount in range 50000-99999. Otherwise Your package is changed");
      document.getElementById("pious").setAttribute("checked", "checked"); 
      show2();
    }
    else if(amt>100000)
    {
      alert("You've selected Patron Member Package. Please Enter Amount more than 100000 range. Otherwise Your package is changed");
      document.getElementById("patrons").setAttribute("checked", "checked"); 
      show1();
    }

  }

function show1()
{
  // var amt = document.getElementById('amount').value;
  document.getElementById('date-1').disabled = false;
  document.getElementById('date-2').disabled = false;
  document.getElementById('date-3').disabled = false;
  document.getElementById('date-4').disabled = false;
  document.getElementById('date-5').disabled = false;
  document.getElementById('date-6').disabled = false;
  document.getElementById('date-7').disabled = false;
}
function show2()
{
  document.getElementById('date-1').disabled = false;
  document.getElementById('date-2').disabled = false;
  document.getElementById('date-3').disabled = false;
  document.getElementById('date-4').disabled = false;
  document.getElementById('date-5').disabled = false;
  document.getElementById('date-6').disabled = true;
  document.getElementById('date-7').disabled = true;
 }
function show3()
{
  document.getElementById('date-1').disabled = false;
  document.getElementById('date-2').disabled = false;
  document.getElementById('date-3').disabled = false;
  document.getElementById('date-4').disabled = true;
  document.getElementById('date-5').disabled = true;
  document.getElementById('date-6').disabled = true;
  document.getElementById('date-7').disabled = true;
}
function show4()
{
  document.getElementById('date-1').disabled = false;
  document.getElementById('date-2').disabled = false;
  document.getElementById('date-3').disabled = true;
  document.getElementById('date-4').disabled = true;
  document.getElementById('date-5').disabled = true;
  document.getElementById('date-6').disabled = true;
  document.getElementById('date-7').disabled = true;
}
function show5()
{
  document.getElementById('date-1').disabled = false;
  document.getElementById('date-2').disabled = true;
  document.getElementById('date-3').disabled = true;
  document.getElementById('date-4').disabled = true;
  document.getElementById('date-5').disabled = true;
  document.getElementById('date-6').disabled = true;
  document.getElementById('date-7').disabled = true;
}


</script>