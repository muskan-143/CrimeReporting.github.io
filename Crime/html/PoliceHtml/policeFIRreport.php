<?php
// connecting to the database.
$conn = mysqli_connect('localhost', 'root', '', 'crimereporting') or die('Connection failed');

// storing the info into the database.
if (isset($_POST['submit'])) {

    $reportDate = $_POST['reportDate'];
    $reportTime = $_POST['reportTime'];
    $incidentDate = $_POST['incidentDate'];
    $incidentTime = $_POST['incidentTime'];
    $officerId = $_POST['officerId'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $incidentLocation = $_POST['incidentLocation'];
    $incidentDetail = $_POST['incidentDetail'];
    $suspectStatement = $_POST['suspectStatement'];
    $anyoneArrest = $_POST['anyoneArrest'];
    $suspectFirstName = $_POST['suspectFirstName'];
    $suspectLastName = $_POST['suspectLastName'];
    $comments = $_POST['comments'];
    $age = $_POST['age'];
    $crimeType = $_POST['crimeType'];

    $query = "INSERT INTO fir (reportDate,reportTime,incidentDate, incidentTime, officerId,firstName, middleName,lastName,incidentLocation,incidentDetails,suspectCharge,aressted,suspecfirstName,suspectlastName,comments,AGE,CrimeType) VALUES('$reportDate','$reportTime','$incidentDate','$incidentTime','$officerId','$firstName','$middleName','$lastName','$incidentLocation','$incidentDetail','$suspectStatement','$anyoneArrest','$suspectFirstName','$suspectLastName','$comments','$age','$crimeType')";

    $insert = mysqli_query($conn, $query) or die('query failed');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Police- FIR</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../../css/policeCSS/police.css" rel="stylesheet">
<style>
    .fontColor{
        color: white;
        font-weight: bold;
        font-size: large;
    }
  
</style>

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['Id'])) {
        header('location:policeLoginPage.php');
    }
    ?>
    <!-- header section -->
    <?php
    include "sideBar.php";
    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 style="color:white">Report FIR</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="police.php" style="color:white;">Home</a></li>
                    <li class="breadcrumb-item " style="color:white;">Report FIR</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Default Card -->
                <div class="card">
                    <div class="card-body">
                        <section>
                            <div class="container my-4">
                                <h1 class="text-center" style="color:white"><b>First Information Reported--FIR</b></h1>
                                <br>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="row my-3 fontColor" >

                                        <div class="col">
                                            <label for="date" class="form-label">Report Date:</label>
                                            <input type="date" class="form-control" aria-label="First name" name="reportDate" style="background:#1b203d; color:white">
                                        </div>
                                        <div class="col">
                                            <label for="time" class="form-label">Report Time:</label>
                                            <input type="time" class="form-control" aria-label="Last name" name="reportTime" style="background:#1b203d; color:white">
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row my-3 fontColor">

                                        <div class="col">
                                            <label for="date" class="form-label">Incident Date:</label>
                                            <input type="date" class="form-control" aria-label="First name" name="incidentDate" style="background:#1b203d; color:white">
                                        </div>
                                        <div class="col">
                                            <label for="time" class="form-label">Incident Time:</label>
                                            <input type="time" class="form-control" aria-label="Last name" name="incidentTime" style="background:#1b203d; color:white">
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row g-3 my-2 fontColor">
                                        <label>Incident reported issued by:</label>
                                        <?php
                                        $id = $_SESSION['Id'];
                                        $searchQuery = "SELECT * FROM updateofficer where Id = '$id'";
                                        $result = mysqli_query($conn, $searchQuery);
                                        while ($row = $result->fetch_assoc()) {
                                            echo '
                                                        <div class="col">
                                                            <input type="number" class="form-control" aria-label="Position" name="officerId" placeholder="' . $row['Id'] . '" readonly style="background:#1b203d; color:white">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" aria-label="first name" name="firstName" placeholder="' . $row['Name'] . '" readonly style="background:#1b203d; color:white">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" aria-label="middle name" name="middleName" placeholder="' . $row['middleName'] . '" readonly style="background:#1b203d; color:white">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control" aria-label="Last name" name="lastName" placeholder="' . $row['lastName'] . '" readonly style="background:#1b203d; color:white">
                                                        </div>
                                                    ';
                                        }
                                        ?>


                                        <!-- 
                                    <div class="col">
                                        <input type="number" class="form-control" aria-label="Position" name="officerId" placeholder="" >
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" aria-label="first name" name="firstName" placeholder="" >
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" aria-label="middle name" name="middleName" placeholder="" >
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" aria-label="Last name" name="lastName" placeholder="">
                                    </div>
                                    </div>
                                    <div class="row g-3 ">
                                        <div class="col">
                                            <small>Officer Id</small>
                                        </div>
                                        <div class="col">
                                            <small>First name</small>
                                        </div>
                                        <div class="col">
                                            <small>Middle name</small>
                                        </div>
                                        <div class="col">
                                            <small>Last name</small>
                                        </div>
                                    </div>
                                    <hr class="my-3"> -->

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Incident Location (Please provide specific details):</label>
                                            <textarea class="form-control" rows="4" name="incidentLocation" style="background:#1b203d; color:white"></textarea>
                                        </div>

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Incident details:</label>
                                            <textarea class="form-control" name="incidentDetail" rows="4" style="background:#1b203d; color:white"></textarea>
                                        </div>

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Was the suspect of the report of the incident wanted/have or had any charges on
                                                him/her?If so what?</label>
                                            <textarea class="form-control" name="suspectStatement" rows="4" style="background:#1b203d; color:white; font-weight:bold;"></textarea>
                                        </div>

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Has anyone been arrested so far in relation to the incident</label>
                                            <textarea class="form-control" name="anyoneArrest" rows="4" style="background:#1b203d; color:white"></textarea>
                                        </div>

                                        <div class="line container fontColor">
                                        </div>

                                        <div class="row my-3 fontColor">
                                            <label class="my-3">Suspect's Full Name</label>
                                            <div class="col">

                                                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="suspectFirstName" style="background:#1b203d; color:white">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="suspectLastName" style="background:#1b203d; color:white">
                                            </div>
                                        </div>

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Enter the Age of suspect.</label>
                                            <input type="number" class="form-control" placeholder="Enter the Age"name="age" min="8" max="90" style="background:#1b203d; color:white"></input>
                                        </div>

                                        <div class="row g-3 my-3 fontColor">
                                            <label class="form-label">Select Crime Type.</label>
                                            <select class="form-select" aria-label="Default select example" name="crimeType" style="max-width: 40rem; display:inline;background:#1b203d; color:white">
                                                <option value="None" style="background:#1b203d; color:white">--Select crime type--</option>
                                                <option value="Kidnapping" style="background:#1b203d; color:white">Kidnapping</option>
                                                <option value="Homicide(murder)" style="background:#1b203d; color:white">Homicide(murder)</option>
                                                <option value="Rape" style="background:#1b203d; color:white">Rape</option>
                                                <option value="Theft" style="background:#1b203d; color:white">Theft</option>
                                                <option value="anyOther" style="background:#1b203d; color:white">AnyOther</option>
                                            </select>
                                        </div>

                                        <!-- <div class="row g-3 my-3">
                    <label class="form-label">Criminal Image:</label>
                    <input type="file" id="img" accept=".jpg, .jpeg, .png" name="images">
                </div> -->

                                        <div class="row g-3 my-4 fontColor">
                                            <label class="form-label">Further Comments</label>
                                            <textarea class="form-control" name="comments" rows="4" style="background:#1b203d; color:white"></textarea>
                                        </div>

                                        <div class="container line my-3 fontColor"></div>
                                        <hr>
                                        <div class="form-check my-4 fontColor">
                                            <input class="form-check-input " type="checkbox" value="" id="flexCheckIndeterminate" style="background:#1b203d; color:white">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                I certify that the above information is true and correct
                                            </label>
                                        </div>

                                        <div class="col">
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div><!-- End Default Card -->


            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


    </footer>
    <!-- End Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>