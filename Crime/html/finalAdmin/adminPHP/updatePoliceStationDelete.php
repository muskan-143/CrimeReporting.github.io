<?php

    include "connection.php";
    if(isset($_POST['delete'])){

        $id = $_POST['id'];
        echo $id;
        $query = "DELETE FROM policestation WHERE ID ='$id'";
        $result = mysqli_query($conn,$query);
        if($result){
           
            header("Location:updatePoliceStation.php");
        }
        else{
            echo "error";
        }
    }
?>