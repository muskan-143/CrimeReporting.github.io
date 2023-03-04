<?php
    include "connection.php";
    $query = "SELECT * FROM complaint where STATUS = 'solved'";
    $result = mysqli_query($conn,$query);

    while ($row = $result->fetch_assoc()) {
        echo '
        <script>
            
            str =`
               <div class="card bg-light my-5 mx-auto" style="max-width: 50rem; background-color:#272c4a;">
                    <div class="card-header align-middle " style="background:#272c4a;">
                        
                        <div class="card-body">
                            <p>
                                <h5 style="display:inline;">Case Id- </h5>  '.$row['Id'].'<br>
                                <h5 style="display:inline;">Crime Type - </h5>  '.$row['CrimeType'].'<br>
                                <h5 style="display:inline;">Complaint Reported By - </h5>'.$row['Name'].'<br>
                                <h5 style="display:inline;">Officer In-charge Id- </h5>'.$row['solveOfficerId'].'<br>
                                <h5 style="display:inline;">Case Solved Date - </h5>'.$row['Date'].' <br>
                            </p>
                               
                        </div>
                    </div>
                </div>`;
        
            document.getElementById("display").innerHTML += str;
        </script>
        ';

    }
