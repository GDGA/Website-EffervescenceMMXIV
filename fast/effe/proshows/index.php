<!doctype html>
<html lang="en" style="500px;">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Proshow</title>
	<link rel="shortcut icon" href="../img/effe-logo.png">
	<meta name = "keywords" content = "Effervescence, IIIT Allahabad, IIITA, MM14, Effe, Annual Fest, College Fest, Best College Fest"/>
	<meta name = "description" content = "Official Website of Effervescence-Annual Fest of IIIT Allahabad"/>
    
	
    <link rel="stylesheet" href="../css/default.css" type="text/css">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/normalize.css" rel="stylesheet">
    
    <link rel="stylesheet" href="bower_components/BigVideo/css/bigvideo.css">
	
	<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="css/style1.css" type="text/css">	
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	
	<style>
  
		.popout a .info {  
			position: absolute;  
			width:250px;
			height:250px;

			display:none;
			background-size:250px 250px;

			<!--  -ms-transform: scale(1.08,1.08); /* IE 9 */
			-webkit-transform: scale(1.08,1.08); /* Chrome, Safari, Opera */
			transform: scale(1.08,1.08);-->	
			overflow:hidden;
			-webkit-border-radius: 50%;  
			-moz-border-radius: 50%;  
			border-radius: 50%;  
		}  

		.popout a:hover .info {
			display: block; z-index:22
		}  

		.preloader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url('graphics/35.gif') 46% 56% no-repeat #fff;
		}

		.launch {
			color: #fff;
		}

		.popout{
			display:none;
		}

		body{
			overflow:hidden;
		}
		html{
			overflow:hidden;
		}
		.background{
			background: url("pattern.png") repeat left bottom fixed;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 0;
		}
	</style>
    <!-- BigVideo Dependencies -->
    <script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>



    <script src="js/common.js"></script>

    <!--tweenLite JS -->
    <script src="js/TweenMax.min.js" type="text/javascript"></script>
    <script src="js/EasePack.min.js"></script>
    <!--/ tweenLite JS -->

    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="http://vjs.zencdn.net/4.3/video.js"></script>


    <!-- BigVideo -->
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>
	<script type="text/javascript">
		$(window).load(function() {

			$(".preloader").fadeOut("slow");

		});
		
		var $toTop = $('#nav');
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $toTop.fadeIn();
		        $('#nav').hide();
		    } else  {
		       $('#nav').show();
		    }
		});
	
		$(window).load(function() {

			$(".popout").fadeIn(3000);

		});
	
	
	</script>	
		
	
    <script src="js/common.js"></script>

		
</head>
<body class="simple-demo">

	<div class="background"></div>
	
	<div class="preloader"></div>
	
	<div id="bbar" style="top:0px;font-family:  Arial, sans-serif;z-index:10;">
			
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<a class="bbar-item" href="../index.php">Home</a> <span class="bbar-dot">&sdot;</span> 
		
		<a class="bbar-item" href="../events/">Events</a> <span class="bbar-dot">&sdot;</span> 
		<a class="bbar-item" href="../gallery/">Gallery</a> <span class="bbar-dot">&sdot;</span>
		<a class="bbar-item" href="../sponsors/">Sponsors</a> <span class="bbar-dot">&sdot;</span> 							
		<a class="bbar-item" href="../contact.php">Contact Us</a>

		<a class="bblogo" target="_blank" href="https://twitter.com/effe_iiita"><img src="../img/blog-mini.png" style="height:24px;width:24px;"/></a> 
		<a class="bblogo" target="_blank" href="https://www.youtube.com/user/effervescenceMM13"><img src="../img/youtube-mini.png" style="height:24px;width:24px;"/></a> 
		<a class="bblogo" target="_blank" href="https://www.facebook.com/effervescence.iiita"><img src="../img/facebook-mini.png" style="height:24px;width:24px;"/></a>

	</div>

	
    <div class="logoHome">
    	
        <img src="images/proshows.png" alt="PROSHOWS" />
    </div>

	<div class="proinfo">
        <div class="titleTxt" id="a0">
            Yaha pe pro shows ki general information aayegi.

        </div>


        <div class="titleTxt" id="01">
            
           Style is a way of saying who you are without having to speak. 
        </div>


        <div class="titleTxt" id="02">
            
            Get swayed by the live performance.
        </div>

        <div class="titleTxt" id="03">
            
           Let the beast in you take over and get lost in the world of hardcore rock.
        </div>

        <div class="titleTxt" id="04">
            
            The night is simply about dancing. Get lost to the rythm.
        </div>

        <ul class="homeEvent">
            <li>
                <a href="events/alamode.php">
                    <div class="statesmanship"></div>
                </a>
                <span>A'La Mode</span>
            </li>

            <li>
                <a href="events/celebnight.php">
                    <div class="action-words"></div>
                </a>
                <span style="padding-left:18%;">Celebrity Night</span>
            </li>

            <li>
                <a href="events/psychedelia.php">
                    <div class="optimism"></div>
                </a>
                <span>Psychedelia</span>
            </li>

            <li>
                <a href="events/djnight.php">
                    <div class="humanface"></div>
                </a>
                <span>DJ Night</span>
            </li>
        </ul>
    </div>

    <script>
	    $(function() {
            var BV = new $.BigVideo();
			BV.init();
			BV.show('sunburn1.mp4',{doLoop:true});
	    });
    </script> 
</body>


</html>