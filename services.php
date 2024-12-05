<?php
include "head.php";
include "nav.php";
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/water bacg2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
















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


              <form action="services.php" method="post">
              <div class="row">
                
                 <div class="col-md-12 text-center font-weight-bold text-uppercase text-white"><h1>Distributor Outstanding</h1></div>

                 <div class="col-md-6">
                  <label>Distributor Name:</label>
                  <input type="text" name="n_name" value="<?php echo $myrecord['n_name'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Distributor Area:</label>
                  <input type="text" name="a_area" value="<?php echo $myrecord['a_area'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Total Jar Amount:</label>
                  <input type="text" name="t_amount" value="<?php echo $myrecord['t_amount'];?>" class="form-control" required>
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
                  <form action="services.php" method="post" class="mt-5">
              <div class="row">
                
                 <div class="col-md-12 text-center font-weight-bold text-white mt-5"><h1>Distributor Outstanding</h1></div>

                 <div class="col-md-6">
                  <label>Customer Name:</label>
                  <input type="text" name="n_name" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Distributor Area:</label>
                  <input type="text" name="a_area" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>Total Jar Amount:</label>
                  <input type="text" name="t_amount" class="form-control" required>
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
    <div class="col-md-12 mt-5 text-center font-weight-bold"><h1>Distributor Outstanding Wise Management Record</h1></div>
  </div>

  <table class="table table-stripped table-hover table-calender table-bordered mt-5">
    <tr>
      <th>Sr.no</th>
      <th>Distributor Name</th>
      <th>Distributor Area</th>
      <th>Total Jar Amount</th>
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
    

          <td><?php echo $value['n_name'];?></td>
          <td><?php echo $value['a_area'];?></td>
          <td><?php echo $value['t_amount'];?></td>
          <td><?php echo $value['d_date'];?></td>
          
            <td>
              <a href="services.php?editid=<?php echo $value['id'];?>" class="btn btn-warning">Edit</a>
              <a href="services.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
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
    $n_name = $_POST['n_name'];
    $a_area = $_POST['a_area'];
    $t_amount = $_POST['t_amount'];
    $d_date = $_POST['d_date'];

    $sql = "INSERT INTO dist_mng(n_name,a_area,t_amount,d_date) VALUES('$n_name','$a_area','$t_amount','$d_date')";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('Data Insert Successfully');</script>";

  echo "<script>window.location.href='services.php'</script>";

    }// if close

  }// insert function close

 // select process
  public function displayRecord(){
    $sql = "SELECT * FROM dist_mng";
    $result = $this->conn->query($sql);
      while($row = $result->fetch_assoc()){
        $data[]=$row;

        

      }// while close
      return $data;
      if ($row) {
          
  echo "<script>alert('Data Display Successfully');</script>";
  echo "<script>window.location.href='services.php'</script>";


        }

  

  }// select close


  //update part started

  public function displayRecordById($editid){
    $sql = "SELECT * FROM dist_mng WHERE id='$editid'";

    $result = $this->conn->query($sql);
    if ($result->num_rows==1) {

      $row = $result->fetch_assoc();
      return $row;
      
    }

  }// displayRecordById close


  public function updateRecord($post){
    $n_name = $post['n_name'];
    $a_area = $post['a_area'];
    $t_amount = $post['t_amount'];
    $d_date = $post['d_date'];
    $editid = $post['hid'];

    $sql = "UPDATE dist_mng SET n_name='$n_name',a_area='$a_area',t_amount='$t_amount',d_date='$d_date' WHERE id='$editid'";

    $result = $this->conn->query($sql);

    if ($result) {
  echo "<script>alert('Data Update Successfully');</script>";
  echo "<script>window.location.href='services.php'</script>";

      
    
    }// if close

  }// update function close


  // delete process

  public function deleteRecord($delid){

    $sql = "DELETE FROM dist_mng WHERE id='$delid'";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('Delete Data Successfully');</script>";
  echo "<script>window.location.href='services.php'</script>";

      
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

































    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Asperiores Commodit</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Velit Doloremque</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
 -->
   





    <!-- ======= Alt Services Section 2 ======= -->
    <?php
include "conn.php";
    ?>
                <div class="col-lg-6 wow fadeInUp bg-dark p-5 mt-5" data-wow-delay="0.5s" style="margin-left:400px;">
                    <h6 class="text-primary text-uppercase mb-2"></h6>
                    <h1 class="display-6 font-weight-bold text-center mt-5 text-white mb-5">Order Form</h1>
                    <form action="services.php" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oname" name="c_name">
                                    <label for="oname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ophone" name="c_phone">
                                    <label for="ophone">Phone No</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oemail" name="c_email">
                                    <label for="oemail">Email Id</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="opin" name="c_pin">
                                    <label for="opin">Pin Code</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oaddress" name="c_address">
                                    <label for="oaddress">Address</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="oquan" name="c_quantity">
                                    <label for="oquan">Quantity</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ocap" name="c_capacity">
                                    <label for="ocap">Capacity</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control border-0 bg-light" id="odate" name="adate">
                                    <label for="odate">Date of Delivery</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ocat" name="c_category">
                                    <label for="ocat">Water Category</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="ocom" name="c_cname">
                                    <label for="ocom">Company Name</label>
                                </div>
                            </div>
                      
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary font-weight-bold w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

<?php
//print_r($_POST);
if (isset($_POST['c_name'])) {
 echo  $query="INSERT INTO order_form(c_name,c_phone,c_email, c_pin,c_address, c_quantity, c_capacity,c_category,c_cname,c_date) VALUES ('".$_POST['c_name']."','".$_POST['c_phone']."','".$_POST['c_email']."','".$_POST['c_pin']."','".$_POST['c_address']."','".$_POST['c_quantity']."','".$_POST['c_capacity']."','".$_POST['c_category']."','".$_POST['c_cname']."','".date('Y-m-d')."')";
   $fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfully Send Your Order.Thank You !!');window.location.href='services.php';</script>";
}
else{
echo "not Send";
}
}
?>

   
<h5 class="mt-5"></h5>
   

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