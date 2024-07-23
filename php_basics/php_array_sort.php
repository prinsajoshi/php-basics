<?php
#Ascending order array
$numbers = array(5, 2, 9, 1, 5, 6);
// Sort the array in ascending order
sort($numbers);
echo "Ascending Order: ";
print_r($numbers);

/*Output
Ascending Order: Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 5
    [4] => 6
    [5] => 9
)
*/

#Descending order array
$numbers = array(5, 2, 9, 1, 5, 6);
// Sort the array in descending order
rsort($numbers);
echo "Descending Order: ";
print_r($numbers);

/*Output
Descending Order: Array
(
    [0] => 9
    [1] => 6
    [2] => 5
    [3] => 5
    [4] => 2
    [5] => 1
)
*/
?>
