<?php
include 'admin/connection.inc.php';

  $select = "SELECT * FROM `jag_site_info` WHERE 1";
  $result = mysqli_query($connection, $select);
  $row = mysqli_fetch_assoc($result);
 
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
    <!-- partial -->

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
                                        <a href="product-single.html" class="sigma_btn-custom secondary">Buy Now</a>
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

        <a class="navbar-brand" href="index.html"> <img src="assets/img/header1.png" alt="logo"> </a>

        <!-- Menu -->
        <ul>
            <li class="menu-item menu-item-has-children">
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="index.html">Home v1</a> </li>
                    <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                    <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Blog</a>
                <ul class="sub-menu">
                    <li class="menu-item">
                        <a href="blog-grid.html">Blog Archive</a>
                    </li>
                    <li class="menu-item"> <a href="blog-details.html">Blog Details</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                    <li class="menu-item"> <a href="broadcast.html">Broadcast</a> </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">Volunteers</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="volunteers.html">Volunteers</a>
                            </li>
                            <li class="menu-item"> <a href="volunteer-detail.html">Volunteer Details</a> </li>
                        </ul>
                    </li>
                    <li class="menu-item"> <a href="faq.html">FAQ</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Service</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="services.html">Service Style 1</a> </li>
                    <li class="menu-item"> <a href="services-2.html">Service Style 2</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Donation</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="donation.html">Donation</a> </li>
                    <li class="menu-item"> <a href="donation-archive.html">Donation Archive</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Event</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="events.html">Event</a> </li>
                    <li class="menu-item"> <a href="event-details.html">Event Detail</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">HolisSSS</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="holi.html">Holi</a> </li>
                    <li class="menu-item"> <a href="holi-details.html">Holi Details</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Puja</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="puja.html">Puja</a> </li>
                    <li class="menu-item"> <a href="puja-details.html">Puja Details</a> </li>
                </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li class="menu-item"> <a href="shop.html">Shop</a> </li>
                    <li class="menu-item"> <a href="product-single.html">Product Details</a> </li>
                    <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                    <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                    <li class="menu-item"> <a href="wishlist.html">Wishlist</a> </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="contact-us.html">Contact</a>
            </li>
        </ul>

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
                    <a class="navbar-brand" href="index.html">
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
                                    <a href="tel:<?php echo $row['phone1']; ?>"> <i class="fal fa-phone"></i> <?php echo $row['phone1']; ?></a>
                                </li>
                                <li class="menu-item">
                                    <a href="mailto:<?php echo $row['mail']; ?>"> <i class="fal fa-envelope"></i> <?php echo $row['email']; ?></a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Event</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="events.html">Event</a> </li>
                                        <li class="menu-item"> <a href="event-details.html">Event Detail</a> </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Holis</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="holi.html">Holi</a> </li>
                                        <li class="menu-item"> <a href="holi-details.html">Holi Details</a> </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Puja</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="puja.html">Puja</a> </li>
                                        <li class="menu-item"> <a href="puja-details.html">Puja Details</a> </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <ul class="sigma_header-top-links">
                                <li class="d-flex align-items-center">
                                    <a href="broadcast.html" class="live">
                                        <i class="fa fa-circle"></i> Live
                                    </a>
                                </li>
                                <li class="menu-item menu-item-has-children d-flex align-items-center">
                                    <img src="assets/img/flag.png" alt="img">
                                    <a href="#" class="m-0"> Language</a>
                                    <ul class="sub-menu sub-menu-left">
                                        <li> <a href="#">English</a> </li>
                                        <li> <a href="#">German</a> </li>
                                        <li> <a href="#">French</a> </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-between" style="background: #fff400;">
                        <ul class="navbar-nav">
                            <!-- <li class="menu-item menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="index.html">Home v1</a> </li>
                                    <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                                    <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
                                </ul>
                            </li> -->
                            <li class="menu-item"> <a href="index.php">Home</a> </li>
                            <li class="menu-item"> <a href="about-us.php">About</a> </li>
                            <li class="menu-item"> <a href="facilities.php">Our Facilities</a> </li>
                            <li class="menu-item"> <a href="rath-jatra.php">Rath Jatra</a> </li>
                            <!-- <li class="menu-item"> <a href="donation.php">Donation</a> </li> -->
                            <li class="menu-item"> <a href="packages.php">Our Packages</a> </li>
                            <li class="menu-item"> <a href="news.php">Our News</a> </li>
                           
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Gallery</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-grid.html">Media Gallery</a>
                                    </li>
                                    <li class="menu-item"> <a href="blog-details.html">Image Gallery</a> 
                                </li>
                                </ul>
                            </li>

                            <li class="menu-item"> <a href="faq.php">Faq</a> </li>
                            <li class="menu-item"> <a href="contact.php">Contact us</a> </li>



                            <!-- <li class="menu-item menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-grid.html">Blog Archive</a>
                                    </li>
                                    <li class="menu-item"> <a href="blog-details.html">Blog Details</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="broadcast.html">Broadcast</a> </li>
                                    <li class="menu-item"> <a href="volunteers.html">Volunteers</a> </li>
                                    <li class="menu-item"> <a href="volunteer-detail.html">Volunteer Details</a> </li>
                                    <li class="menu-item"> <a href="faq.html">FAQ</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Service</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="services.html">Service Style 1</a> </li>
                                    <li class="menu-item"> <a href="services-2.html">Service Style 2</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Donation</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="donation.html">Donation</a> </li>
                                    <li class="menu-item"> <a href="donation-archive.html">Donation Archive</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"> <a href="shop.html">Shop</a> </li>
                                    <li class="menu-item"> <a href="product-single.html">Product Details</a> </li>
                                    <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                                    <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                                    <li class="menu-item"> <a href="wishlist.html">Wishlist</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contact-us.html">Contact</a>
                            </li> -->
                        </ul>


                        <!-- <div class="sigma_header-controls style-2 p-0 border-0">
                            <ul class="sigma_header-controls-inner pe-3">

                                <li class="sigma_header-cart style-2">
                                    <a href="cart.html"> <i class="fal fa-shopping-bag"></i> </a>
                                    <span class="number">1</span>
                                    <ul class="cart-dropdown">
                                        <li>
                                            <a href="#" class="sigma_cart-product-wrapper">
                                                <img src="assets/img/products/1.jpg" alt="prod1">
                                                <div class="sigma_cart-product-body">
                                                    <h6>Gita Book</h6>
                                                    <div class="sigma_product-price justify-content-start">
                                                        <span>29$</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="sigma_cart-product-wrapper">
                                                <img src="assets/img/products/5.jpg" alt="prod1">
                                                <div class="sigma_cart-product-body">
                                                    <h6>Ramayana Book</h6>
                                                    <div class="sigma_product-price justify-content-start">
                                                        <span>35$</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="sigma_cart-product-wrapper">
                                                <img src="assets/img/products/4.jpg" alt="prod1">
                                                <div class="sigma_cart-product-body">
                                                    <h6>Mahabharat Book</h6>
                                                    <div class="sigma_product-price justify-content-start">
                                                        <span>50$</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sigma_header-wishlist style-2">
                                    <a href="wishlist.html"> <i class="fal fa-heart"></i> </a>
                                    <ul class="cart-dropdown">
                                        <li>
                                            <p class="mb-0">You don't have any items</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- Controls -->
                <div class="sigma_header-controls style-2" style="background:#ff4906;">

                    <a href="donation.html" class="sigma_btn-custom"> Donate Here</a>

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
