<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Technical Society, IIIT Allahabad">

    <title>Effervescence MM14 - IIIT Allahabad</title>

    <meta name = "keywords" content = "Effervescence, IIIT Allahabad, IIITA, MM14, Effe, Annual Fest, College Fest, Best College Fest"/>
    <meta name = "description" content = "Official Website of Effervescence-Annual Fest of IIIT Allahabad"/>


	<link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/soon.css">
	
    <style type="text/css">
        .splnk {
            text-decoration: underline;
        }
		.hover-target {
			background-color: #b3c833;
			display: table;
			height: 48px;
			position: absolute;
		}
		
		.icon-container {
			width: 65px;
			background-color: #b3c833;
			height: 48px;
			position: absolute;
		}
		
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/effe-logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/effe-logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/effe-logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/effe-logo.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/effe-logo.png">
</head><!--/head-->
<body onLoad="startCountdown()">
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner" style="height:80px; height:12.2vh">
        <div class="container" style="height:inherit;">
            <div class="navbar-header" style="height:inherit;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="height:inherit; padding:0;"><img src="images/effe-logo.png" alt="logo" style="height: inherit;"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">HOME</a></li>
					<li><a href="Tentative_Program_Schedule_2.pdf">SCHEDULE</a></li>
                    <li><a href="events/">EVENTS</a></li>
                    <li><a href="proshows/">PROSHOWS</a></li>
                    <li><a href="gallery/">GALLERY</a></li>
                    <li><a href="sponsors/">SPONSORS</a></li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">REGISTER / LOGIN <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="register/index.php?page=register">REGISTER</a></li>
                            <li><a href="register/index.php?page=login">LOGIN</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <div class="carousel-inner">
			
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
						<!--<span class="hover-target" style="width: 200px;"> 
							<span class="icon-container"> 
								<span class="icon"></span> 
							</span> <span class="title" style="color: rgb(255, 255, 255);"> Apps </span>
						</span>-->
						<a href="http://goo.gl/FzwrDu" target="_blank">
							<img src="images/app.png" style="width: 100px;padding-left: 0px;position: absolute;left: 0px;">
						</a>
                        <div class="row">
                            <div class="col-sm-7 col-md-7 col-md-offset-3 col-xs-offset-3">
                                <div class="carousel-content centered">
                                    <img src="images/logo.png" style="width: 85%;">
                                    <span style="font-size: 20pt; float:right; position: relative; bottom: 30px;text-shadow: 3px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;"><b>Oct 17-19</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
					
					<div class="countdown countdown-container container">
						<div class="clock row">
							<div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
								<div class="wrap">
									<div class="inner">
										<div id="canvas-days" class="clock-canvas"></div>

										<div class="text">
											<p class="val">0</p>
											<p class="type-days type-time">DAYS</p>
										</div><!-- /.text -->
									</div><!-- /.inner -->
								</div><!-- /.wrap -->
							</div><!-- /.clock-item -->

							<div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
								<div class="wrap">
									<div class="inner">
										<div id="canvas-hours" class="clock-canvas"></div>

										<div class="text">
											<p class="val">0</p>
											<p class="type-hours type-time">HOURS</p>
										</div><!-- /.text -->
									</div><!-- /.inner -->
								</div><!-- /.wrap -->
							</div><!-- /.clock-item -->

							<div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
								<div class="wrap">
									<div class="inner">
										<div id="canvas-minutes" class="clock-canvas"></div>

										<div class="text">
											<p class="val">0</p>
											<p class="type-minutes type-time">MINUTES</p>
										</div><!-- /.text -->
									</div><!-- /.inner -->
								</div><!-- /.wrap -->
							</div><!-- /.clock-item -->

							<div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
								<div class="wrap">
									<div class="inner">
										<div id="canvas-seconds" class="clock-canvas"></div>

										<div class="text">
											<p class="val">0</p>
											<p class="type-seconds type-time">SECONDS</p>
										</div><!-- /.text -->
									</div><!-- /.inner -->
								</div><!-- /.wrap -->
							</div><!-- /.clock-item -->
						</div><!-- /.clock -->
					</div><!-- /.countdown-wrapper -->

                    
                </div><!--/.item-->
                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Sponsors</h3>
                    <p>These are our generous sponsors who help to keep the fest running.</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
								  <a href="http://www.baba.in" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/baba.png" alt="">
                                                <h5>
                                                    Baba
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
								  </a>
								  <a href="http://www.mobikwik.com" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/mobikwik.jpg" alt="">
                                                <h5>
                                                    Mobikwik
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  </a>
								  <a href="http://www.maxfashionindia.com/" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/maya.jpg" alt="">
                                                <h5>
                                                    Max
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  </a>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
								  <a href="http://www.ebay.in" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/ebay.png" alt="">
                                                <h5>
                                                    eBay India
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
								  </a>
									
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/eccentric.png" alt="">
                                                <h5>
                                                    Youth Connect
                                                </h5>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/friends.jpg" alt="">
                                                <h5>
                                                    Friends Restaurant
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/hotbitz.jpg" alt="">
                                                <h5>
                                                    Hot n Cool
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  
								  
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/karv.png" alt="">
                                                <h5>
                                                    Informally
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/redz.jpg" alt="">
                                                <h5>
                                                    Redz
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/redfm.jpg" alt="">
                                                <h5>
                                                    Red FM 93.5
                                                </h5>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/scientech.jpg" alt="">
                                                <h5>
                                                    Florista
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/vijaya.jpg" alt="">
                                                <h5>
                                                    Hindustan Times
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  <a href="http://www.dominos.co.in/" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/domino.png" alt="">
                                                <h5>
                                                    Dominos
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
								  </a>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/eisys.jpg" alt="">
                                                <h5>
                                                    Bean Here
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/hi.jpg" alt="">
                                                <h5>
                                                    By The Way
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  <a href="http://www.indiareads.com/" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/indiareads.png" alt="">
                                                <h5>
                                                    IndiaReads
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
								  </a>
								  <a href="http://www.line.me/" target="_blank">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/line.png" alt="">
                                                <h5>
                                                    Line App
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
								  </a>
                                </div>
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/ojas.jpg" alt="">
                                                <h5>
                                                    Eminence Group
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/sponsors/peta.png" style="background-color: #abcdef;" alt="">
                                                <h5>
                                                    PETA
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
									<div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <a href="http://www.unikbazar.co.in/" target="_blank"><img class="img-responsive" src="images/sponsors/unik.jpg" style="background-color: #abcdef;" alt=""></a>
                                                <h5>
                                                    Unik Bazaar
                                                </h5>
                                            </div>
                                        </div>
                                    </div> 
								</div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h4>About Effervescence</h4>
                    <p>Effervescence is the annual cultural fest of IIIT Allahabad. Effervescence MM14, to be held from 17th-19th Oct, 2014, is a platform for youthful energy, showcasing an intellectual, creative and cultural treat through a plethora of events both on campus and online<br>
                       </p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Updates</h4>
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading">&bull; Registrations for the Effervescence have started. <a href="register/index.php?page=register" class="splnk">Register here.</a></span>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <span class="media-heading">&bull; Follow us on <a href="htp://www.facebook.com/effervescence." class="splnk">Facebook</a> for latest updates</span>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>IIIT Allahabad</strong><br>
                        Devghat, Jhalwa<br>
                        Allahabad, UP - 211012<br>
                        <abbr title="Phone">P: </abbr> (0532) 292-2000
                    </address>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    &copy; 2014 <a target="_blank" href="/" title="Annual Cultural Fest of IIIT Allahabad" class="splnk">Effervescence, IIIT-A</a>. All Rights Reserved.
                </div>
                <div class="col-sm-8">
                    <ul class="pull-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="http://iiita.ac.in">About IIIT-Allahabad</a></li>
                        <li><a href="events/">Events</a></li>
                        <li><a href="proshows/">Proshows</a></li>
                        <li><a href="gallery/">Gallery</a></li>
                        <li><a href="sponsors/">Sponsors</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/kinetic.js"></script>
	<script type="text/javascript" src="js/jquery.final-countdown.js"></script>
	<script type="text/javascript">
		$('.countdown').final_countdown({
			'start': 1352644200,
			'end': 1413529200,
			'now': Math.round(new Date().getTime()/1000.0)      
		});
	</script>
</body>
</html>