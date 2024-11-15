<?php
include "db.php";
// Select Querry

// $sql="select * From user "; for all the fields 
$sql = "select id,username ,created_at From user  where id =1"; #specific coloum that are featch

$result = $con->querry($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($row);
    }
}
