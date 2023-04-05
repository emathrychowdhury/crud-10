<?php

$approot = $_SERVER['DOCUMENT_ROOT']."/crud-10/";

//Working with Picture

$file_name = "IMG_".time(). "_".$_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $approot."/uploads/".$file_name;
$is_file_moved = move_uploaded_file($target, $destination);


if($is_file_moved){
  $_picture = $file_name;
}else{
  $_picture = null;
}

// var_dump($_POST);

$_title  = $_POST['title'];
$_details  = $_POST['details'];

if(array_key_exists('is_active',$_POST)){
  $_is_active =$_POST['is_active'];
}
else{
$_is_active =0;
}

$_created_at = date("Y-m-d H:i:s", time());

// $_picture = $_FILES['picture']['name'];

// echo $_title;



$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




//insert query
$query = "INSERT INTO `sponsers` (`title`,`details`,`picture`,`is_active`,`created_at`) VALUES (:title,:details,:picture,:is_active,:created_at)";
$stmt = $conn->prepare($query);

$stmt ->bindParam(':title', $_title);
$stmt ->bindParam(':details', $_details);
$stmt ->bindParam(':picture', $_picture);
$stmt ->bindParam(':is_active', $_is_active);
$stmt ->bindParam(':created_at', $_created_at);


$result = $stmt->execute();
// var_dump($result);

header("location:index.php")







?>