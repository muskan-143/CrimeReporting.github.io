<?php

include "connection.php";
if (isset($_GET['rejectId'])) {   
    $id = $_GET['rejectId'];
    $query = "UPDATE complaint SET  STATUS='reject' WHERE Id='$id'";
    $conn->query($query);
    header('location:complaint.php');
}


?>


<?php
include "connection.php"
?>
<!-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/policeCSS/view.css">



    <title>data View</title>
</head> -->
<!-- 
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #272c4a;">
                        <h4 style="color:white;">View Details
                            <a href="complaint.php" class="badge btn-success float-end" style="text-decoration: none;">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body" style="background: #272c4a; color:white">

                        <?php
                        // $ID;
                        // $Name;
                        // $Email;
                        // $Phone;
                        // $date;
                        // $CrimeType;
                        // $description;
                        // if (isset($_GET['rejectId'])) {
                        //     $viewId = $_GET['rejectId'];
                        //     $query = "SELECT * FROM complaint WHERE id='$viewId' ";
                        //     $result = $conn->query($query);
                        //     while ($row = $result->fetch_assoc()) {
                        //         $ID = $row['Id'];
                        //         $Name = $row['Name'];
                        //         $Email = $row['Email'];
                        //         $Phone = $row['Contact'];
                        //         $date = $row['Date'];
                        //         $CrimeType = $row['CrimeType'];
                        //         $description = $row['description'];
                        //     }
                        // }
                        ?>
                        <div class="user-details">
                            <div class="content">
                                <form action="<?php // echo $_SERVER['PHP_SELF']; ?>" method="get">
                                    <div class="user-details">
                                        <div class=" input-box">
                                            <span class="details">Complaint Id</span>
                                            <input value='<?php // echo $ID ?>' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Name</span>
                                            <input value=' <?php // echo $Name?> ' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Email</span>
                                            <input value=' <?php // echo $Email ?>' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Phone Number</span>
                                            <input value=' <?php // echo $Phone ?> ' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div class="input-box">
                                            <span class="details">Date of Complaint</span>
                                            <input value='<?php // echo $date ?> ' readonly style="background:#1b203d; color:white">
                                        </div>

                                        <div class="input-box">
                                            <span class="details">Crime Type</span>
                                            <input value=' <?php // echo $CrimeType ?> ' readonly style="background:#1b203d; color:white">
                                        </div>

                                        <div class="input-box">
                                            <span class="details">Description of Crime</span>
                                            <input value='<?php // echo $description ?> ' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div class="input-box">
                                            <input type="hidden" value=' . $row[' description'] . ' readonly style="background:#1b203d; color:white">
                                        </div>
                                        <div>
                                            <span class="details">Reason For Rejecting</span><br><br>
                                            <textarea placeholder="Reason for rejecting the case" name="rejectReason" value="Crime" done="" by="" 12="" year="" old="" boy="" row="3" col="60" style="background:#1b203d;color:white;display:block;width: 30rem;border: 2px solid white;border-radius: 9px;;text-align: center;" ></textarea>
                                    
                                        <div class="input-box">
                                            <input type = "hidden" value='' readonly style="background:#1b203d; color:white">
                                        </div>
                                         <div>
                                            <button class="badge btn-danger" style="height:2rem;text-decoration:none;color:white;" name="submit"><a href ="reasonReject.php" >Submit</a><button>
                                        </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> -->

<?php
// if(isset($_POST['submit'])){
//     $officerID = $_SESSION['Id'];
//     $reason = $_POST['rejectReason'];
//     $query = "INSERT INTO rejectedcase (OfficerInchargeId,Status,Reason) Value('$id','$officerID','rejected','$reason')";
//     $conn->query($query);
//     header('location:rejectComplaint.php');
// }

?>