<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report</title>
    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/crime.css" />
    
</head>

<body id="body">
    <!-- <nav class="color navbar navbar-expand-lg bg-dark navbar-dark sticky-top"> -->
    <nav class=" navbar fixed-top navbar-expand-lg navbar-light" id="nav">
        <div class="color container-fluid">
            <label class="color navbar-brand" style="color:white;">CrimeReport</label>
            <button class="color navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="color navbar-toggler-icon"></span>
            </button>
            <div class="color collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="color navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="color nav-item">
                        <a class="color nav-link active" aria-current="page" style="color:white;" href="#">Home</a>
                    </li>
                    <li class="color nav-item">
                        <a class="color nav-link active" aria-current="page" style="color:white;" href="#">About</a>
                    </li>
                    <li class="color nav-item">
                        <a class="color nav-link active" aria-current="page" style="color:white;"
                            href="#services">Services</a>
                    </li>
                    <li class="color nav-item">
                        <a class="color nav-link active" aria-current="page" style="color:white;"
                            href="pythonPredicition/crime.html">Predict</a>
                    </li>


                    <li class="color nav-item dropdown">
                        <a class="color nav-link dropdown-toggle" style="color:white;" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="color dropdown-menu">
                            <li><a class="color dropdown-item" href="#">Admin</a></li>
                            <li><a class="color dropdown-item" href="html/PoliceHtml/policeLoginPage.php"
                                    target="_blank">Police</a></li>
                            <li>
                                <a class="color dropdown-item" href="html/userHTML/userLogin.php"
                                    target="_blank">User</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="backgroundImage">
        <!-- <p class="color container intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, libero.</p>
        <p class="color container intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, libero.</p> -->
    </div>
    <hr>
    <div class="color container text-center my-4 color" style="color:black" id="services">
        <h1 style="color:black;font-family:'Ubuntu', sans-serif;" id="heading">Welcome to Crime Reporting Website</h1>
        <hr class="my-4">
        <div class="color container color">
            <table class="color table my-4">
                <tbody>
                    <tr>
                        <th>
                            <div class="card mx-4" style="width: 32rem;height:max-content" id="card1">
                                <div class="color card-body container">
                                    <h3 class="color card-title" style="color:black;font-weight:700;">Report Complaint</h3>
                                    <img src="images/reportComplaint.jpg" class="card-img-top my-4" alt="..." height="200"
                                        style="padding:5px; width:25rem;">

                                    <p class="card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <p class="color card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <!-- bulk of the card's content.</p>
                                    <a href="#" class="color card-link">Card link</a>
                                    <a href="#" class="color card-link">Another link</a> -->
                                </div>
                            </div>
                        </th>

                        <th>
                            <div class="color card" style="width: 32rem;height:max-content" id="card2">
                                <div class="color card-body container">
                                    <h3 class="color card-title" style="color:black;font-weight:700;">View Criminals</h3>
                                    <img src="images/viewCriminal2.jpg" class="card-img-top my-4" alt="..." height="200"
                                        style="padding:5px; width:25rem; border: 1px solid black;">

                                    <p class="card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <p class="card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <!-- bulk of the card's content.</p>
                                    <a href="#" class="color card-link">Card link</a>
                                    <a href="#" class="color card-link">Another link</a> -->
                                </div>
                            </div>
                        </th>

                    </tr>
                    <tr>
                        <th>
                            <div class="color card mx-4 my-4" style="width: 32rem;height:max-content" id="card3">
                                <div class="color card-body container">
                                    <h3 class="color card-title" style="color:black;font-weight:700;">Latest News</h3>
                                    <img src="images/latestNews.jpg" class="card-img-top my-4" alt="..." height="200"
                                        style="padding:5px; width:25rem;">

                                    <p class="color card-text" style="text-align:justify;color:black;font-weight:500;">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <p class="color card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <!-- bulk of the card's content.</p>
                                    <a href="#" class="color card-link">Card link</a>
                                    <a href="#" class="color card-link">Another link</a> -->
                                </div>
                            </div>
                        </th>

                        <th>
                            <div class="color card my-4 mx-4" style="width: 32rem;height:max-content" id="card4">
                                <div class="color card-body container">
                                    <h3 class="color card-title" style="color:black;font-weight:700;">Feedback</h3>
                                    <img src="images/feedback,jpg.png" class="card-img-top my-4" alt="..." height="200"
                                        style="padding:5px; width:25rem;">

                                    <p class="color card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>

                                    <p class="color card-text" style="text-align:justify;color:black;font-weight:500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Amet, cumque quae autem laboriosam odit obcaecati! Reiciendis dignissimos
                                        mollitia vero quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Soluta, temporibus.
                                    </p>
                                    <!-- bulk of the card's content.</p>
                                    <a href="#" class="color card-link">Card link</a>
                                    <a href="#" class="color card-link">Another link</a> -->
                                </div>
                            </div>
                        </th>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</table>
</div>


</div>

<!-- <footer class="color footer my-4" id="foot">


    Copyright &copy; All right reserved. <br /> For more updates contact us on facebook, twitter,
    instagram,telegram

</footer> -->

<?php
include 'tryfooter.html'
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="js/crime.js"></script>'

</body>

</html>