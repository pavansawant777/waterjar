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
    <h1 class="font-weight-bold text-uppercase text-center text-white bg-dark p-2 mt-4">How it work Image</h1>
    <form action="bgimg.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="mt-2 col-md-6">
                <label>Image:</label>
                <input type="file" name="bgimg_img" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Title:</label>
                <input type="text" name="bgimg_title" class="form-control" required>
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
        $query="SELECT * from bgimg";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="bgimg.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            <td>
                <input type="hidden" name="bgimg_id" value="<?=$row['bgimg_id'];?>" class="form-control">
                <input type="hidden" name="bgimg_img" value="<?=$row['bgimg_img'];?>" class="form-control">
                <input type="file" name="bgimg_img" class="form-control">
                <img src="upload/<?=$row['bgimg_img'];?>" style="height:100px;">
            </td>
            <td>
                <input type="text" name="bgimg_title1" value="<?=$row['bgimg_title'];?>" class="form-control">
             </td>
             
             
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="bgimg.php?deleteid=<?=$row['bgimg_id'];?>&img=<?=$row['bgimg_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are you Sure ?');" type="button">Delete</button></a>
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
$a=rand(1,9999)."bgimg.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}

if (isset($_POST['bgimg_title'])) {
$name=$_FILES['bgimg_img']['name'];
$size=$_FILES['bgimg_img']['size'];
$tmp=$_FILES['bgimg_img']['tmp_name'];
$path="upload/";
$bgimg_img=image($name,$size,$tmp,$path);
$query="INSERT INTO bgimg(bgimg_title,bgimg_img) VALUES ('".$_POST['bgimg_title']."','".$bgimg_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Success !!!!');window.location.href='bgimg.php';</script>";
}
else{
echo "not ok";
}
}

if (isset($_GET['deleteid'])) {
$query="DELETE FROM bgimg where bgimg_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data');window.location.href='bgimg.php';</script>";
}
else{
    echo "error";
}
}


if (isset($_POST['bgimg_title1'])) {
if ($_FILES['bgimg_img']['name']!="") {
$name=$_FILES['bgimg_img']['name'];
$size=$_FILES['bgimg_img']['size'];
$tmp=$_FILES['bgimg_img']['tmp_name'];
$path="upload/";
$bgimg_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['bgimg_img'];
unlink($path1);
}
else{
$bgimg_img=$_POST['bgimg_img'];
}
$query="UPDATE bgimg SET bgimg_title='".$_POST['bgimg_title1']."',bgimg_img='".$bgimg_img."' WHERE bgimg_id='".$_POST['bgimg_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data');window.location.href='bgimg.php';</script>";
}
else{
    echo "error";
}
}
?>


