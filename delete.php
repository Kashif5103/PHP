<?php
include "db.php";
// delete the querry

$sql="delete from the users where id=2";
$result=$con->querry($sql);
if ($result=true) {
    echo "deleted Sauccess Fully";
}else{
    echo "no record deleted";
}

?>