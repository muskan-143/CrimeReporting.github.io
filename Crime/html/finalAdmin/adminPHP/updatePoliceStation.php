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
    <!-- <link rel="stylesheet" type="text/css" href="../css/updatePoliceStation.css"> -->
</head>
<body>


    <?php
    include "adminnav.php";
    ?>


    <div id="main" style="color:white">
    <div  style="height:2rem;">
        <?php
        if ($insert == 1) {
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data updated successfully</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                ';
        } else if ($insert == 2) {
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Fail to updated data</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                ';
        }
        ?>
    </div>
        <div class="head my-2">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Police Station</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Police Station</span>
               
            </div>

            <div class="col-div-6">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />
        <div class="content">
            <!-- <button class="btn btn-warning btn-lg" id="ps_btn">Add officer</button> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn" id="ps_btn" data-toggle="modal" data-target="#exampleModalCenter" style="background:#272c4a;color:white; border:2px solid white">
                Add Station
            </button>
            <center>
                    <!-- <h4>ADD STATION</h4> -->
                </center>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color:black;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Please Police Station information</h5>
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

            <!-- ################################################################################################ -->
            <!-- Edit model -->
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
                <h3 id="ps_header_text my-4">MANAGE POLICE STATION</h3>
            </center>

            <div id="display">

            </div>
            <?php
            include "updatePoliceStationDisplayQuery.php";
            ?>

        </div>

        </div>
    </div>
    



    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/updateOfficer.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                var nameSplitArray = data[1].split(' ');
                console.log(nameSplitArray);
                $('#update_id').val(data[0]);
                $('#editFirstName').val(nameSplitArray[0]);
                $('#editLastName').val(nameSplitArray[2]);
                $('#editMiddleName').val(nameSplitArray[1]);

                $('#editEmail').val(data[3]);
                $('#editAge').val(data[4]);
                $('#editContact').val(data[8]);
                $('#editPinCode').val(data[7]);
                $('#editdistrict').val(data[5]);
                $('#editState').val(data[6]);
                $('#editPassword').val(data[2]);

                // Setting the radio button.
                console.log($('#editGenderMale').val())
                if (data[9] == "Male") {
                    $('input:radio[name=editGender]')[0].checked = true;
                } else {
                    $('input:radio[name=editGender]')[1].checked = true;
                }
            });

            $(".nav").click(function() {
                $("#mySidenav").css('width', '70px');
                $("#main").css('margin-left', '70px');
                $(".logo").css('visibility', 'hidden');
                $(".logo span").css('visibility', 'visible');
                $(".logo span").css('margin-left', '-10px');
                $(".icon-a").css('visibility', 'hidden');
                $(".icons").css('visibility', 'visible');
                $(".icons").css('margin-left', '-8px');
                $(".nav").css('display', 'none');
                $(".nav2").css('display', 'block');
            });

            $(".nav2").click(function() {
                $("#mySidenav").css('width', '300px');
                $("#main").css('margin-left', '300px');
                $(".logo").css('visibility', 'visible');
                $(".icon-a").css('visibility', 'visible');
                $(".icons").css('visibility', 'visible');
                $(".nav").css('display', 'block');
                $(".nav2").css('display', 'none');
            });
        });
    </script>

</body>

</html>