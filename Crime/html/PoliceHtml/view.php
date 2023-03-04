<?php

    // include "connection.php";
    // if(isset($_GET['viewId'])){
    //     $id = $_GET['viewId'];
    //     $query = "SELECT * FROM complaint  WHERE Id='$id'";
    //     $conn->query($query);

    //     echo '

    //     '
    // }
?>

<?php
    include "connection.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/policeCSS/view.css">



    <title>data View</title>
</head>
<body >

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
                        if(isset($_GET['viewId']))
                        {
                            $viewId = $_GET['viewId'];
                            $query = "SELECT * FROM complaint WHERE Id ='$viewId' ";
                            $result = $conn->query($query);
                            while($row=$result->fetch_assoc()){
                                echo '
                                  <div class="user-details" >
                                <div class="content" >
                                <form action="#">
                                  <div class="user-details" ">
                                    <div class="input-box">
                                      <span class="details">Complaint Id</span>
                                      <input value='.$row['Id'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    <div class="input-box">
                                      <span class="details">Name</span>
                                      <input value='.$row['Name'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    <div class="input-box">
                                      <span class="details">Email</span>
                                      <input value='.$row['Email'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    <div class="input-box">
                                      <span class="details">Phone Number</span>
                                      <input value='.$row['Contact'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    <div class="input-box">
                                      <span class="details">Date of Complaint</span>
                                      <input value='.$row['Date'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    <div class="input-box">
                                      <span class="details">Crime Type</span>
                                      <input value='.$row['CrimeType'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    
                                    <div class="input-box">
                                      <span class="details">Description of Crime</span>
                                      <input value='.$row['description'].' readonly style="background:#1b203d; color:white">
                                    </div>
                                    
                                    
                                </form>
                              </div>
                                '; 
                            }
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




