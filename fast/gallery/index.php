<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	

<head>
		<title>Gallery</title>
		
		<meta name = "keywords" content = "Effervescence, IIIT Allahabad, IIITA, MM14, Effe, Annual Fest, College Fest, Best College Fest"/>
		<meta name = "description" content = "Official Website of Effervescence-Annual Fest of IIIT Allahabad"/>
		<link rel="shortcut icon" href="../img/effe-logo.png">
		<!-- Imports required css and js files -->
		<link rel="stylesheet" type="text/css" href="load/skin_classic_black.css"/>
		<link rel="stylesheet" type="text/css" href="skin_infinite_loop/page.css"/>
		<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="../css/default.css" type="text/css">
		<script type="text/javascript" src="skin_infinite_loop/FWDPage.js"></script>
		<script type="text/javascript" src="java/FWDSimple3DCoverflow.js"></script>
		
		<!-- Setup the coverflow (all settings are explained in detail in the documentation files) -->
		<script type="text/javascript">
			var coverflow;

			FWDS3DCovUtils.onReady(function(){
				if(window.top != window){
					top.location.href = 'index.html';
				}else{
					init();
				}
			});
			
			function setupCoverflow(){

				var xxx = window.innerHeight;
				coverflow = new FWDSimple3DCoverflow(
				{
					//required settings
					coverflowHolderDivId:"myDiv",
					coverflowDataListDivId:"playList1",
					displayType:"fluidwidth",
					autoScale:"no",
					coverflowWidth:940,
					coverflowHeight:xxx,
					skinPath:"load/skin_black",
												
					//main settings
					
					backgroundImagePath:"../events/bg.jpg",
					backgroundRepeat:"repeat-x",
					showDisplay2DAlways:"no",
					coverflowStartPosition:"center",
					coverflowTopology:"dualsided",
					coverflowXRotation:0,
					coverflowYRotation:0,
					numberOfThumbnailsToDisplayLeftAndRight:3,
					infiniteLoop:"yes",
					rightClickContextMenu:"default",
												
					//thumbnail settings
					thumbnailWidth:400,
					thumbnailHeight:266,
					thumbnailXOffset3D:86,
					thumbnailXSpace3D:78,
					thumbnailZOffset3D:200,
					thumbnailZSpace3D:93,
					thumbnailYAngle3D:70,
					thumbnailXOffset2D:20,
					thumbnailXSpace2D:30,
					thumbnailHoverOffset:100,
					thumbnailBorderSize:0,
					thumbnailBackgroundColor:"#FFFFFF",
					thumbnailBorderColor1:"#FFFFFF",
					thumbnailBorderColor2:"#FFFFFF",
					transparentImages:"no",
					thumbnailsAlignment:"center",
					maxNumberOfThumbnailsOnMobile:13,
					showThumbnailsGradient:"yes",
					thumbnailGradientColor1:"rgba(0, 0, 0, 0)",
					thumbnailGradientColor2:"rgba(0, 0, 0, 1)",
					showText:"yes",
					textOffset:10,
					showThumbnailBoxShadow:"yes",
					thumbnailBoxShadowCss:"0px 2px 2px #111111",
					showTooltip:"no",
					dynamicTooltip:"yes",
					showReflection:"yes",
					reflectionHeight:60,
					reflectionDistance:0,
					reflectionOpacity:.4,
												
					//controls settings
					slideshowDelay:5000,
					autoplay:"no",
					disableNextAndPrevButtonsOnMobile:"no",
					controlsMaxWidth:700,
					slideshowTimerColor:"#FFFFFF",
					controlsPosition:"bottom",
					controlsOffset:15,
					showPrevButton:"yes",
					showNextButton:"yes",
					showSlideshowButton:"yes",
					showScrollbar:"yes",
					disableScrollbarOnMobile:"yes",
					enableMouseWheelScroll:"yes",
					scrollbarHandlerWidth:200,
					scrollbarTextColorNormal:"#000000",
					scrollbarTextColorSelected:"#FFFFFF",
					addKeyboardSupport:"yes",
												
					//categories settings
					showCategoriesMenu:"yes",
					startAtCategory:1,
					categoriesMenuMaxWidth:700,
					categoriesMenuOffset:25,
					categoryColorNormal:"#999999",
					categoryColorSelected:"#FFFFFF",
												
					//lightbox settings
					addLightBoxKeyboardSupport:"yes",
					showLightBoxNextAndPrevButtons:"yes",
					showLightBoxZoomButton:"yes",
					showLightBoxInfoButton:"yes",
					showLightBoxSlideShowButton:"yes",
					showLightBoxInfoWindowByDefault:"no",
					slideShowAutoPlay:"no",
					lightBoxVideoAutoPlay:"no",
					lightBoxVideoWidth:640,
					lightBoxVideoHeight:480,
					lightBoxIframeWidth:800,
					lightBoxIframeHeight:600,
					lightBoxBackgroundColor:"#000000",
					lightBoxInfoWindowBackgroundColor:"#FFFFFF",
					lightBoxItemBorderColor1:"#fcfdfd",
					lightBoxItemBorderColor2:"#e4FFe4",
					lightBoxItemBackgroundColor:"#333333",
					lightBoxMainBackgroundOpacity:.8,
					lightBoxInfoWindowBackgroundOpacity:.9,
					lightBoxBorderSize:0,
					lightBoxBorderRadius:0,
					lightBoxSlideShowDelay:4000
				});
			}
		</script>
	</head>

	<body id="xxxbody" style="overflow:hidden; height:100%">
		<!-- header -->
		<div id="mainHeader">
							
							<section id="home" style="z-index:999;">
								<img src="../img/outer.png" style="position: absolute;left: 58%;top: 60%;width:180px">
								<!--img src="img/inner.png" style="position: absolute;top: 42px;left: 42px;width:43%"-->
							</section>
							<img src="../img/inner.png" style="position: absolute;top: 22%;left: 5.35%;z-index:999;">
							
			<div id="byFWD"></div>
		</div>
		
		<!-- menu holder -->
		<div id="menuHolder" >
				
		</div>
		
		<!-- div used as a holder for the coverflow -->
		
		<div id="myDiv" ></div>
		
		<!--remove after adding details-->
		<style>
		.largeLabel{
		display:block;
		visibility:hidden;}
		.smallLabel{
		display:block;
		visibility:hidden;}
		</style>
		<!-- / remove this-->
		
		
		
		<!-- coverflow data -->
		<ul id="playList1" style="display: none;">
			
			<!-- category 2013 -->
			<ul data-cat="2013" style="top:85px">
				<ul>
					<li data-type="media" data-url="load/images2/1.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/1.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
						<p class="smallLabel">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOM PRESS THUMBNAIL ACTION.</p>
						<p class="mediaDescriptionText">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
				</ul>
			
				<ul>
					<li data-type="media" data-url="load/images2/7.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/7.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/2.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/2.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/3.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/3.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/4.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/4.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/6.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/6.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/5.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/5.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/9.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/9.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images2/10.jpg"></li>
					<li data-thumbnail-path="load/thumbnails2/10.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				
				
			</ul>
			<!-- end  -->
			
			
			
			<!-- category  2011-->
			<ul data-cat="2012" style="top:95px">
			
				<ul>
					<li data-type="media" data-url="load/images/1.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/1.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
						<p class="smallLabel">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOM PRESS THUMBNAIL ACTION.</p>
						<p class="mediaDescriptionText">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
				</ul>
			
				<ul>
					<li data-type="media" data-url="load/images/7.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/7.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/2.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/2.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/3.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/3.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/4.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/4.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/5.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/5.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/8.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/8.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/9.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/9.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				<ul>
					<li data-type="media" data-url="load/images/10.jpg"></li>
					<li data-thumbnail-path="load/thumbnails/10.jpg"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOMIZABLE SKIN AND COLOR THEME</p>
						<p class="smallLabel">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOMIZABLE SKIN AND COLOR THEME.</p>
						<p class="mediaDescriptionText">The entire color theme can be modified, and also the skin can be replaced with your own.</p>
					</li>
				</ul>
				
			</ul>
			<!-- end  -->
			
			
			
			
			
			
			
		</ul>
		
		<!-- coverflow data -->
		
		<div id="bbar" style="top:0px;font-family:  Arial, sans-serif;z-index:1000;">
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
							<a class="bbar-item" href="../index.php">Home</a> <span class="bbar-dot">&sdot;</span> 
							
							<a class="bbar-item" href="../events/">Events</a> <span class="bbar-dot">&sdot;</span> 
							<a class="bbar-item" href="../proshows/">Proshows</a> <span class="bbar-dot">&sdot;</span>
							<a class="bbar-item" href="../sponsors/">Sponsors</a> <span class="bbar-dot">&sdot;</span> 							
							<a class="bbar-item" href="../contact.php">Contact Us</a>
			
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<!--	<a class="bbar-item" href="#">CENTRAL REGISTRATION PORTAL</a>&nbsp; <span class="bbar-dot">&sdot;</span>&nbsp;&nbsp;<a class="bbar-item" href="#">ACCOMMODATION DETAILS</a> -->
						

							 

							
							<!--<a class="bblogo" href="#"><img src="assets/img/social/twitter-mini.png"/></a> 
							<a class="bblogo" href="#"><img src="assets/img/social/google-mini.png"/></a> -->
							<a class="bblogo" target="_blank" href="https://twitter.com/effe_iiita"><img src="../img/blog-mini.png" style="height:24px;width:24px;"/></a> 
							<a class="bblogo" target="_blank" href="https://www.youtube.com/user/effervescenceMM13"><img src="../img/youtube-mini.png" style="height:24px;width:24px;"/></a> 
							<a class="bblogo" target="_blank" href="https://www.facebook.com/effervescence.iiita"><img src="../img/facebook-mini.png" style="height:24px;width:24px;"/></a>
			 
						</div>
		
		
	</body>
<script>
</script>
</html>