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
    <form action="baimg.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="mt-2 col-md-6">
                <label>Image:</label>
                <input type="file" name="baimg_img" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Title:</label>
                <input type="text" name="baimg_title" class="form-control" required>
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
            <th>Photo</th>
            <th>Title</th>
            <th>Status</th>
        </tr>
        <?php 
        $query="SELECT * from baimg";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="baimg.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            <td>
                <input type="hidden" name="baimg_id" value="<?=$row['baimg_id'];?>" class="form-control">
                <input type="hidden" name="baimg_img" value="<?=$row['baimg_img'];?>" class="form-control">
                <input type="file" name="baimg_img" class="form-control">
                <img src="upload/<?=$row['baimg_img'];?>" style="height:100px;">
            </td>
            <td>
                <input type="text" name="baimg_title1" value="<?=$row['baimg_title'];?>" class="form-control">
             </td>
             
             
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="baimg.php?deleteid=<?=$row['baimg_id'];?>&img=<?=$row['baimg_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are you Sure ?');" type="button">Delete</button></a>
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
$ext=explode(".",$name);
$a=rand(1,9999)."baimg.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['baimg_title'])) {
$name=$_FILES['baimg_img']['name'];
$size=$_FILES['baimg_img']['size'];
$tmp=$_FILES['baimg_img']['tmp_name'];
$path="upload/";
$baimg_img=image($name,$size,$tmp,$path);
$query="INSERT INTO baimg(baimg_title,baimg_img) VALUES ('".$_POST['baimg_title']."','".$baimg_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Success !!!!');window.location.href='baimg.php';</script>";
}
else{
echo "not ok";
}
}

if (isset($_GET['deleteid'])) {
$query="DELETE FROM baimg where baimg_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data');window.location.href='baimg.php';</script>";
}
else{
    echo "error";
}
}


if (isset($_POST['baimg_title1'])) {
if ($_FILES['baimg_img']['name']!="") {
$name=$_FILES['baimg_img']['name'];
$size=$_FILES['baimg_img']['size'];
$tmp=$_FILES['baimg_img']['tmp_name'];
$path="upload/";
$baimg_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['baimg_img'];
unlink($path1);
}
else{
$baimg_img=$_POST['baimg_img'];
}
$query="UPDATE baimg SET baimg_title='".$_POST['baimg_title1']."',baimg_img='".$baimg_img."' WHERE baimg_id='".$_POST['baimg_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data');window.location.href='baimg.php';</script>";
}
else{
    echo "error";
}
}
?>


