<?php
/**
 * The template part for the home page hero section
 *
 */
?>

<section class="hero row">

	<div class="small-12 medium-6 medium-push-6 columns">
		<div class="hero-image" data-magellan>
			
			<?php $image = get_field('hero_image');

			if( !empty($image) ): ?>
			
				<div class="img-wrap"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>

			<?php endif; ?>

			<a href="#contact-me" class="fa-stack fa-lg">
				<i class="fa circle fa-circle fa-stack-2x"></i>
				<i class="fa icon fa-flip-horizontal fa-commenting fa-stack-1x"></i>
			</a>

		</div>
	</div>

	<div class="small-12 medium-6 medium-pull-6 columns">
		<div class="hero-intro">
			<h1><?php the_field('hero_title'); ?></h1>
			<h2><?php the_field('hero_subtitle'); ?></h2>
			<a target="_blank" href="<?php the_field('hero_resume_link'); ?>" class="button"><?php the_field('hero_resume_button_text'); ?></a>
		</div>
	</div><!-- .hero-intro -->

</section><!-- .hero -->