<?php
$servername="localhost";
$username="root";
$password="";
$database="amrita_bus";


$mail=$_POST['mail'];
$pass=$_POST['pass'];

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "Error creating" .mysqli_connect_error(); die();
}

$sql="select * from registered where email='$mail'and pass_word='$pass'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
if($count)
{
    echo "<h1> LOGGED IN! </h1>";
}
else
{
    echo " <h4> No user present </h4>";
}  

?>