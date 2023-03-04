<!Doctype HTML>
<html>

<head>
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="../css/dashBoard.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo">Admin</p>
        <a href="dashBoard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
        <a href="updateOfficer.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Officer</a>
        <a href="solveCase.php" class="icon-a"><i class="fa-solid fa-check-double icons"></i> &nbsp;&nbsp;Solved Case</a>
        <a href="pendingCase.php" class="icon-a"><i class="fa-solid fa-clock-rotate-left icons"></i> &nbsp;&nbsp;Pending Case</a>
        <a href="updatePoliceStation.php" class="icon-a"><i class="fa-solid fa-building-shield icons"></i> &nbsp;&nbsp;Police station</a>

    </div>
    <div id="main">

        <div class="head">
            <div class="col-div-6">
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
                <span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
            </div>

            <div class="col-div-6">
                <div class="profile">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
        <br />

        <div class="col-div-3">
            <div class="box">
                <p>
                  <?php
                    // All the complaint in the complaint table will be consider as complaint.
                    include "connection.php";
                    $query = "SELECT * FROM complaint";
                    $result = $conn->query($query);
                    $totalComplaint = 0;
                    while ($row = $result->fetch_assoc()) {
                        $totalComplaint++;
                    }
                    echo $totalComplaint;
                  ?>  
                <br /><span>Total Complaints</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>
                <?php
                    // All the complaint in the complaint table with status = approved will be consider as a case.
                    $query = "SELECT * FROM complaint where STATUS = 'approved'";
                    $result = $conn->query($query);
                    $totalComplaint = 0;
                    while ($row = $result->fetch_assoc()) {
                        $totalComplaint++;
                    }
                    echo $totalComplaint;
                  ?> 
                <br /><span>Approved Case</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>
                <?php
                    // All the complaint in the FIR table will be consider as a Register case.
                    $query = "SELECT * FROM fir";
                    $result = $conn->query($query);
                    $totalComplaint = 0;
                    while ($row = $result->fetch_assoc()) {
                        $totalComplaint++;
                    }
                    echo $totalComplaint;
                  ?>
                <br /><span>Register Case</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>
                <?php
                    // All the complaint in the FIR table will be consider as a Register case.
                    $query = "SELECT * FROM complaint where STATUS ='pending'";
                    $result = $conn->query($query);
                    $totalComplaint = 0;
                    while ($row = $result->fetch_assoc()) {
                        $totalComplaint++;
                    }
                    echo $totalComplaint;
                  ?>    
                <br /><span>Pending Case</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>
        <div class="clearfix"></div>
        <br /><br />
        <div class="col-div-8">
            <div class="box-8">
                <div class="content-box">
                    <p>Police Officer</p>
                    <br />
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Officer Name</th>
                            <th>Location</th>
                        </tr>

                        <?php
                            $query = "SELECT *from updateofficer";
                            $result = $conn->query($query);
                            while($row=$result->fetch_assoc()){
                                echo '
                                <tr style="background:#272c4a"; color:white; width:95%>
                                    <th>'.$row["Id"].'</th>
                                    <th>'.$row["Name"].' '.$row["middleName"].' '.$row["lastName"].'</th>
                                    <th>'.$row["District"].'</th>
                                </tr> 
                                ';
                            }
                        ?>
                        <!-- <tr>
                            <th>1</th>
                            <th>Rohan</th>
                            <th>Dadar Station</th>
                        </tr> -->


                    </table>
                </div>
            </div>
        </div>

        <div class="col-div-4">
            <div class="box-4">
                <div class="content-box">
                    <p>Station Name</p>   
                    <br />
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Station Name</th>
                        </tr>

                        <?php
                            include "connection.php";
                            $query = "Select *from policestation";
                            $result = $conn->query($query);
                            while($row=$result->fetch_assoc()){
                                echo '
                                <tr>
                                    <th>'.$row["Id"].'</th>
                                    <th>'.$row["Station"].'</th>
                                </tr> 
                                ';
                            }
                        ?>
                        <!-- <tr>
                            <th>1</th>
                            <th>Rohan</th>
                            <th>Dadar Station</th>
                        </tr> -->


                    </table>                
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="../js/nav.js"></script> -->
    <script>
    $(".nav").click(function() {
        $("#mySidenav").css('width', '70px');
        $("#main").css('margin-left', '70px');
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

  
</script>

</body>


</html>