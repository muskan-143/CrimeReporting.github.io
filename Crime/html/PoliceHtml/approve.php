<?php

    include "connection.php";
    if(isset($_GET['approveId'])){
        $id = $_GET['approveId'];
        $query = "UPDATE complaint SET  STATUS='approved' WHERE Id='$id'";
        $conn->query($query);
        header('location:complaint.php');
    }
?>