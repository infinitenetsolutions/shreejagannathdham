<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

section {
  position: relative;
  min-height: 100vh;
  background-color: #f8dd30;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 500px;
  background: #fff;
  box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-bottom: 10px;
  color: #dc3545;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 10px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #dc3545;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}


section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

.vol-1
{
  width:49% !important;
  margin: 8px 1px !important;
}
.vol-2
{
  background-color: #f7f7f7;
  border: none;
  width: 100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}
</style>


<?php
include "header.php";
?>

  <!-- partial:partia/__subheader.html -->
 <div class="" style="">
    <div class="">
      <div class="sigma_subheader-inner">       
       <img src="./assets/img/volunteer.jpg" style="width:100%;">
      </div>
    </div>
  </div>
  <!-- partial -->

  <!-- Post Content Start -->
  <div class="section">
    <div class="container">

    <section>
    <div class="container" style="width:1000px!important">
      <div class="user signinBx">
        <!-- <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg" alt="" /></div> -->
        <div class="imgBx"><img src="assets/img/volunteering.jpg" alt="" width="400px" height="500px"/></div>
        <div class="formBx">
          <form action="" method="POST">
            <h2>Volunteer Registration</h2>
            <input type="text" name="name" placeholder="Full Name"  class="vol-1" required/>
            <input type="text" name="desig" placeholder="Designation" class="vol-1" required/>
            <input type="number" name="phone" placeholder="Phone" class="vol-1" required/>
            <input type="file" name="phone" placeholder="Phone" class="vol-1" required/>
            <input type="email" name="email" placeholder="Email" required/>
            <textarea name="address" placeholder="Enter Address" cols="45" rows="3" class="vol-2"style="margin:10px 0px" required></textarea>
            <textarea name="description" placeholder="Enter description" cols="45" rows="3" class="vol-2" required></textarea>
            <input type="submit" name="submit" value="Submit" style="margin: 12px auto;"/>
          </form>
        </div>
      </div>
     </div>
    </div>
  </section>
      
              
    </div>
  </div>
  <!-- Post Content End -->
<?php
include "footer.php";
?>