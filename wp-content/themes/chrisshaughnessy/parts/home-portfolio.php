<?php
/**
 * The template part for the home page about-me section
 *
 */
?>

<section id="portfolio" data-magellan-target="portfolio" class="portfolio row ">
	
	
	<h2 class="section-title"><i class="fa fa-paint-brush" aria-hidden="true"></i><?php the_field('portfolio_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('portfolio_title'); ?></span>

	<p class="section-description"><?php the_field('portfolio_description'); ?></p>
	
	<div class="row portfolio-items medium-collapse">

	<?php while ( have_rows('portfolio_items')) : the_row();
		$post_object = get_sub_field('portfolio_item');
		if( $post_object ): $post = $post_object; 
			setup_postdata($post); 
	?>

		<div class="medium-6 large-4 columns end">	
			<a href="<?php the_permalink(  ); ?>">
				<div class="img-wrap">
					<div class="img" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'large' ); ?>)"></div>
				</div>
			</a>
		</div><!-- .medium-6 -->

		<?php wp_reset_postdata(); endif; endwhile; ?>
		
	</div><!-- .portfolio-items -->
	

	


	

</section><!-- .about-me -->