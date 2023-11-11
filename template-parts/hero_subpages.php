<section class="media-hero">
<div class="media-cover">
	<div>
		<div>
			<div>
				<h1><?php the_field('hero_heading_text'); ?></h1>
				<div>
					<?php the_field('hero_description_text'); ?>
				</div>
			</div>
			<div>
				<div class="media-content"><?php the_field('hero_media_content'); ?></div>
			</div>
		</div>
	</div>
	<img class="media_bars bars_dsktp" src="<?php echo get_template_directory_uri().'/assets/img/b_bars.png'; ?>" alt="OnQ"/>
	<img class="media_bars bars_mob" src="<?php echo get_template_directory_uri().'/assets/img/hero_bars_mob.png'; ?>" alt="OnQ"/>
</div>
</section>