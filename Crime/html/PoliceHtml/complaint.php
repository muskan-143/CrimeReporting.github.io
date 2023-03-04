<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Police- Complaint</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../../css/policeCSS/police.css" rel="stylesheet">

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['Id'])) {
        header('location:policeLoginPage.php');
    }
    include "sideBar.php";
    include "connection.php";
    ?>
    <main id="main" class="main">
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Complaint List</h5>
                    <hr>
                    <table class="table table-borderless datatable">
                        <thead>
                            <tr style="color:white">
                                <th scope="col">#</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Date</th>
                                <th scope="col" colspan="2">Status</th>
                        </thead>
                        <tbody>
                            <?php
                            $State = $_SESSION['State'];
                            $District = $_SESSION['District'];
                            $searchQuery = "SELECT * FROM complaint where State = '$State' AND District = '$District' AND STATUS = 'new'";
                            // echo $State. $District;
                            $result = $conn->query($searchQuery);
                            while ($row = $result->fetch_assoc()) {

                                echo '
                                <tr style=" color:white">
                                    <th scope="row">'. $row["Id"] .'</th>
                                    <td>' . $row["Name"] . '</td>
                                    <td>' . $row["Date"] . '</td>
                                    <td>
                                        <button class="badge btn-success"><a class ="text-light" href="approve.php?approveId=' . $row["Id"] . '">Approve</a></button>
                                        <button class="badge btn-danger"><a class ="text-light" href="reject.php?rejectId=' . $row["Id"] . '">Reject</a></button>
                                        <button class="badge btn-info view"><a class ="text-light" href="view.php?viewId=' . $row["Id"] . '">View</a></button>
                                    </td>                                 
                                </tr>
                                ';
                            }
                            ?>

<!-- 
                            <tr>
                                <th scope="row"><a href="#">7970671150</a></th>
                                <td>Aditya Kumar</td>
                                <td><a href="#" class="text-primary">18/05/2022</a></td>
                                <td><button type="submit" class="badge btn-success">Approve</button>
                                    <button type="submit" class="badge btn-danger">Reject</button>
                                </td>
                            </tr> -->
                           

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="viewModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {

            $('.view').on('click', function() {

                $('#viewModel').modal('show');

                console.log(click);
                // var nameSplitArray = data[1].split(' ');
                // console.log(nameSplitArray);
                // $('#update_id').val(data[0]);
                // $('#editFirstName').val(nameSplitArray[0]);
                // $('#editLastName').val(nameSplitArray[2]);
                // $('#editMiddleName').val(nameSplitArray[1]);

                // $('#editEmail').val(data[3]);
                // $('#editAge').val(data[4]);
                // $('#editContact').val(data[8]);
                // $('#editPinCode').val(data[7]);
                // $('#editdistrict').val(data[5]);
                // $('#editState').val(data[6]);
                // $('#editPassword').val(data[2]);

                // // Setting the radio button.
                // console.log($('#editGenderMale').val())
                // if (data[9] == "Male") {
                //     $('input:radio[name=editGender]')[0].checked = true;
                // } else {
                //     $('input:radio[name=editGender]')[1].checked = true;
                // }
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>


<!-- Button trigger modal -->