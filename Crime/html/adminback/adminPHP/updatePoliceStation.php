<?php
// inserting the data into the database.
include "connection.php";
$insert = NULL;
$inChargeIdMessage;
if (isset($_POST['addStation'])) {
    $inChareId = $_POST['InChargeId'];
    // assign the value of the incharge to the variable for error message.
    $inChargeIdMessage= $inChareId;
    $stationName = $_POST['stationName'];
    $district;
    $state;
    $contactNo;
    $name;
    // Getting the value from the database.
    $fetchQuery = "SELECT * FROM  updateofficer WHERE Id='$inChareId'";
    $result = $conn->query($fetchQuery);
    while ($row = $result->fetch_assoc()) {
        $district = $row['District'];
        $state = $row['State'];
        $contactNo = $row['Contact'];
        $name = $row['Name'];
    }

    if ($result->num_rows == 0) {
        $insert = "NoValue";
    } 
    else {
        // Query to store the data in the database.
        $insertQuery = "INSERT INTO policestation (Station,OfficerIncharge,Contact,district,State,officerInchargeId) VALUES('$stationName','$name','$contactNo','$district','$state','$inChareId')";
        $result = mysqli_query($conn, $insertQuery);
        $insert = "inserted";
    }
    
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!--  css -->
    <link rel="stylesheet" type="text/css" href="../css/updatePoliceStation.css">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-custom">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        include "adminnav.php"
        ?>
    </nav>
    <div style="height:2rem;" class="my-2">
            <?php
                if($insert=="NoValue"){
                    echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>No officer In-charge with Id: '.$inChargeIdMessage.'</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                }
                else if($insert=="inserted"){
                    echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data enter successfully</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                }
            ?>
        </div>
    <div class="content my-5">
        
        <!-- <button class="btn btn-warning btn-l/g" id="ps_btn" style="margin-left: 22px;">Add Police Station </button> -->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add station
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">ADD THE STATION</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="col-md-12">
                                <label for="validationDefault01" class="form-label">Police station name</label>
                                <input type="text" class="form-control" id="stationName" placeholder="Enter the police station name" required name="stationName">
                            </div>
                            <br>

                            <div class="col-md-12">
                                <label for="validationDefault02" class="form-label">Officer InChare ID</label>
                                <input type="text" class="form-control" id="inChargeId" placeholder="Enter the id of the police InCharge" name="InChargeId" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="addStation">ADD</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- ############################################################################################################## -->
        <!-- Model for the editing the value -->
        <div class="modal fade" id="updateStation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle1">ADD THE STATION</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="col-md-12">
                                <label for="validationDefault01" class="form-label">Police station name</label>
                                <input type="text" class="form-control" id="stationName1" value="Enter the police station name" required name="EditStationName">
                            </div>
                            <br>

                            <div class="col-md-12">
                                <label for="validationDefault02" class="form-label">Officer InChare ID</label>
                                <input type="text" class="form-control" id="inChargeId1" placeholder="Enter the id of the police InCharge" name="EditInChargeId" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="addStation">ADD</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="table-scroll mx-4">
            <center>
                <h1 id="ps_header_text my-4">Manage Police Stations</h1>
            </center>

            <div id="display">

            </div>
            <?php
            include "updatePoliceStationDisplayQuery.php";
            ?>

        </div>

        <footer id="site-footer">
            <div class="container">
                <div class="row text-center custom-list">
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href="../admin_dashboard.php" class="nav-link">Home</a></li>
                            <li><a href="case_admin.php" class="nav-link">Assign Case</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href="update_sa.php" class="nav-link">Update Sub-admin</a></li>
                            <li><a href="../../subadminRegister.php" class="nav-link">Create Sub-Admin</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="list-unstyled">
                            <li><a href="update_ps.php" class="nav-link">Update Police Station</a></li>
                            <li><a href="ps_section/add_ps.php" class="nav-link">Add Police Station</a></li>
                        </ul>
                    </div>

                </div>

            </div>

            <div class="social-networks">
                <a href="https://www.twitter.com/ocms" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/ocms" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:ocms@gmail.com?subject=Mail from Our Site" class="google"><i class="fab fa-google-plus-g"></i></a>
            </div>
            <div class="footer-copyright">
                <p>&copy;2019 All Rights Reserved | Designed By <span>Muskan Aherwar</span></p>
            </div>


        </footer>

        <!-- Bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>


        <script>
            $(document).ready(function() {

                $('.editBtn').on('click', function() {
                    $('#updateStation').modal('show');
                    $tr = $(this).closest('tr');
                    console.log($tr);
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    console.log(data);
                });

            });

            function checkDelete() {
                return confirm("Are you sure you want to Delete the data?");
            }
        </script>
</body>

</html>