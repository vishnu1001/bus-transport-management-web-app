
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
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $reg=$_POST['reg'];
    $course=$_POST['course'];
    $sem=$_POST['sem'];
    $door_no=$_POST['door_no'];
    $street_name=$_POST['street_name'];
    $landmark=$_POST['landmark'];
    $pincode=$_POST['pincode'];

    $sql="INSERT INTO registered (email,student_name,pass_word,reg_no,course,sem,door_no,street_name,landmark,pincode) VALUES
          ('$mail','$name','$pass','$reg','$course','$sem','$door_no','$street_name','$landmark','$pincode')";

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