<?php
session_start();
if (!isset($_SESSION['Name'])) {
    header('location:userLogin.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/userCSS/userNew.css">
</head>

<body>
    <?php
    include 'userNavBar.php';

    ?>
    <div class="container my-3">
        <h3>Top News</h3>
        <hr>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sit fuga quo, similique non alias labore a odio assumenda dolor reprehenderit sequi magni. Cupiditate culpa non nostrum
                        officiis provident laboriosam voluptates quis aperiam veniam tempore, aut voluptatum sunt facere maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet voluptatum labore voluptatem eius harum, deserunt
                        possimus vitae eos repellendus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, est?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sit fuga quo, similique non alias labore a odio assumenda dolor reprehenderit sequi magni. Cupiditate culpa non nostrum
                        officiis provident laboriosam voluptates quis aperiam veniam tempore, aut voluptatum sunt facere maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet voluptatum labore voluptatem eius harum, deserunt
                        possimus vitae eos repellendus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sit fuga quo, similique non alias labore a odio assumenda dolor reprehenderit sequi magni. Cupiditate culpa non nostrum
                        officiis provident laboriosam voluptates quis aperiam veniam tempore, aut voluptatum sunt facere maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet voluptatum labore voluptatem eius harum, deserunt
                        possimus vitae eos repellendus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sit fuga quo, similique non alias labore a odio assumenda dolor reprehenderit sequi magni. Cupiditate culpa non nostrum
                        officiis provident laboriosam voluptates quis aperiam veniam tempore, aut voluptatum sunt facere maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet voluptatum labore voluptatem eius harum, deserunt
                        possimus vitae eos repellendus.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Lorem ipsum dolor sit amet.</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sit fuga quo, similique non alias labore a odio assumenda dolor reprehenderit sequi magni. Cupiditate culpa non nostrum
                        officiis provident laboriosam voluptates quis aperiam veniam tempore, aut voluptatum sunt facere maiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet voluptatum labore voluptatem eius harum, deserunt
                        possimus vitae eos repellendus.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <div class="container customContainer">
        <h3><u>Rules you should be aware of :</u></h3>

        <hr>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Rule: 1</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio earum distinctio deserunt laborum nihil tenetur doloribus ea sequi quo quas ut, magnam nisi est nesciunt saepe cupiditate velit. Reiciendis temporibus cumque illum
                            cupiditate. Magni, maxime, numquam a itaque enim natus est consectetur temporibus eaque nulla eum ducimus quidem provident beatae.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Rule: 2</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio earum distinctio deserunt laborum nihil tenetur doloribus ea sequi quo quas ut, magnam nisi est nesciunt saepe cupiditate velit. Reiciendis temporibus cumque illum
                            cupiditate. Magni, maxime, numquam a itaque enim natus est consectetur temporibus eaque nulla eum ducimus quidem provident beatae.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Rule: 3</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio earum distinctio deserunt laborum nihil tenetur doloribus ea sequi quo quas ut, magnam nisi est nesciunt saepe cupiditate velit. Reiciendis temporibus cumque illum
                            cupiditate. Magni, maxime, numquam a itaque enim natus est consectetur temporibus eaque nulla eum ducimus quidem provident beatae.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Rule: 4</b></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio earum distinctio deserunt laborum nihil tenetur doloribus ea sequi quo quas ut, magnam nisi est nesciunt saepe cupiditate velit. Reiciendis temporibus cumque illum
                            cupiditate. Magni, maxime, numquam a itaque enim natus est consectetur temporibus eaque nulla eum ducimus quidem provident beatae.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" id="foot">
        Copyright &copy; All right reserved. <br> For more updates contact us on facebook,twitter
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="../js/userNew.js"></script>
</body>

</html>