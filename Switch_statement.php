<?php
## Switch Conditional Statement
// Replacement of the elseif Statement

// $grade="F";
// if($grade=="A"){
//     echo "You Did Great";
// }
// elseif($grade=="B"){
//     echo "You Did Good";
// }
// elseif($grade=="C"){
//     echo "You Did Okay";
// }
// elseif($grade=="D"){
//     echo "You Did Poor";
// }
// elseif($grade=="F"){
//     echo "You are Fail";
// }
// else{
//     echo "Its not valid ";
// }

$grade="A";
$num=13;

switch($grade){
    case"A":
        echo "You Did Great";
        break;
    case"B":
        echo "You Did Good";
        break;
    case"C":
        echo "You Did Okay";
        break;
    case"D":
        echo "You Did Poor";
        break;
    case"F":
        echo "You Are Fail";
        break;
   default:
   echo $grade."It is not valid";

}
