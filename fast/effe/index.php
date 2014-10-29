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
		<script src="js/modernizr.custom.js"></script>
		
		
		<link rel="stylesheet" type="text/css" href="css/style-main.css" />
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" href="css/styles.css">
		
		<link rel="shortcut icon" href="img/effe-logo.png">
		<script src="js/snap.svg-min.js"></script>
		       
		<link rel="stylesheet" type="text/css" href="css/iconsh.css" />
		<link rel="stylesheet" type="text/css" href="css/icons-component.css" />
		       
		<script src="assets/js/modernizr.custom.js"></script>
				
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
    	
    	<script src="js/countdown.js" type="text/javascript"></script>
    
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



		#enter {
		    position: fixed;
		    width: 13%;
		    z-index: 999;
		    right:20px;
		    height: 5%;
		    padding: 0.5%;
		    text-align: center;
		    font-family: continum;
		    bottom: 20px;
		    border: 2px solid rgba(0, 0, 0, 0.5);
		    font-size: 1.1em;
		    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
		    cursor: pointer;
		    text-transform: uppercase;
		    letter-spacing: 0.4px;
		    transition: all 0.1s linear 0s;
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
		.preloader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('img/3.gif') 50% 50% no-repeat rgba(51, 110, 123,0.9);
		}
		.launch {
			color: #fff;
			
		}
	</style>
		
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

		<script type="text/javascript">
			$(window).load(function() {

			$(".preloader").fadeOut("slow");

			});
		</script>	

</head>

 <body onload="run();">
    
	
	<div class="preloader"></div>
		
		
		<div id="pagewrap" style="height:100%">
		
		
		<img id="background" alt="" src="" style="height:100%;width:100%;position:absolute"/>
		
		
		<div class="page show" style="height:100%;">
		
		
		
		<div id="st-container" class="st-container">
				
				
				<!-- Top Navigation -->
				
				
				
			
				
				
			<nav class="st-menu st-effect" id="menu">
				<h2 class="icon icon-stack" style="color:#fff">Updates</h2>
				<ul>
					<li><a class="icon icon-data" href="#"></a></li>
					<li><a class="icon icon-location" href="#"></a></li>
					<li><a class="icon icon-study" href="#"></a></li>
					<li><a class="icon icon-photo" href="#"></a></li>
					<li><a class="icon icon-wallet" href="#"></a></li>
				</ul>
			</nav>
			

			<!-- content push wrapper -->
			<div class="st-pusher" style="position: relative;">
			
			
			<div id="update-box"></div>
                
                		<div id="st-trigger-effects">
                			<p id="update-text" data-effect="st-effect" style="cursor:pointer;z-index:1">UPDATES</p>
                		</div>
                
				
				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						
			
					<!-- updates section -->

		
					<!-- rest of the body -->
					
						<img src="img/logo.png" style="width: 30px; height: 30px; position: absolute; bottom:0px; left: 0;" id="nitrlogo"/>
                		
                		
						<div class="container">
							<div style="position: absolute; top: 31px; left: 5px;">

							<form id="search" action="" style="display:none;">
								<input id="q" onfocus="this.value = '';" type="text" name="q" size="70" placeholder="Search..."/>
							</form>
						
							<script type="text/javascript" src="http://www.google.co.in/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>

							<section id="home" style="position: absolute;width: 312px;">
								<img src="img/outer.png" style="position: relative;left: -50px;top: 0px;width:67%">
								<img src="img/inner.png" style="position: absolute;top: 42px;left: 42px;width:43%">
							</section>
							<!--img src="img/effe-logo.png" style="padding: 0px 30px 40px;;width:90%"-->
							</div>
					
							<header>
							
								<br>
					
								<h1><img id="innologo" src="img/logo3.png" style="top: 400px; width:611px;margin-top:80px"/></h1>
						
	                    		<span style="font-size: 20pt; position: relative; top: -30px; margin: 0px; padding: 0px;color: #e4e4e4;font-size: 34px;margin-left: 326px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><b>Oct 16-19</b></span>
								<br><img src="img/coming-soon.png" />
							
							</header>	
								<div style = "position:absolute;bottom: 47px;left:28px;">
									<h4 class = "launch">LET ME KNOW WHEN YOU LAUNCH</h4>
				      				<form class="form-inline" role="form" action = "#">
				      				  <div class="form-group">
				      				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				      				    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" required>
				      				  </div>
				      				  <button type="submit" class="btn btn-info">Submit</button>
				      				</form>  
								</div>	
							
							<br><br>
						
						<div id="cnt" style="position: absolute;right: 10px;bottom:35px">
							<script type="application/javascript">
								var myCountdown1 = new Countdown({
								 	year	: 2014, 
									month	: 10, 
									day	: 16, 
									hour	: 6,
									ampm	: "pm",
									minute	: 0, 
									second	: 0, 
									width:300, 
									height:60,  
									rangeHi:"day",
									style:"flip"	// <- no comma on last item!
								});

							</script>
						</div>
		
		
						<div id="bbar">
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
							<a class="bbar-item" href="index.html">Home</a> <span class="bbar-dot">&sdot;</span> 
							
							<a class="bbar-item" href="../homepage.html">Archives</a> <span class="bbar-dot">&sdot;</span> 
							<a class="bbar-item" href="contact.php">Contact Us</a>
			
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
		
		
		
		<!-- The new page dummy; this would be dynamically loaded content -->
			<div class="page contact-page" style="position: relative;z-index: 1;">
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<a class="codrops-icon codrops-icon-prev pageload-link" href="#page-def" style="cursor:pointer"><span>Back</span></a>
				</div>
				
				
				
				
				
				
				<section>				
					
				</section>
				
	
			</div><!-- /Demo Page-->
		
		
			
			
			
		


			<div id="loader" style="z-index:100" class="pageload-overlay" data-opening="M 40 -21.875 C 11.356078 -21.875 -11.875 1.3560784 -11.875 30 C -11.875 58.643922 11.356078 81.875 40 81.875 C 68.643922 81.875 91.875 58.643922 91.875 30 C 91.875 1.3560784 68.643922 -21.875 40 -21.875 Z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
					<path d="M40,30 c 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 0,0 Z"/>
				</svg>
			</div><!-- /pageload-overlay -->
			
		
		
		
		
		</div><!-- /pagewrap -->
		
		<script src="js/classie.js"></script>
		<script src="js/svgLoader.js"></script>
		
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
</html>