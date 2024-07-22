<?php
#Different php conditional operators
//if statement
$age=20;
if ($age>=20){
    echo "you are adult";
}

//if-else statement
if ($age<18){
    echo "you are under age";
}
else{
    echo "you are adult";
}

//if-elseif-else statement
$string="cat";
if ($string=="cat"){
    echo "you are animal";
}
elseif ($string=="rose"){
    echo "you are plant";
}
else{
    echo "you are not a plant nor animal";
}

//nested 'if' statement: allows you to add the additional conditions
$age=20;
$hasID=true;
if ($age>= 20){
    if ($hasID){
        echo "you are adult and can vote";
    }
    else{
        echo "ID is required to vote";
    }
} else {
    echo "You are too young to vote";
}

//'switch' statement: handle multiple conditions for a single variable
$day='sunday';
switch ($day){
    case "sunday":
        echo "Day1: ".$day;
        break;
    case "monday":
        echo "Day2: ".$day;
        break;
    case "tuesday":
        echo "Day3: ".$day;
        break;    
    case "wednesday":
        echo "Day4: ".$day;
        break;
    case "thursday":
        echo "Day5: ".$day;
        break;
    case "friday":
        echo "Day6: ".$day;
        break;
    default:
        echo "not a valid day";
}

?>