<?php
// Array 
// Varable that can hold more than one value at a time 

$fruit=['apple','banana','mango','orange'];
print_r($fruit);
echo $fruit[0];
echo $fruit[3];
echo $fruit[4];
$fruit[0]="coconut";
foreach($fruit as $fruits){
echo $fruits;
}
// add the new element in the array through the array push
array_push($fruit,"gava","water melon");
print_r($fruit);
// array_shift($fruit);
// print_r($fruit);
$rev=array_reverse($fruit);
print_r($rev);
echo count($fruit);
?>