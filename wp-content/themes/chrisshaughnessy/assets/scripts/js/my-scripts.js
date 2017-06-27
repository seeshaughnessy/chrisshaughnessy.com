(function($) {

    /**
     * Animate skills graphs onto page
     * @type {[type]}
     */
	var $animation_elements = $('.animate-in-view');
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
		    var graph_percentage = $graph_title.data('graph-value');
		    var title_offset = parseInt(graph_percentage) - 10 + "%";
		    var element_height = $element.outerHeight();
		    var element_top_position = $element.offset().top + 50;
		    var element_bottom_position = (element_top_position + element_height);

		    //check to see if this current container is within viewport
		    if ((element_bottom_position >= window_top_position) &&
		        (element_top_position <= window_bottom_position)) {

		    	// Animate in donut chart when in view
		    	updateDonutChart();

		    	countUp(  );

		    	// Set title and graph percentage
		    	$graph_title.css( 'left', title_offset );
		    	$graph_completion.css( 'width', graph_percentage );

		    } else {

		    	// Reset title and graph percentage back to 0
		    	$graph_title.css( 'left', 0 ).stop(true);
		    	$graph_completion.css( 'width', 0 );
		    }

		    function countUp(  ) {

			  	$graph_title.prop( 'Counter', 0 ).animate({
			        Counter: graph_percentage
			    }, {
			        duration: 3000,
			        easing: 'swing',
			        step: function ( now ) {
			            $graph_title.text( Math.ceil( now ) + '%' );
			        }
			    });
			}

		});

	}
	// ***************************
	// Move label on contact form on :focus
	// ***************************
	var $contact_field = $('.gform_body li');
	
	// If there is an input error, keep active-input class
	if ( $contact_field.hasClass('gfield_error') ){

		$contact_field.find("label").addClass( 'active-input' );

	} else {

		// If in focus, add active-input, otherwise remove class
		$('.gform_body li').focusin( function(){
			$(this).find("label").addClass( 'active-input' );
		});

		$('.gform_body li').focusout( function(){
			var $this = $(this);
			if ( $this.find('input').val() == "" ) {
				$this.find("label").removeClass( 'active-input' );
			}
		});
	}
	
	$('#gform_submit_button_1').hover(
		function() {
			$(this).find('.fa').removeClass('fa-envelope-o').addClass('fa-envelope-open-o');
		}, function(){
			$(this).find('.fa').removeClass('fa-envelope-open-o').addClass('fa-envelope-o');
		}
	);

	// ***************************
	// Skills donut control
	// ***************************
	
	$('.chart-nav').on('click', function(){

		// Show active tag
		$('.chart-nav').removeClass('active');
		$(this).addClass('active');

		updateDonutChart();

	});

	function updateDonutChart(){

		// Find tag skill and set to class (.)
		var skill = $('.chart-nav.active').text();
		skill = '.' + skill.replace(/\s+/g, '-').toLowerCase();

		// Show active legend
		$('.donut-charts-legend').removeClass('active');
		$('.donut-charts-description').removeClass('active');
		var $activeChart = $('.donut-charts').find(skill)
		var countPercent = 0;
		var count = 0;
		
		// Update stroke-dashoffset
		$activeChart.addClass('active').find('li').each(function(index){
			var dataPercent = $(this).data('percent');

			$('.skills-chart').children().eq(index).addClass('drawn').css('stroke-dashoffset', countPercent);

			countPercent -= dataPercent;			

		});

		// Remove unused colors
		$('circle:not(.drawn)').css('stroke-dashoffset', -100);
		$('circle').removeClass('drawn');

	}

	
})(jQuery);

