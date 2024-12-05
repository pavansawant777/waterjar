<?php
session_start();
include "head.php";
//include "nav.php";
?>

      <!-- admin  start  -->
      <div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
       
              <form action="admin.php" method="post">
              <div class="container">
                <div class="row justify-content-center mt-5 p-5" id="login">
                  <div class="col-md-5">
                    <div class="card bg-light text-white bg-dark font-weight-bold">
                      <div class="card-header">
                        <h1 class="text-center font-weight-bold text-white bg-dark  text-uppercase">Login</h1>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-12">
                          <label>Username:</label>
                          <input type="text" name="username" class="form-control" required>
                          <label>Password:</label>
                          <input type="text" name="password" class="form-control" required>
                            </div>
                          <!-- <div class="col-md-12 text-center mt-3">
                            <button class="btn btn-warning">Login</button>
                          </div> -->
                           <div class="col-md-12 text-center mt-5">
                                <button class="btn btn-primary font-weight-bold w-100 py-3 text-dark bg-warning" >Login</button>
                            </div>
                        </div>
                      </div>
                      <div class="card-footer text-center">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>



        </div>
    </div>
</div>


        <!-- admin  end -->
<?php

// include "footer.php";
?>

<?php
 if (isset($_POST['username'])) {
  $user = trim($_POST['username']);
  $password = trim($_POST['password']);
 echo  $query = "SELECT * from login WHERE (email='".$user."' OR mobile='".$user."') AND password='".$password."' ";
  $conn = mysqli_connect('localhost','root','','waterjar_project');
  $q = mysqli_query($conn,$query);
  $ar = mysqli_fetch_assoc($q);
  if (($user == $ar['mobile'] || $user == $ar['email']) && $password = $ar['password']) {
  $_SESSION['name']=$ar['name'];
  echo "<script>alert('Login Success!!!!');window.location.href='admin/index.php';</script>";
  }
  else 
  {
  echo "<script>alert('Invalid Username Password !!!!');window.location.href='admin.php';</script>";
  }
}
?>