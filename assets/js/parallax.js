(function() {

	function check() {
		var current_scroll = $(this).scrollTop();

	    oVal = ($(window).scrollTop() / 4);
	
		$(".parallax") .css({
        	'background-position': '50% calc(50% + ' +  oVal + 'px)'
	    });
	}

    $(window).on('scroll', check);

})();
     