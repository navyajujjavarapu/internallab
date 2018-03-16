<?php
include "connect.php";
session_start();
if(isset($_POST['sub'])){
    $photoname=$_POST['picname'];
    $filetmp=$_FILES["img"]["tname"];
    $filename=$_FILES["image"]["name"];
    move_uploaded_file($filetmp,"/images/uploads/".$filename);
    $qry="INSERT INTO `photos` (`category`,`photo`) VALUES ('$photoname','$filename');";
    mysqli_query($conn,$qry) or die("connection failed: ". mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adding photos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Ading photos</h1>
            
        </div>
        <form class="form" method='post' action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="picname">Photo Name : </label>
                <input type="text" class="form-control " placeholder="Enter Photo Name" name="photoname">
            </div>
            <div class="form-group">
                <input type="file" name="img" class="btn btn-primary">
            </div>
            
            <div class="form-group">
                <input type="submit" name="sub" value="Add Photo" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
