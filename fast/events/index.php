<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Events</title>
<link rel="shortcut icon" href="../img/effe-logo.png">
<meta name = "keywords" content = "Effervescence, IIIT Allahabad, IIITA, MM14, Effe, Annual Fest, Collj$mege Fest, Best College Fest"/>
<meta name = "description" content = "Official Website of Effervescence-Annual Fest of IIIT Allahabad"/>

<link rel="stylesheet" href="events.css">
<link rel="stylesheet" href="default.css">
<link rel="stylesheet" href="jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="style5.css" />
<link rel="stylesheet" type="text/css" href="style2.css" />
<link rel="stylesheet" type="text/css" href="ticker-style.css" />

<script src="jq.js"></script>

<script src="jquery-1.8.0.min.js"></script>

<script src="events.js"></script>
<script src="jq2.js"></script>

<script src="modernizr.custom.js"></script>


<style>
			#wrapper {
				width: 2000px;		
				position:fixed;
				right:0px;
				bottom:0px;	
				z-index: 100;	
			}
			#wrapper h3 {
				font-size: 20px;
				text-align: center;
			}
			
			#wrapper > div {
				background-color: #eee;
				border-top: 1px solid #ccc;
				border-bottom: 1px solid #ccc;
				width: 100%;
				height: 30px;
				background-color: rgba(19, 108, 155, 0.7);
				font-weight: bold;
				overflow: hidden;
			}
			#wrapper > div.first {
				border-bottom: none;
				color: #fff;
			}
			
			#wrapper dl {
				display: block;
				margin: 0;
				color: #fff;
			}
			#wrapper dt, #wrapper dd {
				display: block;
				float: left;
				margin: 0 10px;
				padding: 5px 10px;
				color: #fff;
			}
			#wrapper dt {
				background-color: #f66;
				color: #fff;
			}
			#wrapper dd {
				color: #fff;
				margin-right: 50px;
			}
			#wrapper a {
				color: #fff;
				text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;
				text-decoration: underline;
			}
			code {
				font-style: italic;
			}
			
			#donate-spacer {
				height: 100%;
			}
			#donate {
				border-top: 1px solid #999;
				width: 750px;
				padding: 50px 75px;
				margin: 0 auto;
				overflow: hidden;
			}
			#donate p, #donate form {
				margin: 0;
				float: left;
			}
			#donate p {
				width: 650px;
			}
			#donate form {
				width: 100px;
			}
		</style>
	<!--			
		<script>

var html5_audiotypes={ //define list of audio file extensions and their associated audio types. Add to it if your specified audio file isn't on this list:
	"mp3": "audio/mpeg",
	"mp4": "audio/mp4",
	"ogg": "audio/ogg",
	"wav": "audio/wav"
}

function createsoundbite(sound){
	var html5audio=document.createElement('audio')
	if (html5audio.canPlayType){ //check support for HTML5 audio
		for (var i=0; i<arguments.length; i++){
			var sourceel=document.createElement('source')
			sourceel.setAttribute('src', arguments[i])
			if (arguments[i].match(/\.(\w+)$/i))
				sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
			html5audio.appendChild(sourceel)
		}
		html5audio.load()
		html5audio.playclip=function(){
			html5audio.pause()
			html5audio.currentTime=0
			html5audio.play()
		}
		return html5audio
	}
	else{
		return {playclip:function(){throw new Error("Your browser doesn't support HTML5 audio unfortunately")}}
	}
}

//Initialize two sound clips with 1 fallback file each:

var mouseoversound=createsoundbite("hover.ogg", "hover.mp3")
var clicksound=createsoundbite("click.ogg", "click.mp3")

</script>-->



		<script src="jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				var _scroll = {
					delay: 1000,
					easing: 'linear',
					items: 1,
					duration: 0.07,
					timeoutDuration: 0,
					pauseOnHover: 'immediate'
				};
				$('#ticker-1').carouFredSel({
					width: 1000,
					align: false,
					items: {
						width: 'variable',
						height: 35,
						visible: 1
					},
					scroll: _scroll
				});

				$('#ticker-2').carouFredSel({
					width: 1000,
					align: false,
					circular: false,
					items: {
						width: 'variable',
						height: 35,
						visible: 2
					},
					scroll: _scroll
				});

				//	set carousels to be 100% wide
				$('.caroufredsel_wrapper').css('width', '100%');
				$('.caroufredsel_wrapper').css('z-index', '1');

				//	set a large width on the last DD so the ticker won't show the first item at the end
				$('#ticker-2 dd:last').width(2000);
			});
		</script>

<!--<script src="../js/rainyday.js"></script>
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
                image.src = 'bg.jpg';
            }
        </script>
-->
</head>

<body onload="run();">    

<div id="loader"><div id="load_back">.</div>
<div id="load"></div></div>
<div id="mask"></div>

<div id="pagewrap">

<img id="background" alt="" src="" style="height:100%;width:100%;position:absolute"/>

<div id="mainpage" style="position:absolute;z-index:1">

	<div id="wrapper">
		<div>
			<dl id="ticker-1">
				<dt>Registration</dt>
					<dd>Registrations for the Effervescence has started. <a href="../register/">Register here</a>. </dd>

				<dt>Social</dt>
					<dd>Follow us on <a href="htp://www.facebook.com/effervescence.">Facebook</a> for latest updates</dd>
					
				<dt>App</dt>
					<dd>Download the Effervescence App <a href="http://goo.gl/FzwrDu">here</a></dd>


				<dt>Get Ready for EFFE MM'14</dt>
					<dd>Get ready for Effervescence(17-19th October, 2014).</dd>
					
				<dt>Online Contest Links</dt>
					<dd>To participate in online events, <a href="../../events/">Click Here</a></dd>
			</dl>
		</div>
		
	</div>

<div id="all_tiles">
	

	<div id="Magna" class="tile second backFx">
	<img src="drama.jpg" alt="Not Loaded" width="120" height="120">
	<p>Drama</p>
	</div>



	<div id="Matricks" class="tile second backFx">
	<img src="literary.jpg" alt="Not Loaded" width="115" height="115">
	<p>Literary</p>
	</div>
	
	<div id="Arcanum" class="tile first backFx">
	<img src="music.jpg" alt="Not Loaded" width="115" height="115">
	<p>Music</p>
	</div>
	
	<div id="colloquia" class="tile first backFx">
	<img src="gaming.jpg" alt="Not Loaded" width="115" height="115">
	<p>Gaming</p>
	</div>
	
	<div id="ingenium" class="tile second backFx">
	<img src="informal.jpg" alt="Not Loaded" width="115" height="115">
	<p>Informal</p>
	</div>
	
	<div id="yanthrix" class="tile first backFx">
	<img src="dance.jpg" alt="Not Loaded" width="115" height="115">
	<p>Dance</p>
	</div>
	
	<div id="Ibox" class="tile second backFx">
	<img src="manag.jpg" alt="Not Loaded" width="115" height="115">
	<p style="font-size:23px;bottom:5px;">Management</p>
	</div>
	
	<div id="Quizzaire" class="tile first backFx">
	<img src="online.jpg" alt="Not Loaded" width="115" height="115">
	<p>Online</p>
	</div>
	
	
	

	<div id="left">
	</div>
	<div id="right">
	</div>

	<div id="bar">
		<div class="gohome"><img src="back1.gif" style="width:55px;height:auto;"/></div>
	</div>

<div class="submenu">
    <div class="submenu_itm" id="menuArcanum" onclick="submenuclicked(this)"><div><p>Music</p></div><img src="music.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menucolloquia" onclick="submenuclicked(this)"><div><p>Gaming</p></div><img src="gaming.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menuyanthrix" onclick="submenuclicked(this)"><p>Dance</p><img src="dance.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menuQuizzaire" onclick="submenuclicked(this)"><p>Online</p><img src="online.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menuMatricks" onclick="submenuclicked(this)"><p>Literary</p><img src="literary.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menuingenium" onclick="submenuclicked(this)"><p>Informal</p><img src="informal.jpg" height="58" width="58"></div>
    <div class="submenu_itm" id="menuIbox" onclick="submenuclicked(this)"><p>Management</p><img src="manag.jpg" height="58" width="58"></div>
	<div class="submenu_itm" id="menuMagna" onclick="submenuclicked(this)"><p>Drama</p><img src="drama.jpg" height="58" width="58"></div>
</div>

<script type="text/javascript">
	function submenuclicked(el) {
		document.getElementById("menuArcanum").setAttribute("style", "");
		document.getElementById("menucolloquia").setAttribute("style", "");
		document.getElementById("menuyanthrix").setAttribute("style", "");
		document.getElementById("menuQuizzaire").setAttribute("style", "");
		document.getElementById("menuMatricks").setAttribute("style", "");
		document.getElementById("menuingenium").setAttribute("style", "");
		document.getElementById("menuIbox").setAttribute("style", "");
		document.getElementById("menuMagna").setAttribute("style", "");
		//alert($(el).attr("id"));
		el.setAttribute("style", "left:-100px; z-index:-9;background-color:rgba(110, 110, 110, 1);");
	}
</script>

<!--the subevent div code goes here -->
<div id="Arcanum_p" class="page">
	<table class="events four" style="left: 310px;">
    	<tr>
        	<td class="events_b gv"><div class="ch-item ch-img-1">
							<div class="ch-info">
								<h3>Karaoke</h3>
							</div>
						</div></td>
			<td class="events_b kr"><div class="ch-item ch-img-2">
							<div class="ch-info">
								<h3>Melodiux</h3>
							</div>
						</div></td>
						<td class="events_b gt"><div class="ch-item ch-img-7">
							<div class="ch-info">
								<h3>Psychadelia</h3>
							</div>
						</div></td>
			
			
			
		</tr>
        <tr>
            <td class="events_b tb arc_sec"><div class="ch-item ch-img-5">
							<div class="ch-info">
								<h3>Antakshari</h3>
							</div>
						</div></td>
			<td class="events_b ex arc_sec"><div class="ch-item ch-img-6">
							<div class="ch-info">
								<h3>Unplugged</h3>
							</div>
						</div></td>
			 
		</tr>
   	</table>
</div>

<div id="Magna_p" class="page">
	<table class="events four">
    	<tr>
        	<td class="events_b inno"><div class="ch-item ch-img-8">
							<div class="ch-info">
								<h3>Innovation</h3>
							</div>
						</div></td>
			<td class="events_b dic"><div class="ch-item ch-img-9">
							<div class="ch-info">
								<h3>Director's Cut</h3>
							</div>
						</div></td>
			<td class="events_b dot"><div class="ch-item ch-img-10">
							<div class="ch-info">
								<h3>Double Trouble</h3>
							</div>
						</div></td>
			
			
		</tr>
        <tr>
            <td class="events_b tof arc_sec"><div class="ch-item ch-img-12">
							<div class="ch-info">
								<h3>Tongues on Fire</h3>
							</div>
						</div></td>
			<td class="events_b kah arc_sec"><div class="ch-item ch-img-13">
							<div class="ch-info">
								<h3>Kahani</h3>
							</div>
						</div></td>
			<td class="events_b bbl arc_sec"><div class="ch-item ch-img-11">
							<div class="ch-info">
								<h3>Bindaas Bol</h3>
							</div>
						</div></td>
			 
		</tr>
   	</table>
</div>

<div id="Matricks_p" class="page">
	<table class="events three">
    	<tr>
        	<td class="events_b cod"><div class="ch-item ch-img-15">
							<div class="ch-info">
								<h3 style="font-size:17px">Cognoscentia</h3>
							</div>
						</div></td>
   <td class="events_b not"><div class="ch-item ch-img-16">
							<div class="ch-info">
								<h3>M.U.N</h3>
							</div>
						</div></td>
			<td class="events_b int"><div class="ch-item ch-img-17">
							<div class="ch-info">
								<h3>Feathers</h3>
							</div>
						</div></td>
					</tr>
					<tr>
			<td class="events_b oly arc_sec"><div class="ch-item ch-img-18">
							<div class="ch-info">
								<h3>Trash Talk</h3>
							</div>
						</div></td>
			
		
            <td class="events_b debug arc_sec"><div class="ch-item ch-img-19">
							<div class="ch-info">
								<h3>Dumb Charades</h3>
							</div>
						</div></td>
			
			
		</tr>
   	</table>
</div>

<div id="ingenium_p" class="page">
	<table class="events four" style="left: 0px; margin-left: 110px;">
    	<tr>
        	<td class="events_b fin"><div class="ch-item ch-img-20">
							<div class="ch-info">
								<h3>Quizzes</h3>
							</div>
						</div></td>
  <td class="events_b ger"><div class="ch-item ch-img-21">
							<div class="ch-info">
								<h3>Outdoor</h3>
							</div>
						</div></td>
			<td class="events_b ros"><div class="ch-item ch-img-22">
							<div class="ch-info">
								<h3>Treasure Hunt</h3>
							</div>
						</div></td>
						<td class="events_b bt"><div class="ch-item ch-img-4">
							<div class="ch-info">
								<h3>Bollywood Tambola</h3>
							</div>
						</div></td>
			<td class="events_b plan"><div class="ch-item ch-img-23">
							<div class="ch-info">
								<h3>Arm Wrestling</h3>
							</div>
						</div></td>
		</tr>
		<tr>
        	<td class="events_b art arc_sec"><div class="ch-item ch-img-24">
							<div class="ch-info">
								<h3>Art</h3>
							</div>
						</div></td>
  <td class="events_b ct arc_sec"><div class="ch-item ch-img-25">
							<div class="ch-info">
								<h3>Chinatown</h3>
							</div>
						</div></td>
			<td class="events_b bd arc_sec"><div class="ch-item ch-img-26">
							<div class="ch-info">
								<h3>Blind Date</h3>
							</div>
						</div></td>
			<td class="events_b road arc_sec"><div class="ch-item ch-img-27">
							<div class="ch-info">
								<h3>Roadies</h3>
							</div>
						</div></td>
		
            
			
			
		</tr>
   	</table>
</div>

<div id="colloquia_p" class="page">
<table class="events three">
    	<tr>
        	<td class="events_b el"><div class="ch-item ch-img-28">
							<div class="ch-info">
								<h3>Fifa</h3>
							</div>
						</div></td>
			<td class="events_b me"><div class="ch-item ch-img-29">
							<div class="ch-info">
								<h3>Dota2</h3>
							</div>
						</div></td>
			 
			
			
		</tr>
        <tr>
           
			<td class="events_b ce"><div class="ch-item ch-img-30">
							<div class="ch-info">
								<h3>Counter Strike</h3>
							</div>
						</div></td>
			<td class="events_b metl"><div class="ch-item ch-img-31">
							<div class="ch-info">
								<h3>Split Second</h3>
							</div>
						</div></td>
		</tr>
   	</table>
</div>

<div id="yanthrix_p" class="page">  
	<table class="events three">
    	<tr>
        	<td class="events_b kg"><div class="ch-item ch-img-33">
							<div class="ch-info">
								<h3>La Frenze</h3>
							</div>
						</div></td>
			<td class="events_b imp"><div class="ch-item ch-img-34">
							<div class="ch-info">
								<h3>Street Dance</h3>
							</div>
						</div></td>
			
		</tr>
        <tr>
            <td class="events_b ko arc_sec"><div class="ch-item ch-img-35">
							<div class="ch-info">
								<h3>Carpe Diem</h3>
							</div>
						</div></td>
			<td class="events_b rw arc_sec"><div class="ch-item ch-img-36">
							<div class="ch-info">
								<h3>Foot Loose</h3>
							</div>
						</div></td>
			
		</tr>
   	</table>
</div>
<div id="Quizzaire_p" class="page">  
	<table class="events three">
		<tr><td ><a href="../../events" target="_blank" style="background-color:rgba(255,255,255,0.7);color:rgb(19, 108, 155); font-weight:bolder; font-size:18px;">Online Contest Link</a></td></tr>
    	<tr>
        	<td class="events_b bq"><div class="ch-item ch-img-37">
							<div class="ch-info">
								<h3>Purplexus</h3>
							</div>
						</div></td>
			<td class="events_b tq"><div class="ch-item ch-img-38">
							<div class="ch-info">
								<h3>Konqueror</h3>
							</div>
						</div></td>
			</tr>


			 	<tr>
        	<td class="events_b pl arc_sec"><div class="ch-item ch-img-39">
							<div class="ch-info">
								<h3>Platzen</h3>
							</div>
						</div></td>
			<td class="events_b tqo arc_sec"><div class="ch-item ch-img-40">
							<div class="ch-info">
								<h3>Stegolica</h3>
							</div>
						</div></td>
			</tr>
		
   	</table>
</div>

<div id="Ibox_p" class="page">
	<table class="events three">
    	<tr>
        	<td class="events_b sh"><div class="ch-item ch-img-41">
							<div class="ch-info">
								<h3>Ad-Mania</h3>
							</div>
						</div></td>
			<td class="events_b pos"><div class="ch-item ch-img-42">
							<div class="ch-info">
								<h3>B Quiz</h3>
							</div>
						</div></td>
		</tr>
<tr>
        	<td class="events_b sp arc_sec"><div class="ch-item ch-img-43">
							<div class="ch-info">
								<h3>Intuizione</h3>
							</div>
						</div></td>
			<td class="events_b lay arc_sec"><div class="ch-item ch-img-44">
							<div class="ch-info">
								<h3>Ranneeti</h3>
							</div>
						</div></td>
		</tr>
	
   	</table>
</div>

</div>

<div id="curtain_left" class="common">
</div>
<div id="curtain_right" class="common">
</div>


<div class="back_events">
	<img src="back1.gif" style="width:55px;height:auto;"/>
</div>


<style>
ol{
padding-left:13px;}
</style>
<!-- arcanum begins-->
<div id="Arcanum_events"class="subevents">


<div id="Karaoke" class="sub_events gv">
<ul>
<li><a href="#gv_intro">Introduction</a></li>
<li><a href="#gv_event">Event Format</a></li>
<li><a href="#gv_judge">Judging Criteria</a></li>
<li><a href="#gv_contact">Contact Details</a></li>

</ul>

<div id="gv_intro">
<h3>KARAOKE</h3>
</div>



<div id="gv_event">
To be updated soon..
</div>

<div id="gv_contact">
Samarth Khare :- 7376890988 <br\>
Aviral Johri :- 8081424705
</div>

<div id="gv_judge">
To be updated soon..
</div>



</div>

<div id="Melodiux" class="sub_events kr">
<ul>
<li><a href="#kv_intro">Introduction</a></li>
<li><a href="#kv_event">Event Format</a></li>
<li><a href="#kv_judge">Judging Criteria</a></li>
<li><a href="#kv_contact">Contact Details</a></li>

</ul>

<div id="kv_intro">
<h3>MEDLODIEUX</h3>
"There"s music in the sighing of a reed; There"s music in the gushing of a rill; There"s music in all things, if men had ears: Their earth is but an echo of the spheres. " Music is love in search of a word .There is nothing in the world so much like prayer as music is. Its the only thing that can make snivel without vindication. Virtuosi presents the musical challenge Melodieux, the rhythmic war of excellence. We are here to unravel the likes of Latas, Sunidhis, Kks, Sonus, Atifs and Kishores. It expresses feelings and thought, without language, it was below and before speech, and it is above and beyond all words.Similar feelings spontaneously flows through populace in IIIT-A at the MELODIEUX. The singers storm troops the audience with their euphonious voice while the Duet asphyxiates the remaining . With a bountiful over enthusiastic participation of many highly proficient vocalists, the event easily becomes an inexplicable call.
</div>



<div id="kv_event">
<ol>
<li>Team Size = Minimum 1 and maximum of 3 participants. One vocalist is a must. </li>
<li>One participant can participate only once within the same event. </li>
<li>There will only be one and final round. </li>
<li>Orchestra will be provided </li>
<li>Time limit: 3 minutes. Marks will be deducted in case time limit exceeds. Maximum of 1 antara is allowed of the song. </li>
<li>The decision of the judges and the coordinators shall be final and binding in all cases. </li>
</ol>
</div>

<div id="kv_contact">
Samarth Khare :- 7376890988 <br\>
Aviral Johri :- 8081424705
</div>

<div id="kv_judge"><h4>
Judgment Criteria: </h4><br/>
<ol>
<li> Vocal abilities & vocal range of the singer.  </li>
<li>Co-ordination and innovation. </li>

</ol>
</div>



</div>


<div id="Bollywood_Tambola" class="sub_events bt">
<ul>
<li><a href="#bt_intro">Introduction</a></li>
<li><a href="#bt_event">Rules</a></li>

<li><a href="#bt_contact">Contact Details</a></li>

</ul>

<div id="bt_intro">
<h3>BOLLYWOOD TAMBOLA</h3>
Adding flavour to one of the most popular party game is the masala and the grandeur of one of the biggest Indian industry - Bollyoood. This is Tambola revamped, replete with the music, masti and melodrama. High on the entertainment factor, the glitz and glamour of Bollywood is here to dazzle you. It's just a combination of luck and knowledge of movies and the 'stars' that will help you hit the jackpot here.
</div>



<div id="bt_event">
Rules will be be provided on spot.
</div>

<div id="bt_contact">
Amrita Singh :- 7752956106<br/>
Nikita Agarwal :- 8006964671<br/>
</div>

</div>

<div id="antakshari" class="sub_events tb">
<ul>
<li><a href="#tb_intro">Introduction</a></li>
<li><a href="#tb_event">Rules</a></li>

<li><a href="#tb_contact">Contact Details</a></li>

</ul>
<div id="tb_intro">
<h3>ANTAKSHARI</h3>
"Music speaks what cannot be expressed, soothes the mind and gives it rest, heals the heart and make it whole, flows from heaven to the soul!" Virtuosi presents the most enthralling and lively event of IIITA, ANTAKSHARI. For those who never sing, but die with all their music in them, this is the right chance to show their never ending love for music. "Music is your own experience, your thoughts, your wisdom!" Just live it to the fullest! "With no fear, just lose yourself and go into the deep ocean of melodies!"
</div>

<div id="tb_event">
Rules will be provided on spot.
</div>



<div id="tb_contact">
Samarth Khare :- 7376890988 <br\>
Aviral Johri :- 8081424705
</div>



</div>





<div id="Unplugged" class="sub_events ex">
<ul>
<li><a href="#ex_intro">Introduction</a></li>

<li><a href="#ex_event">Event Format</a></li>


<li><a href="#ex_judge">Judging Criteria</a></li>

<li><a href="#ex_contact">Contact Details</a></li>
<!--<li><a href="#ex_download">PDF</a></li>-->
</ul>

<div id="ex_intro">
<h3>UNPLUGGED</h3>
Tone down the distortion, let the unadulterated melody of the strings take control in this Western Acoustic event. No technical snags, no loud sounds . Just pull the plug and find yourself in solace with the melody of the rhythm. We ensure that you will be unplugged from the rest of the world by the magic of sur, raaga and dhun.
</div>



<div id="ex_event">
<ol>
<li>One participant can participate only once in the same event. </li>
<li>There will only be one and final round.</li>
<li>Unplugged instruments like flute, acoustic guitar, harmonica, table etc. should be used. </li>
<li>Time limit: 3 minutes. Marks will be deducted in case time limit exceeds. Maximum of 1 antara is allowed of the song. </li>
</ol>
</div>

<div id="ex_contact">
Samarth Khare :- 7376890988 <br\>
Aviral Johri :- 8081424705

</div>

<div id="ex_judge">
<h4>Judgement Criteria</h4>
<ol>
	<li>The decision of the judges and the coordinators shall be final and binding in all cases.</li>
	<li>Vocal abilities & vocal range of the singer.</li>
	<li>Co-ordination and innovation.</li>
</ol>
</div>


</div>


<div id="Psychadelia" class="sub_events gt">
<ul>
<li><a href="#gt_intro">Introduction</a></li>

<li><a href="#gt_event">Event Format</a></li>

<li><a href="#gt_contacts">Contact Details</a></li>

</ul>

<div id="gt_intro">
<h3>Psychadelia</h3>
Great music is that which penetrates the ear with ease  and leaves the memory with difficulty. But magical music is one with which never leaves the memory.The participants create an aura of mystic notes and octaves. They teach us that music is a moral law.
</div>



<div id="gt_event">
It is a non-competative event and only the IIITA bands perform in this event.
</div>

<div id="gt_judge">
</div>

<div id="gt_contacts">
Samarth Khare :- 7376890988 <br\>
</div>



</div>
</div>
<!--Grand Arcanum ends-->


<!--Magna begins-->
<div id="Magna_events"class="subevents">


<div id="Innovation" class="sub_events inno">
<ul>
<li><a href="#inno_intro">Introduction</a></li>
<li><a href="#inno_event">Event Format</a></li>
<li><a href="#inno_judge">Judging Criteria</a></li>
<li><a href="#inno_contact">Contact Details</a></li>

</ul>

<div id="inno_intro">
<h3>INNOVATION</h3>
It is the main dramatics event conducted during effervescence. Each team should have at least 6 participants and cannot exceed 20 .Preliminary auditions may be conducted.The winners of this event are awarded with cash prizes and certificates.<br/> Venue for auditions: Dramatics Room CC-3 , Indian Institute of Information Technology -Allahabad.
</div>



<div id="inno_event">
<ol>
<li>Each team should have a minimum of 6 members and cannot exceed 20. </li.
<li>The maximum performance time is 25 minutes 'curtain to curtain' and minimum of 12 minutes. </li>
<li>Team is free to choose the theme on its own. </li>
<li>The drama can be bilingual. Usage of both English and Hindi is allowed. </li>
<li>Negative marks will be awarded for both, exceeding time limit, and not completing the minimum time. </li>
<li>Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play. </li>
<li>Teams must bring all the costumes and props with them as the organizers will not provide anything. Only a few chairs and tables for stage setting may be provided. </li>
<li>The background music and lighting is allowed and a system for the same is provided by the organizers. </li>
<li>On the spot registrations (at least 4 hours prior to event ) are allowed but online registrations are advisable. </li>
<li>Any miscellaneous last minute demands to the organizers should be made 48 Hours prior to the performance, any demands after that will not be entertained. </li>
</ol>
</div>

<div id="inno_contact">
Saurabh Mishra :- 8957477770 

</div>

<div id="inno_judge">
<ol>
<li> Performance in acting(dialogue delivery, expressions, body movements)-50% </li>
<li> Presentation encompassing costumes, music, props, use of stage etc. - 20% </li>
<li> Successfully depicting the plot or theme - 20% </li>
<li> Marks for originality - 10%</li>
</ol>
</div>



</div>

<div id="director" class="sub_events dic">
<ul>
<li><a href="#dic_intro">Introduction</a></li>
<li><a href="#dic_event">Rules</a></li>
<li><a href="#dic_judge">Judging Criteria</a></li>
<li><a href="#dic_contact">Contact Details</a></li>

</ul>

<div id="dic_intro">
<h3>DIRECTOR'S CUT</h3>
Ever dreamt of being part of movies like Three Idiots, Rang De Basanti , The Social Network, Inception etc ? Ever dreamt of grabbing an Oscar by making documentary like "Smile Pinky" ???? Ever daydreamt of rocking the world with your style of direction? No doubt, the answer is certainly yes. This time in Effervescence "Rangtarangini" The Dramatics club and "Thunderbolt" Audio, light and camera Club has brought a golden opportunity for you to make your dreams come true. Make a short movie or documentary of any kind viz. comedy, spoof, inspirational, journey, corporate (business) related etc . Bring up your creative skills and spellbind the viewers.</div>



<div id="dic_event">
<ol>
<li>Make a short movie or documentary of any kind viz. comedy, spoof, inspirational, journey, corporate (business) related etc . </li>
<li>The top 3 movies will win prizes and will be shown on the silver screen .We do not provide camera and any other technical resources,  </li>
<li>There should not be any controversial issues involved in the script. The length of the movie should be at least 10-15 minutes . </li>
<li>From all the entries we will receive, three best movies will be selected to show on silver screen and will be awarded by certificates and with exciting prizes. All the entries should be reached with us before 16th of October (10:00 PM). </li>

</ol>
</div>

<div id="dic_contact">
Saurabh Mishra :- 8957477770 

</div>

<div id="dic_judge"><h4>
Judgment Criteria: </h4><br/>
Movie will be judged on the basis of: <br/>
<ol>
<li> Title of the movie(5%)  </li>
<li>Script(20%) </li>
<li> Acting(25%)   </li>
<li>Direction(20%)  </li>
<li>Editing(15%)   </li>
<li>Technical effects(15%)</li>

</ol>
</div>



</div>


<div id="doubletrouble" class="sub_events dot">
<ul>
<li><a href="#dot_intro">Introduction</a></li>
<li><a href="#dot_event">Rules</a></li>

<li><a href="#dot_contact">Contact Details</a></li>

</ul>

<div id="dot_intro">
<h3>DOUBLE TROUBLE</h3>
This is an event to discover the most talented duo in the fest. There will be couplet participation. The objective of this event is to find the imagination, creativity, and flexible ways of thinking among the participants. The reason of forming couplet at the time is to find their adaptability among them. The event consists of various rounds which include the activities like spoofing, dramatic activities, questionarre. By short listing, the couplet in different rounds will be selected.</div>



<div id="dot_event">
1. Bring a pen along with you <br/>
2. Register in a pair <br/>
3. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play.<br/>
</div>

<div id="dot_contact">
Saurabh Mishra :- 8957477770 
</div>





</div>

<div id="bindaas" class="sub_events bbl">
<ul>
<li><a href="#bbl_intro">Introduction</a></li>
<li><a href="#bbl_event">Rules</a></li>
<li><a href="#bbl_judge">Judgement Criteria</a></li>
<li><a href="#bbl_contact">Contact Details</a></li>

</ul>
<div id="bbl_intro">
<h3>BINDAAS BOL</h3>
A variation of Nukkad Natak(Street Play), Bindas Bol features outspoken acts. The participants are given complete freedom over the subject of their play in this informal event. The champions of Bindass Bol are awarded with lucrative gifts.</div>

<div id="bbl_event">
1. Each team should have a minimum of 6 members and cannot exceed 15. <br/>
2. The maximum performance time is 20 minute and minimum of 12 minutes <br/>
3. Team is free to choose the theme on its own. <br/>
4. Teams must bring all the costumes and props with them as the organizers will not provide anything. Only a few chairs and tables for stage setting may be provided. <br/>
5. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the play. <br/>
6. The drama can be bilingual. Usage of both English and Hindi is allowed. <br/>
7. On the spot registrations are allowed but online Registrations are advisable.<br/> 


</div>

<div id="bbl_judge">
1. Performance in acting(dialogue delivery, expressions, body movements)-40% <br/>
2. Presentation encompassing costumes, music, props, use of stage etc. - 10% <br/>
3. Successfully depicting the plot or theme - 20% <br/>
4. Marks for audience response is 30%<br/>
</div>

<div id="bbl_contact">
Saurabh Mishra :- 8957477770 

</div>

</div>





<div id="tongueonfire" class="sub_events tof">
<ul>
<li><a href="#tof_intro">Introduction</a></li>

<li><a href="#tof_event">Event Format</a></li>


<li><a href="#tof_judge">Judging Criteria</a></li>

<li><a href="#tof_contact">Contact Details</a></li>
<!--<li><a href="#ex_download">PDF</a></li>-->
</ul>

<div id="tof_intro">
<h3>TONGUES ON FIRE</h3>
It is an informal event organised by club rangtarangini to bring out the real leg pulling ability of people out in front of their opponents. People enjoy pulling anyone off his grip, then this event would feed with plenty of solace along with the gifts as a byproduct. In Tongues on fire leg pulling your friends can fetch attractive prizes. Students participate in a group of 4 persons. Registration will be done on the spot. </div>



<div id="tof_event">

1. Each team should have 4 members. <br/>
2. The time allotted will be 10 minutes <br/>
3. Teams competing will be given a topic. <br/>
4. Teams can be subjected to negative marking on issues like use of abusive language, vulgarity etc. in the argument. <br/>
5. Usage of both English and Hindi is allowed. <br/>
6. One on one chance will be provided to two teams to freely argue on the topic at a time. <br/>
7. On the spot registrations are allowed but online Registrations are advisable.<br/>
</div>

<div id="tof_contact">
Saurabh Mishra :- 8957477770 

</div>

<div id="tof_judge">
<h4>Judgement Criteria</h4>
Team performance and audience response will used to judge the teams.
</div>


</div>


<div id="kahani" class="sub_events kah">
<ul>
<li><a href="#kah_intro">Introduction</a></li>

<li><a href="#kah_event">Rules</a></li>
<li><a href="#kah_judge">Judgement Criteria</a></li>
<li><a href="#kah_contacts">Contact Details</a></li>

</ul>

<div id="kah_intro">
<h3>KAHANI</h3>
It is a script writing event organised by the club to bring into action the writer behind every student. They will have an opportunity to showcase their ability by writing a script that depicts their real talents. Submissions of scripts will me made online. Best 3 scripts will be awarded with prizes.</div>



<div id="kah_event">
1. All the participants have to write a short script for a play as their entry <br/>
2. The size of the script should not exceed five A4 sheets. <br/>
3. Each scene should be explained properly in the script. <br/>
4. Proper characterization should be done. <br/>
5. Theme of the script should be made clear. <br/>

</div>

<div id="kah_judge">
Popularity vote- 50% <br/>
Expert panel- 50%
</div>

<div id="kah_contacts">
To be updated soon..
</div>



</div>

<div id="streetplay" class="sub_events stp">
<ul>
<li><a href="#stp_intro">Introduction</a></li>

<li><a href="#stp_event">Rules</a></li>
<li><a href="#stp_judge">Judgement Criteria</a></li>
<li><a href="#stp_contacts">Contact Details</a></li>

</ul>

<div id="stp_intro">
<h3>STREET PLAY</h3>
</div>



<div id="stp_event">
to be updated soon..
</div>

<div id="stp_judge">
to be updated soon..
</div>

<div id="stp_contacts">
To be updated soon..
</div>



</div>

</div>

<!--Magna ends-->

<!--Colloquia begins-->
<div id="colloquia_events" class="subevents">

<div id="Fifa" class="sub_events el">
<ul>
<li><a href="#el_domains">Introduction</a></li>
<li><a href="#el_event_format">Event Format</a></li>
<li><a href="#el_event_rules">Rules And Regulations</a></li>
<li><a href="#el_contact">Contact Details</a></li>

</ul>

<div id="el_domains">
<h3>FIFA</h3>
Play EA Sports - FIFA 14 in an event to prove yourself the best in online football gaming.
</div>

<div id="el_event_format">
<b>ELIMINATION ROUND:</b>  <br/>

<ul>
<li>Group Division: There will be FOUR groups. </li>
<li>Only top four players from each group will progress to next round (total 16 players will progress). </li>

</ul><br/>
<b>TOP 16 </b> <br/>

<ol>
<li>It will be a Knock-out stage  </li>
<li>Eight players will progress to next round</li></ol><br/>

<b>QUARTER FINALS: </b> <br/>

<ol>
<li>It will also be a Knock-out stage.</li>
<li>Four players will be progressed to Semi Finals.</li></ol>


<br/>

<b>SEMI FINALS: </b> <br/>

<ol>
<li>Four players will compete in this round.</li>
<li>Each player who wins the 'BEST OF THREE' will progress to the FINAL</li></ol>


<br/>

<b>FINALS: </b> <br/>

<ol>
<li>Two players reach the finals.</li>
<li>The final will be again be a 'BEST OF THREE'.</li></ol>
<br/>

</div>

<div id="el_event_rules">

<b>General Rules:<br/></b>
<ol>
<li>All teams are ALLOWED except the CLASSIC XI and WORLD XI </li>
<li>Half time will be of 7 minutes.  </li>
<li>No LEGACY DEFENDING is allowed</li>
</ol>
<br/>
PS: Students from IIIT Allahabad kindly bring your own laptops and controllers.
</div>

<div id="el_contact">
Amit Kushwaha  :- 8564845988 

</div>


</div>



<div id="Dota2" class="sub_events me">
<ul>
<li><a href="#me_domains">Introduction</a></li>
<li><a href="#me_event_format">Event Format</a></li>
<li><a href="#me_contacts">Contact Details</a></li>

</ul>

<div id="me_domains">
<h3>DOTA 2</h3>
Defense of the Ancients (DotA) is a multiplayer online battle arena mod for the video game Warcraft III: Reign of Chaos. The objective of the scenario is for each team to destroy the opponents' Ancient, heavily guarded structures at opposing corners of the map.
</div>

<div id="me_event_format">
Download the PDF of the general rules of DOTA 2 by clicking the below link:- <br/>
<ol>
<li><a href="dota.pdf" style="color:yellow">General Rules</a></li>
</ol>
</div>


<div id="me_contacts">
Aman Verma :- 9415130974 <br/>

</div>

</div>


<div id="COUNTER-STRIKE" class="sub_events ce">
<ul>
<li><a href="#ce_intro">Introduction</a></li>
<li><a href="#ce_event">Event Format</a></li>
<li><a href="#ce_contacts">Contacts</a></li>
<li><a href="#ce_credits">Credits</a></li>
</ul>

<div id="ce_intro">
<h3>COUNTER-STRIKE</h3>
Counter-Strike is a first-person shooter in which players join either the terrorist team, the counter-terrorist team, or become spectators. Each team attempts to complete their mission objective and/or eliminate the opposing team. Each round starts with the two teams spawning simultaneously. This is contest of the pro's to prove that they are the best at using the armor's to their limit.
<h4>To register you team members, visit this link: <a style="color:#fff; text-decoration: underline;" target="_blank" href="http://goo.gl/gx4N53">http://goo.gl/gx4N53</a></h4>
</div>

<div id="ce_event">
<b>General Rules and Regulations : </b><br/>
5 vs. 5 (Team Play, 5 players per team) <br/><br/>
 <b>Victory Condition : </b>The first team to win 11 rounds is declared the winner.(16 rounds from Quater Finals onward ) <br/>
 <br/><b>Official Maps: </b>De_Dust2, De_Inferno, De_Nuke, De_Train <br/>
 There will be a toss to decide which map to play.Winner eliminates 2 maps and the opponent eliminates 1, remainder shall be played.There will be a knife round to decide the side(CT\T).Map for knife round will be De_Dust2. <br/>
 In the case of a tie after regulation, 6 extra rounds will be played. (3 rounds as Terrorists and 3 rounds as C ounter-Terrorists per team) In the case of a re-tie after 6 extra rounds as stated above, 6 more extra rounds will be played until the tie is broken.<br/>
Tie-breaker Start Money : $10000<br/>
Tie-breaker victory condition: The first team to score 4 rounds. <br/>
 The Server will record the process of the match. <br/>
 We may install third party program and/or join as an observer for tournament operations purposes, such as verifying match results or gathering match data. <br/>
 <b>NO CFGs ARE ALLOWED TO BE EXECUTED.</b><br/>
<br/>
<b>General Game Setting:- </b><br/>
<b>Rounds: </b>30 Rounds (Max rounds format): Each Team plays 15 rounds as Terrorists and 15 rounds as Counter-Terrorists <br/>
<b>Round Time: </b>1 minute 45 seconds. <br/>
<b>Approved Grenade Amounts Per Round: </b> <br/>
a) Flashbangs: 2 <br/>
b) Grenades: 1 <br/>
c) Smoke Grenades: 1 <br/>
<br/>
<b>Approved Launch Option Commands: </b><br/>
a) noforcemparms <br/>
b) noforcemaccel <br/>
c) noforcemspd <br/>
d) freq *** <br/>
<br/>
-> Default skins must be used. <br/>
-> Any other use of map or program bugs can result in a warning at the minimum or loss by default for the offending team after deliberation and decision by the board of referees at its sole discretion. <br/>
<br/>
<b>Tournament Server Setting:-> </b>mp_autokick 0	mp_autocrosshair 0 mp_autoteambalance 0	mp_buytime 0.25 mp_consistency 1	mp_c4timer 37 mp_fadetoblack 1	mp_flashlight 1 mp_forcechasecam 2 mp_forcecamera 2 mp_footsteps 1	mp_freezetime 15 mp_friendlyfire 1	mp_hostagepenalty 0 mp_limitteams 10	mp_logecho 1 mp_logdetail 3	mp_logfile 1 mp_logmessages 1	mp_maxrounds 0 mp_playerid 1	mp_roundtime 1.75 mp_timelimit 0	mp_tkpunish 0 sv_aim 0	sv_airaccelerate 10 sv_airmove 1	sv_allowdownload 0 sv_allowupload 0	sv_alltalk 0 sv_cheats 0	sv_clienttrace 1 sv_clipmode 0	sv_friction 4 sv_gravity 800	sv_lan_rate 25000 sv_maxrate 5000	sv_maxspeed 320 sv_maxunlag 0.5 sv_maxupdaterate 101 sv_minupdaterate 101	sv_minrate 25000 sv_proxies 1	sv_send_logos 1 sv_send_resources 1	sv_stepsize 18 sv_stopspeed 75	sv_unlag 1 sv_voiceenable 1	sv_unlagsamples 1 sv_unlagpush 0	sys_ticrate 10000 allow_spectators 1	decalfrequency 60 edgefriction 2	host_framerate 0 log on	pausable 0 <br/>
<br/>
<b>Allowed Setting Values for Client:- </b>cl_updaterate 101	cl_cmdrate 101 rate 25000	m_filter 1/0 hud_fastswitch 1/0	zoom_sensitivity_ratio fps_max 101	cl_dynamiccrosshair 1/0 gamma 1/3	brightness 1/3 cl_minmodels 1/0	cl_shadows 1/0 <br/>
<b>Following Client Settings May Not Be Changed (Must use the default values):- </b>cl_weather mp_corpse_stay mp_decals max_shells max_smokepuffs fastsprites ex_interp 0.01 <br/>
<br/>
<b>Unfair Practices Subject to Penalty:- </b><br/>
- A player can only be on one team, meaning that you cannot play for two different clans in the competition.<br/>
- Team members may communicate verbally if they are alive in the match or when all team members are dead. <br/>
- The player is deemed dead when the screen is completely faded to black. If a bug occurs and the screen doesn't fade to black, the player is deemed dead three seconds after he/she has fallen. <br/>
- Binding Duck to scroll wheel is offensive. <br/>
- C4 must be installed at a viewable location. Installing C4 at a location where a boost is required is allowed. <br/>
- Silent C4 installation is considered bug play.Such an offense may result in a warning or disqualification. <br/>
- Any use of the flash bang bug will result in a -3 round score for the offending team. If the use of the bug is decided as unintentional, the game continues as normal. <br/>
- Gay gun ( Krieg 550 commando and D3/AU-1 ) and Shield are not allowed.Use of these weapons results in -1 round score for the offending team. <br/>
- Use of unfair but available scripts (e.g. silentrun, attack+use, centerview script, norecoil script, etc.) will have the offending team diqualified. <br/>
- HLTV Proxy will join the game servers for Tournament Broadcast <br/>
- To test for HLTV flash bugs, players must follow the directions of the server. <br/>
<br/>
<b>If disconnection occurs during a match:- </b> <br/>
If all the players cannot play due to an unintended, unforeseen accident such as server stoppage, <br/>
- Before the 3rd round starts: restart the match <br/>
- After the 3rd round starts: Disconnected player must re-connect to the server. The round is continued unpausing, and if the disconnected player cannot connect to the server, all players must wait during the freeze time after the round until the disconnected player connects to the server. At this time, the match may continue by unpausing. (Not a restart) <br/>
- If up to 3 of all players are unintentionally disconnected: The score for that round is discarded. The game is paused after the round during the freeze time, and all players wait until the disconnected players are connected to the server. When all players are connected, the match may continue by unpausing the game. <br/>
- In the case of intentional disconnection, the server may decide to end the match with the offending team losing by forfeit. <br/>
<br/>
<b>General Information:- </b><br/>
- Bring all the Gaming Accessories with you.<br/>
</div>

<div id="ce_contacts">
Mohit Gupta :- 8174069369
</div>

<div id="ce_credits">

<h2>We want to thank all our seniors who made this event possible. </h2>
<h3>Special Thanks: </h3>
<h4>Clan - Ak@tsuki</br></h4>
Yash "haides (>:)" Chauhan<br/>
Sufiyan "b!n@ry" Ahmed<br/>
Sumit "raGe" Tiwari<br/>
Kartikey "Prince (o.O)" Singh<br/>
Udai "D_rock" Pratap<br/><br/>
Aman Bahadur Singh
</div>

</div>

<div id="SplitSecond" class="sub_events metl">
<ul>
<li><a href="#metl_domains">Introduction</a></li>
<li><a href="#metl_event_format">Event Format</a></li>
<li><a href="#metl_event_rules">Rules And Regulations</a></li>
<li><a href="#metl_contacts">Contacts</a></li>

</ul>


<div id="metl_domains"><h3>SPLIT/SECOND</h3>
No disqualification, no game spirit, no fair play…it’s THE badass thing you were waiting for. Come thrash your opponents, reck them using powerplays, use short cuts, alter the routes and drift away to victory. Guys, welcome to Split Second…!!!  </div>

<div id="metl_event_format">
<b>SINGLE PLAYER</b> <br/></br>

<b>Priliminary Rounds :</b>  <br/>
All qualifying participants will compete in a "Race" mode in groups of 8. The no. of players qualifying to the next round will be selected on the basis of total no. of participants.<br/><br/>

<b>Semi Finals:</b> <br/>
All qualifying participants will be divided in 2 groups. They will compete in 3 races. Top 3 participants from each group will advance to the finals.<br/>
The time clocked by each participant in each of the 3 races will be added and the participants from each group having the least cumulative time will advance to the finals.
<br/><br/>

<br/>
<b>Finals:</b> <br/>
The qualifying participants from two SEMIS will compete in 3 races.
Player having the least cumulative time of all the 3 races will be the "winner" of the tournament.<br/><br/>

<br/>
<b>TEAM PLAY</b> <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 1.	A team must comprise of min 3 and max 4 players.<br/>
&nbsp;&nbsp;&nbsp;&nbsp; 2.	No change of team members will be allowed after registration<br/></br>

<b>Priliminary Rounds :</b>  <br/>
2 races will be there. The average of the cumulative timing of all players of the team will decide which team qualifies to the next round.<br/><br/>

<b>Semi Finals:</b> <br/>
4 teams will qualify to the SEMIS. There will be total 3 races on 3 different tracks. Again the average of cumulative timing of all team members will decide which team won.
<br/><br/>

<br/>
<b>Finals:</b> <br/>
The two qualifying teams from two SEMIS will compete in 3 races.<br/>
Team having the least value of average of the cumulative timing of all the 3 races will be the "winner" of the tournament.

</div>

<div id="metl_event_rules">
<b>Common Rules for Competitive rounds, Semi-finals and Finals:</b><br/><ol>
<li>Game Type: Race </li>
<li>No. of Laps: 2 for competitive , 3 for semi-final & final. </li>
<li>Courses: Courses will be given on the spot </li>
<li>Participants are allowed to bring their own laptops. </li>
</ol><br/>
<b>Disconnection :<br/></b>
In case of any disconnection, the organizer’s decision while prevail. Any sort of argument or unfair means may lead to disqualification. 
</div>

<div id="metl_contacts">
Ankush Raghuvanshi :- 9936020422 

</div>

</div>



</div>

<!--Colloquia ends-->

<!--Matricks begins-->
<div id="Matricks_events" class="subevents">

<div id="COGNOSCENTIA" class="sub_events cod">
<ul>
<li><a href="#cod_intro">Introduction</a></li>
<li><a href="#cod_event">Event Format</a></li>
<li><a href="#cod_contact">Contact Details</a></li>
<!--
<li><a href="#cod_download">PDF</a></li>
-->
</ul>

<div id="cod_intro">
<h3>COGNOSCENTIA</h3>
One of the most awaited events, the brain wreaking quiz contest witnesses participation from some of the best quizzers of the nation, bringing out the best of brains and most aware minds. The oldest event of the college this one's not for the weak of heart, unleash the little devil inside of you, and rid yourself of all your virtues, as you are quizzed about everything you were never supposed to know.
</div>

<div id="cod_event">
<b>Rules and regulations : </b> <br/>
<ol>
<li>Participation should be in teams of 3. </li>
<li>A written screening round will precede the finals for which 10 teams will qualify. </li>
<li>Use of unfair means is strictly prohibited. </li>
<li>The decision of the quizmaster shall be final in all regards. </li>
</ol>
<b>Registration : </b> <br/>
<ul>
<li>Participation has to be in teams of 3. </li>
<li>To register for the event, fill the doc here. </li>
<li>Further queries and details, mail to sarasvaiiitamm13@gmail.com</li>
</ul>
</div>

<div id="cod_contact">
Vatsal Mishra :– 9559253203 <br/>
Darshnik Swamy - 8400329301	<br/>
Apoorva Agrawal - 8173866538 <br/>
</div>

</div>

<div id="mun" class="sub_events not">
<ul>
<li><a href="#not_intro">Introduction</a></li>
<li><a href="#not_event">Event Format</a></li>
<li><a href="#not_contact">Contact Details</a></li>

<li><a href="#not_download">PDF</a></li>

</ul>

<div id="not_intro">
<h3>M.U.N.</h3>
The two-day conference will put to test your ability to research, persuade, and lead, testing the fledgling diplomat in you. You’ll be working with participants from all over the country in a highly competitive environment. The crises that you come across in council, prepared by our dedicated team, will put you to the test. With a conscientious International Press, every move of yours as a delegate will be scrutinized and put to question. In dissecting world affairs and creating policies in a conference of the highest quality, we hope to transform you from students into future leaders, all while creating unforgettable memories.
<br/><br/><br/>
Registrations are now open! Check out the <a href="procedure.pdf" target="blank" style="color:yellow">procedural guidelines</a> and <a href="https://docs.google.com/forms/d/1_IcwGSKtfOdYikcqlPN7ci1XCmtZ2GgimNU3jDfol1U/viewform?c=0&w=1&usp=mail_form_link" target="blank" style="color:yellow">register here. </a><br/><br/><br/>
You can see the video <a href="https://www.youtube.com/watch?v=YyjqMqfovXU" target="blank" style="color:yellow">here</a>
</div>

<div id="not_event">
<br/><br/>
The first Edition of the IIITA MUN Conference will take place from 14 to 15 of October 2014 at the IIITA premises and will bring together over 200 participants from IIITA, as well as from 24+ Schools and colleges.
</div>

<div id="not_contact">
The IIITA MUN is organized and conducted by “Sarasva”, The Literary Society of IIIT Allahabad.<br/><br/>
Darshnik Swamy :– 8400329301 <br/>
Vatsal Mishra :– 9559253203 <br/>
Ankit Mishra :– 8090918961 <br/>
Utkarsh Agarwal :– 9936246309 <br/>
Agrima Gurnani :– 7379131278 <br/>
Email id:- iiita.sarasva@gmail.com<br>

</div>

<div id="not_download">

<br/><br/>
Here are the necessary pdf:<br/><br/>
<ol>
<li><a href="emer.pdf" style="color:yellow">Emergency Meet</a></li>
<li><a href="gassembly.pdf" style="color:yellow">General Assembly</a></li>
</ol>
</div>

</div>


<div id="FEATHERS" class="sub_events int">
<ul>
<li><a href="#int_intro">Introduction</a></li>
<li><a href="#int_event">Event Format</a></li>
<li><a href="#int_contact">Contact Details</a></li>
</ul>

<div id="int_intro">
<h3>FEATHERS</h3>
They say a pen is mightier than a sword. Well, the truth is, a pen is even mightier than a freaking bazooka. But, what if you can it make sense of anything? What if the entire universe conspires against you and the time runs out? What if you fail? Get your think tanks brimming this September, as you face one of the toughest platforms of creative writing. The innovative writing contest is sure to unlock the hidden Shakespeare and Keats in you. This year’s “Feathers” event allows you to test your writing skills and assess the value of the article written on the online channel. The winning entries will be published on Inform-Ally.com .
</div>

<div id="int_event">
<b>Event Format:</b>
•	An author can submit multiple entries
•	Each entry must have a title.
•	Submissions are to be made in a MS Word supported document, with title as the name of the document
•	The author needs to provide original content ( Strictly No Plagiarism)
•	You can include Image / Videos (Youtube / Vimeo) to be shared to support your content must not be copyrights protected
o	Place the hyperlink in the article itself where you wish to showcase it
o	You need to share the link for the same, for verification
•	You need to specify “Metatags” at the bottom of your submission
•	The genres on which you can write are : Politics, World, Media, Tech, Sports, Comedy, Lifestyle, Celebrity

Stage 1: Submission of Entries
•	Start Date: 7th October 2014
•	End Date of Registration & Submission: 15th October 2014 
•	All Submissions are to be mailed to: contest.informally@gmail.com
Stage 2: Promoting your Posts
•	Start Date: 16th October 2014
•	End Date of Registration & Submission: 18th October 2014 
•	The articles would be posted on Inform-Ally.com
•	Links would be provided to the Author for promotion of their own content







<br>
<br>
<br>


<b>Judging Criteria</b>
•	Originality, Structure, Length of Content 50%
•	Online Metrics 50%
o	Time spent on Content
o	Number of unique reader
o	Engagement of readers ( Activity done by the user after reading your post)
P.S. : If your articles are similar to what Inform-Ally.com generally publishes, you would have better chances of winning .

<br>
<br>
<br>



<b>Prizes</b>
Prizes worth Rs. 8.5k up for grabs ! Hurry up and Register !

</div>

<div id="int_contact">
Email id: sarasva.iiita@gmail.com<br>
Darshnik Swamy :- 8400329301 <br/>
Vatsal Mishra :- 9559253203 </br>
Agrima Gurnani :- 7379131278 </br>
</div>

</div>

<div id="trash" class="sub_events oly">
<ul>
<li><a href="#oly_desc">Introduction</a></li>
<li><a href="#oly_event_format">Event Format</a></li>

<li><a href="#oly_contact">Contact Details</a></li>

</ul>

<div id="oly_desc">
<h3>TRASH TALK</h3>
As rightly said by albert einstein LOGIC WILL GET YOU FROM A TO Z BUT IMAGINATION WILL GET YOU EVERYWHERE.... So here is an event to examine the heights of your imagination.well, exploring something obvious is quite easy, but exhibiting illogical fact is not a cup of tea for everyone.so are you ready to sweep in the world which is full of incoherent conceptions..if yes then this event would take you to the arena where you will find unlimited fun and entertainment. this event is full of hyerbole, pun etc. which touches the humourous spirit. here you would not only represent the unreasonable conclusions but would also support your trash against an opponent. so friends dont miss this event to split your sides in laughter.

</div>

<div id="oly_event_format"><b>Rules and Regulations : </b> <br/> 
<ol>
<li>Decision of the Judges will be final in all respects. </li>
<li>Profanity will not be accepted. </li>
</ol>
<b>Registration : </b> <br/>
<ul>
<li>Participation has to be on an individual basis. </li>
<li>For any queries, mail to sarasvaiiitamm13@gmail.com</li>
</ul></div>



<div id="oly_contact">
Umang Paliwal :- 8400320844 <br/>
Shikhar Bhatia :- 9473551470 <br/>

</div>

</div>

<div id="dumb" class="sub_events debug">
<ul>
<li><a href="#debug_desc">Introduction</a></li>

<li><a href="#debug_event">Event</a></li>

<li><a href="#debug_contact">Contact Details</a></li>

</ul>

<div id="debug_desc">
<h3>DUMB CHARADES</h3>
Everything is petty in front of the feeling which you get when you get your act right. Jazz up your acting skills in what promises to be a unique Dumb Charades. This event not only tests one's theatre-knowledge and acting skills but also presence of mind and spontaneity.

</div>



<div id="debug_event">
Rules and Regulations: </b> <br/> 
<ol>
<li>Decision of Judges will be final in all respects. </li>
<li>Vulgarity will not be accepted. </li>
</ol>
<b>Registration: </b> <br/>
<ul>
<li>Participation has to be in teams of 3. </li>
<li>Further queries and details, mail to sarasvaiiitamm13@gmail.com</li></ul>

</div>

<div id="debug_contact">

Umang Paliwal :- 8400320844 <br/>
Ashima Elhence :- 9453025213 <br/>
</div>



</div>


<div id="DUMB CHARADES" class="sub_events debug">
<ul>
<li><a href="#debug_desc">Introduction</a></li>
<li><a href="#debug_event">Event Format</a></li>
<li><a href="#debug_contact">Contact Details</a></li>
</ul>

<div id="debug_desc">
<h3>DUMB CHARADES</h3>
Everything is petty in front of the feeling which you get when you get your act right. Jazz up your acting skills in what promises to be a unique Dumb Charades. This event not only tests one's theatre-knowledge and acting skills but also presence of mind and spontaneity.
</div>

<div id="debug_event">
Rules and Regulations: </b> <br/> 
<ol>
<li>Decision of Judges will be final in all respects. </li>
<li>Vulgarity will not be accepted. </li>
</ol>
<b>Registration: </b> <br/>
<ul>
<li>Participation has to be in teams of 3. </li>
<li>To register for the event, fill the doc here. </li>
<li>Further queries and details, mail to sarasvaiiitamm13@gmail.com</li>
</div>

<div id="debug_contact">
<b>to be updated soon...</b>
</div>
</div>
</div>
<!--matricks ends-->

<!--ingenium starts-->
<div id="ingenium_events" class="subevents">

<div id="quiz" class="sub_events fin">
<ul>

<li><a href="#fin_event_format">Anime Quiz</a></li>
<li><a href="#fin_judge">Game of Thrones Quiz</a></li>
<li><a href="#fin_rules">Friends Quiz</a></li>
<li><a href="#fin_rules2">Cricket Quiz</a></li>

</ul>



<div id="fin_event_format">
<b>Anime Quiz</b> <br/>
All One Piece,DBZ and Naruto fans , get going and be ready to live up your fantasy and prove that you are the biggest Fan.. !! "Dattebayo" !!<br/><br/>

Rules:<br><br>

1.You must come in a pair for participating.<br>
2.The registration fee will be announced on the day of the event.<br>
3.You must bring a pen.<br>
4.There will be questions from popular anime like Naruto,One piece,DBZ ,etc.<br>
5.The format of the quiz will be announced on site.<br>
6.The decisions of the organisers are final.<br>
KEEP CALM N WATCH ANIME!<br><br>

Event Organisers:- <br/>
Anurag Sharma :- 7704914402<br/>
Baishali Saha :- 8176025969


</div>

<div id="fin_judge">
<b>Game of Thrones Quiz</b> <br/>
To all Game of Thrones enthusiasts! How Big Of A “Game Of Thrones” Fan Are You Really? <br/>
We provide a platform to show how much you love Game of Thrones. Come and be a part of Game of Thrones quiz, first time ever organised in IIITA. <br/><br/>

RULES :- <br/>
1. All participants must come in a group of two members. <br/>
2. Questions would be based on TV series as well as on the books (Only upto "A Storm of Swords", the third book in the A Song of Ice and Fire series). So prepare accordingly.<br/>
3. First round will be a written round.<br/>
4. All the rules of other rounds will be announced on the spot.

<br/><br/>
Event Organisers:- <br/>
Pawan Burnwal - 8115580400<br/>
Shubham Bhendarkar - 8756030863
</div>

<div id="fin_rules">
<b>Friends Quiz<br/></b>
To all F.R.I.E.N.D.S enthusiasts!<br/>
How Big Of A “F.R.I.E.N.D.S" Fan Are You Really?<br/>
PUT YOURSELF TO THE TEST.<br/><br/>

RULES :- <br/>
1. Every team will consist of two players. <br/>
2. There will be various rounds after the first written screening round that'll consist of printed questions (may or may not be Multiple choice questions). <br/>
3. The type and number of rounds will not be revealed until after the screening round. <br/>
4. Participants are expected to have watched all the seasons thoroughly and know about the cast.

<br/><br/>
Event Organisers:-<br/>
Gurkirat Singh Mohain - 8115606848<br/>
Armaan Jain - 9695710826
</div>

<div id="fin_rules2">
<b>Cricket Quiz</b><br/><br/>

RULES:- <br/>
1.You have to participate in a team of 2. <br/>
2.The quiz will consist of maximum 3 rounds however if needed this number can be decreased.<br/>
3.Decision of organisers will be final.<br/><br/>

Event Organiser:-<br/>
Vaibhav Agarwal :- 7668279070  
</div>


</div>





<div id="outdoor" class="sub_events ger">
<ul>

<li><a href="#ger_event_format">Street Soccer</a></li>
<li><a href="#ger_judge">Basketball</a></li>
<li><a href="#ger_rules">Gully Cricket</a></li>
<li><a href="#ger_contact">Tug of War</a></li>

</ul>





<div id="ger_event_format">
<b>Street soccer</b> <br/>
Inspired by the unbelievable trickery of today's skillful footballers, this one of its kind event is being staged at IIIT-A for the first time ever.<br/><br/>
<br/>
<b>Rules:</b><br/>
1. Every team must have 6 members. <br/>
2. 5 players(1 goalkeeper) will play and 1 player as a substitute. <br/>
3. Total 2 substitutions are allowed., i.e the same player substituted earlier can go back in again. <br/>
4. Goal will be of knee height. <br/>
5. Penalty will be awarded to a team if the opponent team has kicked the ball 3 times out of the court. <br/>
6. There will be two halves of 13 minutes each with a break in b/w. <br/>
7. Referee's decision will be considered as final decision. Any argument or any misconduct may lead to disqualification of the team. <br/>
8. Any change in the rules will be detailed at the venue.<br/>
<br/>

Event Organisers:<br/>
Ankur Rao - 8052943469<br/>
Subham Sharma - 9554708767<br/>
</div>

<div id="ger_judge">
<b>BasketBall Half-Court</b> <br/><br/>
RULES :- <br/>
<ol>
<li>Each team should have at least 3 players. 3 players of a single team will play at a time. If required the teams can have an additional substitute player. (3 playing + 1 sub).</li>
<li>Duration of the game will be 10 minutes. (2 halves of 5 minutes each).</li>
<li>There will be a break of 2 minutes between the halves.</li>
<li>The uniform of the team members should be T- Shirts of same colour and shoes are compulsory.</li>
<li>Teams have to report at least 15 minutes before the commencement of the match. </li>
<li>The tournament will be played on knock-out basis.</li>
<li>There will be no time-out.</li>
<li>The initial possession of the ball will be decide by free throw(s).</li>
<li>After every attempt by either team, if the ball touches the board or the ring then the ball must be cleared before the next touch at the basket.(Line of clearance – 3 pointer line)</li>
<li>All FIBA rules will be followed for violations, fouls and technical fouls.</li>
<li>There will be no free shoots for fouls, instead, side throws will be awarded.</li>
<li>Maximum 3 fouls are allowed for each player.</li>
<li>After every basket, the ball will be in the possession of the team who has made the basket and the ball will be passed from the centre line.</li>
<li>No player can play for two teams.</li>
<li>A Team will be disqualified if it refuses to follow referee’s decision.</li>
<li>In case of tie, 2 extra minutes will be provided.</li>
<li>Any kind of misconduct is strictly prohibited.</li>
<li>Referee’s decision is final.</li>

</ol><br/>

Event Organisers :-<br/>
Shubham Nanda - 8176026012<br/>
Shubham Prasad - 9807007874<br/>
Vartul Sharma - 8953822938
</div>

<div id="ger_rules">
<b>Gully Cricket<br/></b>
Street cricket or gully cricket is a stripped-down version of the international sport of cricket.<br/><br/>
<b>Rules:</b><br/>
1. Every team must have 6 members. <br/>
2. There will be 5 over matches . <br/>
3. 3 consecutive beats will be considered as OUT. <br/>
4. If the ball hits boundaries without taking a tip on the ground will be considered as OUT. <br/>
5. NO BALLS and WIDE balls will be considered as Extras. <br/>
6. There will be no run for byes. <br/>
7. The height of the ball should be below chest. <br/>
8. Postively four of your players should be bowling(atleast one over each). <br/>
9. Umpire's decision will be considered as last decision. <br/>
10. Rest other rules for scorings and run will be detailed at the venue.<br/>

<br/>
Event Organisers :-<br/>

Niketan Rane :- 7668984092<br/>
Ekansh Katiyar :-8303789301<br/>


</div>


<div id="ger_contact">
<b>Tug of War<br/></b>
Tug of war, also known as tug war, rope war, rope pulling, or tugging war, is a sport that directly pits two teams against each other in a test of strength. The event will be separate for both boys and girls. So both can register.<br/><br/>
<b>Rules:</b><br/>
<ol>
<li>There should be 6 players in a group. </li>
<li>The rope must go under the arms; actions such as pulling the rope over the shoulders may be considered a foul. </li>
<li>Team member sitting or falling down during pull will be considered as foul. </li>
<li>Lowering ones elbow below the knee during a 'pull' - known as 'Locking' - is a foul, as is touching the ground for extended periods of time. </li>
<li>In case of faul by a player that player shall be eleminated for the game,and the team will have to play without that player. </li>
<li>Rest of the information will be provided on the spot.</li>
</ol>

<br/>
Event Organisers:</br>
Rajat gupta :- 8273197826<br/>
Arpit Goel :- 7379953342<br/>
</div>



</div>


<div id="art" class="sub_events art">
<ul>

<li><a href="#art_event_format">Face Painting Competition </a></li>
<li><a href="#art_judge">Complete the Incomplete</a></li>
<li><a href="#art_graf">Grafitti</a></li>

</ul>



<div id="art_event_format">
<b>Face Painting Competition</b> <br/><br/>


Forget the paper and poster board - use your own face as the backdrop for colourful creations. You can make anything - be it a quaint flower or a butterfly on a shoulder or a venomous snake, a formidable dragon on a cheek. With the paint in the palette and your body as the canvas let the brush conjure up magnificent shapes and designs. Blend together various shades and tints to paint magic on yourself.

<br/><br/>

<b>Rules</b><br><br>

1.	In order to be eligible for Face painting competition, you must be a registered participant of the event.<br>
2.	Participants have to show rough sketch of there ideas before the competition begins.<br>
3.	Use of mobile phone is highly prohibited.<br>
4.	Allotted Time limit is 1:30 hours for every participants.<br>
5.	Participants are allowed to paint their own face or they can bring a companion along to paint their face in the competition.<br>
6.	Competitors will be supplied with all necessary utilities including paints, brushes, and Colour palette. No external articles will be entertained.


<br><br>
<b>Conducted By:-<br/></b>
Komal Sharma :- +91 9454262326<br>
Raavi Panwar :- +91 9997009196<br>
Satyaprakash Kumawat :- +91 8960276707<br>



</div>

<div id="art_judge">
<b>Complete the Incomplete</b> <br/><br/>


“Unfinished paintings are enticing cracks in the facade of art history, lures along the path to a deeper understanding of artistic processes and impulses. For all the paintings that artists complete, countless others are left incomplete for any number of reasons.” So here’s the platform to live this moment live.


<br/><br/>

<b>Rules</b><br><br>
1.	In order to be eligible for this competition, you must be a registered participant of the event.<br>
2.	An incomplete printed painting will be provided to the participant .<br>
3.	Graphic and charcoal pencils will be provided to complete the painting.<br>
4.	No Mobile Phones will be allowed in the room.<br>
5.	Allotted time limit is 2 hours for every participants.<br>


<b>Conducted By:-<br/></b>
            Komal Sharma :- +91 9454262326<br>
            Raavi Panwar :- +91 9997009196<br>
            Satyaprakash Kumawat :- +91 8960276707<br>


</div>

<div id="art_graf">
<b>Graffiti</b> <br/><br/>


“I spray the sky fast. Eyes ahead and behind. Looking for cops. Paint sails and the things that kick in my head scream from can to brick. See this, see this. See me emptied onto a wall.” So get ready with your spray cans and transform your imagination to a bigger platform which everyone can see.


<br/><br/>

<b>Rules</b><br><br>
1.	In order to be eligible for Graffiti painting competition, you must be a registered participant of the event.<br>
2.	Participants have to show rough sketch of there ideas before the competition begins.<br>
3.	Number of participants should not be more than three (3).<br>
4.	Allotted time limit is 3 hours for every group.<br>
5.	Competitors will be supplied with all necessary utilities including spray/wall paints.<br>
6.	Participants will be given  limited of space for painting.<br>

<b>Conducted By:-<br/></b>
            Komal Sharma :- +91 9454262326<br>
            Raavi Panwar :- +91 9997009196<br>
            Satyaprakash Kumawat :- +91 8960276707<br>


</div>



</div>


<div id="chinatown" class="sub_events ct">
<ul>
<li><a href="#ct_desc">Introduction</a></li>

<li><a href="#ct_rules">Rules and Regulations</a></li>
<li><a href="#ct_contact">Contact Details</a></li>
</ul>

<div id="ct_desc">
<h3>CHINATOWN</h3>
Raise the stakes, put on your pokerface and set the scene for an unforgettable casino experience.
So be ready and gamble to galore.
Everyone is invited. In case if you don't know how to play, we will be happy to make u learn that.<br/><br/>

Venue : SAC (Snooker Room & TT Room)<br/>
</div>



<div id="ct_rules">
1. Basic poker rules will be followed.<br/>
2. Participants are needed to register themselves at the registration desk, before playing. <br/>
3. All other details will be provided at the venue, during the event.
</div>

<div id="ct_contact">
Disha Srivastav :- 9795225079<br/> 
Vivek Agarwal :- 9936020253

</div>



</div>

<div id="date" class="sub_events bd">
<ul>
<li><a href="#bd_desc">Introduction</a></li>

<li><a href="#bd_rules">Rules</a></li>
<li><a href="#bd_contact">Contact Details</a></li>
</ul>

<div id="bd_desc">
<h3>BLIND DATE</h3>
Ever dared of thinking that you can challenge the much cliched love story of romeo n juliet,adam n eve,Heer n Ranjha and get your name registered in the lineage like beep n beep(no offence it just shows you and your lady love). Bring out the cupid inside and unveil your lurking romance to your date on a date with "Blind Date".
</div>



<div id="bd_rules">
Rules will be given on the spot
</div>

<div id="bd_contact">
Adrish Banerjee :- 9616946535<br/>
Sneha jha :- 8957917523<br/>

</div>



</div>

<div id="roadies" class="sub_events road">
<ul>
<li><a href="#road_desc">Introduction</a></li>

<li><a href="#road_rules">Rules and Regulations</a></li>
<li><a href="#road_contact">Contact Details</a></li>
</ul>

<div id="road_desc">
<h3>ROADIES</h3>
A remake of the popular T.V. show, Roadies is not where you'll score brownie points if you just sing or dance. It is not some talent hunt contest where a shimmy-shake or a dance move or two will help you win. We are not looking for some gifted idols here. This is a battle that will test your brawn and wits until there are none left. This is where you have to leave your 'I'm so cool' attitude at home. The journey is full of arduous and earlier unimaginable tasks and if you've already accepted defeat and thinking of calling it quits, why don't you send your enemies instead? We'll get the dirty job done for you!!! So if you think you've got the guts to survive in this game of naked ambition that requires courage and a never-say-die spirit then what are you waiting for??? Come and be a part of IIIT-A Roadies and experience the 'real' thing!!!
</div>



<div id="road_rules">
<ol>
<li>The registration forms will be available at the registration desk for a small restration fee, to be announced at the desk itself.</li>
<li>All participating candidates are required to fill the forms and proceed to the venue.</li>
<li>There will be judges and moderators, selecting the candidates on the basis of their performance in the following two rounds:<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;A. Group discussions
	&nbsp;&nbsp;&nbsp;&nbsp;B. Personal Interview</li>
<li>The selected candidates will proceed to the IIIT-A roadies journey.</li>
<li>The candidates will be required to perform certain tasks which will test them on their physical as well as their mental abilities.</li>
<li>The winner will be awarded with suitable prizes(which may include gift hampers or cash prizes) to be announced later.</li>
</ol>
</div>

<div id="road_contact">
Nipun Manocha :- 9999452588<br/>
Shreyas :- 9670769663<br/>

</div>


</div>




<div id="treasure" class="sub_events ros">
<ul>
<li><a href="#ros_desc">Introduction</a></li>
<li><a href="#ros_rules">Rules</a></li>

<li><a href="#ros_contact">Contact</a></li>
</ul>

<div id="ros_desc">
<h3>TREASURE HUNT</h3>
"You'll see some rhyme, And you will see some reason. Treasure Hunt is the game to play, As fun is the season. So join the search, there is nothing to lose. Hidden inside, you will find the clues." so BOOT UP for the hunt to treasure and win a grand prize at the end.
</div>



<div id="ros_rules">
<b>Rules: </b> <br/>
Rules will be provided on the spot.
</div>

<div id="ros_contact">
Yash Prakash :- 8174069407<br/>
Bharat Bhardwaj :- 9161572100<br/>
Agrim Khanna :- 7704914088<br/>
</div>

</div>

<div id="treasure" class="sub_events ros">
<ul>
<li><a href="#ros_desc">Introduction</a></li>
<li><a href="#ros_rules">Rules</a></li>

<li><a href="#ros_contact">Contact</a></li>
</ul>

<div id="ros_desc">
<h3>TREASURE HUNT</h3>
"You'll see some rhyme, And you will see some reason. Treasure Hunt is the game to play, As fun is the season. So join the search, there is nothing to lose. Hidden inside, you will find the clues." so BOOT UP for the hunt to treasure and win a grand prize at the end.
</div>



<div id="ros_rules">
<b>Rules: </b> <br/>
Rules will be provided on the spot.
<b>Registration: </b> <br/>
Registration will be on the spot.
</div>


<div id="ros_contact">
<b>Yash Prakash<br/></b>
Contact No. - 8174069407<br/><br/>
<b>Bharat Bhardwaj<br/></b>
Contact No. - 9161572100<br/><br/>
<b>Nidhi Misra<br/></b>
Contact No. - 8005331106<br/><br/>
<b>Avni Chouksey<br/></b>
Contact No. - <br/><br/>
<b>Agrim Khanna<br/></b>
Contact No. - 7704914088<br/><br/>

</div>



</div>

<div id="arm" class="sub_events plan">
<ul>
<li><a href="#plan_desc">Introduction</a></li>
<li><a href="#plan_prob">Rules And Regulations</a></li>
<li><a href="#plan_contact">Contact Details</a></li>
</ul>

<div id="plan_desc">
<h3>ARM WRESTLING</h3>
Arm Wrestling, also called "Indian Wrestling", can be traced all the way back to acient Egypt around 2,000 B.C. This event aims to find the best in this art.Where brute not just the only thing that matters.

</div>

<div id="plan_prob"><ol>
<li>A false start is a foul. </li>
<li>The competitors shoulder cannot go past the centre of the table. </li>
<li>You will forfeit the match with your third foul. </li>
<li>You may not, at any time, touch your body to your hand. </li>
<li>If a competitor touches his body to his hand there will be a restart and a foul given. </li>
<li>If a competitor touches his body to his hand and stops the momentum of his opponent there will be a restart and a foul given. </li>
<li>If a competitor intentionally opens his-her hand and a slip occurs the referee will restart the match and a foul will be given. </li>
<li>The referee has the option to give a disciplinary foul to the competitor for any un-sports person like conduct.</li>
<li>You must start with at least one foot on the ground. After the "go" you may have both feet off the ground.</li>
<li>Never stop competing until the referee grabs the hands in the center signifying the end of the match. </li>
<li>The equal pressure rule follows the line of least resistance, both competitors must agree on the pressure applied before the start. </li>
<li>The competitors will always conduct themselves in a sportsperson like manner while at the tournament.</li>
<li>To make a winning pin you must touch your opponent to the touch pad. </li>
<li>ALL REFEREE DECISIONS ARE FINAL.</li></ol>
</div>



<div id="plan_contact">
Yogesh Charak :- 8563900609<br/>
Shubham Nanda :- 8176026012<br/>
</div>

</div>





</div>

<!--ingenium ends-->




<!--yanthrix begins-->
<div id="yanthrix_events" class="subevents">


<div id="Lafrenze" class="sub_events kg">
<ul>
<li><a href="#kg_desc">Introduction</a></li>
<li><a href="#kg_event">Event Format</a></li>
<li><a href="#kg_contact">Contact Details</a></li>

</ul>

<div id="kg_desc">
<h3>LA FRENZE</h3>
It is one of the most electrifying, enthralling event of the Dance Club, the duet dance competition.
</div>

<div id="kg_event">
1. The entries in this contest will comprise of two partners: Either boy-boy, girl-girl or boy-girl. <br/>
2. Time limit is 2.5 - 4 minutes (strictly). <br/>
3. This will comprise of a single round so perform your best !! <br/>
<br/>
<b>Judging Criteria: </b>Choreography, Chemistry, Expressions, Stage Usage, Audience Response.
<br/><br/>
<b>Points to be noted:</b> 
1) Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.<br/>
2) Auditions will be taken before the actual event to shortlist the candidates. No space for practice will be provided. So candidates have to be prepared beforehand.
</div>

<div id="kg_contact">
Bhartendu Singh :- 7388524900

</div>



</div>

<div id="StreetDance" class="sub_events imp">
<ul>
<li><a href="#imp_desc">Introduction</a></li>
<li><a href="#imp_event">Event Format</a></li>
<li><a href="#imp_contact">Contact Details</a></li>

</ul>

<div id="imp_desc">
<h3>STREET DANCE</h3>
They are often improvisational, encouraging and social in nature and touch the audiences hearts.
</div>



<div id="imp_event">
To be updated soon..
</div>

<div id="imp_contact">
Bhartendu Singh :- 7388524900

</div>



</div>




<div id="CarpeDiem" class="sub_events ko">
<ul>
<li><a href="#ko_desc">Introduction</a></li>

<li><a href="#ko_rules">Rules</a></li>

<li><a href="#ko_contact">Contact Details</a></li>

</ul>

<div id="ko_desc">
<h3>CARPE DIEM</h3>
It is the solo dance competition where the participants set the stage on fire.
</div>



<div id="ko_contact">
Bhartendu Singh :- 7388524900
</div>

<div id="ko_rules">
1) <b>HEAT ROUND</b>: This is an elimination round in which each participant will be allowed to give a performance for 2-3.5 minutes (strictly).This performance would be the one prepared by the contestant. After this round, the selected participants will perform in the next round ( Impromptu Round ).<br/>
2) <b>IMPROMTU ROUND</b>: The qualifying participants will be judged on their performance on the song (and prop) allotted beforehand by us. This round is based totally on innovation. The participants will have to perform for 60 seconds. Judging Criteria - Choreography, Costumes, Expressions, Stage Usage, Audience Response. 
<br/></br>Points to be noted:
<br/> 1. Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.<br/>
2. Auditions will be taken before the actual event to shortlist the candidates. No space for practice will be provided. So candidates have to be prepared beforehand.
</div>



</div>

<div id="Footloose" class="sub_events rw">
<ul>
<li><a href="#rw_desc">Introduction</a></li>
<li><a href="#rw_event">Rules</a></li>

<li><a href="#rw_judge">Judging Criteria</a></li>
<li><a href="#rw_contact">Contact Details</a></li>

</ul>

<div id="rw_desc">
<h3>Footloose</h3>
The spectacular GROUP dance competition of the Dance Club to test your synchronization and dancing skills.
</div>


<div id="rw_event">
<ol>
<li>The time limit is 7-10 minutes. </li>
<li>The team shall consist of 8-20 members. </li>
</ol><br/>
<b>Points to be noted:</b>
Participants should report to the DANCE ROOM by 11 a.m on the day of the event. They should bring their edited music along with them in a pen drive.
</div>

<div id="rw_contact">
Bhartendu Singh :- 7388524900

</div>

<div id="rw_judge">
<b>Judgment Criteria:</b><br/>
Choreography, Props, Formations, Expressions, Synchronization, Stage Usage, and Audience Response. Any indecency in the steps or usage of harmful props will lead to disqualification of the group. 
</div>



</div>

</div>

<!--yanthrix ends-->

<!--ibox-->
<div id="Ibox_events" class="subevents">
<div id="ad" class="sub_events sh">
<ul>
<li><a href="#sh_desc">Introduction</a></li>

<li><a href="#sh_event">Rules</a></li>
<li><a href="#sh_contact">Contact Details</a></li>

</ul>

<div id="sh_desc">
<h3>AD MANIA</h3>
Nothing is more efficient than creative advertising. Creative advertising is more memorable, longer lasting, works with less media spending, and builds a fan community...faster. 
"If people aren't going to talk about your product, then it's not good enough"
</div>



<div id="sh_event">
1.	Team must consist of 3 members.  <br/>
2.	Participants must have their college or university "i card". <br/>
3.	Any use of electronic gadgets is strictly prohibited.  <br/>

</div>

<div id="sh_contact">
Shweta Mishra :- 7668660145<br/>
Aishwarya Jalli :- 8181835858<br/>
</div>

</div>


<div id="Bquiz" class="sub_events pos">
<ul>
<li><a href="#pos_desc">Description</a></li>
<li><a href="#pos_event">Rules</a></li>
<li><a href="#pos_contact">Contact Details</a></li>
</ul>

<div id="pos_desc">
<h3>B Quiz</h3>
Business is a game, played for fantastic stakes, and you're in competition with experts. If you want to win, you have to learn to be a master of the game. 
"You are not entitled to your opinion. You are entitled to your informed opinion. No one is entitled to be ignorant." 
</div>

<div id="pos_event">
1.	Team must consist of 3 members.  <br/>
2.	Participants must have their college or university "i card". <br/>
3.	Any use of electronic gadgets is strictly prohibited.  <br/>

</div>

<div id="pos_contact">
Ashish Mishra :- 9935520697<br/>
Ravi Pandey :- 8932070150<br/>

</div>

</div>

<div id="intuizone" class="sub_events sp">
<ul>
<li><a href="#sp_desc">Description</a></li>
<li><a href="#sp_event">Rules</a></li>
<li><a href="#sp_contact">Contact Details</a></li>
</ul>

<div id="sp_desc">
<h3>Intuizone</h3>
When a management team with a reputation for brilliance tackles a business with a reputation for bad economics, it is the reputation of the business that remains intact. 
"One man can be a crucial ingredient on a team, but one man cannot make a team"
</div>

<div id="sp_event">
1.	Team must consist of 2 members.  <br/>
2.	Participants must have their college or university "i card". <br/>
3.	Any use of electronic gadgets is strictly prohibited.  <br/>
</div>

<div id="sp_contact">

Adrish :- 9616946535<br/>
Neha pandey :- 9721691813<br/>
Sarika Naidu :- 9198600532<br/>
Priyanaka Sahu :- 9794418995<br/>
</div>

</div>

<div id="ranneeti" class="sub_events lay">
<ul>
<li><a href="#lay_desc">Description</a></li>
<li><a href="#lay_event">Rules</a></li>
<li><a href="#lay_contact">Contact Details</a></li>
</ul>

<div id="lay_desc">
<h3>RANNEETI</h3>
Any human can make things bigger, more complex, and more violent. It takes a touch of genius-and a lot of courage-to move in the opposite direction. 
"Management is doing things right; leadership is doing the right things."
</div>

<div id="lay_event">
1.	Team must consist of 2-5 members.  <br/>
2.	Participants must have their college or university "i card". <br/>
3.	You can use the modern technology/gadgets in all possible ways to win the competition. There is no limits on anything. <br/>
</div>

<div id="lay_contact">

Akanksha :- 8957386304 <br/>
Sneha Pedakam :- 8953388692<br/>
Vishnu KS :- 9559386146<br/>

</div>
</div>
</div>
<!--ibox ends-->

<!--Quizzaire begins-->
<div id="Quizzaire_events" class="subevents">


<div id="PERPLEXUZ" class="sub_events bq">
<ul>
<li><a href="#bq_intro">Introduction</a></li>
<li><a href="#bq_event">Event Format</a></li>
<li><a href="#bq_contact">Contact Details</a></li>
</ul>

<div id="bq_intro">
<h3>PERPLEXUZ</h3>
Ever got inspired by Robert Langdon unlocking mysteries at each step to reach his ultimate goal of mankind discovery? Ever yearned to be Benjamin Franklin Gates and study the clues of national history leading to the hidden treasure of the ages? Ever thought you stand in the league of those extra-ordinary men who could change the world with their knowledge and wit? Ever thought Google is the most powerful tool and nothing can escape it's powerful expanse of solutions to every problem? If you nodded yes for the above questions, you have landed the perfect place. Here's your golden chance to prove your adroitness !!
</div>

<div id="bq_event">
<ul>
<li>The event starts on 17th Oct 2014 at 0000 hrs.</li>
<li>It is a 2 day event closing on 19 Oct 2014 at 0000hrs.</li>
<li>To participate in the event, you need to register first as an individual and join the event(https://www.facebook.com/events/1552082721670983/).</li>
<li>For each level, analyse the image and figure out the respective answer that will grant you the access to the next level.</li>
<li>The levels in the event will be cleared sequentially.</li>
<li>Clues for each level would be updated at regular intervals on the facebook page.(https://www.facebook.com/events/1552082721670983/)</li>
<li>The answers have to be in small case. Numerals and Special Characters would not be present eg- if the answer is "2" then you have to write "two" in the box.</li>
<li>The levels can be discussed at the facebook event page of perplexuz. Please do not put spoilers or answers in the page. Anybody found doing so will automatically be disqualified.</li>
<li>As the difficulty level increase, so does our reluctance to give out obvious clues. We also promise to make a conscious effort to mislead you.</li>
<li>Last but not the least, for any queries regarding the hunt or registration, feel free to contact The Team.</li>
<li> To participate click <a href="http://effervescence.iiita.ac.in/events/perplexuz/" alink="white">here.</a></li>
</ul>
</div>

<div id="bq_contact">
Nitin Verma :- 8604393804 <br/>
Devansh Sharma  :- 8601753262  <br/>
Agam Gupta  :- 8960388068
</div>

</div>


<div id="KONQUEROR" class="sub_events tq">
<ul>
<li><a href="#tq_intro">Introduction</a></li>
<li><a href="#tq_event">Event Format</a></li>
<li><a href="#tq_contact">Contact Details</a></li>
</ul>

<div id="tq_intro">
<h3>KONQUEROR</h3>
We present before you a mind boggling game of Online Treasure Hunt. Get aboard and join us in a thrilling and crazy trail through the interwoven world of internet to search for the hidden and yet-so-obvious clues across the world wide web that lead to the ultimate treasure.. So common all pirates, put on your thinking cap, get your brain in gear, and set your train of thought in motion down the tracks..!!
</div>

<div id="tq_event">
<ul>
<li>The duration is of 18 Hours. </li>
<li>Registration is mandatory. </li> 
<li>Each correct answer carries 5 marks. </li>
<li>There is no negative marking so "Keep Guessing". </li>
<li>Every clue will lead you to a website or some specific word on that website. </li>
<li>You will be taken to the next question only on correct answer for your present question. </li>
<li>The final discretion lies with the organisers. </li>
<li>The answers can be of more than one word (maximum four). If there are more than one words, write the answers without spaces between the words. </li>
<li>In case of a site having different forms as per nation, the Indian version would be considered. </li>
<li>Hints will be given time to time on our Facebook page.</li>
</ul>
</div>

<div id="tq_contact">
Saptak Sengupta :- 8953346034<br/>
Ankit Mund :- 8181918083<br/>
Aniket Mukherjee :- 9476224760 <br/>
Anurag Das :- 9807732664<br>

</div>

</div>

<div id="platzen" class="sub_events pl">
<ul>
<li><a href="#pl_intro">Introduction</a></li>
<li><a href="#pl_event">Event Format</a></li>
<li><a href="#pl_contact">Contact Details</a></li>
</ul>

<div id="pl_intro">
<h3>PLATZEN</h3>
This is an event of numbers and ciphers. You will be given an encrypted message and a key and a little bit of our support via hint of the problem. You have to figure out the original message.So get ready to enter into this cryptoworld soon.
</div>

<div id="pl_event">
1) All participants need to register prior to the event beginning <br/>
2) Any user found indulging in foul play will be disqualified immediately. <br/>
3) To be eligible for winning prizes the user must be currently registered in a university. Non students are welcome to participate. <br/>
4) Organizers decision shall be treated as final.
</div>

<div id="pl_contact">
Chaitanya Agarawal:- 8174070273<br/>
Vipul Jain :- 8303478458<br/>
Shubham Yadav :- 9454004981<br/>
</div>

</div>

<div id="stegolica" class="sub_events tqo">
<ul>
<li><a href="#tqo_intro">Introduction</a></li>
<li><a href="#tqo_event">Event Format</a></li>
<li><a href="#tqo_contact">Contact Details</a></li>
</ul>

<div id="tqo_intro">
<h3>STEGOLICA</h3>
Steganography is the art and science of writing hidden messages in such a way that no-one, apart from the sender and intended recipient, suspects the existence of the message, a form of security through obscurity. Its advantage over cryptography is that messages do not attract attention to themselves.In computer terms,steganography has evolved into the practice of hiding a message within a larger one in such a way that others cannot discern the presence or contents of the hidden message. It has evolved into a digital strategy of hiding a file in some form of multimedia, such as an image, an audio file or even a video. So enter this digital fortress and get ready to traverse the labyrinthine world of ciphers and codes.
</div>

<div id="tqo_event">
1) This is not a team event. Only individual participation is allowed. <br/>
2) Even will be of 6 hours duration. <br/>
3) There will be total of around 10-15 questions. <br/>
4) In case of any dispute decision of the organizers will be binding. <br/>

</div>

<div id="tqo_contact">
Chaitanya Agarawal:- 8174070273<br/>
Vipul Jain :- 8303478458<br/>
Shubham Yadav :- 9454004981<br/>
</div>

</div>

</div>
<!--quizzaire ends-->
<!--footer-->

<!--
<div id="bbar">
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
							<a class="bbar-item" href="../index.php">Home</a> <span class="bbar-dot">&sdot;</span> 
							
							<a class="bbar-item" href="../homepage.html">Archives</a> <span class="bbar-dot">&sdot;</span> 
							<a class="bbar-item" href="../contact.php">Contact Us</a>
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				<a class="bbar-item" href="#">CENTRAL REGISTRATION PORTAL</a>&nbsp; <span class="bbar-dot">&sdot;</span>&nbsp;&nbsp;<a class="bbar-item" href="#">ACCOMMODATION DETAILS</a> 






							
						</div> -->

<!--menu starts -->
<nav id="bt-menu" class="bt-menu">
				<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a href="../index.php">Home</a></li>
					
					
					<li><a href="../proshows/">Proshows</a></li>
					<li><a href="../sponsors/">Sponsors</a></li>
                    <li><a href="../gallery/">Gallery</a></li>
                    <li><a href="../contact.php">Contact</a></li>
					<li><a href="../register">Register</a></li>
				</ul>
				<ul style="z-index:20">
					<li><a target="_blank" href="https://www.facebook.com/effervescence.iiita"><img src="fb.png"/></a></li>
					<li><a href="https://twitter.com/effe_iiita" target="_blank"><img src="twi.png"/></a></li>
					<!--li><a href="https://plus.google.com/u/0/103130401832909822683/posts" target="_blank"><img src="gp.png"/></a></li-->
					<li><a href="https://www.youtube.com/user/effervescenceMM13" target="_blank"><img src="yt.png"/></a></li>
               </ul>
			</nav>	
			
	<div>
	
</div>
            <script src="classie.js"></script>
			<script src="borderMenu.js"></script>

			<script src="../js/snow.js"></script>
    
</body>

</html>
