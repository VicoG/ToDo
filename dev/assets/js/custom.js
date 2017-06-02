'use strict';

//  This file is reserved for changes made by the use. 

//  Always seperate your work from the theme. It makes

//  modifications, and future theme updates much easier 

// 
function loadPage(){
	$("#show").load("data.php?page=301");
	console.log('show');
}
	
	loadPage();
	
	$(document).ready(function(){
		
		$(document).on('submit','form' ,function(){
			alert( "Data Loaded: ");
			$.post("completed.php", $(this).serialize(), function(){
				loadPage();
						});
			return false;
		});
	
		$("#toggle").click(function(){
			$("#nav-spy").toggle(1000);
		});
		$("#toggleKey").click(function(){
			$("#key").toggle(1000);
		});
			
		// on page load...
    moveProgressBar();
    // on browser resize...
    $(window).resize(function() {
        moveProgressBar();
    });

    // SIGNATURE PROGRESS
    function moveProgressBar() {
      console.log("moveProgressBar");
        $('.progress-wrap').each(function(){
      console.log("moveProgressBar");
      console.log($(this).data('progress-percent'));
      var getPercent = ($(this).data('progress-percent') / 100);
      var getProgressWrapWidth = $(this).width();
      var progressTotal = getPercent * getProgressWrapWidth;
      var animationLength = 2500;

      // on page load, animate percentage bar to data percentage length
      // .stop() used to prevent animation queueing
      $(this).find('.progress-bar').stop().animate({
        left: progressTotal
      }, animationLength);
	  });
    }
});



