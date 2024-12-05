<?php
include "head.php";
include "nav.php";
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/water bacg2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Pricing</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Pricing</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->





       <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

         <div class="section-header">
          <h2>Our Product</h2>
          <p data-aos="fade-up">We Provide Best of an industrial solution in various segment like mineral water.</p>
          <p></p>
        </div>

       <!--  <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <h4>Product-first</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <h4>Product-Second</h4>
            </a>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <h4>Product-Third</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <h4>Product-Four</h4>
            </a>
          </li>
        </ul> -->

<?php 
        $query="SELECT * from pricing";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>


        <div class="tab-content">

          <div class="tab-pane active show" id="tab-1">
            <div class="row">

       
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3><?=$row['pricing_title'];?></h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_color'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_material'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_app'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_capacity'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_pattern'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_packaging'];?></li>
                  <li><i class="bi bi-check2-all"></i><b><?=$row['pricing_price'];?></b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="admin/upload/<?=$row['pricing_img'];?>" style="height:500px;width:500px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>


          <?php
        }
        ?>

          
<!-- 
           <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3><?=$row['pricing_title'];?></h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_color'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_material'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_app'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_capacity'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_pattern'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_packaging'];?></li>
                  <li><i class="bi bi-check2-all"></i><b><?=$row['pricing_price'];?></b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="admin/upload/<?=$row['pricing_img'];?>" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3><?=$row['pricing_title'];?></h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_color'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_material'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_app'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_capacity'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_pattern'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_packaging'];?></li>
                  <li><i class="bi bi-check2-all"></i><b><?=$row['pricing_price'];?></b></li>
                </ul>
                <p class="fst-italic"></p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="admin/upload/<?=$row['pricing_img'];?>" style="height:500px;width:700px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3><?=$row['pricing_title'];?></h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_color'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_material'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_app'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_capacity'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_pattern'];?></li>
                  <li><i class="bi bi-check2-all"></i><?=$row['pricing_packaging'];?></li>
                  <li><i class="bi bi-check2-all"></i><b><?=$row['pricing_price'];?></b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="admin/upload/<?=$row['pricing_img'];?>" style="height:500px;width:400px;" alt="" class="img-fluid">
              </div>
            </div>
          </div> --> 

          

        </div>

      </div>
    </section> -->








     <!--  <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-5">
              <h4>Product-Five</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <h4>Product-Six</h4>
            </a>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
              <h4>Product-Seven</h4>
            </a>
          </li>

          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-8">
              <h4>Product-Eight</h4>
            </a>
          </li>

        </ul>

        <div class="tab-content">

          <div class="tab-pane active show" id="tab-5">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>Pink 20 Liter Dolphin Water Jar</h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Color: Transparent</li>
                  <li><i class="bi bi-check2-all"></i>Material: Plastic</li>
                  <li><i class="bi bi-check2-all"></i>Usage/Application: Home</li>
                  <li><i class="bi bi-check2-all"></i>Capacity: 20L</li>
                  <li><i class="bi bi-check2-all"></i>Deals in: new only</li>
                  <li><i class="bi bi-check2-all"></i>Packaging type: standard</li>
                  <li><i class="bi bi-check2-all"></i><b>₹ 400/Jar</b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/jar3.jpg" style="height:500px;width:500px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-6">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                 <h3>Natural Mineral Water Jar 20 Liter</h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Brand: Sitaram</li>
                  <li><i class="bi bi-check2-all"></i>Deals in: new only</li>
                  <li><i class="bi bi-check2-all"></i>Color: Blue, Transparent</li>
                  <li><i class="bi bi-check2-all"></i>Capacity:18-20 L</li>
                  <li><i class="bi bi-check2-all"></i>Pattern: Plain</li>
                  <li><i class="bi bi-check2-all"></i>Packaging type: standard</li>
                  <li><i class="bi bi-check2-all"></i><b>₹ 690/Jar</b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/jar2.jpg" style="height:500px;width:500px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-7">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Plastic Water Dispenser Jar, Capacity: 50 Liter</h3>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Color: Transparent</li>
                  <li><i class="bi bi-check2-all"></i>Capacity: 50 Liter</li>
                  <li><i class="bi bi-check2-all"></i>Pattern: Plain</li>
                  <li><i class="bi bi-check2-all"></i>Material: Plastic</li>
                  <li><i class="bi bi-check2-all"></i>Pattern: Plain</li>
                  <li><i class="bi bi-check2-all"></i>Packaging type: standard</li>
                  <li><i class="bi bi-check2-all"></i><b>₹ 990/Jar</b></li>
                </ul>
                <p class="fst-italic"></p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/bottle1.png" style="height:500px;width:400px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane" id="tab-8">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Plastic Mineral Water Jar</h3>
                <p class="fst-italic"></p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>Color: Transparent</li>
                  <li><i class="bi bi-check2-all"></i>Material: Plastic</li>
                  <li><i class="bi bi-check2-all"></i>Features: GOOD</li>
                  <li><i class="bi bi-check2-all"></i>Capacity: 20L</li>
                  <li><i class="bi bi-check2-all"></i>Size: FGD, 18</li>
                  <li><i class="bi bi-check2-all"></i>Packaging type: standard</li>
                  <li><i class="bi bi-check2-all"></i><b>₹ 250/Jar</b></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/water jar1.jpg" style="height:500px;width:400px;" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> -->









  <!-- ======= Features Section ======= -->
 









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