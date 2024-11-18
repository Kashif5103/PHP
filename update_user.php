<?php
include "db.php";
// step 1 Get users data by user id
if (isset ($_GET['id'])) {
    
$sql="SELECT *FROM users WHERE id= ".$_GET['id'];
$result=$con->query($sql);
// echo "<pre>";
// print_r($result);
$user=mysqli_fetch_assoc($result);
}
// step 2 -update user data  by the submit of the form
if(isset($_POST['submit'])){
    extract($_POST);
    $sql="UPDATE users SET username='$username', password='$password' WHERE id=".$_GET['id'];
;
    $result=$con->query($sql);
    if ($result) {
        $_SESSION['success']="User Updated Successfully";
        // echo "User Created Success Fully";
    }else {
        $_SESSION['error']="Error in the user updated";
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
        <h2>Edit User</h2>
        <form action="" method="post">
            <div class="container">
                <label for="uname"><b>username</b></label>
                <input type="text" placeh older="Enter Your name " name="username"required value="<?php echo $user['username'] ?>">
                <label for=""><b>passwords</b></label>
                <input type="password" placeh older="Enter Your Password" name="password"required value="<?php echo $user['password'] ?>">
                <button type="submit" name="submit">Update</button>
            </div>
        </form>
    </section>
</body>
</html>