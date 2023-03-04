<?php

include "connection.php";
session_start();
$ID = $_SESSION['Id'];
if (isset($_GET['pendingId'])) {
    $id = $_GET['pendingId'];
    $query = "update  complaint set STATUS = 'pending', solveOfficerId = '$ID' WHERE Id='$id'";
    $conn->query($query) or die ('query ');

    // header('location:acceptedComplaint.php');
}
?>
