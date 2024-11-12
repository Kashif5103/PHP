<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Radio_btn.php" method="post">
        <label>Select Any Course</label><br>
        <input type="radio" value="CS" name="course">BSCS <br>
        <input type="radio" value="SE" name="course">BSSE <br>
        <input type="radio" value="IT" name="course">BSIT <br>
        <input type="radio" value="DS" name="course">BSDS <br>

        <input type="submit" name="Conform" value="Conform">
    </form>
    <?php
    if (isset($_POST['Conform'])) {
        $course=null;
        // echo "<pre>";
        // print_r($_POST);
        // exit;
        $course = $_POST['course'];
        echo $course;
    }
        if ($course=="CS"){
            echo "You Selecteted the courde is CS";
    }
       else if ($course=="SE"){
            echo "You Selecteted the courde is SE";
    }
        else if ($course=="IT"){
            echo "You Selecteted the courde is IT";
    }
        else if ($course=="DS"){
            echo "You Selecteted the courde is DS";
    }   else{
        echo "Please Select any one";
    }

    ?>


</body>

</html>