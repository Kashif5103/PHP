<?php
include "db.php";

// update Querry
$sql = "update users set username =bilal where id= 2";
$result =$con->querry($sql);
if ($result) {
    echo "Updated Success Fully";
}else{
    echo "no updated data ";
}
?>