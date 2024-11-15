<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Checkbox.php" method="post">
        <label>Select Your Favirate </label><br>
        <input type="checkbox" value="Fastfood" name="foods[]">FastFood <br>
        <input type="checkbox" value="sweets" name="foods[]">Sweets <br>
        <input type="checkbox" value="namkeen" name="foods[]">Namkeen <br>
        <input type="checkbox" value="street food" name="foods[]">Street Food <br>

        <input type="submit" name="conform" value="Conform">
    </form>
    <?php
    if (isset($_POST['conform'])) {
    //   echo "<pre>"; print_r($_POST);
    //   exit; 
    $foods=$_POST["foods"];
    echo $foods[0] ."<br>";
     foreach($foods as $f){
        echo "you have selected food ". $f ."<br>";
     }


    }
    //     if(isset($_POST['nn'])){
    //         echo "You Have Selected the Namkeen " .$_POST['nn'];

    //     }
    //     elseif(isset($_POST['sweets'])){
    //         echo "You Have Selected the Sweets " .$_POST['sweets'];

    //     }
    //     if(isset($_POST['fastfood'])){
    //         echo "You Have Selected the fastfood " .$_POST['fastfood'];

    //     }
    //     if(isset($_POST['street food'])){
    //         echo "You Have Selected the street food " .$_POST['street food'];

    //     }
    //     else{
    //         echo "Please Select at least one ";

    //     }
    // }


    ?>


</body>

</html>