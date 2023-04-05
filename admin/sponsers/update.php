<?php

$approot = $_SERVER['DOCUMENT_ROOT']."/crud-10/";

//Working with Picture

if($_FILES['picture']['name'] !=""){
  $file_name = "IMG_".time(). "_".$_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $approot."/uploads/".$file_name;
$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
  $_picture = $file_name;
}else{
  $_picture = null;
}
}
else{
  $_picture = $_POST['old_picture'];
}

if(array_key_exists('is_active',$_POST)){
  $_is_active =$_POST['is_active'];
}
else{
$_is_active =0;
}




// var_dump($_POST);
$_id  = $_POST['id'];
$_title  = $_POST['title'];
$_details  = $_POST['details'];

$_updated_at = date("Y-m-d H:i:s",time());
// echo $_title;



$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




//Delete query
$query = "UPDATE `sponsers` SET `title` = :title, `details`= :details,`picture`=:picture,`is_active` =:is_active,`updated_at` = :updated_at WHERE `id` = :id; ";
$stmt = $conn->prepare($query);

$stmt ->bindParam(':id', $_id);
$stmt ->bindParam(':title', $_title);
$stmt ->bindParam(':details', $_details);
$stmt ->bindParam(':picture', $_picture);
$stmt ->bindParam(':is_active', $_is_active);
$stmt ->bindParam(':updated_at', $_updated_at);


$result = $stmt->execute();

header("location:index.php");









?>