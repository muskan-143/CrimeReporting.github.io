<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">


    <ul class="navbar-nav mr-auto w-100 justify-content-end px-4">
        <li class="nav-item active" ><a href="dashBoard.php" class="nav-link" >HOME</a></li>
        <li class="nav-item"><a href="updateOfficer.php" class="nav-link">UPDATE OFFICER </a>
        </li>
        <li class="nav-item">
            <div class="dropdown show">
                <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CASES
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">SOLVED</a>
                    <a class="dropdown-item" href="#">PENDING</a>
                </div>
            </div>
            </a>
        </li>
        <li class="nav-item"><a href="updatePoliceStation.php" class="nav-link">UPDATE POLICESTATION</a></li>

    </ul>
    <!-- <a href="../php/admin_logout.php"><button type="button" class="btn btn-danger">LOG OUT</button></a>
</div>

<link rel="stylesheet" href="../css/dashboard.css"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div id="mySidenav" class="sidenav">
    <p class="logo">Admin</p>
    <a href="dashBoard.php" class="icon-a"><i class="fa-solid fa-gauge-high icons"></i> &nbsp;&nbsp;Dashboard</a>
    <a href="updateOfficer.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Officer</a>
    <a href="solveCase.php" class="icon-a"><i class="fa-solid fa-check-double icons"></i> &nbsp;&nbsp;Solved Case</a>
    <a href="pendingCase.php" class="icon-a"><i class="fa-solid fa-clock-rotate-left icons"></i> &nbsp;&nbsp;Pending Case</a>
    <a href="updatePoliceStation.php" class="icon-a"><i class="fa-solid fa-building-shield icons"></i> &nbsp;&nbsp;Police station</a>
</div>
<script>
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

  
</script>
<!-- <script src="../js/nav.js"></script> -->
<link rel="stylesheet" href="../css/dashboard.css">