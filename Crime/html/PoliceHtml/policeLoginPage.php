<?php
session_start();
include "connection.php";
$invalid = false;
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM updateofficer WHERE Email ='$email' AND Password = '$pass'";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()){
      $_SESSION['Id'] = $row['Id'];
      $_SESSION['Name'] = $row['Name'];
      $_SESSION['middleName'] = $row['middleName'];
      $_SESSION['lastName'] = $row['lastName'];
      $_SESSION['State'] = $row['State'];
      $_SESSION['District'] = $row['District'];
  }

  if($result->num_rows == 1){
    header('location:police.php');
  }
  else{
    $invalid = true;
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../finalAdmin/css/style.css" />
</head>

<body>
<div id="alertBox" style="height:2rem;">
  <?php
    if($invalid){
      echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error Login!</strong> Please re-check the email and password
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      ';

    }
  ?>
    
  </div>
<div id="boxContainer">
  <div class="box">
    <div class="form">

      <h2>Sign in </h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="inputbox">
          <input type="email" required="required" name="email">
          <span>Email </span>
          <i></i>
        </div>

        <div class="inputbox">
          <input type="password" required="required" name="password">
          <span>Password</span>
          <i></i>
        </div>

        <!-- <div class="links">
          <a href="#"> Forgot Password</a>
          <a href="#">Signup</a>
        </div> -->
        <input type="submit" value="Login" name="login">
      </form>
    </div>
  </div>
</div>
</body>

</html>