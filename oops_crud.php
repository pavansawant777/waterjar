



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

  
  <div class="container bg-success"> 
    <?php 
    $obj = new database();
   if (isset($_GET['editid'])){
  
  $editid = $_GET['editid'];

  $myrecord = $obj->displayRecordById($editid);

   //  print_r($myrecord);

  ?>


                  <form action="oops_crud.php" method="post">
              <div class="row">
                
                 <div class="col-md-12 text-center text-white"><h1>Php CRUD using OOP Approch</h1></div>

                 <div class="col-md-6">
                  <label>Name:</label>
                  <input type="text" name="name" value="<?php echo $myrecord['name'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>lastname:</label>
                  <input type="text" name="l_name" value="<?php echo $myrecord['l_name'];?>" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>address:</label>
                  <input type="text" name="address" value="<?php echo $myrecord['address'];?>" class="form-control" required>
                 </div>


            

                 <div class="col-md-12 text-center mt-5">
                  <input type="hidden" name="hid" value="<?php echo $myrecord['id'];?>">
                  <input type="submit" name="update1" value="update1"></div>

              </div>
              </form>




  <?php 


        }else{


    ?>
                  <form action="oops_crud.php" method="post">
              <div class="row">
                
                 <div class="col-md-12 text-center text-primary"><h1>PHP CRUD using OOP Approch</h1></div>

                 <div class="col-md-6">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>lastname:</label>
                  <input type="text" name="l_name" class="form-control" required>
                 </div>


                 <div class="col-md-6">
                  <label>address:</label>
                  <input type="text" name="address" class="form-control" required>
                 </div>


            

                 <div class="col-md-12 text-center bg-success mt-5">
                  <input type="submit" name="submit"></div>

              </div>
              </form>

              <?php 
                    }
            
              ?>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5 text-center"><h1>Record</h1></div>
  </div>

  <table class="table table-stripped table-hover table-calender table-bordered">
    <tr>
      <th>Sr.no</th>
      <th>Name</th>
      <th>Last Name</th>
      <th>Address</th>
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

          <td><?php echo $value['l_name'];?></td>
          <td><?php echo $value['address'];?></td>
          
            <td>
              <a href="oops_crud.php?editid=<?php echo $value['id'];?>" class="btn btn-warning">Edit</a>
              <a href="oops_crud.php?deleteid=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
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
  private $dname ='crud_oop';

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
    $l_name = $_POST['l_name'];
    $address = $_POST['address'];

    $sql = "INSERT INTO user(name,l_name,address) VALUES('$name','$l_name','$address')";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('data insert Successfully');</script>";

  echo "<script>window.location.href='oops_crud.php'</script>";

    }// if close

  }// insert function close

 // select process
  public function displayRecord(){
    $sql = "SELECT * FROM user";
    $result = $this->conn->query($sql);
      while($row = $result->fetch_assoc()){
        $data[]=$row;

        

      }// while close
      return $data;
      if ($row) {
          
  echo "<script>alert('data display Successfully');</script>";
  echo "<script>window.location.href='oops_crud.php'</script>";


        }

  

  }// select close


  //update part started

  public function displayRecordById($editid){
    $sql = "SELECT * FROM user WHERE id='$editid'";

    $result = $this->conn->query($sql);
    if ($result->num_rows==1) {

      $row = $result->fetch_assoc();
      return $row;
      
    }

  }// displayRecordById close


  public function updateRecord($post){
    $name = $post['name'];
    $l_name = $post['l_name'];
    $address = $post['address'];
    $editid = $post['hid'];

    $sql = "UPDATE user SET name='$name',l_name='$l_name',address='$address' WHERE id='$editid'";

    $result = $this->conn->query($sql);

    if ($result) {
  echo "<script>alert('data update Successfully');</script>";
  echo "<script>window.location.href='oops_crud.php'</script>";

      
    
    }// if close

  }// update function close


  // delete process

  public function deleteRecord($delid){

    $sql = "DELETE FROM user WHERE id='$delid'";

    $result = $this->conn->query($sql);

    if ($result) {
      
  echo "<script>alert('Delete Successfully');</script>";
  echo "<script>window.location.href='oops_crud.php'</script>";

      
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
