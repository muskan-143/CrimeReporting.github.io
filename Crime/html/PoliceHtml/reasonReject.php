<?php
    include "connection.php";
    $id = $_GET['rejectId'];
    $query = "SELECT * from complaint WHERE Id='$id'";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc()){
        echo $row['Name'];
    }
?>