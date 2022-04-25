<?php
/*12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 
Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’*/
$mark1=60;
$mark2=86;
$mark3=95;
$mark4=63;
$avg=($mark1+$mark2+$mark3+$mark4)/4;
if($avg>=100){
    echo "Your grade:" . "A";
}
else
if($avg>=90){
    echo "Your grade:" . "B";
}
else
if($avg>=80){
    echo "Your grade:" . "C";
}
else
if($avg>=70){
    echo "Your grade:" . "D";
}
else
if($avg>=60){
    echo "Your grade:" . "F";
}
