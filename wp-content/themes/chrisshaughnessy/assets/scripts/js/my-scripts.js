(function($) {

    /**
     * Animate skills graphs onto page
     * @type {[type]}
     */
	var $animation_elements = $('.skill');
	var $window = $(window);

	$window.on('scroll resize', check_if_in_view);

	function check_if_in_view() {
	  var window_height = $window.height();
	  var window_top_position = $window.scrollTop();
	  var window_bottom_position = (window_top_position + window_height);

	  $.each($animation_elements, function() {
	    var $element = $(this);
	    var $graph_title = $element.find('.graph-title');
	    var $graph_completion = $element.find('.graph-completion');
	    var graph_percentage = $graph_title.text();
	    var title_offset = parseInt(graph_percentage) - 10 + "%";
	    var element_height = $element.outerHeight();
	    var element_top_position = $element.offset().top + 50;
	    var element_bottom_position = (element_top_position + element_height);

	    //check to see if this current container is within viewport
	    if ((element_bottom_position >= window_top_position) &&
	        (element_top_position <= window_bottom_position)) {

	    	// Set title and graph percentage
	    	$graph_title.css({ left: title_offset });
	    	$graph_completion.css({width: graph_percentage});

	    } else {

	    	// Reset title and graph percentage back to 0
	    	$graph_title.css({left: 0});
	    	$graph_completion.css({width: 0});
	    }
	  });
	}
	
})(jQuery);

