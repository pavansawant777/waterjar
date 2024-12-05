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
    <h2 class="text-center mt-2 font-weight-bold text-white bg-dark p-3">Slider</h2>
    <form action="slider.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="mt-2 col-md-6 font-weight-bold">
                <label>Image:</label>
                <input type="file" name="slider_img" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6 font-weight-bold">
                <label>Title:</label>
                <input type="text" name="slider_title" class="form-control" required>
            </div>
            <div class="mt-2 col-md-12 text-center">
                <button class="btn btn-primary">Save</button>
            </div>
    </form>
</div>
<div class="col-md-12">
    <h1 class="text-uppercase text-center font-weight-bold text-white mt-3 bg-dark p-2">slider List</h1>
    <table class="table table-bordered table-striped table-bordered  font-weight-bold">
        <tr class="font-weight-bold text-center">
            <th>Sr.No</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Status</th>
        </tr>
        <?php 
        $query="SELECT * from slider";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="slider.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            <td>
                <input type="hidden" name="slider_id" value="<?=$row['slider_id'];?>" class="form-control">
                <input type="hidden" name="slider_img" value="<?=$row['slider_img'];?>" class="form-control">
                <input type="file" name="slider_img" class="form-control">
                <img src="upload/<?=$row['slider_img'];?>" style="height:100px;">
            </td>
            <td>
                <input type="text" name="slider_title1" value="<?=$row['slider_title'];?>" class="form-control">
             </td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="slider.php?deleteid=<?=$row['slider_id'];?>&img=<?=$row['slider_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are U Sure');" type="button">Delete</button></a>
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
$a=rand(1,9999)."slider.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['slider_title'])) {
$name=$_FILES['slider_img']['name'];
$size=$_FILES['slider_img']['size'];
$tmp=$_FILES['slider_img']['tmp_name'];
$path="upload/";
$slider_img=image($name,$size,$tmp,$path);
$query="INSERT INTO slider(slider_title, slider_img) VALUES ('".$_POST['slider_title']."','".$slider_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfully Insert Data !!');window.location.href='slider.php';</script>";
}
else{
echo "not ok";
}
}

if (isset($_GET['deleteid'])) {
$query="DELETE FROM slider where slider_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data !!');window.location.href='slider.php';</script>";
}
else{
    echo "error";
}
}


if (isset($_POST['slider_title1'])) {
if ($_FILES['slider_img']['name']!="") {
$name=$_FILES['slider_img']['name'];
$size=$_FILES['slider_img']['size'];
$tmp=$_FILES['slider_img']['tmp_name'];
$path="upload/";
$slider_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['slider_img'];
unlink($path1);
}
else{
$slider_img=$_POST['slider_img'];
}
$query="UPDATE slider SET slider_title='".$_POST['slider_title1']."',slider_img='".$slider_img."' WHERE slider_id='".$_POST['slider_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data !!');window.location.href='slider.php';</script>";
}
else{
    echo "error";
}
}
?>


