<?php
    include "connection.php";
    $query = "SELECT * FROM policestation";
    $result = mysqli_query($conn,$query);

    while ($row = $result->fetch_assoc()) {
        echo '
        <script>
            
            str =`
               <div class="card bg-light my-5 mx-auto" style="max-width: 80rem;">
                    <div class="card-header align-middle ">
                        <h3><b>Police Station Name:</b>'.$row['Station'].'</h3>
                        <hr>
                        <div class="card-body">
                            <p>
                                <b>Officer InCharge ID:</b>'.$row['officerInchargeId'].'<br>
                                <b>Officer InCharge Name:</b>'.$row['OfficerIncharge'].'<br>
                                <b>Contact No.:</b>'.$row['Contact'].'<br>
                                <b>State: </b>'.$row['State'].' <br>
                                <b>District:</b>'.$row['District'].'<br>
                            </p>
                            <form action="updatePoliceStationDelete.php" method = "post">
                            <input type = "hidden" name = "id" value="'.$row['Id'].'">

                            <button class="btn btn-danger" name="delete" id ="'.$row['Id'].'" onclick="return checkDelete()">Delete</button>
                            </form>
                                        
                        </div>
                    </div>
                </div>`;
        
            document.getElementById("display").innerHTML += str;
        </script>
        ';

    }
