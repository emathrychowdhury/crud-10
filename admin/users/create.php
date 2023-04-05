<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    
 <center> <h2>Sign Up</h2> </center>

  <form class="form-horizontal" action="store.php" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">User Name:</label>
        <div class="col-sm-10">          
            <input type="text" 
            class="form-control" 
            id="pwd"
            placeholder="Name" 
            name="user_name"
            value="">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">          
                <input type="password" 
                class="form-control"
                id="pwd" 
                placeholder="Enter password"
                name="password"
                value="">
            </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Full Name:</label>
            <div class="col-sm-10">          
                <input type="text"
                class="form-control"
                id="pwd"
                placeholder="Name"
                name="full_name">
            </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
            <input type="email" 
            class="form-control" 
            id="email"
            placeholder="Enter email"
            name="email">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone Number:</label>
        <div class="col-sm-10">
            <input type="tel" 
            class="form-control"
            id="email" 
            placeholder="Enter email"
            name="phone_number">
        </div>
    </div>
   
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
