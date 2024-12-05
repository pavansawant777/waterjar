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
	<h1 class="font-weight-bold text-uppercase text-center text-white bg-dark p-2 mt-4">Company Details</h1>
	<form action="company_details.php" method="post" enctype="multipart/form-data">
	<div class="row text-warning bg-dark p-5 p-5">
	    <div class="col-md-6">
		<label class="font-weight-bold text-warning h4">Title</label>
		<input type="text" name="c_title" class="form-control"  required>
	    </div>
	    <div class="col-md-6">c_title
		<label class="font-weight-bold text-warning h4">Description</label>
		<input type="text" name="c_desc" class="form-control" required>
	    </div>
	    <div class="col-md-12 text-center mt-4">
	    	<button class="btn btn-primary">Save</button>
	    </div>
	</div>
</form>
</div>
<div class="col-md-12">
	<h1 class="text-center">Company Details List</h1>
	<table class="table table-bordered table-striped table-bordered  font-weight-bold">
		<tr class="font-weight-bold text-warning bg-dark text-center">
			<th>Sr.No</th>
			<th>Title</th>
			<th>Description</th>
			<th>Status</th>
		</tr>
		<?php 
		$query="select * from company_details";
		$fire=mysqli_query($conn,$query);
		$i=1;
		while($row=mysqli_fetch_assoc($fire)){
		?>
		<tr>
			<td><?=$i++;?></td>
			<td><?=$row['c_title']?></td>
			<td><?=$row['c_desc']?></td>
			<td>

                <a href="company_details.php?deleteid=<?=$row['c_id'];?>"><button class="btn btn-danger" onclick="return confirm('Are you Sure ?');" type="button">Delete</button></a>
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

if (isset($_POST['c_title'])) {
 $query="INSERT INTO `company_details`( `c_title`, `c_desc`) VALUES ('".$_POST['c_title']."','".$_POST['c_desc']."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Success !!!!');window.location.href='company_details.php';</script>";
}
else{
echo "not ok";
}
}


if (isset($_GET['deleteid'])) {
$query="DELETE FROM company_details where c_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data !!');window.location.href='company_details.php';</script>";
}
else{
    echo "error";
}
}


?> 
















