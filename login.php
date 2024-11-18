<?php
include "db.php";
// $_SESSION['name']="World";
// login form Submit 
if (isset($_POST['submit'])) {
    extract($_POST);
    // Sql querry to login
    $sql="SELECT * FROM users  WHERE username ='$username' AND password='$password' ";
    $result=$con->query($sql);
    if ($result->num_rows) {
    //     echo "valid user";
    // }else{
    //     echo "not valid";
    // }
        $_SESSION['is_user_loggedin']=true;
        $_SESSION['user_data']=mysqli_fetch_assoc($result);
        header("location:user.php");
    }else{
        $_SESSION["error"]="invalid user id";
    }
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
        <?php include "alert.php" ; ?>
        <h2>Login Form</h2>
        <form action="login.php" method="post">
            <div class="container">
                <label for="uname"><b>username</b></label>
                <input type="text" placeh older="Enter Your name " name="username" require>
                <label for=""><b>passwords</b></label>
                <input type="password" placeh older="Enter Your Password" name="password" require>
                <button type="submit" name="submit">login</button>
            </div>
        </form>
    </section>
</body>

</html>