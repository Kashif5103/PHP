<?php
// isset 
// return TRUE ,if the variable is set and not null

// empty
// return True when if the function is not set false,null,

$name="kashif";
echo isset($name);
// $name=null;
echo isset($name);

// if(isset($name)){
//     echo "name is set ";
// }else{
//     echo"name is not set";
// }
if(empty($name)){
    echo "name is set ";
}else{
    echo"name is not set";
}




?>