<?php
    // connecting to the database.
    $conn = mysqli_connect('localhost','root','','crimereporting') or die('Connection failed');

     // storing the info into the database.
     if(isset($_POST['sub'])){
        $criminalName = $_POST['criminalName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $reportDate = $_POST['reportDate'];
        $incidentDate = $_POST['incidentDate'];
        $position = $_POST['position'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];

        $query = "INSERT INTO `criminal details` (Name, Address,city, state, reportDate, incidentDate, position, firstName,middleName, lastName) VALUES('$criminalName', '$address','$city','$state','$reportDate','$incidentDate','$position','$firstName','$middleName','$lastName')";

        $insert = mysqli_query($conn,$query) or die('query failed');
     }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police-Add criminal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php
        include 'policeNav.php';
    ?>
    <div class="container my-4">
        <h3 class="text-center">Information about the suspect</h3>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="row g-3">
            <div class="col-12">
                <label for="CriminalName" class="form-label">Suspect's Full Name:</label>
                <input type="text" class="form-control" name="criminalName">
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="address"
                    placeholder="Enter the address of the criminal">
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="city" placeholder="Enter the city">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select name="state" class="form-select">
                    <option >---select---</option>
                    <option value="state1">State 1</option>
                    <option value="state2">State 2</option>
                    <option value="state3">State 3</option>
                    <option value="state4">State 4</option>
                </select>
            </div>
            <!-- <div class="col-md-6">
                <label for="image" class="form-label">Image of suspect</label>
                <input type="file" accept="image/*" class="form-control" name="image" placeholder="Enter the city">
            </div> -->

            <div class="col-6">
                <label for="dateReport" class="form-label">Report Date:</label>
                <input type="date" class="form-control" name="reportDate" min="2022-10-28"
                    max="2022-11-01">
            </div>

            <div class="col-6">
                <label for="incidentReport" class="form-label">Incident Date:</label>
                <input type="date" class="form-control" name="incidentDate" min="2022-10-28"
                    max="2022-11-01">
            </div>
            <div style="height: 3px; background-color:black" class="my-4"></div>
            <div class="row">
                <div class="row g-3 ">
                    <h5>Incident reported issued by:</h5>
                    <div class="col">
                        <label for="" class="form-label">Position</label>
                        <input type="text" class="form-control" aria-label="position name" name="position">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">First Name</label>

                        <input type="text" class="form-control" aria-label="first name" name="firstName">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Middle Name</label>

                        <input type="text" class="form-control" aria-label="middle name" name="middleName">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Last Name</label>

                        <input type="text" class="form-control" aria-label="Last name" name="lastName">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-dark" name="sub">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>


</body>

</html>