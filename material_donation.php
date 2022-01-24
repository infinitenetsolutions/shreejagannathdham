<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
  .section.section-padding {
    padding: 1px 0 100px !important;
}

#contact {
  background-color: orange;
  display: flex;
  justify-content: center;
  align-items: center;
}

.contact-box {
  width: clamp(100px, 90%, 1000px);
  margin: 80px 50px;
  display: flex;
  flex-wrap: wrap;
}

.contact-links, .contact-form-wrapper {
  width: 50%;
  padding: 8% 5% 10% 5%;
}


.contact-links {
  /*background-image: url('https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg');*/
 background-image: url('assets/img/mandir.jpg');
  background-size: 100% 100%;
}

.contact-form-wrapper {
  background-color: #ffffff8f;
  border-radius: 0 10px 10px 0;
}

@media only screen and (max-width: 800px) {
  .contact-links, .contact-form-wrapper {
    width: 100%;
  }
  
  .contact-links {
    border-radius: 10px 10px 0 0;
  }
  
  .contact-form-wrapper {
    border-radius: 0 0 10px 10px;
  }
}

@media only screen and (max-width: 400px) {
  .contact-box {
    width: 95%;
    margin: 8% 5%;
  }
}



@media only screen and (max-width: 800px) {
  h2 {
    font-size: clamp(40px, 10vw, 60px);
  }
}

@media only screen and (max-width: 400px) {
  h2 {
    font-size: clamp(30px, 12vw, 60px);
  }
  
 img {
    width: 38px;
    height: 38px;
  }
}

</style>

<?php
include "header.php";
include 'admin/connection.inc.php';


  if(isset($_POST['submit']))
  {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $type = $_POST['type'];      
      $material = $_POST['material'];      
      $qty = $_POST['quantity'];      
      // $amount = $_POST['amount'];
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

$query = "INSERT INTO `jag_nirman`(`name`, `phone`, `address`, `email`, `donation_type`, `material`, `qty`, `amount`) 
							VALUES ('$name','$phone','$address','$email','$type','material','$qty','$amount')";
                            //var_dump($query); exit();
$result1 = mysqli_query($connection , $query);
if($result1){    
   echo '<script> window.location.replace("easebuzz1.php") </script>';
}
} 
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/Donation for Nirman.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  
  <!-- Contact form Start -->
  <div class="section section-padding">
  <section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <!-- <h1>MATERIAL DONATION FOR MANDIR</h1> -->
    </div>
    <div class="contact-form-wrapper">
     <h5>Donation For Mandir Nirman</h5>
       <form action="" method="POST">
    
    <div class="row">
    
    <div class="col-md-6">
    <div class="form-group">
      <!--<label for="name">Name:</label>-->
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" style="height: 40px!important;">
    </div>
    </div>
    
    <div class="col-md-6">
    <div class="form-group">
      <!--<label for="email">Email:</label>-->
      <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone" style="height: 40px!important;">
    </div>
    </div>
        
   
    <div class="form-group">
      <!--<label for="address">Address:</label>-->
      <!--<input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" style="height: 40px!important;">-->
      <textarea class="form-control" id="address" placeholder="Enter Address" name="address"></textarea>
    </div>
   
    
    <div class="col-md-12">
    <div class="form-group">
     <!-- <label for="pwd">Phone:</label>-->
     <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="height: 40px!important;">
    </div>
    </div>
    
    <div class="col-md-12">
    <div class="form-group">
       <select class="form-control" id="type" name="type" style="height: 40px!important;" onchange='checkvalue(this.value)'>
        <option value="#" selected disabled>Select Donation Type</option>
        <option value="amount">Amount</option>
        <option value="material">Material</option>
       </select>
     </div>
   </div>
   
   <div class="col-md-12" style="display:none;" id="amt">
    <div class="form-group">
     	<input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount" style="height: 40px!important;">
    </div>
    </div>
    
     <div class="col-md-12" style="display:none;" id="mat">
    	
     	<div class="col-md-12">
        	<div class="form-group">
              <select class="form-control" id="material" name="material" style="height: 40px!important;" onchange='checkmaterial(this.value)'>
              <option value="#" selected disabled>Select Material</option>
              <option value="bricks">Bricks</option>
              <option value="rods">Rods</option>
              <option value="cement">Cement</option>
              <option value="sand">Sand</option>
             </select>
       		</div>
       	</div>
        
	   <div class="col-md-6">
       	<div class="form-group">
       		<input type="number" class="form-control" id="qnty" placeholder="Enter Quantity" name="quantity" style="height: 40px!important;" onchange='cal(this.value)'>
    	</div>
   		</div>
        
        <div class="col-md-6" style="display:none;" id="pkt">
       	<div class="form-group">
         	<label >Packets</label>
       		<!--<input type="text" class="form-control" value="Packets" style="height: 40px!important;" readonly>-->
    	</div>
   		</div>
        
        <div class="col-md-6" style="display:none;" id="pcs">
       	<div class="form-group">
       		<input type="text" class="form-control" value="Pieces" style="height: 40px!important;" readonly>
    	</div>
   		</div>
        
        <div class="col-md-6" style="display:none;" id="trk">
       	<div class="form-group">
       		<input type="text" class="form-control" value="Truck" style="height: 40px!important;" readonly>
    	</div>
   		</div>
        
        <div class="col-md-12">
       	<div class="form-group">
       		<input type="number" class="form-control" id="amtt" placeholder="Enter Amount" name="amount" style="height: 40px!important;" readonly>
    	</div>
   		</div>
    </div>
   
   
    <button type="submit" name="submit" class="btn btn-danger">Donate</button>
  </form>
    </div>
  </div>
</section>
  </div>
  <!-- Contact form End -->

  
<?php 
include "footer.php";
?>

<script>
function checkvalue(val)
{
    if(val=="amount")
       {
       document.getElementById('amt').style.display='block';
       document.getElementById('mat').style.display='none';
       }
    if(val=="material")
      { document.getElementById('mat').style.display='block'; 
       document.getElementById('amt').style.display='none';
       }
}
function checkmaterial(val)
{
    if(val=="bricks")
       {
         document.getElementById('pcs').style.display='block';
         document.getElementById('pkt').style.display='none';
         document.getElementById('trk').style.display='none';
         document.getElementById('amtt').value = '';
         document.getElementById('qnty').value = '';
       }
     if(val=="rods")
       {
         document.getElementById('pcs').style.display='block';
         document.getElementById('pkt').style.display='none';
         document.getElementById('trk').style.display='none';
         document.getElementById('amtt').value = '';
         document.getElementById('qnty').value = '';
       }
     if(val=="sand")
       {
         document.getElementById('pcs').style.display='none';
         document.getElementById('pkt').style.display='none';
         document.getElementById('trk').style.display='block';
         document.getElementById('amtt').value = '';
         document.getElementById('qnty').value = '';
       }
     if(val=="cement")
       {
         document.getElementById('pcs').style.display='none';
         document.getElementById('trk').style.display='none';
         document.getElementById('pkt').style.display='block';
         document.getElementById('amtt').value = '';
         document.getElementById('qnty').value = '';
       }
    
}
function cal(val)
{
	var type = document.getElementById('material').value;
    if(type=="bricks")
       {
       var qty = document.getElementById('qnty').value;
       var am = qty * 5;
       document.getElementById('amtt').value = am;
       }
     if(type=="rods")
       {
       var qty = document.getElementById('qnty').value;
       var am = qty * 200;
       document.getElementById('amtt').value = am;
       }
     if(type=="sand")
       {
       var qty = document.getElementById('qnty').value;
       var am = qty * 1000;
       document.getElementById('amtt').value = am;
       }
     if(type=="cement")
       {
       var qty = document.getElementById('qnty').value;
       var am = qty * 500;
       document.getElementById('amtt').value = am;
       }
    
}
</script>