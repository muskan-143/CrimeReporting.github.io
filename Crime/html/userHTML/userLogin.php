<?php
// starting the session
session_start();
// Connecting to the database
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('connection failed');
// Removing all the unnecessary spaces
$ValidUser = false;
function test_input($data)
{

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Login to the page if the member is register 
if (isset($_POST['Login'])) {
  $emailId = test_input($_POST["email"]);
  $userPassword = test_input($_POST["Password"]);

  $query = "SELECT * FROM registerationform";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {


      if ($emailId == $row['Email'] && $userPassword == $row['Password'] && $emailId != "" && $userPassword != "") {
        // header("Location:template.php");
        $ValidUser = true;
        // creating the session variable for using it.
        $_SESSION['Name']  = $row['Name'];
        $_SESSION['Id']  = $row['Register Id'];
        $_SESSION['Email']  = $row['Email'];
        $_SESSION['Contact']  = $row['Contact'];
        break;
      }
      $ValidUser = false;
    }
  }

  // If valid user send to the next page.
  if ($ValidUser) {
    header("Location:userNews.php");
  }
}

if (isset($_POST['signUP'])) {
  $userName = $_POST['userName'];
  $userEmail = $_POST['Email'];
  $userContact = $_POST['contact'];
  $userAge = $_POST['age'];
  $genderMaleFemaleOther = $_POST['gender'];
  $userPassword = $_POST['password'];


  // The query that will insert the value in the database.
  $insert = mysqli_query($conn, "INSERT INTO  `registerationform`(Name, Email, Contact, Age, Gender,password) VALUES('$userName','$userEmail','$userContact','$userAge','$genderMaleFemaleOther','$userPassword')") or die('query failed');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../../css/userCSS/userLogin.css" />
  <title>User-Login</title>
</head>

<body>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" placeholder="Username" name="email" />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password" />
          </div>

          <input type="submit" value="Login" class="btn solid" name="Login" />
          <!-- <p class="social-text">Or Sign in with social platforms</p> -->

        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="userName" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="Email" />
          </div>
          <div class="input-field">
            <!-- <i class="fas fa-envelope"></i> -->
            <i class="fas fa-duotone fa-phone"></i>
            <input type="contact" placeholder="contact" name="contact" />
          </div>
          <div class="input-field">
            <i class="fas fa-solid fa-arrow-down-1-9"></i>
            <input type="number" placeholder="Age" name="age" />
          </div>
          <div class="input-field">
            <i class="fas fa-solid fa-user"></i>
            <input type="text" placeholder="Gender" name="gender" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <input type="submit" class="btn" value="Sign up" name="signUP" />
          <!-- <p class="social-text">Or Sign up with social platforms</p> -->
          <div class="social-media">
            <!-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i> -->
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script src="../../js/userJS/userLogin.js"></script>
</body>

</html>