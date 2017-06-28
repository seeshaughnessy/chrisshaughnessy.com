<?php
/**
 * The template part for the home page contact section
 *
 */
?>

<section class="contact row ">

	
	<h2 class="section-title"><i class="fa fa-address-card-o" aria-hidden="true"></i><?php the_field('contact_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('contact_title'); ?></span>

	<p class="section-description"><?php the_field('contact_description'); ?></p>

	<div class="row">

		<?php if( have_rows('contact_details') ): ?>
		
		<div class="contact-details small-12 medium-6 columns">

			<?php while( have_rows('contact_details') ): the_row(); 

				// vars
				$title = get_sub_field('title');
				$description = get_sub_field('description');
			?>


			<div class="contact-details-box">
				
				<h4><?php echo $title; ?></h4>
				<span class="detail"><?php echo $description; ?></span>
					
			</div>

			<?php endwhile; ?>

		</div><!-- .contact-details -->

		<?php endif; ?>

		<div class="contact-form small-12 medium-6 columns">

			<h3>Hire Me!</h3>

			<?php the_content(); ?>
			
		</div><!-- .contact-form -->

	</div><!-- .row -->


</section><!-- .about-me -->