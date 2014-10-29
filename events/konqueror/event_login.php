<?php
	require_once('../LoginApi/auth.php');
	include "dbconnect.php";
	include "variable.php";
	require_once("includes/ContentSanitize.class.php");
	
	$san = new Sanitize();
	$event_id= 41;
	$user_name=trim($_POST['user']);
	$password=trim($_POST['pass']);
	
	$user_name=strip_tags($user_name);
	$user_name=htmlentities($user_name,ENT_QUOTES);
	$user_name = $san->cleanString($user_name);
	$password=strip_tags($password);
	$password=htmlentities($password,ENT_QUOTES);
	$password=$san->cleanString($password);

	
	if(validate($user_name, $password, $event_id)) {
		session_start();
		$_SESSION['user_konqueror']=$user_name;
		$_SESSION['islogin'] = 1;
		$_SESSION['isregistered_konqueror'] = 1;
		$check = 1;
	}
//	echo validate($user_name, $password, $event_id);
	if($check==1){
		//Correct User	
		//echo $user_name;
		$query="SELECT * from user_info_kon where user_id='$user_name'";
		
		$result=mysql_query($query) or die("Could not retrieve database");
		
		if (mysql_num_rows($result)==0)
			$user_insert=mysql_query("INSERT user_info_kon (user_id) VALUES ('$user_name') ");
		
		
		header("Location: question.php");
		
				
	}
	else
	{
		header("Location:"."loginfailed.php");
	}

?>
