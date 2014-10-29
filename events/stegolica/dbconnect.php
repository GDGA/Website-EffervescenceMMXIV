<?php
	
	$host="localhost";
	
	/*$user_org="eventeffe";*/
	$user_org="tech";
	
	/*$pass_org="db@3ff3@2013";*/
	$pass_org="tech@123";
	$database="effervescence";
	$connection=mysql_connect ($host, $user_org, $pass_org);
	mysql_selectdb ($database);
	
	
?>
