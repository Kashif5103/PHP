<?php
include "db.php";
include "session_for_login.php";
// $_SESSION['name']="World";



if(isset($_POST['submit'])){
    extract($_POST);
    // echo $username;
    // exit;
    $date=date("Y-m-d H:i:A");
    // i use this for the hashi ng
    // $pass=md5($password);
    // $sql="INSERT INTO users(username,password,created_at)values('$username','$pass','$date')";
    $sql="INSERT INTO users(username,password,created_at)values('$username','$pass','$date')";
    $result=$con->query($sql);
    if ($result) {
        $_SESSION['success']="User created Successfully";
        // echo "User Created Success Fully";
    }else {
        $_SESSION['error']="Error in the user creation";
        // echo "User is not Created Error".$con->error;
    }
    header("location:user.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Crud Applications </title>
    <link rel="stylesheet" href="add_user.css">
</head>
<body>
    <section class="section">
        <h2>Registration Form</h2>
        <form action="add_user_crud_project.php" method="post">
            <div class="container">
                <label for="uname"><b>username</b></label>
                <input type="text" placeh older="Enter Your name " name="username"require>
                <label for=""><b>passwords</b></label>
                <input type="password" placeh older="Enter Your Password" name="password"require>
                <button type="submit" name="submit">Signup</button>
            </div>
        </form>
        <div class="container" style="background-color:blue ;"></div>
        <a href="user.php" class="footerbtn">All User</a>
        <a href="logout.php" class="footerbtn">All User</a>
    </section>
</body>
</html>