<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//1.Create a script using a for loop to add all the integers between 0 and 30 and display the total. 
//Expected Output:  total as a number 
$sum=0;
for($i=0;$i<=30;$i++)
{
   $sum=$sum+$i;

}
    echo "The total = ". $sum ;
    ?>
    <hr>
    <?php
// 4.	Create a script to generate the following pattern, using the nested for loop. 
// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5

    for($i=1; $i<=5; $i++){
        for($j=1;$j<=5; $j++){
            if($i==$j){
                echo $i . " ";
            }
            else 
            echo 0 . " ";
        }
        echo '<br>';
    }

    ?>
    <hr>


<?php
// 5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. 

// Sample Input: 5
// Expected Output: 120
$f = 5;
$fact = 1;
for($i=1;$i<=$f-1;$i++)
{
 $fact*=($i+1); 
}
echo " Factorial of  $f = $fact";

?>
<hr>
    <?php
 // 6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, …

$number = 0;  
$numberOne = 0;  
$numberTwo = 1;  
echo $numberOne." ".$numberTwo." ";  
while ($number < 10 )  
{  
    $numberThree = $numberOne + $numberTwo;  
    echo $numberThree.' ';  
    $numberOne = $numberTwo;  
    $numberTwo = $numberThree;  
    $number = $number + 1;  
}
?>
<hr>
<?php
// 9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **


// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15
$number=1;
for($i=1; $i<=5; $i++) {
    for($j=1; $j<=$i; $j++){
        echo $number++ . " ";
    }
    echo '<br>';
}
?>
</body>
</html>
