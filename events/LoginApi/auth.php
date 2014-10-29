<?php
require_once('Database_handler.class.php');


function getAccountbyname($username)  // Returns account information
{
	$sql = "SELECT * FROM users WHERE username = :username AND isdeleted = 0";
	$params = array(':username' => $username);
	$result = DatabaseHandler::GetAll($sql, $params);
	return $result;
}

function authenticate($username, $pass) {
	$passwordcrypt = ENCRYPT . $pass;
	$passwordcrypt = SHA1($passwordcrypt);
	$sql = "SELECT * FROM users WHERE username = :username AND password = :password AND isactive = 1 AND isdeleted = 0";
	$params = array(':username' => $username, ':password' => $passwordcrypt);
	$result = DatabaseHandler::GetAll($sql, $params);
	
	if(count($result) > 0)  {
		return 1;
	}
	return 0;
}

function isRegForEvent($username, $event_id) {
	$acc = getAccountbyname($username);
	$user_id = $acc[0]['id'];
	$sql = "SELECT * FROM registrations WHERE user_id = :user_id AND event_id = :event_id AND isdeleted = 0";
	$params = array(':user_id' => $user_id, ':event_id' => $event_id);
	$result = DatabaseHandler::GetAll($sql, $params);
	if(count($result) > 0)
		return 1;
	return 0;
}

function validate($username, $pass, $event_id) {
	if(authenticate($username, $pass)) {
		
 		if(isRegForEvent($username, $event_id)) {
 			return 1;
		}
		return 0;
	}
	return 0;
}

?>
