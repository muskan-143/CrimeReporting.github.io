<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Police- Dashboard</title>

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
                    <h5 class="card-title">Pending Complaint List</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Applicant</th>
                                <th scope="col">Date</th>
                                <th scope="col">Recieved</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "connection.php";
                                $State = $_SESSION['State'];
                                $District = $_SESSION['District'];
                                $searchQuery = "SELECT * FROM complaint where State = '$State' AND District = '$District' AND STATUS = 'pending'";
                                $result = $conn->query($searchQuery);
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <tr>
                                        <th scope="row"><a href="#">' . $row["Id"] . '</a></th>
                                        <td>' . $row["Name"] . '</td>
                                        <td><a href="#" class="text-primary">' . $row["Date"] . '</a></td>
                                        <td>Yes</td>
                                        <td>
                                            <button class="badge btn-success"><a class ="text-light" href="action.php?approveId=' . $row["Id"] . '">Action</a></button>
                                            <button class="badge btn-info"><a class ="text-light" href="view.php?rejectId=' . $row["Id"] . '">Verify</a></button>
                                        </td>                                 
                                    </tr>
                                    ';
                                }
                            ?>
                            <tr>
                                <th scope="row"><a href="#">7970671150</a></th>
                                <td>Aditya Kumar</td>
                                <td><a href="#" class="text-primary">18/05/2022</a></td>
                                <td>Yes</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">12345677</a></th>
                                <td>Vivek Kumar</td>
                                <td><a href="#" class="text-primary">18/05/2022</a></td>
                                <td>Yes</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">7889797979</a></th>
                                <td>Aanand dubey</td>
                                <td><a href="#" class="text-primary">18/05/2022</a></td>
                                <td>Yes</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">1289898933</a></th>
                                <td>Vikash kumar</td>
                                <td><a href="#" class="text-primar">14/05/2022</a></td>
                                <td>Yes</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#">6879999</a></th>
                                <td>Suraj Kumar</td>
                                <td><a href="#" class="text-primary">17/05/2022</a></td>
                                <td>Yes</td>
                                <td><span class="badge bg-success">Approved</span></td>
                            </tr>
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