<?php
/*
Template Name: Home Page
*/

get_header(); ?>

	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 medium-12 large-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/home', 'hero' ); ?>

					<?php get_template_part( 'parts/home', 'about-me' ); ?>

					<?php get_template_part( 'parts/home', 'skills' ); ?>

					<?php get_template_part( 'parts/home', 'education' ); ?>

					<?php get_template_part( 'parts/home', 'work-experience' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
