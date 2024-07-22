<?php
#Different kinds of nested loop to show star patterns 

#using 'for' nested loop
$n = 5; 
for ($i = 1; $i <= $n; $i++) { 
    for ($j = 1; $j <= $i; $j++) { 
        echo "* ";
    }
    echo "\n"; 
}

#using 'while' nested loop
$n=5;
$i=1;
while($i<=$n){
    $j=1;
    while($j<=$i){
        echo "* ";
        $j++;
    }
    echo"\n";
    $i++;
}

?>
