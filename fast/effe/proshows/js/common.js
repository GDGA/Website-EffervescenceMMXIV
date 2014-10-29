$(document).ready(function(e) {
    var i = false;
	TweenLite.to('.titleTxt',0.5, {alpha:"0", ease:Power4.easeOut});
	TweenLite.to('#a0',0.5, {alpha:"1", ease:Power4.easeOut});	
	
	$('.homeEvent li').mouseover(function(e) {
        var eventInd = $(this).index();
		
		switch(eventInd) {
		case 0:
			TweenLite.to('#01',0.7, {alpha:"1", ease:Power4.easeOut});
			TweenLite.to('#a0',0.5, {alpha:"0"});
			break;
		case 1:
			TweenLite.to('#02',0.7, {alpha:"1", ease:Power4.easeOut});
			TweenLite.to('#a0',0.5, {alpha:"0"});
			break;
		case 2:
			TweenLite.to('#03',0.7, {alpha:"1", ease:Power4.easeOut});
			TweenLite.to('#a0',0.5, {alpha:"0"});
			break;	
			
		case 3:
			TweenLite.to('#04',0.7, {alpha:"1", ease:Power4.easeOut});
			TweenLite.to('#a0',0.5, {alpha:"0"});
			break;	
			
		case 4:
			TweenLite.to('#05',0.7, {alpha:"1", ease:Power4.easeOut});
			TweenLite.to('#a0',0.5, {alpha:"0"});
			break;	
		}
		
    });
	
	
	$('.homeEvent li').mouseout(function(e) {
		TweenLite.to('.titleTxt',0.5, {alpha:"0", ease:Power4.easeOut});
		TweenLite.to('#a0',1, {alpha:"1"});
	});
	
	//TweenLite.to('#05',0.7, {bottom:"-6.5%",backgroundColor:"#e08f00", ease:Power4.easeOut});
	
	
	
	/* Scroll Down */
	$('#scrollDown').click(function(e) {
	    $('.slider-frame').removeAttr("style");

        /*if ($('#scrollDown').css('display') == "block") {
            $('#scrollDown').hide();
            i = true;
        }*/
	    
		
		$('.work-info-txt-unit p').hide();
		$('#lessMore').hide();
		$('#readMore').show();
		
		TweenLite.to('#holder',1, {height:0, ease:Power4.easeOut});
		//TweenLite.to('.work-info-txt',1, {height:35, ease:Power4.easeOut});
    });
	
	$('#closeBtn').click(function(e) {
        $('.slider-frame').css('top', '110%');
		//$('#scrollDown').show();
    });
	
	
	$('#txtCloseBtn').click(function(e) {
		TweenLite.to('.work-info-txt-unit',1, {alpha:0, ease:Power4.easeOut, onComplete:removeData});
    });
	
	function removeData()
	{
		$('.work-info-txt-unit').remove();
	}
	
	
	$('#readMore').click(function(e) {
		//TweenLite.to('.work-info-txt-unit p',1, {alpha:1, ease:Power4.easeOut, onComplete:removeData});
		
		$(this).hide();
		$('#lessMore').show();
		$('.work-info-txt-unit p').show();
		
		$('.slider-frame').css('top', '110%');

		/*if (i == true) {
		    $('#scrollDown').show();
		}
		else {
		    $('#scrollDown').hide();
		}*/
		
		 
		 TweenLite.to('#holder',1, {height:_pagi, ease:Power4.easeOut});
		 
 		 TweenLite.to('.work-info-txt',1, {height:'auto', ease:Power4.easeOut});
    });
	
	$('#lessMore').click(function(e) {
		//TweenLite.to('.work-info-txt-unit p',1, {alpha:1, ease:Power4.easeOut, onComplete:removeData});
		
		$('#readMore').show();
		$(this).hide();
		$('.work-info-txt-unit p').hide();

		TweenLite.to('#holder',1, {height:0, ease:Power4.easeOut});
    });

});



var _pagi = 0;



$(window).load(function(e) {
	TweenLite.to('.work-info-txt-unit', 2, {alpha:1, ease:Power4.easeOut});
    
});


function socialIcon()
{
    var $this = $(this);
    //alert(document.getElementsByClassName('text').innerHTML);
    alert($(this).next().innerHTML);
    var glLink = 'https://twitter.com/intent/tweet?url=' + document.getElementsByClassName('text').innerHTML;
    window.open(glLink, '_blank');
}




