<?php 
include "conn.php";
$query="SELECT * from contact_details";
$fire=mysqli_query($conn,$query);
$contact_details=mysqli_fetch_assoc($fire);
//print_r($contact_details);
?> 
<!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>AquaTrack</h3>
              <p>
                We Provide Best of an industrial <br>solution in various segment like <br> mineral water.<br><br>
                <!-- <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> aqua@gmail.com<br> -->
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Feedback</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jar Management</a></li>
              <li><a href="#">Billing</a></li>
              <li><a href="#">Distribitor Jar Filling</a></li>
              <li><a href="#">Management</a></li>
              <li><a href="#">Reporting</a></li>
              <li><a href="#">Route-wise Jar</a></li>
              <li><a href="#">Distribution</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Contact</h4>
            <ul>
              <li><a href="#"><?=$contact_details['c_address'];?><br><br>
               <br><br></a></li>
              <li><a href="#"><strong>Phone:</strong><?=$contact_details['c_mobile'];?><br></a></li>
              <li><a href="#"> <strong>Email:</strong><?=$contact_details['c_email'];?><br></a></li>
            </ul>
          </div><!-- End footer links column-->

          <!-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div> --><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>AquaTrack</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          by:<a href="https://bootstrapmade.com/">AQUATRACK</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->