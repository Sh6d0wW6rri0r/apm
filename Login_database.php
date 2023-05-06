<?php
require_once('Userlib.php');
$username = $_REQUEST['UserLogin'];
$password = $_REQUEST['UserPassword'];

$test = new APM_USERS();
if ($test->checkPassword($username,$password)) {
	session_start();
	$_SESSION['USER_CONNECTED']=$username;
	header('Location: '.'main.php');
} 
else {
	header('Location: '.'index.php');
}
?>