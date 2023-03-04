<?php

// Connecting to the database
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('connection failed');
$valid = true;
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
    $valid = false;
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
  <title></title>
  <!--CSS Style-->
  <link rel="stylesheet" href="../css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body>

  <div class="box">
    <div class="form">

      <h2>Sign in </h2>
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
          <a href="#"> Forgot Password</a>
          <a href="#">Signup</a>
        </div>
        <input type="submit" value="Login" name="submit">
      </form>
    </div>
  </div>
</body>

</html>