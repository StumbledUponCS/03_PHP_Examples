<!DOCTYPE html>
<html>
<body>

<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>











<!-- -->
<!-- -->
<!-- -->
<!--

PHP Date and Time



-->
<!-- -->
<!-- -->
<!-- -->
<!--

The PHP date() function is used to format a date and/or a time.


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

The PHP Date() Function:



The PHP date() function formats a timestamp to a more readable date and time.



Syntax:



date(format,timestamp)



-->
<!-- -->
<!-- -->
<!--

Parameter               Description


format                  Required. Specifies the format of the timestamp

timestamp               Optional. Specifies a timestamp. Default is the current date
                        and time


-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occurred.

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

Get a Date


The required format parameter of the date() function specifies how to format the date (or time).






Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)

m - Represents a month (01 to 12)

Y - Represents a year (in four digits)

l (lowercase 'L') - Represents the day of the week

Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.




-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!--

The example below outputs the number of days until 4th of July:

-->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
