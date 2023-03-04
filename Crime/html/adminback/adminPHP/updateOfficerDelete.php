<?php

    include "connection.php";
    if(isset($_POST['delete'])){

        $id = $_POST['id'];
        echo $id;
        $query = "DELETE FROM updateOfficer WHERE ID ='$id'";
        $result = mysqli_query($conn,$query);
        if($result){
           
            header("Location:updateOfficer.php");
        }
        else{
            echo "error";
        }
    }
?>