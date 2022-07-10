
<?php

    session_start();

    if(isset($_SESSION['mail']))
    {
        print("Logout...");
            print("
            
            <html>
                <head>
                    <meta http-equiv=\"refresh\" content=\"1;url=../login.html\">
                </head>
            </html>
            
            ");
        session_destroy();
    }
    else
    {
        print("<script> location.href='../login.html' </script>");
    }

?>