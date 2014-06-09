$(document).ready(function(){

	$(document).mouseup(function (e)
	{
	    var container = $(".dropdown-fade");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut('fast');
	        $('.dropdown i').css('transform','rotate(270deg)');
	        $('div.flaticon-arrow208').css('transform','rotate(270deg)');
	    }
	});

	$('.dropdown').click(function(){

		if($(this).children('ul.list').is(':visible')) {
			$('.dropdown i').css('transform','rotate(270deg)');
			$(this).children('ul.list').slideUp('fast');
		} else {
			$('.dropdown i').css('transform','rotate(-270deg)');
			$(this).children('ul.list').slideDown('fast');
		}

	});

	$('.filter-option').click(function(){
		if(!$(this).children('.filter-option-drp').is(':visible')) {
			$(this).children('.filter-option-drp').fadeIn('fast');
			$(this).children('.flaticon-arrow208').css('transform','rotate(-270deg)');
		} else {
			$(this).children('.filter-option-drp').fadeOut('fast');
			$(this).children('.flaticon-arrow208').css('transform','rotate(270deg)');
		}
	});

	$('ul.list li').click(function(){
		var loc = $(this).html();
		$('.selected-dropdown').text(loc)
	});

	$('#ads-list').on('mouseover','.per-ads-list',function(){
		$(this).children('.per-ads-img').children('.ads-has-label').toggleClass('pulse');
	});

	$('#ads-list').on('mouseout','.per-ads-list',function(){
		$(this).children('.per-ads-img').children('.ads-has-label').toggleClass('pulse');
	});

	var sampleData = $('#ads-list').html();
	$(window).scroll(function() {
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
	   		$('#lazy-loader-container').fadeIn();
	   		
	   		setTimeout(
	   		  function() 
	   		  {
	   			$('#lazy-loader-container').hide();
	   		    $('#ads-list').append(sampleData);
	   		  }, 3000);
	   }
	});

});