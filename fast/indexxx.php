<?php session_start();?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Effervescence MM14 - IIIT Allahabad</title>

		<meta name = "keywords" content = "Effervescence, IIIT Allahabad, IIITA, MM14, Effe, Annual Fest, College Fest, Best College Fest"/>
		<meta name = "description" content = "Official Website of Effervescence-Annual Fest of IIIT Allahabad"/>

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/style-main.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" href="css/styles.css">	
		<link rel="shortcut icon" href="img/effe-logo.png">
		<link rel="stylesheet" type="text/css" href="css/iconsh.css" />
		<link rel="stylesheet" type="text/css" href="css/icons-component.css" />
	<style>
		.grow:hover, .grow:focus, .grow:active {
			transition-duration: 0.5s;
			transition-property: transform;
    		transform: scale(1.1);   
		}
		.grow {
    		display: inline-block;
    		transition-duration: 0.5s;
    		transition-property: transform;
    		transform: translateZ(0px);
    		box-shadow: 0px 0px 1px transparent;
    	}
		.styled div:first-child {
   			display:none;
		}
		body {
			font-family: 'Lato', Calibri, Arial, sans-serif;
			color: #89867e;
		}
		#spons{
			position:absolute;
			left:-35px;
			top:-55px;
			
		}
		#spons img{
			
			width:200px;
		}
		#enter {
		    position: fixed;
		    width: 18%;
		    z-index: 999;
		    right:60px;
		    height: 9%;
		    padding: 0.8%;
		    text-align: center;
		    font-family: continum;
		    bottom: 40px;
			background:rgba(127,255,212, 0.2);
		    border: 2px solid rgba(0, 0, 0, 0.5);
			border-radius:7px;
		    font-size: 1.1em;
		    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
		    cursor: pointer;
		    text-transform: uppercase;
		    letter-spacing: 0.4px;
		    transition: all 0.1s linear 0s;
		}
		
		figure {
		margin-left: 0.865em;
		margin-right: 0.865em;
		box-shadow: 5px 5px 5px #000000;
	
		}

		#enter:hover {
		    font-size: 1.3em;
		    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7) inset;
		}
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9998;
			background: url('img/blur-bg.jpg') 50% 50% no-repeat rgb(249,249,249);
			background-size: 100%;
		}
		.preloader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('img/103.gif') 55% 85% no-repeat rgba(51, 110, 123,0.7);
		}

		.launch {
			color: #fff;
			
		}
		div#tobecovered img.cover{
		    position: absolute;
		    /* position in top left of #tobecovered */
		    top: 0; /* top of #tobecovered */
		    left: 0; /* left of #tobecovered */
		    width: 100%;
		    height: 100%;
		}
		.tentsch {
			position:fixed;
			width:50px;
			height:50px;
			bottom:250px;
			right:8px;
			border-radius: 50%;
			background: url('img/social/cal.jpg') no-repeat; 
			background-size: cover; 
		}
		/*.tentsch:hover {
			background: url('img/social/tent.png') no-repeat;
			background-position: center;
			width: 200px;
			height: 50px;
			border-radius: 0%;
			background-size: contain; 
		}*/
	</style>
	<script src="js/countdown.js" type="text/javascript"></script>
</head>
<?php
if(!empty($_SESSION['load'])&& $_SESSION['load']==1){
?>

<style>
.loader{
display:none;
}
</style>
<?php
}
$_SESSION['load']=1;
?>
<body onload="run();">    
	
	<div class="preloader"></div>
	
	<div class="loader">
		
		<div style="position:fixed;top:50%;left:50%">	
		<section id="home" style="position: absolute;width: 312px;">
<img src="img/outer.png" style="position: relative;left: -100px;top: -100px;width:67%">
<img src="img/inner.png" style="position: absolute;top: -59px;left: -9px;width:43%">
</section>
		
		<div id="enter" style="display: inline;color:#fff">
		Enter Site
		</div>
		</div>
		</div>
		<div id="pagewrap" style="height:100%">
		<img id="background" alt="" src="" style="height:100%;width:100%;position:absolute"/>
		<div class="page show" style="height:100%;">
		<div id="st-container" class="st-container">
			<!-- content push wrapper -->
			<div class="st-pusher" style="position: relative;">
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
					<!-- updates section -->
						<img src="img/logo.png" style="width: 30px; height: 30px; position: absolute; bottom:0px; left: 0;" id="nitrlogo"/>
						<div class="container">
						<div style="position: absolute; top: 31px; left: 5px;">
							<section id="home" style="position: absolute;width: 312px;">
								<img src="img/outer.png" style="position: relative;left: -50px;top: 0px;width:67%">
								<!--img src="img/inner.png" style="position: absolute;top: 42px;left: 42px;width:43%"-->
							</section>
							<img src="img/inner.png" style="position: absolute;top: 42px;left: 42px;">
							</div>
					
							<header>							
								<br>
								<h1><img id="innologo" src="img/logo3.png" style="top: 400px; width:611px;margin-top:50px"/></h1>
						<span style="font-size: 20pt; position: relative; top: -30px; margin: 0px; padding: 0px;color: #e4e4e4;font-size: 34px;margin-left: 326px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><b>Oct 17-19</b></span>
							</header>
							<!--sponsors-->
								<img src="img/sponsors.png" style="width:20px;height:105px;bottom:53px;left:8px;position:absolute;"/>
								<a href="register/index.php?page=register"><img src="img/social/reg.gif" style="width:50px;height:50px;bottom:314px;right:8px;position:fixed;border-radius: 50%;background-color:#fff;"></a>
								<a href="register/index.php?page=login" ><img src="img/social/log.png" style="width:50px;height:50px;bottom:385px;right:8px;position:fixed;"></a>
								<a href="Tentative_Program_Schedule_2.pdf" data-toggle="tooltip" data-placement="bottom" title="Tentative Schedule" download><div class="tentsch"  style=""></div></a>
								<a href="sponsors/"><div id="tobecovered" style = "position:absolute;bottom: 47px;left:28px;">
									<iframe width="210" height="105" scrolling="no" marginheight="0" marginwidth="0" src="spons/demo/simple.html"></iframe>
									<img src="img/transparent.gif" class="cover" />
								</div></a>
							
							<div class="main clearfix">
    							<!-- icons container -->
		<div class="icons-container" style="margin-top:-68px;width:90%;float:right">
			
			<div class="grid" style="right:40px;position:relative;">
			
				<figure class="effect-sarah" id="1" style="background: #3085a3;margin-left: 0.865em;margin-right: 0.865em;border-radius:50%;">
					
					<figcaption>
						<h2 style="top:25px;">Events <span></span></h2>
						
						<a href="events/">View more</a>
					</figcaption>			
				</figure>
				
				<figure class="effect-sarah" id="2" style="background: #42b078;margin-left: 0.865em;margin-right: 0.865em;border-radius:50%;">
					
					<figcaption >
						<h2>Pro <span>Shows</span></h2>
						
						<a href="proshows/index.php">View more</a>
					</figcaption>			
				</figure>
				<figure class="effect-sarah" id="3" style="background: #9b4a1b;margin-left: 0.865em;margin-right: 0.865em;border-radius:50%;opacity:0.5">
					
					<figcaption >
						<h2 style="top:25px;width:130px;">Gallery</h2>
						<a href="gallery/">View more</a>
					</figcaption>			
				</figure>
				<figure class="effect-sarah" id="4" style="background: #600;margin-left: 0.865em;margin-right: 0.865em;border-radius:50%;opacity:0.5">
					
					<figcaption>
						<h2 style="top:33px;width:130px;font-size:25px; ">Sponsors</h2>
						
						<a href="sponsors/">View more</a>
					</figcaption>			
				</figure>
			</div>
			
		</div><!-- / icons container -->
		</div>					
						<div id="cnt" style="position: absolute;right: 10px;bottom:35px">
							<script type="application/javascript">
								var myCountdown1 = new Countdown({
								 	year	: 2014, 
									month	: 10, 
									day	: 16, 
									hour	: 11,
									ampm	: "pm",
									minute	: 59, 
									second	: 59, 
									width:300, 
									height:60,  
									rangeHi:"day",
									style:"flip"	// <- no comma on last item!
								});

							</script>
						</div>
						<div id="bbar">
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
							<a class="bbar-item" href="index.php">Home</a> <span class="bbar-dot">&sdot;</span>
							<a class="bbar-item" href="contact.php">Contact Us</a>
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<!--	<a class="bbar-item" href="#">CENTRAL REGISTRATION PORTAL</a>&nbsp; <span class="bbar-dot">&sdot;</span>&nbsp;&nbsp;<a class="bbar-item" href="#">ACCOMMODATION DETAILS</a> -->
							<!--<a class="bblogo" href="#"><img src="assets/img/social/twitter-mini.png"/></a> 
							<a class="bblogo" href="#"><img src="assets/img/social/google-mini.png"/></a> -->
							<a class="bblogo" target="_blank" href="https://twitter.com/effe_iiita"><img src="img/blog-mini.png" style="height:24px"/></a> 
							<a class="bblogo" target="_blank" href="https://www.youtube.com/user/effervescenceMM13"><img src="img/youtube-mini.png" style="height:24px"/></a> 
							<a class="bblogo" target="_blank" href="https://www.facebook.com/effervescence.iiita"><img src="img/facebook-mini.png" style="height:24px"/></a>
			 
						</div>

  						<div class="countdown styled"></div>

					</div><!-- /container -->								
				</div><!-- /st-content-inner -->
			</div><!-- /st-content -->
		</div><!-- /st-pusher -->
		
		</div><!-- /st-container -->
				
		</div>

			<div id="loader" style="z-index:100" class="pageload-overlay" data-opening="M 40 -21.875 C 11.356078 -21.875 -11.875 1.3560784 -11.875 30 C -11.875 58.643922 11.356078 81.875 40 81.875 C 68.643922 81.875 91.875 58.643922 91.875 30 C 91.875 1.3560784 68.643922 -21.875 40 -21.875 Z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
					<path d="M40,30 c 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 Z"/>
				</svg>
			</div><!-- /pageload-overlay -->
		</div><!-- /pagewrap -->
		<script src="js/modernizr.custom.js"></script>
		<script src="js/snap.svg-min.js"></script>       
		<!--<script src="assets/js/modernizr.custom.js"></script>-->
				
		<script type="text/javascript" src="js/jquery-1.8.0.min.js" defer="defer"></script>
    	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script type="text/javascript">
			$(window).load(function() {

			$(".preloader").fadeOut("slow");

			})

			$(document).ready(function(){
			$("#enter").click(function(){
				$(".loader").fadeOut("slow");
			});
			});

		</script>
	
		<script src="js/rainyday.js"></script>
        <script>
            function run() {
                var image = document.getElementById('background');
                image.onload = function() {
                    var engine = new RainyDay({
                        image: this
                    });
                    
                    engine.rain([ [0, 2, 10] ], 100);
					engine.rain([ [3, 3, 0.2] ], 100);
				};
                image.crossOrigin = 'anonymous';
                image.src = 'img/bgc.jpg';
            }
        </script>

		<script type="text/javascript" defer="defer">
			$(window).load(function() {

			$(".preloader").fadeOut("slow");

			});
		</script>	
    	<script type="text/javascript" src="js/jquery.js.pagespeed.jm.GHSJPiCHAi.js" defer="defer"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script>
			!window.jQuery && document.write('<script src="js/jquery-1.8.0.min.js"><\/script>');
		</script>
		
		<script>
			(function() {
				var pageWrap = document.getElementById( 'pagewrap' ),
					pages = [].slice.call( pageWrap.querySelectorAll( 'div.page' ) ),
					currentPage = 0,
					//currentId = $(this).attr('id'),
					triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
					loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 300, easingIn : mina.easeinout } );
					
					//alert(currentId);
					
				function init() {
					triggerLoading.forEach( function( trigger ) {
						trigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							var page = this.id;
							loader.show();
							// after some time hide loader
							setTimeout( function() {
								loader.hide();

								classie.removeClass( pages[ currentPage ], 'show' );
								// update..
								currentPage = currentPage ? 0 : 1;
								classie.addClass( pages[ currentPage ], 'show' );

							}, 2000 );
						} );
					} );	
				}

				init();
			})();
		</script>
		
		<script>
			// For Demo purposes only
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
	
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>		
		<script src="js/snow.js"></script>
		
	</body>
	
<html>