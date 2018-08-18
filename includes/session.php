<?php
//include_once '../config.php';
function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = True;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
  
    $lifetime=3600;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($lifetime, $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
	
}


function sec_session_expire() {
	// Unset all session values 
	$_SESSION = array();
 
	// get session parameters 
	$params = session_get_cookie_params();

	// Delete the actual cookie. 
	setcookie('sec_session_id', '', time() - 60 * 60 * 2 , $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

	session_unset();
	session_destroy();
	session_write_close();
}