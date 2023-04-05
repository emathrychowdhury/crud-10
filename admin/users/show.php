<?php

include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';

use Premier\Users;

$user = new Users();
$user = $user->show();


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
                    <dd class="col-sm-9"><?= $user['id'];?></dd>
                    <dt class="col-sm-3">User Name:</dt>
                    <dd class="col-sm-9"><?= $user['user_name'];?></dd>
                
                    <dt class="col-sm-3">Full Name:</dt>
                    <dd class="col-sm-9"><?= $user['full_name'];?></dd>
                    <dt class="col-sm-3">Email:</dt>
                    <dd class="col-sm-9"><?= $user['email'];?></dd>
                    <dt class="col-sm-3">Phone No:</dt>
                    <dd class="col-sm-9"><?= $user['phone_number'];?></dd>
                   

                   


                </dl>

            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


