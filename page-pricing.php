<?php
/**
 * Template Name: Pricing
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="pricing-hero">
			<?php get_template_part( 'template-parts/hero_pricing' ); ?>
		</div>
		<section class="bg_gradient round_top">
			<div class="">
				<?php
					get_template_part( 'template-parts/integrations' );
				?>

			</div>
		</section>
		<?php
			get_template_part( 'template-parts/why_choose_carefeed' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
