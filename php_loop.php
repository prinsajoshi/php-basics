<?php

#Different loop conditions in php

//for loop
for ($x=0;$x<=10;$x++){
    echo "The number is : $x \n";
}

//while loop
$a = 0;
while ($a <= 10) {
    echo "The number is : $a \n";
    $a++;
}

//do-while loop: similar to 'while' but gurantees that code is executed at least once 
$i=0;
do{
    echo "The number is : " . $i . "\n";
    $i++;
} while ($i<=10);

//'for-each' loop
//example 1:
$colors=array("red","green","blue");
foreach ($colors as $color){
    echo "The color is : $color \n";
}

//example 2:
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
foreach($age as $name=>$value){
    echo "$name is $value years old \n";
}

?>