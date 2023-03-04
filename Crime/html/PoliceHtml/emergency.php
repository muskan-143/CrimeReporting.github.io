<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Police-Emergency</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Ubuntu&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../../css/policeCSS/police.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <style>
    .fontChange {
      font-family: 'Baloo Bhaijaan 2', cursive;
      font-family: 'Ubuntu', sans-serif;
      ;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php
  session_start();
  if (!isset($_SESSION['Id'])) {
    header('location:policeLoginPage.php');
  }
  ?>
  <?php
  include "sideBar.php";
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Emergency</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Emergency</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard fontChange">
      <div class="row">
        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Emergency Numbers</h5>
            The emergency number is for when you need urgent help, for instance when your life is in immediate danger, or if someone is seriously injured and needs prompt medical attention, or if you have witnessed a serious crime like assault, murder, robbery, accident, rape, conflict or gang war, e.t.c . if you are in any types of trouble you can contact with police administration through given emergency number. Police administration are always committed to our services for public 24*7. You can contact anytime and you will get responses of your call. Police administration will help you surely.
            Emergency numbers:<br><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>POLICE-100 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Women Helpline-1091 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Women Helpline - Domestic Abuse-181 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Deputy Commissioner Of Police - Missing Child And Women: 1094 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Senior Citizen Helpline: 1091/ 1291 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Children In Difficult Situation: 1098 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Central Vigilance Commission: 1964 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Tourist Helpline: 1363 or 1800111363 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Railway Accident Emergency Service:1072 </b><br>
            <i class="fa-solid fa-handshake-angle " style="height:2rem; width:2rem"></i><b>Road Accident Emergency Service:1073 </b><br>

            <b>DISCLAIMER:</b>
            As a sincere citizen, your responsibility to maintain decorum of society and follow all given guidelines. don’t spam or fraud call on provided emergency numbers. If anyone will found guilty in such types of frauds the authority have rights to take action against him/her and police administration will not responsible for your such types of activities.


          </div>
        </div><!-- End Default Card -->


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
  </script>

  <!-- Vendor JS Files -->
  <script src="../../vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../vendor/tinymce/tinymce.min.js"></script>
  <script src="../../js/policeJS/policeMain.js"></script>

</body>

</html>