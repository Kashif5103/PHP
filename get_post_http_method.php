<?php
// GET ans POST
// PHP SPECila /Supler Global variale used to collect the data from the Html Form,
// when data is sent to a file via actipon attribute in the <form> tag.
// <form action="some.php" method="POST">


// echo "<pre>";
// print_r($_GET);
if (isset($_GET["submit"])) {


    if(empty( $_GET["username"])){
        echo "Tour name is Empty";
    }else{
        echo "user name is not empty";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./get_post_http_method.php" method="get">
        <div>
            <label>User Name</label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <br>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>

    <br>
    <a href="./get_post_http_method.php">Home</a>
</body>

</html>