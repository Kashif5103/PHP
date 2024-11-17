<?php
include "db.php";
include "session_for_login.php";
// delete user id the id is set
if (isset ($_GET['id'])) {
    extract($_GET);
    $sql="DELETE FROM users where id=".$id;
    $result=$con->query($sql);
    if ($result) {
        echo "Item are deleted";
    }else {
        echo "Something is went Wrong";
    }
}



// get all the users
$sql = "SELECT * FROM users ";
$result = $con->query($sql);
// echo "<pre>";print_r($result);
// exit;
// echo $_SESSION['name']
// echo $_SESSION['success'];
// unset($_SESSION['success'])
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users </title>
    <link rel="stylesheet" href="user.css">
</head>

<body>
    <section class="section">
        <?php include "alert.php"; ?>
        <h2>All Users</h2>
        <table id="users">
            <thead>
                <tr>
                    <th>username</th>
                    <th>created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        # code...

                ?>
                        <tr>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="update_user.php?id=<?php echo $row['id'] ?>" class="button edit">Edit</a>
                                <a href="user.php?id=<?php echo $row['id'] ?>" class="button delete">Delete</a>
                            </td>
                        </tr>
                        <tr>

                        </tr>
                <?php  }
                } else {
                    echo "<tr><td colspan='3'> No Record Found</td></tr>";
                }
                ?>

            </tbody>

        </table>

        <div class="container" style="background-color:blue ;"></div>
        <a href="add_user_crud_project.php" class="footerbtn">Add User</a>
        <a href="logout.php" class="footerbtn">Logout</a>
    </section>
</body>

</html>