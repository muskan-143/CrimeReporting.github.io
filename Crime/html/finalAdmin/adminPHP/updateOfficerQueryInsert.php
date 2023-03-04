<?php
include "connection.php";

$query = "SELECT * FROM updateOfficer";
$result = $conn->query($query);
$count = 0;
while ($row = $result->fetch_assoc()) {
    
    echo '
        <tr style="background:#272c4a">
            <td>' . $row['Id'] . '</td>
            <td>' . $row['Name'] . ' '.$row['middleName'].' '.$row['lastName'].'</td>
            <td>' . $row['Password'] . '</td>
            <td>' . $row['Email'] . '</td>
            <td>' . $row['Age'] . '</td>
            <td>' . $row['District'] . '</td>
            <td>' . $row['State'] . '</td>
            <td>' . $row['ZipCode'] . '</td>
            <td>' . $row['Contact'] . '</td>
            <td>' . $row['Gender'] . '</td>

            <td>
                <button class="btn btn-danger editbtn">Edit</button></a>
            </td>

            <td>
                <form action="updateOfficerDelete.php" method = "post">
                <input type = "hidden" name = "id" value="'.$row['Id'].'">

                <button class="btn btn-danger" name="delete" id ="'.$row['Id'].'" onclick="return checkDelete()">Delete</button>
                </form>
            </td>
            <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>
        ';
}

// delete Query 
?>