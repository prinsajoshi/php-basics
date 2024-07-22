<?php
#php continue and break

#php break
for($i=0;$i<10;$i++){
    if ($i==5){
        break;  //exit loop when the $i=5
    }
    echo "The number is: $i \n";
}

#php continue
for($i=0;$i<10;$i++){
    if ($i==5){
        continue;  //skip loop when the $i=5
    }
    echo "The number is: $i \n";
}

?>