<?php
// Store the value into the database.
include "connection.php";
if (isset($_POST['officerUpdate'])) {

    $name = $_POST['officerName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['officerEmail'];
    $contact = $_POST['officerContact'];
    $age = $_POST['officerAge'];
    $district = $_POST['district'];
    $state = $_POST['State'];
    $gender = $_POST['Gender'];
    $pinCode = $_POST['officerPinCode'];
    $password = $_POST['officerPassword'];

    $query = "INSERT INTO  updateofficer (Name,middleName,lastName,Email,Password,Age,District,State,ZipCode,Contact,Gender) VALUES('$name','$middleName','$lastName','$email','$password','$age','$district','$state','$pinCode','$contact','$gender')";
    $result = mysqli_query($conn, $query);
    if ($result) {
    } else {
    }
}
// Updating the value.
$successful = 0;
if (isset($_POST['EditUpdateOfficer'])) {
    $id = (int)$_POST['update_id'];
    $firstName = $_POST['editOfficerName'];
    $middleName = $_POST['editMiddleName'];
    $lastName = $_POST['editLastName'];
    $email = $_POST['editEmail'];
    $contact = $_POST['editContact'];
    $age = $_POST['editAge'];
    $district = $_POST['editDistrict'];
    $state = $_POST['editState'];
    $gender = $_POST['editGender'];
    $pinCode = $_POST['editPinCode'];

    $query = "UPDATE updateofficer SET Name='$firstName', middleName='$middleName', lastName = '$lastName',Email = '$email',Age = '$age', district = '$district',State='$state',ZipCode='$pinCode',Contact='$contact',Gender='$gender' WHERE Id = '$id'";
    $result = mysqli_query($conn, $query);
    // if the result is true then show success message. 
    if ($result) {
        $successful = 1;
    } else {
        $successful = 2;
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
    <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">


    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <!--  css -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/updateOfficer.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/dashBoard.css">
    <style>


    </style>
</head>

<body>


    <?php
    include "adminnav.php";
    ?>


    <div id="main" style="color:white">
        <div style="height:2rem;">
            <?php
            if ($successful == 1) {
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data updated successfully</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                ';
            } else if ($successful == 2) {
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
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Officer</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Officer</span>
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
            <button type="button" class="btn" style="color:white; background:#272c4a;border:2px solid white;" data-toggle="modal" data-target="#exampleModalCenter">
                Add officer
            </button>
            <center>
                <h4> UPDATE OFFICER</h4>
            </center>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color:black;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Please enter the information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- <form> -->
                            <form class="was-validated" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <!-- <div class="mb-3">
                                        <label for="Name" class="form-label">Name</label>
                                        <input class="form-control" id="name" placeholder="Enter the Name" type="text" required name="officerName"></input>
                                        <div class="invalid-feedback">
                                            Please enter valid name.
                                        </div>
                                    </div> -->
                                <div class="row g-3 ">

                                    <div class="col">
                                        <label for="" class="form-label">First Name</label>
                                        <input type="text" class="form-control" aria-label="first name" name="officerName" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Middle Name</label>

                                        <input type="text" class="form-control" aria-label="middle name" name="middleName" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Last Name</label>

                                        <input type="text" class="form-control" aria-label="Last name" name="lastName" required>
                                    </div>
                                </div>

                                <br>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input class="form-control" id="email" placeholder="Enter the Email" type="email" required name="officerEmail"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid email.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input class="form-control" id="contact" placeholder="Enter the contact" type="phone" required name="officerContact"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid contact
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Age" class="form-label">Age</label>
                                    <input class="form-control" id="age" placeholder="Enter the Age" type="number" required name="officerAge"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid age
                                    </div>
                                </div>

                                <div class="form-check">
                                    <label for="gender" class="form-label">Gender</label>
                                    <br>
                                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="Gender" value="Male" required>
                                    <label class="form-check-label" for="validationFormCheck2">Male</label>
                                    <br>
                                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="Gender" value="Female" required>
                                    <label class="form-check-label" for="validationFormCheck3">Female</label>
                                    <div class="invalid-feedback">Please select the gender</div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-check-label">Please select State</label>
                                    <select class="form-select" required aria-label="select example" name="State">
                                        <option value="">Select State</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="State 1">State 1</option>
                                        <option value="State 2">State 2</option>
                                    </select>
                                    <div class="invalid-feedback">Please select the state</div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-check-label">Please select district</label>
                                    <select class="form-select" required aria-label="select example" name="district">
                                        <option value="">Select district</option>
                                        <option value="Chembur">Chembur</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Dadar">Dadar</option>
                                    </select>
                                    <div class="invalid-feedback">Please select the district</div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationTextarea" class="form-label">Pin code</label>
                                    <input class="form-control" id="pinCode" placeholder="Enter the Pin Code" type="number" name="officerPinCode" required></input>
                                    <div class="invalid-feedback">
                                        Please enter valid pin code.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" id="password" placeholder="Enter the password" type="password" required name="officerPassword"></input>
                                    <div class="invalid-feedback">
                                        Please enter password,
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="update" name="officerUpdate">ADD</button>

                                </div>
                            </form>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- ################################################################################################ -->
            <!-- Edit model -->
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="color:black;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelTitle">Edit the information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- <form> -->
                            <form class="was-validated" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="update_id" id="update_id">

                                <div class="row g-3 ">

                                    <div class="col">
                                        <label for="" class="form-label">First Name</label>
                                        <input type="text" class="form-control" aria-label="first name" id="editFirstName" name="editOfficerName" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Middle Name</label>

                                        <input type="text" class="form-control" aria-label="middle name" id="editMiddleName" name="editMiddleName" required>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">Last Name</label>

                                        <input type="text" class="form-control" aria-label="Last name" id="editLastName" name="editLastName" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input class="form-control" id="editEmail" placeholder="Enter the Email" type="email" required name="editEmail"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid email.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input class="form-control" id="editContact" placeholder="Enter the contact" type="phone" required name="editContact"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid contact
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="Age" class="form-label">Age</label>
                                    <input class="form-control" id="editAge" placeholder="Enter the Age" type="number" required name="editAge"></input>
                                    <div class="invalid-feedback">
                                        Please enter valid age
                                    </div>
                                </div>

                                <div class="form-check">
                                    <label for="gender" class="form-label">Gender</label>
                                    <br>
                                    <input type="radio" class="form-check-input" id="editGenderMale" name="editGender" value="Male" required>
                                    <label class="form-check-label" for="validationFormCheck2" readonly>Male</label>
                                    <br>
                                    <input type="radio" class="form-check-input" id="editGenderFemale" name="editGender" value="Female" required readonly>
                                    <label class="form-check-label" for="validationFormCheck3">Female</label>
                                    <div class="invalid-feedback">Please select the gender</div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-check-label">Please select State</label>
                                    <select class="form-select" required aria-label="select example" name="editState" id="editState">
                                        <option value="">Select State</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="State 1">State 1</option>
                                        <option value="State 2">State 2</option>
                                    </select>
                                    <div class="invalid-feedback">Please select the state</div>
                                </div>
                                <br>
                                <div class="mb-3">
                                    <label for="" class="form-check-label">Please select district</label>
                                    <select class="form-select" required aria-label="select example" name="editDistrict" id="editdistrict">
                                        <option value="">Select District</option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Thane">Thane</option>
                                        <option value="Dadar">Dadar</option>
                                    </select>
                                    <div class="invalid-feedback">Please select the district</div>
                                </div>

                                <div class="mb-3">
                                    <label for="validationTextarea" class="form-label">Pin code</label>
                                    <input class="form-control" id="editPinCode" placeholder="Enter the Pin Code" type="number" name="editPinCode" required></input>
                                    <div class="invalid-feedback">
                                        Please enter valid pin code.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" id="editPassword" placeholder="Enter the password" type="password" required name="editPassword" readonly> </input>
                                    <div class="invalid-feedback">
                                        Please enter password,
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" id="update1" name="EditUpdateOfficer">Save
                                        Changes</button>

                                </div>
                            </form>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-scroll ">

                <p><br></p>

                <div class="table-responsive table">
                    <!--this is used for responsive display in mobile and other devices-->
                    <table class="table text-center">
                        <thead class="" style="background:#272c4a">
                            <tr style="background:#272c4a">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">District</th>
                                <th scope="col">State</th>
                                <th scope="col">Zip Code</th>
                                <th scope="col">Phone no</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action </th>
                                <th scope="col">Action </th>
                            </tr>
                        </thead>
                        <tbody id="data">
                            <?php
                            include "updateOfficerQueryInsert.php"
                            ?>
                        </tbody>

                    </table>
                    <script type="text/javascript">
                        function checkDelete() {
                            return confirm("Are you sure you want to Delete the data?");
                        }
                    </script>
                </div>
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
    <!-- <script src="../js/nav.js"></script> -->
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
                // $(".logo").css('visibility', 'hidden');
                // $(".logo span").css('visibility', 'visible');
                // $(".logo span").css('margin-left', '-10px');
                $(".icon-a").css('visibility', 'hidden');
                $(".icons").css('visibility', 'visible');
                $(".icons").css('margin-left', '-8px');
                $(".nav").css('display', 'none');
                $(".nav2").css('display', 'block');
            });

            $(".nav2").click(function() {
                $("#mySidenav").css('width', '300px');
                $("#main").css('margin-left', '300px');
                // $(".logo").css('visibility', 'visible');
                $(".icon-a").css('visibility', 'visible');
                $(".icons").css('visibility', 'visible');
                $(".nav").css('display', 'block');
                $(".nav2").css('display', 'none');
            });

        });
    </script>


</body>

</html>