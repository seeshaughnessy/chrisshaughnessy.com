<?php
/**
 * The template part for the home page hero section
 *
 */
?>

<section class="hero row">

	<div class="small-12 medium-6 medium-push-6 columns">
		<div class="hero-image">
			
			<?php $image = get_field('hero_image');

			if( !empty($image) ): ?>

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

		</div>
	</div>

	<div class="small-12 medium-6 medium-pull-6 columns">
		<div class="hero-intro">
			<h1><?php the_field('hero_title'); ?></h1>
			<h2><?php the_field('hero_subtitle'); ?></h2>
			<a href="<?php the_field('hero_resume_link'); ?>" class="button"><?php the_field('hero_resume_button_text'); ?></a>
		</div>
	</div><!-- .hero-intro -->

</section><!-- .hero -->