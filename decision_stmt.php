<?php
// if statment
$age = 18;
$weight = 60;
if ($age >= 18){
    echo "You are enigiable...";
}

// if-else statment
if ($age >= 18){
    echo "You are enigiable...";
}else{
    echo "You are not enigiable...";
}

//nested if-else
if ($age >= 18){
    if ($weight >= 65){
        echo "You are enigiable...";
    }else{
        echo "You are not enigiable...";
}
}else{
    echo "You are under age...";
}


//switch statment
$num = 0;
switch($num){
    case $num > 0:
        echo "$num is positive number";
        break;
    case $num < 0:
        echo "$num is negative number";
        break;
    case 0:
        echo "$num is zero";
        break;
    default:
        echo "Invalid input";
}

?>