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
//    1**  Required ** $colors = array('white', 'green', 'red') 
//    Write a PHP script that will display the colors as unordered list : 
//    Expected Output:  
//    •	green
//    •	red
//    •	white
$colors = array('white', 'green', 'red');
 echo "<ul>";
 foreach($colors as $colora)
 {
     echo "<li>". $colora. "</li>";
 }
echo"</ul>"
?>
    <hr>
    <?php
    
//    2.	**  Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
   
//    Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
//    Expected Output:
//    The capital of Netherlands is Amsterdam 
//    The capital of Greece is Athens 
//    The capital of Germany is Berlin 
   
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach($cities as $country => $value) {
    echo " The capital of " . $country . " is " . $value;
    echo "<br>";
  }

?>
<hr>
<?php
//    3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
   
//    Write a PHP script to display the first element of the above array. 
//    Expected Output:  white
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo  $color['4'];
   ?>
   <hr>
<?php
//    4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $fruit => $value) {
    echo  $fruit . " = " . $value;
    echo "<br>";
  }
?>
<hr>
<?php
// 8.	**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
$words =  array("abcd","abc","de","hjjj","g","wer");
//strlen Returns the length of the given string.
// array_map Applies the callback to the elements of the given arrays
$maxLength = max(array_map('strlen', $words));
$minLength = min(array_map('strlen', $words));

echo "The shortest array length is " .$minLength ." ". "The longest array length is " . $maxLength;
 ?>

</body>
</html>