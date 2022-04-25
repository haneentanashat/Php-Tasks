<?php
/*11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division*/

$numberOne=5;
$numberTwo=10;
$operation ='+';
if($operation=='+'){
 echo "The sumation=" .( $numberOne + $numberTwo);   
}

if($operation=='-') {
    echo "The Subtraction=". ($numberOne - $numberTwo);   

}

if($operation=='*'){
    echo"The Multiplication=". ($numberOne * $numberTwo);   
}

if($operation=='/'){
    echo"The Division=". ($numberOne / $numberTwo);   
}