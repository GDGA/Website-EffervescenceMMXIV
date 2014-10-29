
<?php
/*
Author: Jatin & Adi & Anuj
*/
session_start();
ob_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require_once("config/config.php");

require_once("models/database.php");
require_once("models/session.php");

require_once("api/contentFunctions.php");
require_once("api/sessionFunctions.php");
require_once('api/mailFunctions.php');

require_once("business/Database_handler.class.php");
require_once("business/Link.class.php");
require_once("business/Error_handler.class.php");
require_once('business/Logger.class.php');
require_once('business/recaptcha.php');
$publickey = "6LeBe-gSAAAAAA-Hq1oEgFlTNluEsysgL9lb5Hx-";
 
require_once('includes/html_head.php'); 
require_once('includes/site_head.php');


	ErrorHandler::SetHandler();

	$page = "";
	$nav = "";
 	if(isset($_GET['page']))
 	{
 		$page = addslashes(htmlentities($_GET['page']));
 	}
	if(isset($_GET['nav']))
 	{
 		$nav = addslashes(htmlentities($_GET['nav']));
 	}
	
	if(!isLogin()) {
		if ($page == 'login')
			require_once("models/login.php");
		else if ($page == 'confirm')
			require_once("includes/confirm_acc.php");
		else 
			require_once("models/register.php");
		
	}
	else
	{
		
		require_once('includes/confirm_acc.php');
		
		if($nav == 'registration') 
			require_once('includes/registration.php');
		else if($nav == 'dashboard') 
 			require_once('includes/dashboard.php');
		else if($nav == 'short')
			require_once('includes/short.php');
		else if($nav == 'profile')
			require_once('includes/profile.php');
		else
			if(isProfileComplete($_SESSION['user']))
				require_once('includes/dashboard.php');
			else
				require_once('includes/profile.php');
			
	}

	
	//footer
	require_once('includes/site_footer.php');
flush();
ob_flush();
ob_end_clean();
	
?>
