<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">Police: Dashboard</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->

    <div class="search-bar">

    </div>
    <!-- End Search Bar -->

</header>

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="police.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" href="policeFIRreport.php">
            <i class="fa-solid fa-file-contract"></i><span>Report FIR</span></i>
            </a>

        </li><!-- End Components Nav -->

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Check Report Status</span></i>
            </a>

        </li>End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="complaint.php">
            <i class="fa-solid fa-file-circle-question"></i><span>Complaint</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="acceptedComplaint.php">
            <i class="fa-solid fa-clipboard-check"></i><span> Accepted Complaint</span></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="rejectComplaint.php">
            <i class="fa-solid fa-square-xmark"></i><span>Rejected Complaint</span></i>
            </a>
        </li>
       
        <!-- <li clas
        s="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" href="complaintStatus.php">
                <i class="bx bxs-news"></i><span>Complaint Status</span></i>
            </a>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" href="emergency.php">
                <i class="bx bxs-phone-call"></i><span>Emergency Call</span></i>
            </a>

        </li><!-- End Tables Nav 

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" href="policeNotice.php">
                <i class="bx bx-message-detail"></i><span>Notice</span></i>
            </a> -->

        </li><!-- End Icons Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" href="AdminLogOut.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Admin Login</span>
        </a>
    </li>
    </ul>
    <script src="../../js/policeJS/policeMain.js"></script>
    <script>
        $(document).ready(function() {
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
</aside>