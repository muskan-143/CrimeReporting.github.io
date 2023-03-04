<?php
$conn = mysqli_connect('localhost','root','','crimereporting') or die('connection failed');

if(isset($_POST['sub'])){

    // Taking all the value from the user and storing it in the database.
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userContact = $_POST['userContact'];
    $userAge = $_POST['userAge']; 
    $genderMaleFemaleOther = $_POST['genderMaleFemaleOther'];
    $userPassword = $_POST['userPassword'];

    
    // The query that will insert the value in the database.
    $insert = mysqli_query($conn, "INSERT INTO  `registerationform`(Name, Email, Contact, Age, Gender,password) VALUES('$userName','$userEmail','$userContact','$userAge','$genderMaleFemaleOther','$userPassword')") or die('query failed');

}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FormValidation.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/userCSS/userSignUp.css">
    <style>
    body {
        color: white;
    }
    a{
        text-decoration: none;
        color: white;
    }
    </style>
</head>

<body>

    <div id="" style="height: 2rem"></div>

    <div class="container" id="login">

        <div class="card border-dark mb-3 my-3" id="card" style="max-width: 40rem">
            <div class="card-body">
                <h3 class="card-title text-center my-4">Registration Form</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="mb-3 mx-4">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your Name"
                            name="userName" />
                        <small id="validNameText" class="form-text invalid-feedback">
                            Your First Name must be 4-10 characters long and should not
                            contain number in it.
                        </small>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email"
                            name="userEmail" />
                        <small id="validEmail" class="form-text invalid-feedback">
                            Invalid Email.
                        </small>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="phone" class="form-label">Contact Number </label>
                        <input type="phone" class="form-control" id="contact" name="userContact"
                            placeholder="Contact number" />
                        <small id="validContact" class="form-text invalid-feedback">
                            Your number must be of 10 digit
                        </small>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="age" class="form-label">Age </label>
                        <input type="number" class="form-control" id="age" name="userAge"
                            placeholder="Enter your age" />
                        <small id="validAge" class="form-text invalid-feedback">
                            You age must be greater then the 15 to register.
                        </small>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="gender">Gender</label>
                        <div class="mb-3 mx-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" id="Male"
                                    value="MALE" checked />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" value="FEMALE"
                                    id="Female" />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderMaleFemaleOther" value="OTHER"
                                    id="Other" />
                                <label class="form-check-label" for="genderMaleFemaleOther">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password"
                            name="userPassword" />
                        <small id="validPassword" class="form-text invalid-feedback">
                            Password can't contain spaces in it and must be of 5-10 character long.
                        </small>
                    </div>
                    <div class="mb-3 mx-4">
                        <label for="password" class="form-label">Confirm Password </label>
                        <input type="password" class="form-control" id="confirmPassword"
                            placeholder="Enter your password" />
                        <small id="validPasswordConfirm" class="form-text invalid-feedback">
                            Please type the same password as mention above.
                        </small>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="userBtn" id="userSignUpButton" style="width: 12rem" name='sub' />
                        Register
                        </button>
                        <hr>
                        Already a member?<a href="userLogin.php"><b>Login</b></a>
                    </div>

            </div>


            </form>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</body>

</html>