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
   <h2 class="text-center mt-2 font-weight-bold text-white bg-dark p-3">Testimonials</h2>
    <form action="testimonials.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="mt-2 col-md-6">
                <label>Image:</label>
                <input type="file" name="testimonials_img" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Name:</label>
                <input type="text" name="testimonials_name" class="form-control" required>
            </div>
            
            
            <div class="mt-2 col-md-12 text-center">
                <button class="btn btn-primary">Save</button>
            </div>
    </form>
</div>
<div class="col-md-12">
    <h1 class="text-uppercase text-center font-weight-bold text-white mt-3 bg-dark p-2">Testimonials Member List</h1>
    <table class="table table-bordered table-striped table-bordered  font-weight-bold">
        <tr class="font-weight-bold text-center">
            <th>Sr.No</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        <?php 
        $query="SELECT * from testimonials";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="testimonials.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            <td>
                <input type="hidden" name="testimonials_id" value="<?=$row['testimonials_id'];?>" class="form-control">
                <input type="hidden" name="testimonials_img" value="<?=$row['testimonials_img'];?>" class="form-control">
                <input type="file" name="testimonials_img" class="form-control">
                <img src="upload/<?=$row['testimonials_img'];?>" style="height:100px;">
            </td>
            <td>
                <input type="text" name="testimonials_name1" value="<?=$row['testimonials_name'];?>" class="form-control">
             </td>
             
             
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="testimonials.php?deleteid=<?=$row['testimonials_id'];?>&img=<?=$row['testimonials_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are You Sure ?');" type="button">Delete</button></a>
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
function image($name,$size,$temp,$path)
{
$ext=explode(".",$name);//abc.a.jpg
$a=rand(1,9999)."testimonials.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['testimonials_name'])) {
$name=$_FILES['testimonials_img']['name'];
$size=$_FILES['testimonials_img']['size'];
$tmp=$_FILES['testimonials_img']['tmp_name'];
$path="upload/";
$testimonials_img=image($name,$size,$tmp,$path);
$query="INSERT INTO testimonials(testimonials_name, testimonials_img) VALUES ('".$_POST['testimonials_name']."','".$testimonials_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Success !!!!');window.location.href='testimonials.php';</script>";
}
else{
echo "not ok";
}
}




if (isset($_GET['deleteid'])) {
$query="DELETE FROM testimonials where testimonials_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data');window.location.href='testimonials.php';</script>";
}
else{
    echo "error";
}
}


if (isset($_POST['testimonials_name1'])) {
if ($_FILES['testimonials_img']['name']!="") {
$name=$_FILES['testimonials_img']['name'];
$size=$_FILES['testimonials_img']['size'];
$tmp=$_FILES['testimonials_img']['tmp_name'];
$path="upload/";
$testimonials_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['testimonials_img'];
unlink($path1);
}
else{
$testimonials_img=$_POST['testimonials_img'];
}
$query="UPDATE testimonials SET testimonials_name='".$_POST['testimonials_name1']."',testimonials_img='".$testimonials_img."' WHERE testimonials_id='".$_POST['testimonials_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data');window.location.href='testimonials.php';</script>";
}
else{
    echo "error";
}
}
?>


