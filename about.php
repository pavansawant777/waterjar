<?php
include "head.php";
include "nav.php";
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/water bacg2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(assets/img/);"></div>
           div class="col-lg-7">
            <h2>Consequatur eius et magnam</h2>
            <div class="our-story">
              <h4>Est 1988</h4>
              <h3>Our Story</h3>
              <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
              <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End About Section -->










<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="website.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

  
  <div class="container bg-dark text-white font-weight-bold"> 
    <?php 
    $obj = new database();
   if (isset($_GET['editid'])){
  
  $editid = $_GET['editid'];

  $myrecord = $obj->displayRecordById($editid);

   //  print_r($myrecord);

  ?>


              <form action="about.php" method="post">
              <div class="row">
                
                 <div class="col-md-12 text-center font-weight-bold text-white"><h1>Customerwise Wise Management</h1></div>

                 <div class="col-md-6">
                  <label>Customer Name:</label>
                  <input type="text" name="name" value="<?php echo $myrecord['name'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Route:</label>
                  <input type="text" name="route" value="<?php echo $myrecord['route'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Total Amount:</label>
                  <input type="text" name="amount" value="<?php echo $myrecord['amount'];?>" class="form-control" required>
                 </div>

                 <div class="col-md-6">
                  <label>Date:</label>
                  <input type="date" name="d_date" value="<?php echo $myrecord['d_date'];?>" class="form-control" required>
                 </div>


            

                 <div class="col-md-12 text-center mt-5">
                  <input type="hidden" name="hid" value="<?php echo $myrecord['id'];?>">
                  <input type="submit" name="update1" value="update1"></div>

              </div>
              </form>




  <?php 


        }else{


    ?>
                  <form action="about.php" method="post" class="mt-5">
              <div class="row">
                
                 <div class="col-md-12 text-center font-weight-bold text-white mt-5"><h1>Customerwise Wise Management</h1></div>

                 <div class="col-md-6">
                  <label>Customer Name:</label>
                  <input type="text" name="name" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Route:</label>
                  <input type="text" name="route" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Total Amount:</label>
                  <input type="text" name="amount" class="form-control" required>
                 </div>

                 <div class="col-md-6">
                  <label>Date:</label>
                  <input type="date" name="d_date" class="form-control" required>
                 </div>


            

                 <div class="col-md-12 text-center text-white bg-dark mt-5">
                  <input type="submit" class="bg-warning text-center font-weight-bold text-white btn btn-dark py-4 px-lg-5 d-none d-lg-block" style="margin-left:500px;"  name="submit"></div>

              </div>
              </form>

              <?php 
                    }
            
              ?>
</div>




 <div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 text-center font-weight-bold"><h1>Customerwise Wise Management Record</h1></div>
  </div>

  <table class="table table-stripped table-hover table-calender table-bordered mt-5">
    <tr>
      <th>Sr.no</th>
      <th>Customer Name</th>
      <th>Route</th>
      <th>Total Amount</th>
      <th>Date</th>
      <th>Status</th>
    </tr>
    <?php
              $obj=new database();
              $data = $obj->displayRecord();
              $i=1;
              foreach ($data as $value) {

           ?>
              <tr>

          <td><?php echo $i++;?>
            <input type="hidden" name="id" value="<?php echo $value['id'];?>">
          </td>
    

          <td><?php echo $value['name'];?></td>

          <td><?php echo $value['route'];?></td>
          <td><?php echo $value['amount'];?></td>
          <td><?php echo $value['d_date'];?></td>
          
            <td>
              <a href="about.php?editid=<?php echo $value['id'];?>" class="btn btn-warning">Edit</a>
              <a href="about.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
            </td>

        </tr>


            <?php  
              }
            ?>
      
     

  </table>


</div>


</body>
</html>

<?php 

class database{

  private $servername ='localhost';
  private $username ='root';
  private $password ='';
  private $dname ='waterjar_project';

  private $conn;

  function __construct(){
    $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dname);
    if ($this->conn->connect_error) {
      
      echo "error";
    }
    else{
      return $this->conn;
    }
  }//construct close

  public function insertRecord($post){
    $name = $_POST['name'];
    $route = $_POST['route'];
    $amount = $_POST['amount'];
    $d_date = $_POST['d_date'];

    $sql = "INSERT INTO cust_mng(name,route,amount,d_date) VALUES('$name','$route','$amount','$d_date')";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('data insert Successfully');</script>";

  echo "<script>window.location.href='about.php'</script>";

    }// if close

  }// insert function close

 // select process
  public function displayRecord(){
    $sql = "SELECT * FROM cust_mng";
    $result = $this->conn->query($sql);
      while($row = $result->fetch_assoc()){
        $data[]=$row;

        

      }// while close
      return $data;
      if ($row) {
          
  echo "<script>alert('data display Successfully');</script>";
  echo "<script>window.location.href='about.php'</script>";


        }

  

  }// select close


  //update part started

  public function displayRecordById($editid){
    $sql = "SELECT * FROM cust_mng WHERE id='$editid'";

    $result = $this->conn->query($sql);
    if ($result->num_rows==1) {

      $row = $result->fetch_assoc();
      return $row;
      
    }

  }// displayRecordById close


  public function updateRecord($post){
    $name = $post['name'];
    $route = $post['route'];
    $amount = $post['amount'];
    $d_date = $post['d_date'];
    $editid = $post['hid'];

    $sql = "UPDATE cust_mng SET name='$name',route='$route',amount='$amount',d_date='$d_date' WHERE id='$editid'";

    $result = $this->conn->query($sql);

    if ($result) {
  echo "<script>alert('data update Successfully');</script>";
  echo "<script>window.location.href='about.php'</script>";

      
    
    }// if close

  }// update function close


  // delete process

  public function deleteRecord($delid){

    $sql = "DELETE FROM cust_mng WHERE id='$delid'";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('Delete Successfully');</script>";
  echo "<script>window.location.href='about.php'</script>";

      
    }


  }


}// class close

$obj=new database();


if (isset($_POST['submit'])) {
  $obj->insertRecord($_POST);
}


//
if (isset($_POST['update1'])) {
  $obj->updateRecord($_POST);
}


//delete 

if (isset($_GET['deleteid'])) {

  $delid = $_GET['deleteid'];
  $obj->deleteRecord($delid);
}
?>





































    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">


          <?php 
        $query="SELECT * from baimg";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(admin/upload/<?=$row['baimg_img'];?>);" data-aos="zoom-in" data-aos-delay="100"></div>


          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Jar Status</h3>
            <p><?=$row['baimg_title'];?></p>

            <?php
            }
            ?>


            
            <?php 
        $query="SELECT * from status";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link"><?=$row['status_title'];?></a></h4>
                <p><?=$row['status_desc'];?></p>
              </div>
            </div>


            <?php
            }
            ?>

            

          <!--   <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Total Filled Jar</a></h4>
                <p>6000</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Total Jar Deposit</a></h4>
                <p>1000</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Total Jar Stock</a></h4>
                <p>10,000</p>
              </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Total Available Jar</a></h4>
                <p>5000</p>
              </div>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <!-- <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Non quasi officia eum nobis et rerum epudiandae rem voluptatem</h3>
            <p>Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. Amet rerum saepe tempora vero.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div> --><!-- End Icon Box -->

            <!-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div> --><!-- End Icon Box -->

            <!-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
              </div>
            </div> --><!-- End Icon Box -->

            <!-- <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
    </section> --><!-- End Alt Services Section 2 -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>
          <p></p>
        </div>

        <div class="row gy-5">
          <?php 
        $query="SELECT * from team";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="admin/upload/<?=$row['team_img'];?>" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4><?=$row['team_name'];?></h4>
              <span><?=$row['team_position'];?></span>
              <p><?=$row['team_desc'];?></p>
            </div>
          </div>

          <?php
        }
        ?>

         <!--  <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>A product manager is the person who creates internal and external product vision and leads product development from scratch. This individual defines customer needs, works with stakeholders and teams on creating the required product, and carries responsibility for overall product success.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>A Chief Technology Officer (sometimes called Chief Technical Officer) is the most skilled technology person in the company. If it’s a tech startup, a CTO is usually a cofounder, the main thinker behind the product. In an older organization, this is a C-level executive who investigates the technology trends and implements them within the product in accordance with the product vision, strategy, and roadmap.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <p>A Staff Accountant handles a company’s accounting procedures and maintains a healthy financial profile ensuring compliance with state, federal, and local principles. When hiring accounting staff for your company, make sure they’re familiar with all financial laws and regulations that apply in your region and are specific to your industry.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Marketing</span>
              <p>A content manager is typically in charge of every phase of content, from inception through to promotion. Depending on the makeup of the marketing department, they may also be in charge of the full content strategy and measuring and reporting results.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Operation</span>
              <p>“Content operations” encompasses the set of processes, people and technologies for strategically planning, distributing and analyzing content. Content operations should align with business priorities, help improve collaboration and are increasingly becoming a core requirement for content teams.</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p></p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

        <?php 
        $query="SELECT * from testimonials";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="admin/upload/<?=$row['testimonials_img'];?>" class="testimonial-img" alt="">
                  <h3><?=$row['testimonials_name'];?></h3>
                  <h4><!-- Ceo &amp; Founder -->Aquatrack Customer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                   "I' am happy with product.It was a much better purchase (better quality,durable)
than the dispense.I bought from auatrack company which started leaking within a year.
This company is also provide best quality of water."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <?php
          }
          ?>

          <!--   <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Aquatrack Customer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "The Water Jar is of Good Quality and also received in a good condition.The price
is little bit more. otherwise the product is a must buy.Also this company provide best
services of water jar delivery system within the time of delivery."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Aquatrack Customer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "I' am happy with product.It was a much better purchase (better quality,durable)
than the dispense.I bought from auatrack company which started leaking within a year.
This company is also provide best quality of water."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Aquatrack Customer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "The Water Jar is of Good Quality and also received in a good condition.The price
is little bit more. otherwise the product is a must buy.Also this company provide best
services of water jar delivery system within the time of delivery."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Aquatrack Customer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                   "I' am happy with product.It was a much better purchase (better quality,durable)
than the dispense.I bought from auatrack company which started leaking within a year.
This company is also provide best quality of water."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div> -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

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