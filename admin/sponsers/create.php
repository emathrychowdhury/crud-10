<?php




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
          <h1 class="text-center mb-5">Add New Sponser</h1>
          <form action="store.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
              <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputTitle" name="title" value="">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputTitle" class="col-sm-2 col-form-label">Details</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputDetails" name="details" value="">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="inputpicture" class="col-sm-2 col-form-label">Picture:</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputpicture" name="picture" value="">
              </div>
            </div>





            <div class="mb-3 row">
              <label for="inputIsActive" class="col-sm-2 form-check-label">Is Active: </label>
              <div class="col-sm-9">
                <input type="checkbox" class="form-check-input" id="inputIsActive" name="is_active" value="1">
              </div>
            </div>







            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-success">All sponsers</a>

          </form>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>