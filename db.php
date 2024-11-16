<?php

// super Global Variable is in the session the we set the thing that are used in globly that are set in the session
session_start();
// Database connection
// mySQLi extenstion -works only the MYSQl DATA base
// PDO (PHP Data Object)

$servername="localhost";
$username="root";
$password="";
$dbName="testing";
// creat econnection
// $con =new mysqli($servername,$username,$password,$dbName);

// // check connection 
// if($con->connect_error){
//     die( "Connection Failed".$con->connect_error);
   
// }
$con=mysqli_connect($servername,$username,$password,$dbName);

if($con){
echo "";
}else{
    echo "connection unsuccess ful".mysqli_connect_error();
}
?>