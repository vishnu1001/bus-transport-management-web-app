
<?php

    session_start();

    if(isset($_SESSION['mail']))
    {
        session_destroy();
        print("<script> location.href='login.html' </script>");
    }
    else
    {
        print("<script> location.href='login.html' </script>");
    }

?>