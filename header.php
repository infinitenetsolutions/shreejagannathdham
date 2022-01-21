<?php
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_site_info` WHERE 1";
  $result = mysqli_query($connection, $select);
  $row = mysqli_fetch_assoc($result);


  if (isset($_POST['submit12'])) {
    $name = $_POST['name'];
    $desig = $_POST['desig'];
    $message = $_POST['message'];
    $imgData = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
    // print_r($imgData);exit();
    
    // if (is_uploaded_file($_FILES['image']['tmp_name'])) {
      $sql = "INSERT INTO `jag_testimonial`(`name`, `desig`,`image`, `message`,`status`) 
                                VALUES ('$name','$desig','$imgData','$message','Pending')";

        $current_id = mysqli_query($connection, $sql); 
        if ($current_id) {

            echo "<script>
                alert('We got Your Message. Thank You for your feedback !!!');
                window.location.replace('index.php');
                </script>";
                 }
                 else {
            echo "<script>alert('Your message is not submitted successfully. Please try again!!');</script>";
        }
    }
 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree Jagannathdham </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico">

    <!-- partial:partial/__stylesheets.html -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
    <!-- Template Style sheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- partial -->

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

<style>
@media(max-width:576px){
.justify-content-lg-between{
box-shadow: 0px 1px 8px 3px #ff4906!important;
}
}

.modal-input
{
    border-radius: 20px!important;
    background: #ffff005c!important;
    margin-bottom: 15px;
}
.d-load
{
    
    position: fixed;
    bottom: 8%;
    right: 0px;
    z-index: 9999;
}
.d-load span {
    font-size: 15px;
    position: relative;
    transform: rotate( 
90deg
 );
    transform-origin: right top;
    color: #e6ad25;
    display: block;
    background: #fff400;
    border: 4px solid #ff4906;
    padding: 6px 15px;
    border-radius: 4px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    font-weight: 600;
}
</style>
</head>
<body>

    <!-- Preloader Start -->
    <div class="sigma_preloader">
        <img src="assets/img/homepage.png" alt="preloader">
    </div>
    <!-- Preloader End -->

    <!-- partial:partial/__quickview.html -->
    <div class="modal fade sigma_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="close-btn close-dark close" data-bs-dismiss="modal">
                        <span></span>
                        <span></span>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="sigma_product-single-thumb">
                                <img src="assets/img/products/new/1.jpg" alt="product">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sigma_product-single-content">
                                <h4 class="entry-title"> Koobay 14" Wooden Trousers Bottom Clips Hangers w Rose Gold. </h4>
                                <div class="sigma_product-price">
                                    <span>352$</span>
                                    <span>245$</span>
                                </div>

                                <div class="sigma_rating-wrapper">
                                    <div class="sigma_rating">
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star active"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span>255 Reviews</span>
                                </div>

                                <p> <strong class="me-2">Interested: <span>05</span></strong> <strong>Availablity: <span>In Stock</span></strong> </p>

                                <p class="sigma_product-excerpt">All Religious Books are available in Temple Stores. Our mission is to share the Good of Hinduism, Loving, Faith and Serving.</p>

                                <form class="sigma_product-atc-form">

                                    <div class="sigma_product-variation-wrapper">
                                        <div class="sigma_product-radio form-group">
                                            <label>
                        <input type="radio" name="size" value="" checked>
                        <span>XS</span>
                      </label>
                                            <label>
                        <input type="radio" name="size" value="">
                        <span>S</span>
                      </label>
                                            <label>
                        <input type="radio" name="size" value="">
                        <span>M</span>
                      </label>
                                            <label>
                        <input type="radio" name="size" value="">
                        <span>L</span>
                      </label>
                                            <label>
                        <input type="radio" name="size" value="">
                        <span>XL</span>
                      </label>
                                        </div>
                                    </div>

                                    <div class="qty-outter">
                                        <a href="" class="sigma_btn-custom secondary">Buy Now</a>
                                        <div class="qty-inner">
                                            <h6>Qty:</h6>
                                            <div class="qty">
                                                <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                                                <input type="text" name="qty" value="1">
                                                <span class="qty-add"><i class="fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!-- Post Meta Start -->
                                <div class="sigma_post-single-meta">
                                    <div class="sigma_post-single-meta-item sigma_post-share">
                                        <h6>Share</h6>
                                        <ul class="sigma_sm">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sigma_post-single-meta-item">
                                        <div class="sigma_product-controls">
                                            <a href="#" data-toggle="tooltip" title="Compare"> <i class="far fa-signal-4"></i> </a>
                                            <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Meta End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->

    <!-- partial:partia/__mobile-nav.html -->
    <aside class="sigma_aside sigma_aside-left">

        <a class="navbar-brand" href="index.php"> <img src="assets/img/logo1.png" alt="logo"> </a>

        <!-- Mobile Menu -->        
        <ul>
         <li class="menu-item">
                <a href="index.php">Home</a>
            </li>            
            <li class="menu-item menu-item-has-children">
                <a href="#">About</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="about-us.php">About us</a> </li>                    
                     <li class="menu-item menu-item-has-children">
                <a href="#">Seva Trust</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="patron.php">Patron</a> </li>
                    <li class="menu-item"> <a href="chairman.php">Chairman</a> </li>
                    <li class="menu-item"> <a href="secretary.php">Gen. Secretary</a> </li>
                    <li class="menu-item"> <a href="committee_members.php">Trustees & Committee Members</a></li>
                </ul>
            </li>                                       
                   <li class="menu-item menu-item-has-children">
                <a href="#">Mandir Nirman</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="member.php">Member</a> </li>
                    <li class="menu-item"> <a href="doner.php">Donar</a> </li>                    
                </ul>
            </li>  
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Our Facilities</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="facilities.php">Facilities</a></li>
                    <li class="menu-item"><a href="book-seva.php">Book Seva</a> </li>
                </ul>
            </li>
             <li class="menu-item">
                <a href="rath-jatra.php">Rath Jatra</a>
            </li>                        
            <li class="menu-item menu-item-has-children">
                <a href="#">Be a Member</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="be_member.php">Membership types</a></li>
                    <li class="menu-item"><a href="volunteer.php">Be Volunteer</a> </li>
                </ul>
            </li> 
            <li class="menu-item menu-item-has-children">
                <a href="#">Donation</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="facilities.php">Membership Registration</a></li>
                    <li class="menu-item"><a href="secret_donation.php">Secret Donation</a> </li>
                    <li class="menu-item"><a href="material_donation.php">Donation for Nirman</a> </li>
                </ul>
            </li>      
            <li class="menu-item">
                <a href="news.php">Our News</a>
            </li>            
            <li class="menu-item">
                <a href="media.php">Our Gallery</a>
            </li>            
            <li class="menu-item">
                <a href="faq.php">Faq</a>
            </li>
            <li class="menu-item">
                <a href="contact.php">Contact</a>
            </li>                                                                                                    
        </ul>
        
<!--// Mobile Menu-->


    </aside>
    <div class="sigma_aside-overlay aside-trigger-left"></div>
    <!-- partial -->

    <!-- partial:partia/__header.html -->
    <header class="sigma_header header-3 can-sticky header-absolute">

        <!-- Middle Header Start -->
        <div class="sigma_header-middle">
            <nav class="navbar">

                <!-- Logo Start -->
                <div class="sigma_logo-wrapper" style="background:#ff4906;">
                    <a class="navbar-brand" href="index.php">
                        <img src="./././admin/dist/img/jagannath-top.png" alt="logo">
                    </a>
                </div>
                <!-- Logo End -->

                <!-- Menu -->
                <div class="sigma_header-inner">
                    <div class="sigma_header-top"  style="background:#ff4906;">
                        <div class="sigma_header-top-inner">
                            <ul class="sigma_header-top-links">
                                <li class="menu-item">
                                    <img src="assets/img/logo_new.png" alt="logo">
                                </li>
                               
                            </ul>
                            <ul class="navbar-nav">
                                <li class="menu-item">
                                    <a href="tel:<?php echo $row['phone1']; ?>"> <i class="fal fa-phone"></i> <?php echo $row['phone1']; ?></a>
                                 </li>
                                <li class="menu-item">
                                    <a href="mailto:<?php echo $row['email']; ?>"> <i class="fal fa-envelope"></i> <?php echo $row['email']; ?></a>
                                </li>
                                
                            </ul>
                            
                        </div>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-between" style="background: #fff400;box-shadow: 0px 1px 8px 3px #ffffff;">
                    
                    <!--website menu-->
                        <ul class="navbar-nav">                           
                            <li class="menu-item"> <a href="index.php">Home</a> </li>                            
                            <li class="menu-item menu-item-has-children">
                                <a href="#">About</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="about-us.php">About</a></li>                                    
                                <li class="menu-item menu-item-has-children">
                                <a href="#">Our Seva Trust</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="patron.php">Patron</a></li>
                                    <li class="menu-item"><a href="chairman.php">Chairman</a></li>
                                    <li class="menu-item"> <a href="secretary.php">Gen. Secretary</a></li>
                                    <li class="menu-item"> <a href="committee_members.php">Trustees & Committee Members</a></li>
                                    <!-- <li class="menu-item"> <a href="assistant-secretary.php">Assistant Secretary</a></li>                                     -->
                                </ul>
                            </li>                            
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Mandir Nirman</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="members.php">Members</a></li>
                                    <li class="menu-item"> <a href="donors.php">Donors</a></li>
                                </ul>
                            </li>                            
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Our Facilities</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="facilities.php">facilities</a></li>
                                    <li class="menu-item"> <a href="book-seva.php">Book Seva</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"> <a href="rath-jatra.php">Rath Jatra</a> </li>
                            
                            <li class="menu-item menu-item-has-children">
                				<a href="#">Be a Member</a>
                					<ul class="sub-menu">
                                      <li class="menu-item"><a href="be_member.php">Membership types</a></li>
                                      <li class="menu-item"><a href="volunteer.php">Be Volunteer</a> </li>
                					</ul>
            				</li> 
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Donation</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="donation.php">Membership Registration</a></li>
                                    <li class="menu-item"><a href="secret_donation.php">Secret Donation</a> </li>
                                    <li class="menu-item"><a href="material_donation.php">Donation for Nirman</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item"> <a href="news.php">Our News</a> </li>
                            <li class="menu-item"> <a href="media.php">Our Gallery</a> </li>                                                     
                            <li class="menu-item"> <a href="faq.php">Faq</a> </li>
                            <li class="menu-item"> <a href="contact.php">Contact us</a> </li>
                        </ul>
                        
				<!--// website menu-->
                
                    </div>
                </div>

                <!-- Controls -->
                <div class="sigma_header-controls style-2" style="background:#ff4906;">

                    <a href="donation.php" class="sigma_btn-custom"> Donate Here</a>

                    <ul class="sigma_header-controls-inner">
                        <!-- Mobile Toggler -->
                        <li class="aside-toggler style-2 aside-trigger-left">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </li>
                    </ul>

                </div>

            </nav>
        </div>
        <!-- Middle Header End -->

    </header>
    <!-- partial -->

    <!-- right sticky start -->
    <div class="stick-right">
            <div class="d-load"><span><a href="#" data-toggle="modal" data-target="#myModal">Share Your Thoughts</a></span></div>
        </div>
    <!-- right sticky end -->

    <!-- modal start -->
     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content modal-md" style="border: 15px solid #ff4906;">
     	<div style="float:right;margin: 5px 14px;">
   			 <button type="button" class="close" data-dismiss="modal">×</button>
		</div>
        <img src="assets/img/header1.png" style="width: 430px; margin:0 auto;margin-top: -22px;">
        
        <div class="modal-header" style="height: 55px;background:#ff4906;width:100%;">
         <h4 class="offer-title" style="font-weight:800;color:#fff;margin:0 auto;margin-top: -2px; text-shadow: 1px 1px #FF0000;">Share Your Thoughts</h4>
          
        </div>
        <div class="modal-body">
           <form method="POST" class="popup-form" enctype= multipart/form-data> 
               
               
                <input type="text" class="form-control modal-input" placeholder="Enter Full Name" name="name" required>
                <input type="text" class="form-control modal-input" placeholder="Enter Your Designation" name="desig" required>
                <input type="file" class="form-control modal-input" name="Image" required>
                <textarea class="form-control modal-input" placeholder="Enter Your Message" name="message" rows="4" col="45" required></textarea>
                <div class="text-center" ><input type="submit" style="background: #ff4906; border:#ff4906; font-weight: bold;" class="btn btn-dark mt-2"  name="submit12" value="Submit"></div>
        </div>
        
      <!--<input type="submit" class="btn btn-primary" name="submit" value="Submit">-->
    
   
  </form><br>
        </div>
       
      </div>
      
    </div>
  </div>
    <!-- modal end -->