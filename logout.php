<?php

    session_start();
    if(isset($_SESSION['usermobile']) && isset($_SESSION['username']))
    {
        session_unset();
		session_destroy();
		header('location:index.html');
    }
?>