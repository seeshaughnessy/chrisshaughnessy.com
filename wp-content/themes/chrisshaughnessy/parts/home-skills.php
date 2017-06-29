<?php
/**
 * The template part for the home page skills section
 *
 */
?>

<section id="my-skills" data-magellan-target="my-skills" class="skills row">

	<h2 class="section-title"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><?php the_field('skills_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('skills_title'); ?></span>

	<p class="section-description"><?php the_field('skills_description'); ?></p>

	<div class="row skills-graphs">
		<p class="skills-title">Developer Skills</p>

		<?php

		// check if the repeater field has rows of data
		if( have_rows('bar_charts') ):
			$count = 0;

		 	// loop through the rows of data
		    while ( have_rows('bar_charts') ) : the_row();

		        // vars
				$title = get_sub_field('chart_title');
				$percent = get_sub_field('chart_percent');
				$color = get_sub_field('chart_color');

				$push = ( $count % 2 ) ? 'medium-push-1' : ''; 
				
				$count += 1;

		?>

		<div class="small-12 medium-5 <?php echo $push; ?> end columns">

			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title"><?php echo $title; ?></span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="<?php echo $percent; ?>" class="graph-title" style="color: <?php echo $color; ?>"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: <?php echo $color; ?>"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->
		</div>

		<?php endwhile; endif; ?>

		
	</div><!-- .skills-graphs -->

	<div class="row donut-charts">

		<div class="donut-charts-content medium-8 columns">
		
			<?php if( have_rows('donut_charts') ): $i = 0; $j = 0; $active = ''; ?>

			<div class="row">

				<ul class="donut-charts-nav medium-5 columns">

					<?php while ( have_rows('donut_charts') ) : the_row(); $i++; $active = ( $i == 1 ) ? 'active' : '';	?>

					<li class="chart-nav <?php echo $active; ?>"><?php the_sub_field('chart_title'); ?></li>

					<?php endwhile; ?>

				</ul>
			
				<?php while ( have_rows('donut_charts') ) : the_row(); 
					$j++;
					$active = ( $j == 1 ) ? 'active' : '';
					// Vars
					$title = get_sub_field('chart_title');
					$title = strtolower($title); //make lowercase for classes
					$description = get_sub_field('chart_description');
				?>

				<div class="<?php echo $title . ' ' . $active; ?> donut-charts-legend medium-7 columns">

					<p class="skill-description"><?php echo $description; ?></p>

					<?php if( have_rows('chart_legend') ): ?>

					<ul>

						<?php while ( have_rows('chart_legend') ) : the_row(); 
							// Vars
							$title = get_sub_field('legend_title');
							$percent = get_sub_field('legend_percent');
						?>

						<li data-percent="<?php echo $percent; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php echo $title; ?></li>
						
						<?php endwhile; ?>

					</ul>
				
					<?php endif; ?>

				</div><!-- .donut-charts-legend -->

				<?php endwhile; ?>

			</div><!-- .row -->

			<?php endif; ?>

		</div><!-- .donut-charts-content -->

		<div class="donut-charts-graph animate-in-view medium-4 columns">
			
			<svg viewbox="0 0 40 40" class="skills-chart">
				<circle cx="20" cy="20" r="15.9" style="stroke-dashoffset: -0"></circle> 
				<circle cx="20" cy="20" r="15.9" style="stroke-dashoffset: -100"></circle> 
				<circle cx="20" cy="20" r="15.9" style="stroke-dashoffset: -100"></circle> 
				<circle cx="20" cy="20" r="15.9" style="stroke-dashoffset: -100""></circle> 
				<circle cx="20" cy="20" r="15.9" style="stroke-dashoffset: -100"></circle> 
			</svg>

		</div><!-- .donut-charts-graph -->

	</div><!-- .donut-charts -->



</section><!-- .skills -->