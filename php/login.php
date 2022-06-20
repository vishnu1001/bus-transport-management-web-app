<?php

$servername="localhost";
$username="root";
$password="";
$db="amrita_bus";

$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
    echo "Connection failed " .mysqli_connect_error($conn);
    die();
}

$mail=$_POST['mail'];
$pass=$_POST['pass'];

$sql="INSERT INTO registered (email,pass_word) VALUES ('$email','$pass')";

if(mysqli_query($conn,$sql))
{
        echo " You've successfully registered to Amrita bus facilities"; 
}
else
{
    echo " Failed to register! " .mysqli_error($conn);
}

mysqli_close($conn);
?>