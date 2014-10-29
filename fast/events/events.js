$(window).load(function(){
	var load=$("#loader");
	percent1 = 0.28;
	add_width1 = (percent1*$('body').width())+'px';
	percent2 = 0.49;
	add_width2 = (percent2*$('body').width())+'px';
	/*percent3 = 0.73;
	add_width3 = (percent3*$('body').width())+'px';
	percent4 = 0.93;
	add_width4 = (percent4*$('body').width())+'px';*/
	//	alert (add_width1 + "\n" + add_width2);
	//alert ($('body').width())
	load.fadeOut("fast",function() {
	//animating the tiles when the page opens for the first time
	//this code uptill the next prime comment sets up all the animations regarding the home page
	$("#colloquia").animate({'left': '+='+add_width2},250,"easeOutQuint");
	$("#yanthrix").animate({'left': '-='+add_width2},250,"easeOutQuint",function(){
		$("#ingenium").animate({'left': '+='+add_width2},250,"easeOutQuint");
		$("#Ibox").animate({'left': '-='+add_width2},250,"easeOutQuint",function(){
		$("#Matricks").animate({'left': '+='+add_width1},250,"easeOutQuint");
			$("#Magna").animate({'left': '-='+add_width1},250,"easeOutQuint", function(){
				$("#Quizzaire").animate({'left': '-='+add_width1},250,"easeOutQuint");
				$("#Arcanum").animate({'left': '+='+add_width1},250,"easeOutQuint");
			});
		});
	});});
	var tiles=$(".tile");
	var firstRow=$(".first");
	var secondRow=$(".second");
	var clicked, page;
	//setting the behaviour of the tiles when any of them is clicked
	tiles.on("click",tileClick);
	function tileClick(){
		
		$("#mask").css("display","block");
		clicked = $(this);
		page="#"+clicked.attr("id")+"_p";
		$(".tile").removeClass("backFx");
		//if the clicked tile is in the first row
		if($(this).hasClass("first")){
			for(var i=0;i<4;i++)
			{
				firstRow.eq(i).css("z-index",2);
				secondRow.eq(i).css("z-index",1);
			}
			clicked.css("z-index",8);
			//animating the second Row under the first row
			for(var i=0;i<=2;i++)
			secondRow.eq(i).stop(true,true).animate({top:95},200);
			secondRow.eq(3).stop(true,true).animate({top:95},200,function(){
				//animating the two row elements together
				for(var i=0;i<4;i++)
					secondRow.eq(i).css("display","none");
				for(var i=0;i<=2;i++)
				firstRow.eq(i).stop(true,true).animate({left:550},400);
				firstRow.eq(3).stop(true,true).animate({left:550},400,function(){
					clicked.addClass("screen");
					clicked.children().stop(true,true).animate({opacity:0},500,"easeOutQuart",function()	{
						homeToPage();
					});
				});
			});
			
		}
		else{
			//if the clicked tile is in the second Row
			for(var i=0;i<4;i++)
			{
				firstRow.eq(i).css("z-index",1);
				secondRow.eq(i).css("z-index",2);
			}
			clicked.css("z-index",8);
			//animating the first Row under the second Row
			for(var i=0;i<=2;i++)
				firstRow.eq(i).stop(true,true).animate({top:320},200);
			firstRow.eq(3).stop(true,true).animate({top:320},200,function(){
				//animating the two row elements together
				for(var i=0;i<4;i++)
					firstRow.css("display","none");
				for(var i=0;i<=2;i++)
					secondRow.eq(i).stop(true,true).animate({left:550},400);
				secondRow.eq(3).stop(true,true).animate({left:550},400,function(){
					clicked.addClass("screen");
					clicked.children().stop(true,true).animate({opacity:0},500,"easeOutQuart",function(){
						homeToPage();
					});
				});
			});
		}
		$("#mask").css("display","none");
	}
	
	
	//code for going back to home screen
	var gohome=$(".gohome");
	gohome.on("click",function(){
			$("#mask").css("display","block");
			//opening the curtain
				$("#curtain_left").stop(true,true).animate({left:0},2000, "easeOutQuint");
				$("#curtain_right").stop(true,true).animate({right:0},2000, "easeOutQuint", function(){				
					$(".bt-menu").css("display","block");
					$(".page").css("display","none");
					$(".submenu").css("display","none");
					$("#bar").css("display","none");
					clicked.css("display","block");
					$(".common").fadeOut(300, function(){
						clicked.addClass("unscreen");
						clicked.removeClass("screen");
						clicked.children().animate({opacity:1},1000,"easeInQuart",function()	{
								tiles.css("display","block");
									$("#colloquia").animate({left:425, top:95},400);
									$("#yanthrix").animate({left:700, top:95},400);
									$("#Ibox").animate({left:700, top:320},400);
									$("#Arcanum").animate({left:150, top:95},400);
									$("#Quizzaire").animate({left:975, top:95},400);
									$("#Magna").animate({left:975, top:320},400);
									$("#ingenium").animate({left:425, top:320},400);
									$("#Matricks").animate({left:150, top:320},400);
									clicked.removeClass("unscreen");
									$(".tile").addClass("backFx");
									setTimeout(function() {
										$("#mask").css("display","none");
									}, 1000);
								});
							});
					});
	});
	
	function caller() {
		tiles.css("z-index", 1);
		$(".tile").addClass("backFx");
	}
	
	$(".submenu_itm").on("click", function() {
		var newpage="#"+$(this).attr('id').substr(4)+"_p";
		if(newpage===page && tabopen===false)
		return;
		$("#curtain_left").stop(true,true).animate({left:0},2000, "easeOutQuart");
		$("#curtain_right").stop(true,true).animate({right:0},2000, "easeOutQuart", function(){
			if(tabopen)	{
				var num=events_div.find("tr").eq(0).children("td").length;
				var leftDistance=0;
				switch(num){
					case 1:leftDistance=570;break;
					case 2:leftDistance=430;break;
					case 3:leftDistance=310;break;
					case 4:leftDistance=190;break;
				}
				$(".back_events").css("display","none");
				tabbedDiv.eq(1).stop(true,true).animate({left:-1300}, 5, "easeOutCubic", function() {
						$("#bar").css("display","block");
						events_div.stop(true,true).animate({left:leftDistance}, 5,"easeOutCubic");
						tabbedDiv.eq(1).css("display","none");
						tabopen=false;
					});	
			}
			$(page).css("display","none");
			$(newpage).fadeIn(100,function(){
					$("#curtain_left").stop(true,true).animate({left:-797},2000, "easeOutQuart");
					$("#curtain_right").stop(true,true).animate({right:-797},2000, "easeOutQuart");
					page=newpage;
			});
		});
	});
	
	var tabbedDiv=0;
	var events_div;
	var tabopen=false;
	//animating the events description page
	$(".events_b").on("click", function() {
			//generating the tabs when the event is clicked
			tabopen=true;
			var classes=$(this).attr('class').split(/\s+/);
			tabbedDiv=$("."+classes[1]);
			genTabs(tabbedDiv.eq(1).attr('id'));
			tabbedDiv.eq(1).siblings("div").css("display","none");
			tabbedDiv.eq(1).css("display","block");
			events_div=$(this).parents(".events");
			$("#bar").css("display","none");
			events_div.stop(true,true).animate({left:1800}, 500, "easeOutCubic", function() {
					$(".back_events").css("display","block");
					$("#"+tabbedDiv.eq(1).attr('id')).stop(true,true).animate({left:100}, 500, "easeOutCubic");
				});
		});
		
	$(".back_events").on("click", function() {
			var num=events_div.find("tr").eq(0).children("td").length;
			var leftDistance=0;
			switch(num){
				case 1:leftDistance=570;break;
				case 2:leftDistance=430;break;
				case 3:leftDistance=310;break;
				case 4:leftDistance=190;break;
			}
			$(this).css("display","none");
			tabbedDiv.eq(1).stop(true,true).animate({left:-1300}, 500, "easeOutCubic", function() {
					$("#bar").css("display","block");
					events_div.stop(true,true).animate({left:leftDistance}, 500,"easeOutCubic");
					tabbedDiv.eq(1).css("display","none");
					tabopen=false;
				});
	});
	//shifting the tiles when the side menu is opened
	var isclicked=false;
	var sideMenu=$(".bt-menu-trigger");
	sideMenu.on("click",function(){
		var menu=$(".bt-menu");
		if(menu.hasClass("bt-menu-open"))
			tiles.animate({left:"-=40px"},100,function(){isclicked=true;});
		//if(menu.hasClass("bt-menu-close"))
			//tiles.animate({left:"-=40px"},100);
	});
	$("body,.bt-menu-trigger").on("click",function(){
		if(isclicked)
			tiles.animate({left:"+=40px"},100,function(){isclicked=false;});
	});
	
	//creating tabs generating function for the subevents
	function genTabs(id){
		var element=$("#"+id);
		var panel = $(".ui-tabs-panel");
		element.tabs();
		element.tabs({hide:{effect:"slideUp",duration:300}});
		element.tabs({show:{effect:"fadeIn",duration:300}});
	}
	//creating the function that will set the behaviour of the page when the tiles is clicked and the curtains come up
	function homeToPage()	{
		var curtain=$(".common");
						curtain.fadeIn(1000, "easeInQuart", function() {
							clicked.css("display","none");
							$(page).css("display","block");
							$("#bar").css("display","block");
							//$(".bt-menu").css("display","none");
							$(".submenu").css("display","block");
							$("#curtain_left").animate({left:-797},2000,"easeOutQuart");
							$("#curtain_right").animate({right:-797},2000,"easeOutQuart");
						});
		}
	
});