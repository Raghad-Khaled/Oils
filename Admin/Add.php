<?php
include '../control.php';
if(isset($_POST['submit']))
{
$se3a= $_POST['se3a'];
$title=$_POST['title'];
$prise=$_POST['prise'];
$benefits=$_POST['benefits'];



$targetDir = "../images/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
     //Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','JPJ','PNG','JPEG','GIF');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $oil=new oil;
            $oil->InsertProduct($title,$se3a,$prise,$benefits,$fileName);
        }
    }else{
        echo "<script> alert(' only JPG, JPEG, PNG &GIF files are allowed to upload.');  window.location.href='index.html';</script>";
    }
}


echo "<script> alert('شكرا تم اضافة المنتج ');  window.location.href='index.html';</script>";
}
?>