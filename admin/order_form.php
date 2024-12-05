<?php include "head.php"; ?>
<?php include "conn.php"; ?>
</head>
<body class="mod-bg-1 ">
<div class="page-wrapper">
<div class="page-inner">
<?php include "nav.php"; ?>
<div class="page-content-wrapper">
<?php include "nav1.php"; ?>
<main id="js-page-content" role="main" class="page-content" style="padding:0px">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
  <h1 class="font-weight-bold text-uppercase text-center text-white bg-dark mt-4 p-3">Appointment List</h1>
</div>
<div class="col-md-12">
  <table class="table table-bordered table-striped table-bordered  font-weight-bold">
    <tr class="font-weight-bold text-warning bg-dark text-center">
      <th>Sr.No</th>
      <th>Name</th>
      <th>Phone No</th>
      <th>Email id</th>
      <th>Pin code</th>
      <th>Address</th>
      <th>Quantity</th>
      <th>Capacity</th>
      <th>Date of Delivery</th>
      <th>Water Category</th>
      <th>Company Name</th>
      <th>Status</th>
    </tr>
    <?php
    $query="SELECT * from order_form  ORDER By  o_id DESC";
    $fire=mysqli_query($conn,$query);
    $i=1;
    while($row=mysqli_fetch_assoc($fire)){
      ?>
      <tr>
        <td><?=$i++;?></td>
        <td><?=$row['c_name'];?></td>
        <td><?=$row['c_phone'];?></td>
        <td><?=$row['c_email'];?></td>
        <td><?=$row['c_pin'];?></td>
        <td><?=$row['c_address'];?></td>
        <td><?=$row['c_quantity'];?></td>
        <td><?=$row['c_capacity'];?></td>
        <td><?=$row['c_date'];?></td>
        <td><?=$row['c_category'];?></td>
        <td><?=$row['c_cname'];?></td>
        <td>
          <a href="order_form.php?id=<?=$row['o_id'];?>"><button class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
</div>
</div>
</div>
</main>
</div>
</div>
</div>
<?php include "footer.php"; ?>
<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
</body>
</html>
<?php 
if (isset($_GET['id'])) {
  $query="DELETE from order_form where  o_id='".$_GET['id']."'";
  $fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfuly Deleted Data !!');window.location.href='order_form.php';</script>";
}
else{
echo "not ok";
}
}

?>

