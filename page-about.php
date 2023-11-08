<?php
/**
 * Template Name: About Us
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ONQHealth
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="about-hero">
			<?php get_template_part( 'template-parts/hero_about' ); ?>
		</div>
		<section class="bg_gradient round_top">
		<div class="">
			<div class="">
				<div>
					<h2><?php the_field('title'); ?></h2>
				</div>
				<div>
					<div>
					<img loading="lazy" src="<?php the_field('team_member_image_1');?>" alt="<?php the_field('team_member_title_1'); ?>"/>	
					<h4><?php the_field('team_member_title_1'); ?></h4>
					<p><?php the_field('team_member_text_1'); ?></p>
					</div>
				</div>
				<div>
					<div>
					<img loading="lazy" src="<?php the_field('team_member_image_2');?>" alt="<?php the_field('team_member_title_2'); ?>"/>	
					<h4><?php the_field('team_member_title_2'); ?></h4>
					<p><?php the_field('team_member_text_2'); ?></p>
					</div>
				</div>
				<div class="">
					<div>
					<img loading="lazy" src="<?php the_field('team_member_image_3');?>" alt="<?php the_field('team_member_title_3'); ?>"/>	
					<h4><?php the_field('team_member_title_3'); ?></h4>
					<p><?php the_field('team_member_text_3'); ?></p>
					</div>
				</div>

			</div>

		</div>
		</section>
		<?php
			get_template_part( 'template-parts/integrations' );
			get_template_part( 'template-parts/why_choose_carefeed' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
