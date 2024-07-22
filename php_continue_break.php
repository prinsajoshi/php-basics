<?php
// PHP break and continue

// PHP break
echo "<b>PHP Break:</b><br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;  // Exit the loop when $i equals 5
    }
    echo "The number is: $i<br>";
}
/* Output:
The number is: 0
The number is: 1
The number is: 2
The number is: 3
The number is: 4
*/

// PHP continue
echo "<b>PHP Continue:</b><br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;  // Skip the current iteration when $i equals 5
    }
    echo "The number is: $i<br>";
}
/* Output:
The number is: 0
The number is: 1
The number is: 2
The number is: 3
The number is: 4
The number is: 6
The number is: 7
The number is: 8
The number is: 9
*/

?>
