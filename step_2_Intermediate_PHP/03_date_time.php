<?php

#   📅 PHP Date and Time Functions

#1. date():
#syntax:: date(format, timestamp);

echo date("Y-m-d H:i:s"); 

#2. time():

echo time(); 

#3. mktime():
#syntax:: mktime(hour, minute, second, month, day, year);

$timestamp = mktime(0, 0, 0, 12, 25, 2025);
echo date("Y-m-d", $timestamp);

#4. strtotime():

$timestamp = strtotime("next Monday");
echo date("Y-m-d", $timestamp);

#5. getdate():

print_r(getdate());

#6. date_default_timezone_set():

date_default_timezone_set('Asia/Dhaka');
echo date("Y-m-d H:i:s");

#7. date_default_timezone_get():

echo date_default_timezone_get();

#8. checkdate():
#syntax:: checkdate(month, day, year);

var_dump(checkdate(2, 29, 2025)); 
var_dump(checkdate(2, 29, 2024)); 


#9. gmdate():

echo gmdate("Y-m-d H:i:s");

#10. microtime():

echo microtime(); 


#Calculate Days Between Two Dates:

$date1 = strtotime("2025-12-31");
$date2 = strtotime("2025-01-01");

$diff = abs($date1 - $date2);
$days = $diff / (60 * 60 * 24);

echo "Difference: $days days";












?>