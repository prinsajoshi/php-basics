<?php
#date()
echo date('Y-m-d H:i:s'); // Output: 2024-07-29 14:30:00

echo("/n");

#time()
echo time(); // Output: 1690636200 (Unix timestamp)

echo("/n");

#strtotime()
echo strtotime('2024-12-31'); // Output: 1704038400 (Unix timestamp for December 31, 2024)
echo strtotime('+1 week'); // Output: 1691246400 (Unix timestamp for one week from now)

echo("/n");

#mktime()
/*
mktime(int $hour = 0, int $minute = 0, int $second = 0, int $month = 1, int $day = 1, int $year = 1970): int
 */
echo mktime(14, 30, 0, 7, 29, 2024); // Output: 1700627400 (Unix timestamp for July 29, 2024, 14:30:00)

#DateTime
//getdate()
print_r(getdate());
/* Output:
Array
(
    [seconds] => 0
    [minutes] => 30
    [hours] => 14
    [mday] => 29
    [wday] => 1
    [mon] => 7
    [year] => 2024
    [yday] => 210
    [weekday] => Monday
    [month] => July
    [0] => 1700627400
)
*/

//date_create()
$date = date_create('2024-07-29 14:30:00');
echo date_format($date, 'Y-m-d H:i:s'); // Output: 2024-07-29 14:30:00

//date_format()
$date = date_create('2024-07-29 14:30:00');
echo date_format($date, 'l, F j, Y H:i:s'); // Output: Monday, July 29, 2024 14:30:00

//date_add()
$date = date_create('2024-07-29 14:30:00');
date_add($date, date_interval_create_from_date_string('1 month'));
echo date_format($date, 'Y-m-d H:i:s'); // Output: 2024-08-29 14:30:00

//date_sub()
$date = date_create('2024-07-29 14:30:00');
date_sub($date, date_interval_create_from_date_string('1 month'));
echo date_format($date, 'Y-m-d H:i:s'); 
// Output: 2024-06-29 14:30:00

//date_diff()
$date1 = date_create('2024-07-29');
$date2 = date_create('2024-08-29');
$diff = date_diff($date1, $date2);
echo $diff->format('%a days'); 
// Output: 31 days

?>