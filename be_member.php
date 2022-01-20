<style>
.red-button
{
	border: 2px solid #db4242;
	padding: 5px 10px;
	border-radius: 40px;
    font-weight: 600;
    text-transform: capitalize;
    color: #db4242;
}
.white-button
{
	border: 2px solid #ffffff;
    padding: 1px 10px;
    border-radius: 40px;
    font-weight: 600;
    text-transform: capitalize;
    color: #ffffff;
}
@media (min-width:786px){
.sigma_service {
/* height:850px; */
}
}
.hide {
  display: none;
}
.myDIV:hover .hide {
  display: block;
  color: red;
}  






.accordion {
  background-color: #e2171700;
  color: #db4242;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-weight: 900;
  text-align:center;
}

.active, .accordion:hover {
  /*background-color: #ccc; */
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
<?php
include "header.php";
?>

  <!-- partial:partia/__subheader.html -->
  <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/Be a member.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->


  <div class="section section-padding">
    <div class="container">

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <span href="" class="sigma_service border text-center style-1 bg-white">
            <div class="myDIV">
                <div class="sigma_service-thumb">
                    <img src="assets/img/patron.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
                      <span></span>
                      <span></span>
                </div>                
            </div>
                <div class="sigma_service-body ">
                <h5 class="">PATRON MEMBER</h5>
                <h6 class="">Donation amount Rs. 1,00,000/- or more</h6>
              <button class="accordion">Read More <i class="fa fa-angle-double-right" style="font-size: 13px;"></i></button>
             <div class="panel">             
              <ol style="list-style: upper-latin;" class="packages">
                  <li class="">Naividyam (Anna Prasad), Tulsi garland and owers to be offered on EVERY PURNIMA in the name of the member.</li>
                  <li class="">A flag will be tied on the Neelachakra at the top of the temple in the member’s name with special puja once a year.</li>
                  <li class="">Special Puja on Birthday/Anniversary etc with Naibedyam will be offered in the name of the all family members on SEVEN occasions in a year as selected by the member.</li>
                  <li class="">Special YAGNYA, in the name of the member, ONCE a year on the nominaed day.</li>              	       
                </ol>
                 <a href="donation.php" class="red-button">Donate Now</a> 
              </div>   
            </div>            
          </span>                    
        </div>











 <div class="col-lg-4 col-md-6">
          <span href="" class="sigma_service border text-center style-1 primary-bg">
            <div class="sigma_service-thumb">
              <img src="assets/img/pious.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
              <span></span>
              <span></span>
            </div>
            <div class="sigma_service-body">
            <h5 class="text-white">PIOUS MEMBER</h5>
              <h6 class="text-white">Donation amount Rs. 50000/- to 99999/-</h6>
             <button class="accordion text-white">Read More <i class="fa fa-angle-double-right" style="font-size: 13px;"></i></button>
             <div class="panel" style="background-color: #7e4555;">   
               <ol style="list-style: upper-latin;" class="packages">
                    <li class="text-white">Naividyam (Anna Prasad), Tulsi garland and owers to be offered on EVERY PURNIMA in the name of the member.</li>
                    <li class="text-white">A flag will be tied on the Neelachakra at the top of the temple in the member’s name with special puja once a year.</li>
                    <li class="text-white">Special Puja on Birthday/Anniversary etc with Naibedyam will be offered in the name of the all family members on SEVEN occasions in a year as selected by the member.</li>
                </ol>
                  <a href="donation.php" class="white-button">Donate Now</a> 
              </div> 
             </div>
          </span>
         
        </div>

        <div class="col-lg-4 col-md-6">
          <span href="" class="sigma_service border text-center style-1 secondary-bg">
            <div class="sigma_service-thumb">
              <img src="assets/img/devotee.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
              <span></span>
              <span></span>
            </div>
            <div class="sigma_service-body">
              <h5 class="text-white">DEVOTEE MEMBER</h5>
              <h6 class="text-white">Donation amount Rs. 25,000/- to Rs. 49,999/-</h6>
             <button class="accordion text-white">Read More <i class="fa fa-angle-double-right" style="font-size: 13px;"></i></button>
             <div class="panel" style="background:#db4242;">   
              <ol style="list-style: upper-latin;" class="packages">
                  <li class="text-white">Naividyam (Anna Prasad), Tulsi garland and owers to be offered on EVERY PURNIMA in the name of the member.</li>
                  <li class="text-white">Special Puja on Birthday/Anniversary etc with Naibedyam will be offered in the name of the all family members on SEVEN occasions in a year as selected by the member.</li>
              </ol>
               <a href="donation.php" class="white-button">Donate Now</a>
              </div>
            </div>
          </span>
        </div>

		<div class="col-lg-4 col-md-6">
          <span href="" class="sigma_service border text-center style-1 primary-bg">
            <div class="sigma_service-thumb">
              <img src="assets/img/family.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
              <span></span>
              <span></span>
            </div>
            <div class="sigma_service-body">
            <h5 class="text-white">FAMILY MEMBER</h5>
              <h6 class="text-white">Donation amount Rs. 10,000/- to Rs. 24,999/-</h6>
               <button class="accordion text-white">Read More <i class="fa fa-angle-double-right" style="font-size: 13px;"></i></button>
             <div class="panel" style="background:#7e4555;">   
              <ol style="list-style: upper-latin;" class="packages">
                  <li class="text-white">Naividyam (Anna Prasad), Tulsi garland and owers to be offered on EVERY PURNIMA in the name of the member.</li>
                  <li class="text-white">Special Puja on Birthday/Anniversary etc. with Naibedyam will be offered on FOUR occasions in a year selected by the member.</li>
             </ol>
              <a href="donation.php" class="white-button">Donate Now</a>
              </div>
            </div>
          </span>
        </div>

        <div class="col-lg-4 col-md-6">
          <span href="" class="sigma_service border text-center style-1 secondary-bg">
            <div class="sigma_service-thumb">
              <img src="assets/img/lifetime.jpg" style="border-radius: 50%; width: 100px; height: 100px;">
              <span></span>
              <span></span>
            </div>
            <div class="sigma_service-body">
              <h5 class="text-white">LIFE MEMBER</h5>
              <h6 class="text-white">Donation amount Rs.<br> 3,000/-</h6>
               <button class="accordion text-white">Read More <i class="fa fa-angle-double-right" style="font-size: 13px;"></i></button>
             <div class="panel" style="background:#db4242;">   
              <ol style="list-style: upper-latin;" class="packages">
                <li class="text-white">ONE time offering of Naividyam in a year on a particular day like Birthday or marriage anniversary of the member or his nominee as selected by him/her.</li>
              </ol>
               <a href="donation.php" class="white-button">Donate Now</a>
               </div>
            </div>
          </span>
        </div>

       

    </div>
  </div>
  
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<?php

include "footer.php";
?>

