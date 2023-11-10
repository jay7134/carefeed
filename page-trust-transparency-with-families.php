<?php
/**
 * Template Name: Trust & Transparency with Families
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="Payment-Billing-Efficiency-hero">
			<?php get_template_part( 'template-parts/hero_subpages' ); ?>
		</div>
		<section class="">
			<div class="">
				<div class="">
					<div>
						<h2><?php the_field('ec_title'); ?></h2>
						<p><?php the_field('ec_description_2'); ?></p>
					
						<img loading="lazy" src="<?php the_field('ec_image_1'); ?>" alt="<?php the_field('ec_title'); ?>" width="" height=""/>

						<img loading="lazy" src="<?php the_field('ec_image_2'); ?>" alt="<?php the_field('ec_title'); ?>" width="" height=""/>
					</div>
					
				</div>
			</div>
		</section>

		<?php  get_template_part( 'template-parts/pxo_form' ); ?>

		<section>
			<div>
				
				<div>
					<img loading="lazy" src="<?php the_field('ec_section_image_2'); ?>" alt="<?php the_field('ec_title_text_1'); ?>" width="" height=""/>
				</div>

				<div>
					<h2><?php the_field('ec_title_text_1'); ?></h2>
					<p><?php the_field('ec_title_text_2'); ?></p>
				</div>
				
			</div>
		</section>
		
		<section>
			<div>
				<div>
				
					<h2><?php the_field('ec_step_2'); ?></h2>
					<p><?php the_field('ec_step_3'); ?></p>
					<p><?php the_field('ec_step_4'); ?></p>
				</div>

			</div>
		</section>

		<section>

			<div>
				<div>
					<h2><?php the_field('ec_step_5'); ?></h2>
					<p><?php the_field('ec_step_6'); ?></p>

					
					<img loading="lazy" src="<?php the_field('ec_section_image'); ?>" alt="<?php the_field('ec_step_5'); ?>" width="" height=""/>

					<img loading="lazy" src="<?php the_field('ec_section_image_mob'); ?>" alt="<?php the_field('ec_step_5'); ?>" width="" height=""/>
					
				</div>
				
			</div>
		</section>
		<?php
			
			get_template_part( 'template-parts/why_choose_carefeed' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
