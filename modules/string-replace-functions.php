<?php

function show_login_text() {
    if(isset($_SESSION['userid']))
    {
        echo "Welcome, ".ucfirst($_SESSION['userid']);
    }
    else 
    {
        echo "Log In";
    }
}

?>