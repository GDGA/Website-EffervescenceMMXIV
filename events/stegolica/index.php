<?php 
	
	include "variable.php";
	error_reporting(0);
?>

<html>

    <head>
     
        <title>Stegolica | Effervescence MM14</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css' />

        <style>
            input:not([type=submit]) {
	border: 2px solid white;
	border-radius: 15px;
	padding: 2px;
	margin: 0 0 10px 0;
	background: rgba(255,255,255,0.5);
            }
            input[type=submit]{
	position: absolute;
	width: 100px;
	height: 30px;
	border: none;
	border-radius: 15px;
	padding: 6px 25px;
	background-color: #999999;
	margin-left: 150px;
	color: white;
	font-weight: bold;
	cursor: pointer;
            }
            input[type=submit]:hover{
                background-color: #118BF8;
            }
        </style>

    </head>

<body>

<div id="wrapper">
	
	<div id="header">
    
   <div id="site_title">
<img src="images/logo.png" style="margin-top:-200px; padding-top:30px;margin-bottom: -248px; margin-left: -200px; height: 500px; width: 700px;"></img>
		</div>     
         <div id="fb"><a href="https://www.facebook.com/events/339590586223522/" target="_new"><img src="images/fb1.png" height="35px" width="35px" style="border-radius:0px;background-color:rgba(255,255,255,0);padding:2px;margin-top:10px;" title="Visit Us at Facebook"/></a></div>
        <div id="menu">
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li ><a href="question.php">Arena</a></li>
                <li><a href="score.php" >Scores</a></li>
                <li><a href="rules.php">Rules</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>    	
        </div> 
        
    </div> 
    

    <div id="main">
    	<div style="width:960;margin:0px;">
		
            <div style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;min-height:485px;width:600px;float:left;">
           	  	<div class="post_box">
			  
              		<div class="post_header">
                        <h2>Home : Stegolica</h2>
                        </div>
			         
					
                    <div class="cleaner">
				Welcome to the world of Steganography. You will be given a link to a file and your task is to find the hidden information. Of Course we will provide you with hints incase you get stuck. So get ready to enter into this steganoworld.			
                    </div>
              	</div>
				
                
            </div>
            
            <div style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;margin-bottom:30px;width:250px;float:right;">
            	
                <div class="lbe_box" id="lbox">
					<?php
						
						session_start();
						if(isset($_SESSION['isregistered_stegolica']) && $_SESSION['isregistered_stegolica']==1)
							echo '
								<h2>Welcome</h2>'.
								$_SESSION['user_stegolica'].
								'<br /><a href="logout.php">Logout</a>';
						else
							echo '
								<h2>Login</h2>
								<form action="event_login.php" method="post">
									<label>
										Username :
									<input  type="text" id="user" name="user"/>	
									</label>
<br>
									<label>
										Password : 
									<input type="password" id="pass" name="pass" style="margin-left:2px;"/>
									</label>
									<br/>
									
									<input type="submit" style="margin-left:140px;" value ="Login" />
									<a href="http://fe.iiita.ac.in/register/?page=login" style="color:#fff; text-shadow: 1px 1px #000; text-decoration:none;" target="new">Register</a>
								</form>';
					?>
					
                </div>

            </div>
            <br/><br/><br/>
            <div  style="border-radius:15px;background-color:rgba(255,255,255,0.4);padding:25px;width:250px;float:right;">
                
             
                <h2>Latest Updates</h2>
                <div class="lbe_box">
                    <h3>&bull; Event will begin on 18 October 2014.</h3>
                    
                </div>
				
                <div class="lbe_box">
                    <h3>&bull; It will be a 6 hour long event.</h3>    
                    <div class="cleaner"></div>
                </div>
                <div class="cleaner " style="height:30px;"></div>
            </div>	
        </div>
		
    	<div class="cleaner"></div> 
    </div> 
</div>

<div id="footer_wrapper">
    <div id="footer">
    
       2014 &copy; Effervescence | Indian Institute of Information Technology
    
    </div>
</div>

</body>

</html>
