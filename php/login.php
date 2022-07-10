<?php

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "amrita_bus";


    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        echo "Error creating" .mysqli_connect_error(); die();
    }

    $sql = "select * from registered where email='$mail'and pass_word='$pass'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);

    if($count)
    {   
        if(isset($_SESSION['mail']))
        {
            print("Loggin in...");
            print("
            
            <html>
                <head>
                    <meta http-equiv=\"refresh\" content=\"1;url=../homepage.php\">
                </head>
            </html>
            
            ");
        }
        else
        {
            if($_POST['mail'] == $mail && $_POST['pass'] == $pass)
            {
                $_SESSION['mail'] = $mail;

            }
            else
            {
                print("
                
                <script>
                    alert(\"Email or Password incorrect\");
                </script>

                ");

                print(" <script> location.href='../login.html'</script> ");
            }
        }
    }
    else
    {
        echo " <h4> No user present </h4>";
    
    }  

?>