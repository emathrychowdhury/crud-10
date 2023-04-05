<?php

include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';

use Premier\Banners;

$_banner = new Banners();
$banners = $_banner->index();
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
                <h1 class="text-center mb-5">Lists</h1>

                <ul class="nav justify-content-center fs-4 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Add an item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trash_index.php">Trashed Items</a>
                    </li>

                </ul>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($banners) > 0):
                    foreach ($banners as $banner):
                    ?>
                    <tr>
                        <td><?= $banner['title'];?></td>
                        <td><?= $banner['is_active']? "Active" : "Inactive";?></td>
                        <td><a href="show.php?id=<?= $banner['id'];?>">Show</a> | <a href="edit.php?id=<?= $banner['id'];?>">Edit</a> | <a href="trash.php?id=<?= $banner['id'];?>">Trash</a>

                        </td>
                    </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No banner is available.</td>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

