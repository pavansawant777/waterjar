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
	<h1 class="font-weight-bold text-uppercase text-center text-white bg-dark p-2 mt-4">Contact Details</h1>
</div>
<?php 
$query="SELECT * from contact_details";
$fire=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($fire);
//print_r($row);
?> 
<div class="col-md-12">
	<form action="contact_details.php" method="post" enctype="multipart/form-data">
	<div class="row text-warning bg-dark p-5">
	    <div class="col-md-6">
		<label class="h4">Address</label>
		<input type="hidden" name="c_id" class="form-control"  value="<?=$row['c_id'];?>" required>
		<input type="text" name="c_address" class="form-control" value="<?=$row['c_address'];?>" required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Mobile Number</label>
		<input type="text" name="c_mobile" class="form-control" value="<?=$row['c_mobile'];?>"  required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Email</label>
		<input type="text" name="c_email" class="form-control" value="<?=$row['c_email'];?>"  required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Facebook Link</label>
		<input type="text" name="f_Link" class="form-control" value="<?=$row['f_Link'];?>"  required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Instagram Link</label>
		<input type="text" name="i_Link" class="form-control" value="<?=$row['i_Link'];?>"  required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Twitter Link</label>
		<input type="text" name="t_Link" class="form-control" value="<?=$row['t_Link'];?>"  required>
	    </div>
	    <div class="col-md-6">
		<label class="h4">Youtube Link</label>
		<input type="text" name="y_Link" class="form-control" value="<?=$row['y_Link'];?>"  required>
	    </div>
	    
	    
	    <div class="col-md-12 text-center mt-4">
	    	<button class="btn btn-warning">Save</button>
	    </div>
	</div>
</form>
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
if (isset($_POST['c_address'])) {
	extract($_POST);
	 $query="UPDATE contact_details SET c_address='".$c_address."',c_mobile='".$c_mobile."',c_email='".$c_email."',f_Link='".$f_Link."',i_Link='".$i_Link."',t_Link='".$t_Link."',y_Link='".$y_Link."'WHERE c_id='".$c_id."'";
	$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfully Update!!');window.location.href='contact_details.php';</script>";
}
else{
echo "not ok";
}
}

// echo "<pre>";
// print_r($_POST);


?>
