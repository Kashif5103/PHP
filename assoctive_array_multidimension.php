<?php
// Assocactive array
// the array has the key value pairs
$emp=[
    "kinza"=>"Senior Developer",
    "kamran"=>"junior Developer",
    "kashif"=>"Junior PHP Developer"

];
print_r($emp);
// $k=array_keys($emp);
// print_r($k) ;
// $v=array_values($emp);
// print_r($v) ;
// $f=array_flip($emp);
// print_r($f);
// $r=array_reverse($emp);
// print_r($r);
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
    foreach($emp as $key => $value){
    ?>
    <p><b><?php echo ucwords($key) ?>:</b><?php echo $value ?></p>
    <?php } ?>


</body>
</html>

<!-- multidimencional Array -->
 <!-- array inside the array  -->
<?php

$student=array(
    array("name" =>"kashif", "class" =>"BSCS"),
    array("name" =>"asif", "class" =>"BSFA")
);
// foreach ($student as $key => $value) {
//     // echo "$key";
//     print_r($value);
// }
foreach ($student as $key => $value) {
    echo "<br>" .ucwords($key) . "<br>" .$value ."<br>";
}



?>