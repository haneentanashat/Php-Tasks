<?php
 session_start();
 $_SESSION['email']=$_POST['email'];
echo "Welcome  <br>";
if(!empty($_SESSION['email'])){
    echo 'Email: ' . $_SESSION['email'];
}
else 
{
    echo 'Please enter your Email';
}


