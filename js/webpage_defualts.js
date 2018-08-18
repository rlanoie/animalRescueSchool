$(document).ready(function(){
		//Toggle the Nav button
		$("#navButton").click(function(){
			var hasClass = $('#navList-content').hasClass("nav-hide");
			if(hasClass === true){
				$('#navList-content').removeClass("nav-hide");
			}else{
				$('#navList-content').addClass("nav-hide");
			}
    });
		
		//Set the footer position
		footerPosition();
});

	//Control the resize event to only execute after alloted time.
	var resizeEventId;
			
	$(window).resize(function() {
    clearTimeout(resizeEventId);
  	resizeEventId = setTimeout(endResizeEvent, 500);
	});
	//Functions to execute after resize event is finished
	function endResizeEvent(){
  	footerPosition();
	}

	function footerPosition(){
		var virtualHeight = jQuery(window).height()
	  var bodyHeight = $('body').height();
		var footerHeight = $('footer').outerHeight();
		var bodyFooter_Height = bodyHeight + footerHeight;
				
		var footerClasses = $('footer').attr('class');
		var hasClass = $('footer').hasClass("absolute");
		//console.log(hasClass);
		
		
		/*if the footer is within the body, compare the body-height to the virtual Height
		If the footer is at an absolute position and outside of the body height, 
		compare the body + footer height to the virtual height.*/
		//body & footer are combined into the body size
		if((hasClass === false) && (bodyHeight < virtualHeight)){
			$('footer').addClass('absolute');
			//console.log('(absolute === false) && (bodyFooter_Height < virtualHeight)');
					
		}else if((hasClass === false) && (bodyHeight > virtualHeight)){
			$('footer').removeClass('absolute');
			//console.log('(absolute === false) && (bodyFooter_Height > virtualHeight)');
					
		//body & footer are two separate units.	
		}else if((hasClass === true) && (bodyFooter_Height > virtualHeight)){
			$('footer').removeClass('absolute');	
			//console.log('(absolute === true) && (bodyFooter_Height > virtualHeight)');
		}
		/*console.log('bodyHeight ' + bodyHeight);
		console.log('footerHeight outer' + footerHeight);*/
	}	

						
	//Generic toggle for panel
	function panelToggle(panel_in){
		$(panel_in).slideToggle("slow");
	}
