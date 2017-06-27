<?php
/**
 * The template part for the home page about-me section
 *
 */
?>

<section class="about-me row ">

	
	<h2 class="section-title"><i class="fa fa-user-o" aria-hidden="true"></i><?php the_field('about_me_title'); ?></h2>
	<span class="section-subtitle"><?php the_field('about_me_title'); ?></span>

	<p class="section-description"><?php the_field('about_me_description'); ?></p>

	<div class="row">
		
		<div class="about-boxes small-12 medium-5 columns">
			
			<div class="row about-boxes-inner">
				
				<?php

				// check if the repeater field has rows of data
				if( have_rows('social_media') ):

					// loop through the rows of data
					while ( have_rows('social_media') ) : the_row();

					// vars
					$name = get_sub_field('social_media_name');
					$link = get_sub_field('social_media_link');
					$icon = get_sub_field('social_media_icon');
					$color = get_sub_field('social_media_color');

				?>

				<a href="<?php echo $name; ?>" alt="<?php echo $link; ?>">
					<div class="small-6 columns">
						<div class="about-box">

							<div class="content about-box-inner">	
								<i class="fa <?php echo $icon; ?>" style="color: <?php echo $color; ?>" aria-hidden="true"></i>
								<span class="box-title"><?php echo $name; ?></span>
							</div>
							<div class="about-box-popup" style="background-color: <?php echo $color; ?>"></div>
							<div class="about-box-popup-plus" style="background-color: <?php echo $color; ?>"><i class="fa fa-plus" aria-hidden="true"></i></div>
						</div><!-- .about-box -->
					</div><!-- .small-6 -->
				</a>

				<?php endwhile; endif; ?>

			</div><!-- .bout-boxes-inner -->

		</div><!-- .bout-boxes -->

		<div class="personal-details small-12 medium-6 columns">
			
			<table class="hover unstriped">

				<thead>
					<tr>
						<th colspan="3">Personal Details</th>
					</tr>
				</thead>

				<tbody>

					<?php

					// check if the repeater field has rows of data
					if( have_rows('personal_details') ):

						// loop through the rows of data
						while ( have_rows('personal_details') ) : the_row();

						// vars
						$title = get_sub_field('detail_title');
						$description = get_sub_field('detail_description');

					?>

					<tr>
						<td><?php echo $title; ?></td>
						<td>:</td>
						<td><?php echo $description; ?></td>
					</tr>

					<?php endwhile; endif; ?>

				</tbody>

			</table>

		</div><!-- .personal-details -->

	</div><!-- .row -->


</section><!-- .about-me -->