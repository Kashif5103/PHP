<?php
// insertion operations 

// include "db.php"; #it show the warning and excecute 
require "db.php"; #it generate the fatal error and stop the exceution

// insert querry
$date=date("Y-m-d H:i:s");
$sql = "insert into user (username ,pssword,created_date) value('kashif','kashif7860',$date)";

$result=$con->querry($sql);
if ($result==true ) {
    echo "new Record Created";

}else{
    echo "no record created .error".$con->error;
}

?>