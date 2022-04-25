<?php
/*7.Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9 */
$numberOne=1;
$numberTwo=5;
$numberThree=9;

if($numberOne>$numberTwo&&$numberOne>$numberThree) {
    echo "Number one is the largest number:"." ". $numberOne;
} else
 if($numberTwo>$numberOne&&$numberTwo>$numberThree) {
    echo "Number two is the largest number:" ." ". $numberTwo;
} 
else {
    echo "Number three is the largest number:" ." ". $numberThree;
}
