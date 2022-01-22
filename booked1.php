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


<div class="section">
    <div class="container">

     <!-- Share Wishlist Start -->
     <div class="text-center">
         <h4>Booked Seva List</h4>
    </div>
       <!-- Share Wishlist End -->

      <!-- Wishlist Table Start -->
      <table class="sigma_responsive-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Address</th>
            <th>Booked Seva</th>
          </tr>
        </thead>
        <tbody>
          <?php 
              $cnt = 1;
             $select = "SELECT * FROM `jag_booked_seva`";
             $result = mysqli_query($connection, $select);
             while($row12 = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <td class=""><?php echo $cnt; ?></td>
            <td class=""><?php echo $row12['name']; ?></td>
            <td class=""><?php echo $row12['email']; ?></td>
            <td class=""><?php echo $row12['city']; ?></td>
            <td class=""><?php echo $row12['address']; ?></td>
            <td class=""><?php echo $row12['seva']; ?></td>
            <!-- <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/1.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Ramayana Book</a> </h6>
                  <p>2 Pieces</p>
                </div>
              </div>
            </td> -->
            <!-- <td data-title="Price"> <strong>12.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock instock">In Stock</span>
            </td>
            <td data-title="Total"> <strong>12.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart</a> </td> -->
          </tr>
             <?php } ?>
          <!-- <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/5.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Gita Book</a> </h6>
                  <p>1 Piece</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>9.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock instock">In Stock</span>
            </td>
            <td data-title="Total"> <strong>9.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart</a> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/4.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Mahabharat Book</a> </h6>
                  <p>3 Pieces</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>13.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock outofstock">Out of Stock</span>
            </td>
            <td data-title="Total"> <strong>13.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart</a> </td>
          </tr> -->

        </tbody>
      </table>
      <!-- Wishlist Table End -->

       <!-- Share Wishlist Start -->
       <!-- <div class="text-center">
         <h5>Share Your Wishlist</h5> -->
         <!-- Post Share Start -->
         <!-- <div class="sigma_post-share">
           <ul class="sigma_sm justify-content-center">
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
         </div> -->
         <!-- Post Share End -->
       <!-- </div> -->
       <!-- Share Wishlist End -->

    </div>
  </div>







  
<?php
include "footer.php";
?>