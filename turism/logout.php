<?php
     $session_name = 'loginacces';   // Set a custom session name
    $secure = false;
    // This stops JavaScript being able to access the session id.
    $httponly = false;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params( $cookieParams['lifetime'],
        $cookieParams['path'], 
        $cookieParams['domain'], 
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start(); 
session_destroy();
header('Location: index.php')


?>