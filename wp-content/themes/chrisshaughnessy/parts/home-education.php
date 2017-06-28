<?php
/**
 * The template part for the home page about-me section
 *
 */
?>

<section class="education row ">

	
	<h2 class="section-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i><?php the_field('education_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('education_title'); ?></span>

	<p class="section-description"><?php the_field('education_description'); ?></p>

	<?php 
		// Check to see if rows exist
		if( have_rows('education_accordion') ): 
		$count = 0;
		$active = '';
			
	?>

	<div class="row">
		
		<ul class="accordion" data-accordion>

		<?php
			// loop through the rows of data
		    while ( have_rows('education_accordion') ) : the_row();

		        // Vars
		        $heading = get_sub_field('heading');
		        $subheading = get_sub_field('subheading');
		        $color = get_sub_field('color');
		        $content = get_sub_field('content');

		        $count++;
		        $active = ( $count == 1 ) ? 'is-active' : '';
		?>
			
			<li class="accordion-item <?php echo $active; ?>" data-accordion-item>
				<a href="#" class="accordion-title" style="color: <?php echo $color; ?>"><i class="fa fa-pencil hide-for-small-only" aria-hidden="true"></i><h3><span class="bold-up"><?php echo $heading; ?></span> <?php echo $subheading; ?></h3></a>

				<div class="accordion-content" data-tab-content>
					<?php echo $content; ?>
				</div>

			</li>

		    <?php endwhile; ?>

		</ul>

	</div>

	<?php endif; ?>

</section><!-- .about-me -->