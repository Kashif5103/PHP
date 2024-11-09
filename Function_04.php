<?php
// <!-- Pre Define Function -->
//  <!-- String Function -->
//   <!-- number function -->
//    <!-- math Function -->
// String Functions
// $n="muhammad kashif";
// for the length
//  echo strlen($n);
//  for the replace
//  echo str_replace("f","m",$n);
//  echo str_ireplace("F","m",$n);
//  first latter capital
// echo ucwords($n);
// echo ucfirst($n);


// Number Function
$num=30.31;
var_dump(is_int($num));
echo "</br>";
// $num=30.31;
var_dump(is_float($num));
echo "</br>";
// $num=30.31;
var_dump(is_int($num));
echo "</br>";
$num="30.31";
var_dump(is_numeric($num));
echo "</br>";

// math Functions 

echo pi();
echo abs(-4563);
echo sqrt(81);
echo round(25.2478);
echo rand(1,100)


?>