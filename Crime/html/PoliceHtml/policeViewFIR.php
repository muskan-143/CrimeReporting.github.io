<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police-View complaint</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</head>

<body>
    <?php
    include 'policeNav.php'
    ?>
    <!-- <div class="container my-3">
        <div class="row g-3 my-3">
            <div class="col" style="max-width: 20rem;">
                <label for="firstName" class="form-label">First Name</label>
                <select class="form-select" aria-label="Default select example" name="selectOption"
                    style="max-width: 40rem; display:inline">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col" style="max-width: 26rem;">
                <label for="secondName" class="form-label">Please enter number of FIR record required</label>
                <input type="number" class="form-control" aria-label="Last name" id="secondName" style="display: inline;">

            </div>
          
        </div>
    </div> -->
    <div class="container my-3">
        <h2 class="text-center">Criminals</h2>
        <form action="" method="post">
            <label for="email" class="form-label">Please select Crime Type</label>
            <br>
            <select class="form-select" aria-label="Default select example" name="selectOption"
                style="max-width: 40rem;">
                <option>--Select crime type--</option>
                <option value="Kidnapping">Kidnapping</option>
                <option value="Homicide(murder)">Homicide(murder)</option>
                <option value="Rape">Rape</option>
                <option value="Theft">Theft</option>
                <option value="anyOther">AnyOther</option>
            </select>
            <br>
            <label for="number" class="form-label">Please select number of FIR records</label>
            <br>
            <input type="number" name="numberValue">
            <br>
            <input type="submit" value="search" class="btn btn-dark my-3" name="search">

        </form>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Crime Type</th>
                    <th scope="col">Date of Crime</th>
                    <th scope="col">Description</th>
                    <th scope="col">Evidence</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                    // Creating connection to the database.
                    $conn = mysqli_connect('localhost','root','','crimereporting') or die('connection failed');
                    // Removing all the unnecessary spaces
                    function test_input($data) {
                
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    // When click on the search do the following.
                    if(isset($_POST['search'])){

                        // Displaying as per the selected option.
                        $selectOption = $_POST['selectOption'];
                        $numberValue = (int)$_POST['numberValue'];

                        // Future use for displaying only the limited document.
                        // $numberValue = $_POST['numberValue'];

                        // Query.
                        $query = "SELECT * FROM complaint WHERE CrimeType = '$selectOption'";

                        $result = $conn->query($query);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc())
                            {
                                if($numberValue>0){
                                echo ' <tr>
                                        <th><img src="../../uploadImage/'.$row['Image'].'" style="width:12rem; height:5rem;" alt="No image"></th>
                                        <td>'.$row['Name'].'</td>
                                        <td>'.$row['Contact'].'</td>
                                        <td>'.$row['Email'].'</td>
                                        <td>'.$row['CrimeType'].'</td>
                                        <td>'.$row['Date'].'</td>
                                        <td>'.$row['description'].'</td>
                                        <td>'.$row['Evidence'].'</td>
                                    </tr>';   
                                    $numberValue = $numberValue - 1;  
                                } 

                            }
                        } 
                        else {
                            echo "0 results";
                        }
                        
                    }
                    
                ?>
                <!-- <tr>
                    <th>1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> -->

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</body>

</html>