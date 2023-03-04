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

    <!-- bar chart chart.js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['Id'])) {
        header('location:policeLoginPage.php');
    }

    ?>
    <!-- header -->
    <?php
    include "sideBar.php";
    include "connection.php";
    $queryAccept = 'SELECT * FROM complaint where STATUS="approved"';
    $queryReject = 'SELECT * FROM complaint where STATUS="reject"';
    $queryAll = 'SELECT * FROM complaint ';

    $accept = 0;
    $reject = 0;
    $total = 0;

    $result = $conn->query($queryAccept);
    while ($row = $result->fetch_assoc()) {
        $accept++;
    }

    $result = $conn->query($queryReject);
    while ($row = $result->fetch_assoc()) {
        $reject++;
    }

    $result = $conn->query($queryAll);
    while ($row = $result->fetch_assoc()) {
        $total++;
    }
    $acceptPercentage = (($accept) / ($total)) * 100;
    $rejectPercentage = (($reject) / ($total)) * 100;

    ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1 style="color:white;">Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="police.php" style="color:white;">Home</a></li>
                    <li class="breadcrumb-item" style="color:white;">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">


                <div class="col-lg-8">
                    <div class="row">


                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">


                                <div class="card-body">
                                    <h5 class="card-title">Accepted Cases </h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-calendar-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:white"><?php echo $accept ?></h6>
                                            <span class="text-success small pt-1 fw-bold"><?php echo round($acceptPercentage, 3) ?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">


                                <div class="card-body">
                                    <h5 class="card-title">Rejected Case</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="fa-regular fa-calendar-xmark"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:white"><?php echo $reject ?></h6>
                                            <span class="text-danger small pt-1 fw-bold"><?php echo round($rejectPercentage, 3) ?>%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title">Total Cases <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <!-- <i class="bi bi-check-square-fill"></i> -->
                                            <i class="fa-solid fa-file-pen"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:white"><?php echo $total ?></h6>


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                        <!-- <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">FIR Status <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Applicant</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Recieved</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                        </div> -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title" style="color:white">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart" style="color:white;"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Recieved',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Approved',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Rejected',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>

                        </div>
                        <!-- End Reports --> -->






                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">


                        <div class="card-body">
                            <h5 class="card-title">How To Register a FIR ? <span></span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Log in to reportCrime.com <a href="#" class="fw-bold text-dark"></a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        Go to Register FIR Section
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">3</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        You will get an FIR Form. Please Enter your details and Complaint
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        Click on Submit button <a href="#" class="fw-bold text-dark"></a>
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">5</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        Confirm Your FIR and and click on confirm Button
                                    </div>
                                </div><!-- End activity item-->



                            </div>

                        </div>
                    </div><!-- End Recent Activity -->




                    <!-- News & Updates Traffic -->
                    <div class="card">


                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="../../images/crime.jfif" alt="">
                                    <h4><a href="#">Crime Rate Increased</a></h4>
                                    <p>please stay at home and be safe..thank you</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="../../images/car.jfif" alt="">
                                    <h4><a href="#">A Car is found near city</a></h4>
                                    <p>if this is your car please visit near police startion</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="../../images/fir.jfif" alt="">
                                    <h4><a href="#">Fir policy is updated</a></h4>
                                    <p>Please See new policies </p>
                                </div>



                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">


    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyJpmbzz-BhJkg9MzzzdnRCq59dUl2Tqz8vx82KgnDsoKXZb73sm2t7EuVCYCxEf0Rm/exec'
        const form = document.forms['google-sheet']

        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
        })
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
    </script>

    <!-- Vendor JS Files -->
    <script src="../../vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../../vendor/tinymce/tinymce.min.js"></script>


    <script src="../../js/policeJS/policeMain.js"></script>

</body>

</html>