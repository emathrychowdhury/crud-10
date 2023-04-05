<?php
include_once ($_SERVER['DOCUMENT_ROOT']). '/crud-10/config.php';

use Premier\Users;

$user = new Users();
$users = $user->edit();

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
                <h1 class="text-center mb-5">Edit</h1>
                <form action="update.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="inputID" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <input
                                type="hidden"
                                class="form-control"
                                id="inputID"
                                name="id"
                                value="<?=$users['id'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputTitle" class="col-sm-3 col-form-label">User Name:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputTitle"
                                name="user_name"
                                value="<?=$users['user_name'];?>">
                        </div>
                    </div>
                    <!-- <div class="mb-3 row">
                        <label for="inputDetails" class="col-sm-3 col-form-label">Password:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputDetails"
                                name="password"
                                value="<?=$users['password'];?>">
                        </div>
                    </div> -->
                    <div class="mb-3 row">
                        <label for="inputDetails" class="col-sm-3 col-form-label">Full Name:</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputDetails"
                                name="full_name"
                                value="<?=$users['full_name'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDetails" class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input
                                type="email"
                                class="form-control"
                                id="inputDetails"
                                name="email"
                                value="<?=$users['email'];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDetails" class="col-sm-3 col-form-label">phone Number :</label>
                        <div class="col-sm-9">
                            <input
                                type="text"
                                class="form-control"
                                id="inputDetails"
                                name="phone_number"
                                value="<?=$users['phone_number'];?>">
                        </div>
                    </div>
                 
                 
                 
               


                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
