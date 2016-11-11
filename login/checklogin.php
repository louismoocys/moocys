<?php
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
ob_start();
include 'config.php';
require 'includes/functions.php';

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$response = '';
$loginCtl = new LoginForm;
$conf = new GlobalConf;
$lastAttempt = checkAttempts($username);
$max_attempts = $conf->max_attempts;


//First Attempt
if ($lastAttempt['lastlogin'] == '') {

    $lastlogin = 'never';
    $loginCtl->insertAttempt($username);
    $response = $loginCtl->checkLogin($username, $password);

} elseif ($lastAttempt['attempts'] >= $max_attempts) {

    //Exceeded max attempts
    $loginCtl->updateAttempts($username);
    $response = $loginCtl->checkLogin($username, $password);

} else {

    $response = $loginCtl->checkLogin($username, $password);

};

if ($lastAttempt['attempts'] < $max_attempts && $response != 'true') {

    $loginCtl->updateAttempts($username);
    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    echo $jsonResp;
		 
} else {

    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    echo $jsonResp;
	if(isset($formData['remember_me'])){ // if user check the remember me checkbox
				$twoDays = 60 * 60 * 24 * 2 + time();
				setcookie('username', $formData['username'], $twoDays);

			} else { // if user not check the remember me checkbox
				$twoDaysBack = time() - 60 * 60 * 24 * 2;
				setcookie('username', '', $twoDaysBack);

			}
	
}

unset($resp, $jsonResp);
ob_end_flush();
