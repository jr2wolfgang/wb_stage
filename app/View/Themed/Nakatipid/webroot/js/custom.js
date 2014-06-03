$(document).ready(function(){

	$(document).mouseup(function (e)
	{
	    var container = $("ul.list");

	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.slideUp('fast');
	        $('.dropdown i').css('transform','rotate(270deg)');
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

	$('ul.list li').click(function(){
		var loc = $(this).html();
		$('.selected-dropdown').text(loc)
	});

});