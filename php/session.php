<?php
    session_start();
    if(isset($_SESSION['mail']))
    {

    }
    else
    {
        print("<script>alert('Your Logged out...')</script>");
        print("<script>location.href='login.html'</script>");
    }
?>