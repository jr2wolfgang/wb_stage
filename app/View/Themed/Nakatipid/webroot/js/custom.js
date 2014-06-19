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

	$('#ads-list').infinitescroll({
		 loading: {
	        finished: undefined,
	        img:"/wb_stage/theme/Nakatipid/img/big_blue.gif",
	        finishedMsg: "<em>There are no more ads to list.</em>",
	        msg: null,
	        msgText: "<em>Loading the next set of ads...</em>",
	        selector: null,
	        speed: 'fast',
	        start: undefined
	    },

	    navSelector  : "div.navigation",            
	                   // selector for the paged navigation (it will be hidden)
	    nextSelector : "div.navigation a:first",    
	                   // selector for the NEXT link (to page 2)
	    itemSelector : "#ads-list div.per-ads-list"          
	                   // selector for all items you'll retrieve
 	 });

	$('.thumb-holder').perfectScrollbar({
	  wheelSpeed: 10,
	  wheelPropagation: true
	});

	$('.ads-desc-box-inner').perfectScrollbar({
	  wheelSpeed: 10,
	  wheelPropagation: true
	});

	$('.seller-other-ads-inner').perfectScrollbar({
	  wheelSpeed: 10,
	  wheelPropagation: true
	});



	$('.img-wrap-main').hover(function(){
		$(this).css('overflow','visible');
		$(this).children('img').css('position','absolute');
	}, function(){
		$(this).css('overflow','hidden')
		$(this).children('img').css('position','relative');
	});

	$('.thumb-holder').on("click",".per-thumb ",function(){
		var $img = $(this).children('img').attr('Src');
		$('.img-wrap-main').children('img').attr('Src',$img);
	});

});