<?php
/*4.Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’*/

$firstInteger=10;
$secondInteger=10;
$sum=$firstInteger+$secondInteger;
if($sum==30)
{
   echo "The sumation of two number=". " ". $sum;
   
}
else
{
    echo "False";
}