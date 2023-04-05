<?php
// $_id = 2;
$webroot = "http://localhost/crud-10/";
$_id = $_GET['id'];

//var_dump($_GET);

//Connection to database

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `sponsers` WHERE id = :id";

$stmt = $conn->prepare($query);

$stmt->bindParam(':id', $_id);

$result = $stmt-> execute();

$sponsers = $stmt->fetch();

// var_dump($sponsers);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sponsers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center">Add New Product</h1>

                    <form action="update.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3 row">
                        <div class="col-sm-9">
                        <input type="hidden" 
                        class="form-control" 
                        id="inputID" 
                        name="id" 
                        value="<?= $sponsers['id'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-3 col-form-label">Title:</label>
                        <div class="col-sm-9">
                        <input type="text" 
                        class="form-control" 
                        id="inputTitle" 
                        name="title" 
                        value="<?= $sponsers['title'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputDetails" class="col-sm-3 col-form-label">Details:</label>
                        <div class="col-sm-9">
                        <input type="text" 
                        class="form-control" 
                        id="inputTitle" 
                        name="details" 
                        value="<?= $sponsers['details'];?>">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="inputpicture" class="col-sm-3 col-form-label">Picture:</label>
                        <div class="col-sm-9">
                        <input type="file" 
                        class="form-control" 
                        id="inputpicture" 
                        name="picture" 
                        value="<?= $sponsers['picture'];?>">
                        <img src="<?=$webroot;?>uploads/<?=$sponsers['picture']?>" alt="" class="img-fluid">
                        <input
                        type="hidden"
                        name="old_picture"
                        value="<?=$sponsers['picture'];?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                            <label for="inputIsActive" class="col-sm-2 form-check-label">Is Active: </label>
                            <div class="col-sm-9">
                                <input type="checkbox" class="form-check-input" id="inputIsActive" name="is_active" value="1" <?php if ($sponsers['is_active']) : ?> checked <?php endif; ?>>
                            </div>
                        </div>



                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php" class="btn btn-info">All sponsers</a>

                    </form>
                    
                </div>
            </div>
        </div>
    </section>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>