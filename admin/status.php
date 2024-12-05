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
    <h1 class="font-weight-bold text-uppercase text-center text-white bg-dark p-2 mt-4">Jar Status</h1>
    <form action="status.php" method="post" enctype="multipart/form-data">
        <div class="row">
           
            <div class="mt-2 col-md-6">
                <label>Title:</label>
                <input type="text" name="status_title" class="form-control" required>
            </div>
           
            
            <div class="mt-2 col-md-6">
                <label>Description:</label>
                <input type="text" name="status_desc" class="form-control" required>
            </div>
            
            <div class="mt-2 col-md-12 text-center">
                <button class="btn btn-primary">Save</button>
            </div>
    </form>
</div>
<div class="col-md-12">
  <h1 class="text-uppercase text-center font-weight-bold text-white mt-3 bg-dark p-2">List</h1>
    <table class="table table-bordered table-striped table-bordered  font-weight-bold">
        <tr class="font-weight-bold text-center">
            <th>Sr.No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
        <?php 
        $query="SELECT * from status";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="status.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            
            <td>
                <input type="hidden" name="status_id" value="<?=$row['status_id'];?>" class="form-control">
                <input type="text" name="status_title1" value="<?=$row['status_title'];?>" class="form-control">
             </td>
            
             <td>
                <input type="text" name="status_desc" value="<?=$row['status_desc'];?>" class="form-control">
             </td>
             
             
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="status.php?deleteid=<?=$row['status_id'];?>"><button class="btn btn-danger" onclick="return confirm('Are you Sure ?');" type="button">Delete</button></a>
            </td>
        </tr>
        </form>
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


if (isset($_POST['status_title'])) {

$query="INSERT INTO status(status_title,status_desc) VALUES ('".$_POST['status_title']."','".$_POST['status_desc']."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfully Insert Data!!');window.location.href='status.php';</script>";
}
else{
echo "not ok";
}
}




if (isset($_GET['deleteid'])) {
$query="DELETE FROM status where status_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data !!');window.location.href='status.php';</script>";
}
else{
    echo "error";
}
}



if (isset($_POST['status_title1'])) {
$query="UPDATE status SET status_title='".$_POST['status_title1']."',status_desc='".$_POST['status_desc']."' WHERE status_id='".$_POST['status_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data');window.location.href='status.php';</script>";
}
else{
    echo "error";
}
}
?>


