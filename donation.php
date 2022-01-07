<?php
include "header.php";

if (isset($_POST['button'])) {
  $package = $_POST['package'];
  $name = $_POST['name'];
  $father_name = $_POST['father_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $nationality = $_POST['nationality'];
  $marital_status = $_POST['marital_status'];
  $per_address = $_POST['per_address'];
  $res_address = $_POST['res_address'];
  $ofc_address = $_POST['ofc_address'];
  $dob = $_POST['dob'];
  $marriage_date = $_POST['marriage_date'];
  $rashi = $_POST['rashi'];
  $gotra = $_POST['gotra'];
  $pdate1 = $_POST['pdate1'];
  $pdate2 = $_POST['pdate2'];
  $pdate3 = $_POST['pdate3'];
  $pdate4 = $_POST['pdate4'];
  $pdate5 = $_POST['pdate5'];
  $pdate6 = $_POST['pdate6'];
  $pdate7 = $_POST['pdate7'];
  $pro_date = $_POST['pro_date'];
  $spouse = $_POST['spouse'];
  $child_no = $_POST['child_no'];
  $member = $_POST['member'];
  $member_detail = $_POST['member_detail'];
  $amount = $_POST['amount'];
// print_r($_POST);exit();
      echo $sql = "INSERT INTO `jag_nirman_donation`(`package`, `name`, `father_name`, `phone`, `email`, `nationality`, `marital_status`, `per_address`, `res_address`, `ofc_address`, `dob`, `marriage_date`, `rashi`, `gotra`, `pdate1`, `pdate2`, `pdate3`, `pdate4`, `pdate5`, `pdate6`, `pdate7`, `pro_date`, `spouse`, `child_no`, `member`, `member_detail`, `amount`) 
                                     VALUES ('$package','$name','$father_name','$phone','$email','$nationality','$marital_status','$per_address','$res_address','$ofc_address','$dob','$marriage_date','$rashi','$gotra','$pdate1','$pdate2','$pdate3','$pdate4','$pdate5','$pdate6','$pdate7','$pro_date','$spouse','$child_no','$member','$member_detail','$amount')";

      $current_id = mysqli_query($connection, $sql); 
      echo '<script> window.location.replace("easebuzz.php") </script>';
      //if ($current_id) {

       
        /*echo "<script>
              alert('Details submitted successfully');
              window.location.replace('donation.php');
              </script>";
               }
               else {
          echo "<script>alert('Your data is not submitted. Please try again!!');</script>";
      }*/
    }

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
                    <input type="radio" id="patron" name="package" value="patron" onchange="show1();">
                      <label for="patron">PATRON</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                      <input type="radio" id="pious" name="package" value="pious" onchange="show2();">
                      <label for="pious">PIOUS</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                      <input type="radio" id="devotee" name="package" value="devotee" onchange="show3();">
                      <label for="devotee">DEVOTEE</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                    <input type="radio" id="family" name="package" value="family" onchange="show4();">
                      <label for="family">FAMILY</label>
                  </div>
                  <div class="d-flex align-items-center ms-4">
                    <input type="radio" id="life" name="package" value="life"  onchange="show5();">
                      <label for="life">LIFE</label>
                  </div>



                </div>
              </div>
            </div>

            <div class="form-group col-xl-4">
              <label>Full Name <span class="text-danger">*</span></label>
              <input type="text" placeholder="Full Name" name="name" class="form-control" value="" required="">
            </div>
            <div class="form-group col-xl-4">
              <label>Father’s Name/Spouse Name <span class="text-danger">*</span></label>
              <input type="text" placeholder="Father's Name" name="father_name" class="form-control" value="" required="">
            </div>
            <div class="form-group col-xl-4">
              <label>Phone Number</label>
              <input type="number" placeholder="Phone Number" name="phone" class="form-control" value=""  min="1" max="9999999999" step="1" oninput="(validity.valid)||(value='');">
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
                  <input type="radio" id="male" name="marital_status" value="unmarried">
                  <label for="male" class="mb-0">Unmarried</label>
                </div>

                <div class="d-flex align-items-center ms-4">
                  <input type="radio" id="female" name="marital_status" value="married">
                  <label for="female" class="mb-0">Married</label>
                </div>

              </div>
            </div>


            <div class="form-group col-xl-4 mb-0">
              <label>Permanent Address</label>
              <textarea name="per_address" rows="5" class="form-control" placeholder="Permanent Address"></textarea>
            </div>
            <div class="form-group col-xl-4 mb-0">
              <label>Residential Address</label>
              <textarea name="res_address" rows="5" class="form-control" placeholder="Residential Address"></textarea>
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
              <input type="date" name="pdate1" id="date-1" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 2 </label>
              <input type="date" name="pdate2" id="date-2" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 3 </label>
              <input type="date" name="pdate3" id="date-3" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 4 </label>
              <input type="date" name="pdate4" id="date-4" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 5 </label>
              <input type="date" name="pdate5" id="date-5" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 6 </label>
              <input type="date" name="pdate6" id="date-6" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4">
              <label>Option - 7 </label>
              <input type="date" name="pdate7" id="date-7" class="form-control" value="" readonly>
            </div>


            <br>

            <div class="form-group col-xl-4">
              <label>Importance of Proposed Dates</label>
              <input type="date" placeholder="Proposed Date" name="pro_date" class="form-control" value="">
            </div>

            <div class="form-group col-xl-4">
              <label>If Married (Name of Spouse)</label>
              <input type="text" placeholder="Spouse Name" name="spouse" class="form-control" value="">
            </div>

            <div class="form-group col-xl-4">
              <label>No. of Children</label>
              <input type="number" placeholder="No. of Children" name="child_no" class="form-control" value="">
            </div>
  

            <div class="form-group mb-5 col-xl-3">

              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <input type="radio" id="yes" name="member" value="yes" onclick="document.getElementById('ex_member').readOnly = false;">
                  <label for="yes" class="mb-0">Yes</label>
                </div>

                <div class="d-flex align-items-center ms-4">
                  <input type="radio" id="no" name="member" value="no" onclick="document.getElementById('ex_member').readOnly = true;">
                  <label for="no" class="mb-0">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-xl-4">
              <label>If yes, specify the name, address of organisation and your designation (if any)</label>
              <input type="text" placeholder="Specify Details" id="ex_member" name="member_detail" class="form-control" value="" readonly>
            </div>
            <div class="form-group col-xl-4" id="amount1">
              <label>Amount1</label>
              <input type="number" placeholder="Enter Amount" id="amount" name="amount" class="form-control" value="" onchange="TextChange(this)">
            </div>
            
            <hr>

            <div class="form-group col-xl-6">
              <input type="submit" class="sigma_btn-custom primary d-block w-100" name="button" value="Pay">
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
  document.getElementById("date-1").readOnly = false;
  document.getElementById('date-1').readOnly = false;
  document.getElementById('date-2').readOnly = false;
  document.getElementById('date-3').readOnly = false;
  document.getElementById('date-4').readOnly = false;
  document.getElementById('date-5').readOnly = false;
  document.getElementById('date-6').readOnly = false;
  document.getElementById('date-7').readOnly = false;
}
function show2()
{
  document.getElementById('date-1').readOnly = false;
  document.getElementById('date-2').readOnly = false;
  document.getElementById('date-3').readOnly = false;
  document.getElementById('date-4').readOnly = false;
  document.getElementById('date-5').readOnly = false;
  document.getElementById('date-6').readOnly = true;
  document.getElementById('date-7').readOnly = true;
 }
function show3()
{
  document.getElementById('date-1').readOnly = false;
  document.getElementById('date-2').readOnly = false;
  document.getElementById('date-3').readOnly = false;
  document.getElementById('date-4').readOnly = true;
  document.getElementById('date-5').readOnly = true;
  document.getElementById('date-6').readOnly = true;
  document.getElementById('date-7').readOnly = true;
}
function show4()
{
  document.getElementById('date-1').readOnly = false;
  document.getElementById('date-2').readOnly = false;
  document.getElementById('date-3').readOnly = true;
  document.getElementById('date-4').readOnly = true;
  document.getElementById('date-5').readOnly = true;
  document.getElementById('date-6').readOnly = true;
  document.getElementById('date-7').readOnly = true;
}
function show5()
{
  document.getElementById('date-1').readOnly = false;
  document.getElementById('date-2').readOnly = true;
  document.getElementById('date-3').readOnly = true;
  document.getElementById('date-4').readOnly = true;
  document.getElementById('date-5').readOnly = true;
  document.getElementById('date-6').readOnly = true;
  document.getElementById('date-7').readOnlys = true;
}


</script>