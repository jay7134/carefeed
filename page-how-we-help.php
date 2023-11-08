<?php
/**
 * Template Name: How We Help
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ONQHealth
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="how-we-help-hero">
			<?php get_template_part( 'template-parts/hero_subpages' ); ?>
		</div>
		<div class="section-bg round_top">
		<div class="container pt-50">
			<div class="row align-items-center">
				<div class="col-md-6 text-center pt-50">
					<img class="img-fluid pb-30" loading="lazy" src="<?php the_field('hiw_image'); ?>" alt="<?php the_field('heading_how_it_works'); ?>"/>
				</div>
				<div class="col-md-6">	
					<h3 class="darkblue"><?php the_field('heading_how_it_works'); ?></h3>
					
					<div class="hiw_content"><?php the_field('hiw_description'); ?></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row align-items-center pad_hwh">
				<div class="col-md-6 order-sm-first order-last">
					
					<h3 class="darkblue pt-50 pb-10"><?php the_field('hiw_heading2'); ?></h3>
					<div class="hiw_content"><?php the_field('hiw_description'); ?></div>
				</div>
				<div class="col-md-6 text-center">
					<img class="img-fluid pb-30" loading="lazy" src="<?php the_field('hiw_image2'); ?>" alt="<?php the_field('hiw_heading2'); ?>"/>
				</div>
			</div>
		</div>
		</div>
		
		<?php get_template_part( 'template-parts/pxo_form' ); ?>
		<section class="section-bg round_top bg-color-light">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<!-- <img class="img-fluid img_index-1 mtn-30" loading="lazy" src="<?php the_field('hiw_image3'); ?>" alt="<?php the_field('hiw_heading2'); ?>" width="131" height="171"/> -->

					<h2 class="darkblue pt-40 pb-10"><?php the_field('hiw_heading3'); ?></h2>
					<div class="hiw_content text-center pb-30"><?php the_field('hiw_description2'); ?></div>
				</div>
				<div class="col-12">
					<img class="bars_dsktp img-fluid" loading="lazy" src="<?php the_field('hiw_image4'); ?>" alt="<?php the_field('hiw_heading3'); ?>"/>
					<img class="bars_mob img-fluid" loading="lazy" src="<?php the_field('hiw_image4_mob'); ?>" alt="<?php the_field('hiw_heading3'); ?>"/>
					
				</div>
			</div>
		</div>
		</section>
		<?php
			
			get_template_part( 'template-parts/brochure' );
			get_template_part( 'template-parts/integrations' );
			get_template_part( 'template-parts/why_choose_onq' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
