<?php
/**
 * The template part for the home page about-me section
 *
 */
?>

<section id="work-experience" data-magellan-target="work-experience" class="work-experience row ">

	
	<h2 class="section-title"><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('experience_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('experience_title'); ?></span>

	<p class="section-description"><?php the_field('experience_description'); ?></p>

	<div class="row">

		<?php if( have_rows('history_items') ): ?>
		
		<div class="small-12 medium-7 columns history">

			<div class="history-scroll">

				<div class="history-inner">

					<?php 
					// loop through the rows of data
				    while ( have_rows('history_items') ) : the_row();

				        // Vars
				        $title = get_sub_field('title');
				        $dates = get_sub_field('dates');
				        $color = get_sub_field('color');
				        $description = get_sub_field('description');
				    ?>
					
					<div class="row columns experience-item">

						<i class="fa fa-dot-circle-o" aria-hidden="true" style="color: <?php echo $color; ?>"></i>
						
						<h3 class="experience-item-title"><?php echo $title; ?></h3>
						<span class="experience-item-dates" style="color: <?php echo $color; ?>"><?php echo $dates; ?></span>
						<p class="experience-item-description"><?php echo $description; ?></p>

					</div>

					<?php endwhile; ?>

				</div><!-- .history-inner -->

			</div><!-- .history-scroll -->

		</div><!-- .history -->

		<?php endif; ?>

		<?php 
			// Check to see if row exists
			if( have_rows('award_items') ): 
				// Vars
				$count = 0; 
				$award_count; 
				$t_count = count( get_field('award_items') );
				$total_count = $t_count < 10 ? '0'.$t_count : $t_count;
		?>

		<div class="small-12 medium-5 columns awards">
			
			<div class="awards-inner">
				
				<div class="row columns heading">
					<h3 class="heading-title"><i class="fa fa-trophy" aria-hidden="true"></i><?php echo $total_count; ?> Awards</h3>
				</div>

				<?php 
				// loop through the rows of data
			    while ( have_rows('award_items') ) : the_row();
			        // Vars
			        $title = get_sub_field('title');
			        $description = get_sub_field('description');

			        $count++;
			        $award_count = $count < 10 ? '0'.$count : $count;
			    ?>

				<div class="row columns award">
					<h4 class="award-title"><span class="award-title-number"><?php echo $award_count; ?> </span><?php echo $title; ?></h4>
					<p class="award-description"><?php echo $description; ?></p>
				</div>

				<?php endwhile; ?>

			</div><!-- .awards-inner -->

		</div><!-- .awards -->

		<?php endif; ?>

	</div><!-- .row -->

</section><!-- .about-me -->