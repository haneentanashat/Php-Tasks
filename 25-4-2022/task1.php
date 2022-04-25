
<?php
/* 1.	Write a PHP script to see if the specified year is a leap year or not.
Sample Input: 2013
Sample Output: ‘This year is not a leap year’*/
$year= 2020;
if(($year%4 == 0) && (($year%100 == 0) ||($year%400 == 0))){
    echo $year ." ". "is a leap year.";
}
 else{
    echo $year . " " . "This year is not a leap year.";
}