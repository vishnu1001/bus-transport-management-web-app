<?php

$servername="localhost";
$username="root";
$password="";
$database="amrita_bus";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo("connection failed" .mysqli_connect_error());
    die();
}

$name=$_POST['name'];
$mail=$_POST['mail'];
$number=$_POST['number'];


$sql="UPDATE registered SET student_name=$name, email=$mail"

?>