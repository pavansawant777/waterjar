<?php
include "head.php";
include "nav.php";
include "conn.php";
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
         <?php 
        $query="SELECT * from slider";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
          if($i==1){
            $i++;
        ?>
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>AquaTrack</span></h2>
            <p data-aos="fade-up">We Provide Best of an industrial solution in various segment like mineral water.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>
    <?php
  }else{
  ?>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(admin/upload/<?=$row['slider_img'];?>)"></div>
      <div class="carousel-item" style="background-image: url(admin/upload/<?=$row['slider_img'];?>)"></div>
      <div class="carousel-item" style="background-image: url(admin/upload/<?=$row['slider_img'];?>)"></div>
      <div class="carousel-item" style="background-image: url(admin/upload/<?=$row['slider_img'];?>)"></div>


      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->
<?php
}
}
?>





  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">
        <div class="row justify-content-between gy-4">

          <?php 
    $query="select * from company_details";
    $fire=mysqli_query($conn,$query);
    $i=1;
    while($row=mysqli_fetch_assoc($fire)){
    ?>

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3><?=$row['c_title'];?> </h3>
              <p><?=$row['c_desc'];?> </p>
            </div>
          </div>

          <?php } ?>


          <div class="col-lg-5" data-aos="fade">
            <form action="index.php" method="post" >
              <h3>Get a Touch</h3>
              <p></p>
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
                   <button type="submit" class="btn btn-outline-primary ">Send</button>
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
echo "<script>alert('Your quote request has been sent successfully. Thank you!!');window.location.href='index.php';</script>";
}
else{
echo "not Send";
}
    }
    ?>
       




















    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Our Product Are Best</h2>
          <p>Pure & Hygienic Packaged Water Home Delivery</p>
        </div>

        <div class="row gy-4">
          <?php 
        $query="SELECT * from bpro";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <!-- <div class="card-bg" style="background-image: url(admin/upload/<?=$row['bpro_img'];?>);"></div> -->
                 <img class="img-fluid" src="admin/upload/<?=$row['bpro_img'];?>" alt="" style="height:250px">
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><?=$row['bpro_title'];?></h4>
                    <p>One's Need extended optional online water delivery services.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->
          <?php 
                }
                ?>

        <!--   <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/icon2.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Secure Payments</h4>
                    <p>Convenint and safe payment options for every order.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/icon3.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Free Delivery</h4>
                    <p>Free Deliver to your choice of address without any extra charges.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/icon4.png);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Best Quality</h4>
                    <p>Pure and Hygienic Jar Drinking Water.</p>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
         
        </div>

      </div>
    </section><!-- End Constructions Section -->

  

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">
         <?php 
        $query="SELECT * from bgimg";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(admin/upload/<?=$row['bgimg_img'];?>);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3><?=$row['bgimg_title'];?></h3>
            <p>Getting Pure and Hygiene water has never been so easy for man kind!</p>
            <?php
            }
            ?>

        <?php 
        $query="SELECT * from working";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <!-- <i class="bi bi-easel flex-shrink-0"></i> -->
              <img src="admin/upload/<?=$row['working_img'];?>">
              <div>
                <h4><a href="" class="stretched-link">Select</a></h4>
                <p><?=$row['working_title'];?></p>
              </div>
            </div>

       <!--      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            
              <img src="assets/img/delivery.png">
              <div>
                <h4><a href="" class="stretched-link">Deliver</a></h4>
                <p>Get Your Delivery On Time</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              
              <img src="assets/img/order.png">
              <div>
                <h4><a href="" class="stretched-link">Order</a></h4>
                <p>Confirm Order</p>
              </div>
            </div> -->

           <?php
           }
           ?>

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

  

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

    
    
  <div class=" section-header">
        <h2>How It Works</h2>
        <p>Getting Pure and Hygiene water has never been so easy for man kind!</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
              <span class="post-date">December 12</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Select - Select the Quantity and Preffered Time</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Dnyaneshwar Dhotre</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
              <span class="post-date">July 17</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Deliver - Get Your Delivery On Time</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Bhagyashree Dahatonde</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
              <span class="post-date">September 05</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">Order - Confirm Order</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Pratiksha Rode</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                </div>
              </div>

              <hr>

              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

            </div>

          </div>
        </div><!-- End post item -->

      </div>

      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

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