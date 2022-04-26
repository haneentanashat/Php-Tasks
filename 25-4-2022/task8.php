<?php
/*8.	Write PHP script to calculate the monthly electricity bill according to these rules
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit */
$units=120;
   if($units<=50) 
   echo  "Your monthly electricity bill :"." ". $units*2.50;
   else if($units>250) 
       echo  "Your monthly electricity bill:"." ".  $units*7.50 ;
   else if($units>200) 
    echo  "Your monthly electricity bill:"." ". $units*6.20 ;
    else if($units>100) 
        echo "Your monthly electricity bill:"." ". $units*5 ;
    else 
        echo "Please enter correct value!";
