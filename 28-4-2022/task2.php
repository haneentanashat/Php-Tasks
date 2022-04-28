<?php
$number1= $_GET['num1'];
$number2 = $_GET['num2'];

if(isset($_GET['sum'])) {
    if(!empty($_GET['num1']) && !empty($_GET['num2'])) {
        echo "sum =  ". ($number1 + $number2 ) ;
    } else 
    {
        echo "please enter numbers";
    }
}
if(isset($_GET['sub'])) {
    if(!empty($_GET['num1']) && !empty($_GET['num2'])) {
        echo "subtraction =  " . ($number1- $number2) ;
    } else 
    {
        echo "please enter  numbers";
    }
}
if(isset($_GET['div'])) {
    if(!empty($_GET['num1']) && !empty($_GET['num2'])) {
        echo" division =  ". ($number1 /$number2) ;
    } else 
    {
        echo "please enter  numbers";
    }
}
if(isset($_GET['multi'])) {
    if(!empty($_GET['num1']) && !empty($_GET['num2'])) {
        echo "multiplication=  ".$number1 * $number2 ;
    } else 
    {
        echo "please enter  numbers";
    }
}