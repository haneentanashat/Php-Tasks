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
    // 1.	Write a PHP script to check if the inserted number is a prime number 

    // Sample Input:  3
    // Expected Output: 3 is a prime number 
     function primeNumber($number)
    {
      
         for ( $i = 2; $i <$number; $i++)
        {
            if ($number % $i == 0) 
            {
               echo($i . "  is not prime number");               
                break;
            }               
         }
         echo($i . "  is prime number");   
     }

       primeNumber(3);

    ?>
    <hr>
    <?php
    // 2.	Write a PHP script to reverse a string 
    
    // Sample Input:  remove
    // Expected Output: evomer
    $string="remove";

   echo "Normal String : " . $string . '<br>';
   echo "Reverse String : " . strrev($string) ;

    ?>
    <hr>
    <?php
    // 3.	 Write a PHP script to check if the all string characters are lower cases
    
    // Sample Input:  remove
    // Expected Output: Your String is Ok 

    $lower= 'remove';
    if(ctype_lower($lower)){
    echo "Your string  ($lower)  is OK" ;
    }
    else{
    echo "Your string  ($lower)  NOT OK";
     }  
    //ctype_lower : Returns true if all of the characters in the provided string, text, are lowercase letters. Otherwise returns false.
    ?>
    <hr>
    <?php
    // 4&5.	Write a PHP function to swap to variables?
    
    // Sample Input:  x = 12     y= 10
    // Expected Output: y=12   x=10 
      function swap($number1,$number2)
      {
        $temp=$number1;
        $number1=$number2;
        $number2=$temp;
     
      }
      echo "Before Swapping:<br>";
        $x = 12;  
        $y = 10;
       echo "x = $x <br>";
       echo "y = $y <br>";
        echo "After swapping: <br>";  
         $temp = $x;  
        $x = $y;  
        $y = $temp;  
 
       echo "x = $x<br>";
       echo "y = $y<br>";

    ?>
    <hr>
    <?php
    // 6.	Write a PHP function to check if a number is an Armstrong number or not ?
    // **Armstrong number is a number that is equal to the sum of cubes of its digits.
    
    // Sample Input:  407
    // Expected Output: 407 is Armstrong Number 
    function Armstrong($number) {
        $str = strlen($number);
        $sum = 0;
        $number = (string)$number;
        for ($i = 0; $i < $str; $i++) {
          $sum = $sum + pow((string)$number{$i},$str);
        }
        if ((string)$sum == (string)$number) {
          return "$number  is Armstrong";
        } else {
          return " $number Is not Armstrong";
        }
      }
      echo Armstrong(407);
      
    ?>
    <hr>
    <?php
    // 7.	Write a PHP function that checks whether a passed string is a palindrome or not?
    // Sample Input:  Eva, can I see bees in a cave?
    // Expected Output: Yes it is a palindrome 
    function palindrome($string) 
{
  if ($string == strrev($string))
      echo "Yes it is a palindrome";
  else
	  echo "NO it is not a palindrome";
}
echo (palindrome("Eva, can I see bees in a cave?"));
    ?>
    <hr>
    <?php
    // 8.	Write a PHP function to remove duplicates from an array ?
    
    // Sample Input:  
    
    // $array1 = array(2, 4, 7, 4, 8, 4);
    
    
    // Expected Output:
    
    // $array1 = array(2, 4, 7, 8);
    $array1 = array(2, 4, 7, 4, 8, 4);
    function removeDuplicates($remove)
    {
        $newArray=array_unique($remove);
        print_r($newArray);
    }
     removeDuplicates($array1);
    ?>
</body>
</html>