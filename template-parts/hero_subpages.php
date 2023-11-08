<section class="media-hero">
<div class="media-cover pb-50">
	<div class="container pt-50">
		<div class="row pb-50 align-items-center">
			<div class="col-md-7">
				<h1 class="pb-20 heading_text text-start"><?php the_field('heading_text'); ?></h1>
				<div class="text_content font_catamaran pb-50">
					<?php the_field('description_text'); ?>
				</div>
			</div>
			<div class="col-md-5 pt-50">
				<div class="media-content"><?php the_field('hero_media_content'); ?></div>
			</div>
		</div>
	</div>
	<img class="media_bars bars_dsktp" src="<?php echo get_template_directory_uri().'/assets/img/b_bars.png'; ?>" alt="OnQ"/>
	<img class="media_bars bars_mob" src="<?php echo get_template_directory_uri().'/assets/img/hero_bars_mob.png'; ?>" alt="OnQ"/>
</div>
</section>