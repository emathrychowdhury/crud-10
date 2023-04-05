<?php
//$_id =2;

// var_dump($_GET);
$_id = $_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `sponsers` where id = :id";

$stmt = $conn->prepare($query);

$stmt ->bindParam(':id', $_id);

$result = $stmt->execute();


var_dump($result);

header("location:index.php");


