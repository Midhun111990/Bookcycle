<?php
    session_start();
    // Destroy session
    unset($_SESSION['admin']);
	session_destroy();
        // Redirecting To Home Page
        header("Location: login.php");
    
?>