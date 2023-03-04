<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Police- Reject Complaint</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../../css/policeCSS/police.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/policeCSS/complaint.css">

</head>

<body>
    <?php
    session_start();
    include "sideBar.php";
    include "connection.php";
    ?>
    <main id="main" class="main">

        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">Reject Complaint List</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr style="color:white">
                                <th scope="col">#</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "connection.php";
                                $Id;
                                $State = $_SESSION['State'];
                                $District = $_SESSION['District'];
                                $searchQuery = "SELECT * FROM complaint where State = '$State' AND District = '$District' AND STATUS = 'reject'";
                                $result = $conn->query($searchQuery);
                                while ($row = $result->fetch_assoc()) {
                                    $Id = $row["Id"];
                                    echo '
                                    <tr style="color:white">
                                        <th scope="row">' . $row["Id"] . '</th>
                                        <td>' . $row["Name"] . '</td>
                                        <td>' . $row["Date"] . '</td>
                                        <td>
                                        <label class="badge bg-danger">Rejected</label>
                                        <label class="badge bg-info"><a href="view.php?viewId='.$Id.'" style="text-decoration:none; color:white;">View</a></label>
                                        </td>                               
                                    </tr>
                                    ';
                                }
                            ?>
                            <!-- <tr>
                                <th scope="row"><a href="#">7970671150</a></th>
                                <td>Aditya Kumar</td>
                                <td><a href="#" class="text-primary">18/05/2022</a></td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                            </tr> -->
                           
                           
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>