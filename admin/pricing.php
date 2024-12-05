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
    <h2 class="text-center mt-2 font-weight-bold text-white bg-dark p-3">Pricing Part</h2>
    <form action="pricing.php" method="post" enctype="multipart/form-data">
        <div class="row">
           <div class="mt-2 col-md-6">
                <label>Image:</label>
                <input type="file" name="pricing_img" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Title:</label>
                <input type="text" name="pricing_title" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Color:</label>
                <input type="text" name="pricing_color" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Material:</label>
                <input type="text" name="pricing_material" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Usage/Application:</label>
                <input type="text" name="pricing_app" class="form-control" required>
            </div>
            <div class="mt-2 col-md-6">
                <label>Capacity:</label>
                <input type="text" name="pricing_capacity" class="form-control" required>
            </div>
             <div class="mt-2 col-md-6">
                <label>Pattern:</label>
                <input type="text" name="pricing_pattern" class="form-control" required>
            </div>
             <div class="mt-2 col-md-6">
                <label>Packaging type:</label>
                <input type="text" name="pricing_packaging" class="form-control" required>
            </div>
             <div class="mt-2 col-md-6">
                <label>Price:</label>
                <input type="text" name="pricing_price" class="form-control" required>
            </div>
             
            <div class="mt-2 col-md-12 text-center">
                <button class="btn btn-primary">Save</button>
            </div>
    </form>
</div>
<div class="col-md-12">
    <h1 class="text-uppercase text-center font-weight-bold text-white mt-3 bg-dark p-2">Pricing List</h1>
    <table class="table table-bordered table-striped table-bordered  font-weight-bold">
        <tr class="font-weight-bold text-center">
            <th>Sr.No</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Color</th>
            <th>Material</th>
            <th>Usage/Application</th>
            <th>Capacity</th>
            <th>Pattern</th>
            <th>Packaging type</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        <?php 
        $query="SELECT * from pricing";
        $fire=mysqli_query($conn,$query);
        $i=1;
        while($row=mysqli_fetch_assoc($fire)){
        ?>
        <form action="pricing.php" method="post" enctype="multipart/form-data">
        <tr>
            <td><?=$i++;?></td>
            <td>
                <input type="hidden" name="pricing_id" value="<?=$row['pricing_id'];?>" class="form-control">
                <input type="hidden" name="pricing_img" value="<?=$row['pricing_img'];?>" class="form-control">
                <input type="file" name="pricing_img" class="form-control">
                <img src="upload/<?=$row['pricing_img'];?>" style="height:100px;">
            </td>
            <td>
                <input type="text" name="pricing_title1" value="<?=$row['pricing_title'];?>" class="form-control">
             </td>
             
             <td>
                <input type="text" name="pricing_color" value="<?=$row['pricing_color'];?>" class="form-control">
             </td>
             <td>
                <input type="text" name="pricing_material" value="<?=$row['pricing_material'];?>" class="form-control">
             </td>
             <td>
                <input type="text" name="pricing_app" value="<?=$row['pricing_app'];?>" class="form-control">
             </td>
             <td>
                <input type="text" name="pricing_capacity" value="<?=$row['pricing_capacity'];?>" class="form-control">
             </td>
             <td>
                <input type="text" name="pricing_pattern" value="<?=$row['pricing_pattern'];?>" class="form-control">
             </td>

             <td>
                <input type="text" name="pricing_packaging" value="<?=$row['pricing_packaging'];?>" class="form-control">
             </td>
             <td>
                <input type="text" name="pricing_price" value="<?=$row['pricing_price'];?>" class="form-control">
             </td>
             
            <td>
                <button class="btn btn-warning">Edit</button>
                <a href="pricing.php?deleteid=<?=$row['pricing_id'];?>&img=<?=$row['pricing_img'];?>"><button class="btn btn-danger" onclick="return confirm('Are You Sure ?');" type="button">Delete</button></a>
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
$a=rand(1,9999)."pricing.".$ext[count($ext)-1];
move_uploaded_file($temp,"$path".$a);
return $a;
}


if (isset($_POST['pricing_title'])) {
$name=$_FILES['pricing_img']['name'];
$size=$_FILES['pricing_img']['size'];
$tmp=$_FILES['pricing_img']['tmp_name'];
$path="upload/";
$pricing_img=image($name,$size,$tmp,$path);
echo $query="INSERT INTO pricing(pricing_title, pricing_color, pricing_material, pricing_app, pricing_capacity,pricing_pattern,pricing_packaging,pricing_price, pricing_img) VALUES ('".$_POST['pricing_title']."','".$_POST['pricing_color']."','".$_POST['pricing_material']."','".$_POST['pricing_app']."','".$_POST['pricing_capacity']."','".$_POST['pricing_pattern']."','".$_POST['pricing_packaging']."','".$_POST['pricing_price']."','".$pricing_img."')";
$fire=mysqli_query($conn,$query);
if ($fire) {
echo "<script>alert('Successfully Insert Your Data!!');window.location.href='pricing.php';</script>";
}
else{
echo "not ok";
}
}

if (isset($_GET['deleteid'])) {
$query="DELETE FROM pricing where pricing_id='".$_GET['deleteid']."'";
 $path='upload/'.$_GET['img'];
  unlink($path);
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Delete Data');window.location.href='pricing.php';</script>";
}
else{
    echo "error";
}
}


if (isset($_POST['pricing_title1'])) {
if ($_FILES['pricing_img']['name']!="") {
$name=$_FILES['pricing_img']['name'];
$size=$_FILES['pricing_img']['size'];
$tmp=$_FILES['pricing_img']['tmp_name'];
$path="upload/";
$pricing_img=image($name,$size,$tmp,$path);
$path1='upload/'.$_POST['pricing_img'];
unlink($path1);
}
else{
$pricing_img=$_POST['pricing_img'];
}
$query="UPDATE pricing SET pricing_title='".$_POST['pricing_title1']."',pricing_color='".$_POST['pricing_color']."',pricing_material='".$_POST['pricing_material']."',pricing_app='".$_POST['pricing_app']."',pricing_capacity='".$_POST['pricing_capacity']."',pricing_pattern='".$_POST['pricing_pattern']."',pricing_packaging='".$_POST['pricing_packaging']."',pricing_price='".$_POST['pricing_price']."',pricing_img='".$pricing_img."' WHERE pricing_id='".$_POST['pricing_id']."'";
$fire=mysqli_query($conn,$query);
if($fire){
  echo "<script>alert('Successfully Update Data');window.location.href='pricing.php';</script>";
}
else{
    echo "error";
}
}
?>


