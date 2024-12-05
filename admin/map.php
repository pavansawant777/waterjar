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
	<h1 class="font-weight-bold text-uppercase text-center bg-dark text-white p-3 mt-4">map Details</h1>
</div>
<?php 

$query="SELECT * from map";
$fire=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($fire);
//print_r($row);
?>
<div class="col-md-12">
	<form action="map.php" method="post" enctype="multipart/form-data">
	<div class="row bg-dark p-5">
	
	    
	    <div class="col-md-6">
		<label class="font-weight-bold text-warning h4">Map</label>
		<input type="text" name="c_map" class="form-control" value="<?=$row['c_map'];?>"  required>
	    </div>
	    <div class="col-md-6">
	    	<iframe src="<?=$row['c_map'];?>" style="height:100px;width:100%;margin-top:20px;"></iframe>
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
// echo "<pre>";
// print_r($_POST);
if (isset($_POST['c_map'])) {
	extract($_POST);
	 echo $query="UPDATE `map` SET `c_map`='".$c_map."' WHERE `id`='".$id."'";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Success !!!!');window.location.href='map.php';</script>";
}
else{
echo "not ok";
}
 }
?> 
