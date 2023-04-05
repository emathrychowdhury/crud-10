<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=project_10", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query ="SELECT * FROM `sponsers` where is_deleted=0";

$stmt = $conn->prepare($query);

$result = $stmt->execute();

$sponsers = $stmt->fetchAll();

// var_dump($sponsers);





?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center mb-5">Sponsers Lists</h1>




                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="fs-5 fw-bold btn btn-primary" aria-current="page" href="Create.php">Add New Item
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="fs-5 fw-bold btn btn-warning" href="trash_index.php">Trashed Items</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul><br>


                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
  if(count($sponsers) > 0):
  foreach ($sponsers as $sponsers):

  
  ?>
                        <tbody>
                            <tr>
                                <td><?= $sponsers['title'];?></td>
                                <td><?= $sponsers['is_active']? "Active" : "Inactive"?></td>
                                <td class="text-center"> <a class="btn btn-success" href="show.php?id=<?=$sponsers['id']?>">Show</a> <a
                                        class="btn btn-info" href="edit.php?id=<?=$sponsers['id']?>"> Edit</a>
                                    <a class="btn btn-dark" href="trash.php?id=<?=$sponsers['id']?>"> Trash</a>
                                </td>
                            </tr>
                            <?php
endforeach;

else:
?>

                            <tr>
                                <td colspan="2">
                                    No Banner is available.
                                </td>
                            </tr>

                            <?php
endif;
?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>