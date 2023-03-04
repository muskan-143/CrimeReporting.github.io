<?php

// Connecting to the database
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('connection failed');
$inValid = false;
// if click on the login button.

if (isset($_POST['submit'])) {

  // getting the value form the input.
  $name = $_POST['name'];
  $password = $_POST['password'];

  // Query for admin login
  $query = "SELECT *FROM admin WHERE Name ='$name' AND Password = '$password'";
  $result = mysqli_query($conn, $query);
  if ($result->num_rows == 1) {
    header("Location:dashBoard.php");
  } else {
    $inValid = true;
  }
}

?>
<!DOCTYPE html>
<!-- CodingMaker-->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Police-Login</title>
  <!--CSS Style-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css" />


</head>

<body>
  <div id="alertBox" style="height:2rem;">
  <?php
    if($inValid){
      echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error Login!</strong> Please re-check the userName and password
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';

    }
  ?>
    
  </div>

  <div id="boxContainer">
    <div class="box">

      <div class="form">

        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="inputbox">
            <input type="text" required="required" name="name">
            <span>Username </span>
            <i></i>
          </div>

          <div class="inputbox">
            <input type="password" required="required" name="password">
            <span>Password</span>
            <i></i>
          </div>

          <div class="links">
            <!-- <a href="#"> Forgot Password</a>
            <a href="#">Signup</a> -->
          </div>
          <input type="submit" value="Login" name="submit">
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>