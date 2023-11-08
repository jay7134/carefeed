<section class="media-hero">
<div class="media-cover">
	<div class="">
		<div class="">
			<div>
				<h1><?php the_field('pricing_heading_'); ?></h1>
				<div>
					<?php the_field('pricing_text'); ?>
				</div>
			</div>
			<div>
				<div class="media-content contact-form"><?php the_field('pricing_form_shortcode'); ?></div>
			</div>
		</div>
	</div>
	<img class="media_bars bars_dsktp" src="<?php echo get_template_directory_uri().'/assets/img/b_bars.png'; ?>" alt="carefeed"/>
	<img class="media_bars bars_mob" src="<?php echo get_template_directory_uri().'/assets/img/hero_bars_mob.png'; ?>" alt="carefeed"/>
</div>
</section>