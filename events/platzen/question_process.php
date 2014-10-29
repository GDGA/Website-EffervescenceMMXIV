<?php
	session_start();
	include "dbconnect.php";
	include "variable.php";
	require_once("includes/ContentSanitize.class.php");

	if(($show_ans<0)){
		header("location:"."ans.php");
		exit();
	}
	
	if (!isset($_SESSION['isregistered_platzen'])){
		header("Location: index.php");
	}
	
	$query = "SELECT score FROM user_info_pla where user_id='".$_SESSION['user_platzen']."'";
	$result=mysql_query($query);
	$x = mysql_fetch_array($result);
	$qid = $x['score']+1;
	echo $qid;
	$query = "SELECT ans FROM question_info_pla where qid='{$qid}'";
	$result=mysql_query($query)  or die("Query failed:1 ".mysql_error());
	$row = mysql_fetch_array($result);
	$ans= $row['ans'];
	$san = new Sanitize();
	echo $pro_ans." ".$ans;
	
	$pro_ans=$_POST['pro_ans'];
	$pro_ans=strip_tags($pro_ans);
	$pro_ans=trim($pro_ans);
	$pro_ans=htmlentities($pro_ans,ENT_QUOTES);
	$pro_ans=strtolower($pro_ans);
	$pro_ans=addslashes($pro_ans);
	$pro_ans=$san->cleanString($pro_ans);
	$pro_ans=md5($pro_ans);
	
	$ans=htmlentities(stripslashes($ans), ENT_QUOTES);
	
	//Security////
	
	if ($pro_ans==$ans){
		//updating the time of submission
		//$mani = date('H:i:s',time() + (4 * 60));
		$mani = date('Y-m-d H:i:s',time());
		$query = "UPDATE user_info_pla SET  score=score+1, time = '$mani' WHERE user_id ='{$_SESSION['user_platzen']}'"; 
		$result=mysql_query($query)  or die("Query failed2: ".mysql_error());
		//$_SESSION['score']=$_SESSION['score']+1;
		$_SESSION['message']="";
		
		if ($qid==$total_question)
			header("Location: winner.php");
	}
	else{
		$_SESSION['message']="Try Again";
	}
	
	header('Location: question.php');
	exit;
?>