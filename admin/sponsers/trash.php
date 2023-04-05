<?php
//$_id =2;

// var_dump($_GET);
$_id = $_GET['id'];
$_is_deleted =1;

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `sponsers` SET `is_deleted` = :is_deleted where id = :id";

$stmt = $conn->prepare($query);

$stmt ->bindParam(':id', $_id);
$stmt ->bindParam(':is_deleted', $_is_deleted);
$result = $stmt->execute();


var_dump($result);

header("location:index.php");


