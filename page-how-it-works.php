<?php
/**
 * Template Name: How it works
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="how-it-works-hero">
			<?php get_template_part( 'template-parts/hero_subpages' ); ?>
		</div>
		<div class="section-bg round_top">
		<div id="how-it-works" class="">
			<div class="">
				<div class="">
					<h2><?php the_field('heading_how_it_works'); ?></h2>
					<?php the_field('video_embed_code');?>
					<h3><?php the_field('hiw_heading2'); ?></h2>
					<div class="hiw_content"><?php the_field('hiw_description'); ?></div>
					<div class="">
					<img loading="lazy" class="bars_dsktp" src="<?php the_field('hiw_image3'); ?>" alt="<?php the_field('hiw_heading2'); ?>"/>
					<img loading="lazy" class="bars_mob" src="<?php the_field('hiw_image3_mobile'); ?>" alt="<?php the_field('hiw_heading2'); ?>"/>
				</div>
				</div>
			</div>
		</div>

		</div>
		<div class="">
			<div class="">
				<div class="">
					<h2><?php the_field('hiw_heading3'); ?></h2>
					<div><?php the_field('hiw_description2'); ?></div>
					<img loading="lazy" class="bars_dsktp" src="<?php the_field('hiw_image5'); ?>" alt="<?php the_field('hiw_heading3'); ?>"/>
					<img loading="lazy" class="bars_mob" src="<?php the_field('hiw_image5_mobile'); ?>" alt="<?php the_field('hiw_heading3'); ?>"/>
				</div>
			</div>
		</div>
		<div class="">
			<div class="">
				<div class="">
					<h2><?php the_field('hiw_heading_4'); ?></h2>
					
					<div><?php the_field('hiw_description_4'); ?></div>
					<img loading="lazy" class="bars_dsktp" src="<?php the_field('hiw_image_4'); ?>" alt="<?php the_field('hiw_heading_4'); ?>"/>
					<img loading="lazy" class="bars_mob" src="<?php the_field('hiw_image_mobile_4'); ?>" alt="<?php the_field('hiw_heading_4'); ?>"/>
				</div>
			</div>
		</div>
		<?php
			get_template_part( 'template-parts/brochure' );
			get_template_part( 'template-parts/integrations' );
			get_template_part( 'template-parts/why_choose_carefeed' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
