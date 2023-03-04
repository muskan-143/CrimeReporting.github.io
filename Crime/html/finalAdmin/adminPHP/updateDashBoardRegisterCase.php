<?php

include "connection.php";

$query = "SELECT * FROM registerationform";
$result = $conn->query($query);
$count = 0;
while ($row = $result->fetch_assoc()) {
    $count++;
}
echo $count;

?>
