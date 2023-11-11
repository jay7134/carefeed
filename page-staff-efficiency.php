<?php
/**
 * Template Name: Staff Efficiency
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="staff-efficiency-hero">
			<?php get_template_part( 'template-parts/hero_subpages' ); ?>
		</div>
		<section class="">
			<div class="">
				<div class="">
					<h2><?php the_field('heading_text'); ?></h2>
					<div>
						
						<p><?php the_field('quote_1'); ?></p>
						<p><?php the_field('author_quote_1'); ?></p>
					</div>
					<div>
						
						<p><?php the_field('quote_2'); ?></p>
						<p><?php the_field('author_quote_2'); ?></p>
					</div>
				</div>
				<div>
					<img loading="lazy" src="<?php the_field('g2img'); ?>" alt="" width="" height=""/>
					<a href="<?php the_field('review_text_link'); ?>" target="_blank">
						<?php the_field('g2_review_text'); ?>		
					</a>
				</div>

			</div>
		</section>
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

		<section>
			<div>
				
				<div>
					<h2><?php the_field('ec_title_text_1'); ?></h2>
					<div><?php the_field('ec_title_text_2'); ?></div>
				</div>		
				
			</div>
		</section>

		<?php  get_template_part( 'template-parts/brochure' ); ?>

		
		
		<section>
			<div>
					
				<h2><?php the_field('ec_step_7'); ?></h2>
				
				<div>
					<img loading="lazy" src="<?php the_field('ec_section_image_3'); ?>" alt="<?php the_field('ec_title'); ?>" width="" height=""/>
				</div>
				<div>
					<div><?php the_field('ec_text_description'); ?></div>
				</div>

			</div>
		</section>

		<section>

			<div>
				<div>
					<h2><?php the_field('ec_section_step_6'); ?></h2>
					<p><?php the_field('ec_section_step_7'); ?></p>

					
					<img loading="lazy" src="<?php the_field('ec_section_image_2_desk'); ?>" alt="<?php the_field('ec_section_step_6'); ?>" width="" height=""/>

					<img loading="lazy" src="<?php the_field('ec_section_image_3_mob'); ?>" alt="<?php the_field('ec_section_step_6'); ?>" width="" height=""/>
					
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
