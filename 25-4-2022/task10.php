<?php
/*10.	Write php script  to check whether a number is positive, negative or zero
Sample Input: -60
Sample Output: ‘Negative’*/
$number=-60;
if($number==0){
    echo $number." "."is  Zero";
}
else
if($number>1){
    echo $number." "."is Postive";
}
else
{    echo $number." "."is Negative";
}
