<?php
/*9.Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
Sample Input: 15
Sample Output: ‘is no eligible to vote’*/
$age=15;
if($age>=18){
    echo "Your age :". " ".$age ." ". "is eligible to vote";
}
else{
echo "Your age :". " ".$age ." ". "is not eligible to vote";
}