
<?php require_once "includes/session.php"; ?>
<?php require_once "includes/functions.php"; ?>
<?php confirm_logged_in(); ?>

<?php
	// v1: simple logout
	// session_start();
	$_SESSION["admin_id"] = NULL;
	$_SESSION["username"] = NULL;
	$_SESSION["b"]= NULL;
	session_unset(); 
	session_destroy(); 
	header ("Location: login.php");
?>

<?php
	// v2: destroy session
	// assumes nothing else in session to keep
	// session_start();
	// $_SESSION = array();
	// if (isset($_COOKIE[session_name()])) {
	//   setcookie(session_name(), '', time()-42000, '/');
	// }
	// session_destroy(); 
	// redirect_to("login.php");
?>

