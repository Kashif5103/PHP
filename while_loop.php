<?php
// while
// the loop run while where we acheive the certain Condion
// $i = 1;
// while ($i <= 10) {
//     echo $i;

//     $i++;
// }
// echo "out of code";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 10) {
    ?>
        <p> Hello <?php echo $i  ?></p>
    <?php $i++;
    }

    ?>
</body>

</html>