<?php
/**
 * The template part for the home page skills section
 *
 */
?>

<section class="skills row">

	<h2 class="section-title"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>My Skills</h2>
	<span class="section-subtitle">My Skills</span>

	<p class="section-description">Proin gravida nibh vel velit quet. Aenean sollicivin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>

	<div class="row skills-graphs">
		<p class="skills-title">Software</p>
		<div class="small-12 medium-5 columns">
			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Photoshop</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="70%" class="graph-title" style="color: #2B98F0"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style=""></span>
				</div><!-- .graph -->
			</div><!-- .skill -->
			
			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Illustrator</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="50%" class="graph-title" style="color: #EC5454"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: #EC5454"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->

			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Final Cut Pro X</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="99%" class="graph-title" style="color: #2FA59A"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: #2FA59A"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->
			
		</div>

		<div class="small-12 medium-5 medium-pull-1 columns">

			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Motion</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="55%" class="graph-title" style="color: #F9BF40"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: #F9BF40"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->

			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Storyline</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="80%" class="graph-title" style="color: #AA4CBA"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: #AA4CBA"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->

			<div class="skill animate-in-view row">
				<div class="small-12 medium-4 columns">
					<span class="skill-title">Aperture</span>
				</div>
				<div class="graph small-12 medium-8 columns">
					<span data-graph-value="90%" class="graph-title" style="color: #4054B2"></span>
					<span class="graph-base"></span>
					<span class="graph-completion" style="background-color: #4054B2"></span>
				</div><!-- .graph -->
			</div><!-- .skill -->
			
		</div>
	</div><!-- .skills-graphs -->

	<div class="row donut-charts">

		<div class="donut-charts-content medium-8 columns">

			<div class="row">

				<ul class="donut-charts-nav medium-5 columns">
					<li class="chart-nav active">Apple</li>
					<li class="chart-nav">Microsoft Suite</li>
					<li class="chart-nav">Adobe</li>
				</ul>
			

				<div class="apple active donut-charts-legend medium-7 columns">
					<p class="skill-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quae, blanditiis. Iure velit ad libero necessitatibus commodi dolorum consectetur. </p>
					<ul>
						<li data-percent="30"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>iWork Suite</li>
						<li data-percent="35"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Final Cut Pro X</li>
						<li data-percent="10"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Motion</li>
						<li data-percent="25"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Aperture</li>
					</ul>
				</div>

				<div class="microsoft-suite donut-charts-legend medium-7 columns">
					<p class="skill-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quae, blanditiis. Iure velit ad libero necessitatibus commodi dolorum consectetur. </p>
					<ul>
						<li data-percent="40"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Word</li>
						<li data-percent="35"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Excel</li>
						<li data-percent="25"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Powerpoint</li>
					</ul>
				</div>

				<div class="adobe donut-charts-legend medium-7 columns">
					<p class="skill-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quae, blanditiis. Iure velit ad libero necessitatibus commodi dolorum consectetur. </p>
					<ul>
						<li data-percent="70"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Photoshop</li>
						<li data-percent="25"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Illustrator</li>
						<li data-percent="5"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>After Effects</li>
					</ul>
				</div>

			</div>

		</div>

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