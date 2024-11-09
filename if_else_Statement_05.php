<?php
// if conditiponal Statement
// if some condition is true , do some thing 
// if the condition is false don't do it
// Relational Operator
/*
> (Greater than)
< (less than)
>= (greater than Equal to)
<= (less than are equal to )
== (equal to equal to)
! (not)
*/
// $age=10;
// if($age>=18){
//     echo "you can vote";
// }elseif($age>=10){
//     echo "You are a Child";
// }else{
//     echo "You Are not not Vote";
// }

// $hour=43;
// $rate=20;
// $pay=0;

// if ($hour<=40){
//     $pay=$hour*$rate;
//     echo $pay;
// }elseif($hour<=0){
//     echo "Please correct the Hour";
// }else{
//     $pay=(40*$rate)+($hour-40)*($rate*1.5);
//     echo $pay;
// }


//logical operator
// logical Operator = combine conditional statement
// if (condition 1 && condion 2)
// && =true if both are condition are true
// || =true if atleast one condition is true
// ! true if false , False if true

$temp=45;
$cloudy=true;
if ($temp>0 && $temp<30){
    echo "temp is good ";
}else{
    echo "temp is not good";
}

if(!$cloudy){
    echo "Its  cloudy outside";
}else{
    echo "It's sunny";
}
?>