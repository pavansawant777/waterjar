<?php
include "head.php";
include "nav.php";
?>

  <main id="main">
    

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/water bacg2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <?php 
include "conn.php";
$query="SELECT * from contact_details";
$fire=mysqli_query($conn,$query);
$contact_details=mysqli_fetch_assoc($fire);
//print_r($contact_details);
?> 

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p><?=$contact_details['c_address'];?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p><?=$contact_details['c_email'];?></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p><?=$contact_details['c_mobile'];?></p>
            </div>
          </div><!-- End Info Item -->

        </div>








        <div class="row gy-4 mt-1">
          <div class="col-lg-6 ">
         <div class="position-relative h-100">
                        <!-- <iframe class="position-relative w-100 h-100"
                        src="<?=$map['c_map'];?>"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe> -->
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.04360433725!2d73.7929268525699!3d18.524603553429806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1667831328325!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
           
          </div><!-- End Google Maps -->
            

        <!--   <div class="col-lg-6">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" name="email" class="form-control"  id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control"  id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> --><!-- End Contact Section -->

    <div class="col-lg-5" data-aos="fade">
            <form action="contact.php" method="post" >
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" name="email" class="form-control"  placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                   <button type="submit" class="btn btn-outline-warning ">Send</button>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


        <?php
    //print_r($_POST);
    if (isset($_POST['name'])){
      $query="INSERT INTO `contact_data`( `name`, `email`, `phone`, `message`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
    $fire=mysqli_query($conn,$query);
    if ($fire) {
echo "<script>alert('Your quote request has been sent successfully. Thank you!!');window.location.href='contact.php';</script>";
}
else{
echo "not Send";
}
    }
    ?>

    



  </main><!-- End #main -->

 <?php
include "footer.php";
?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>