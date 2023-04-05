<?php
//$_id =2;

// var_dump($_GET);
$webroot = "http://localhost/crud-10/";
$_id = $_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `sponsers` where id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);

$result = $stmt->execute();

$sponsers = $stmt->fetch();

// var_dump($sponsers);

?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <h1 class="text-center mb-5">Show</h1>

          <dl class="row">
            <dt class="col-sm-3">ID:</dt>
            <dt class="col-sm-9"><?= $sponsers['id'] ?></dt>
          </dl>


          <dl class="row">
            <dt class="col-sm-3">Title:</dt>
            <dt class="col-sm-9"><?= $sponsers['title'] ?></dt>
          </dl>

          <dl class="row">
            <dt class="col-sm-3">Details:</dt>
            <dt class="col-sm-9"><?= $sponsers['details'] ?></dt>
          </dl>

          <dl class="row">
            <dt class="col-sm-3">Picture:</dt>
            <dt class="col-sm-9"><?= $sponsers['picture'] ?>
              <img src="<?= $webroot; ?>uploads/<?= $sponsers['picture'] ?>" alt="" class="img-fluid">
            </dt>
          </dl>

          <dl class="row">
            <dt class="col-sm-3">Is Active:</dt>
            <dt class="col-sm-9"><?= $sponsers['is_active'] ? "Active" : "inactive"; ?></dt>
          </dl>

          <dl class="row">
            <dt class="col-sm-3">Created At:</dt>
            <dt class="col-sm-9"><?= $sponsers['created_at'] ?></dt>
          </dl>
          <dl class="row">
            <dt class="col-sm-3">Updated At:</dt>
            <dt class="col-sm-9"><?= $sponsers['updated_at'] ?></dt>
          </dl>

          
          <a href="index.php" class="btn btn-info">All sponsers</a>



        </div>
      </div>
    </div>

  </section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>