<?php
/**
 * Template Name: Day-to-Day Operations
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="day-to-day-operations">
			<?php get_template_part( 'template-parts/hero_subpages' ); ?>
		</div>

		<section>	
		<div>
			<div>
				<div>	
					<h2><?php the_field('section_title_text_1'); ?></h2>
					
					<p><?php the_field('section_title_text_2'); ?></p>
				</div>
				<div>
					<div class="">
					<img loading="lazy" src="<?php the_field('dtd_image_1'); ?>" alt="<?php the_field('dtd_title_text_1'); ?>"/>
					<div>
						<h3><?php the_field('dtd_title_text_1'); ?></h3>
					
						<p><?php the_field('dtd_description_text_1'); ?></p>
					</div>
					</div>
					<div class="">
					<img loading="lazy" src="<?php the_field('dtd_image_2'); ?>" alt="<?php the_field('dtd_title_text_2'); ?>"/>
					<div>
						<h3><?php the_field('dtd_title_text_2'); ?></h3>
					
						<p><?php the_field('dtd_description_text_2'); ?></p>
					</div>
					</div>
					<div class="">
					<img loading="lazy" src="<?php the_field('dtd_image_3'); ?>" alt="<?php the_field('dtd_title_text_3'); ?>"/>
					<div>
						<h3><?php the_field('dtd_title_text_3'); ?></h3>
					
						<p><?php the_field('dtd_description_text_3'); ?></p>
					</div>
					</div>
				</div>
				
			</div>
		</div>

		<div >
			<div>
				<div>
					
					<h2><?php the_field('section_title_2'); ?></h2>
					<div><?php the_field('section_embed_code_2'); ?></div>
				</div>

			</div>
		</div>

		</section>


		<?php 
				get_template_part( 'template-parts/pxo_form' ); 
				get_template_part( 'template-parts/integrations' );
		?>

		<section>
			<div>

				<div>
					<h2><?php the_field('section_title_3'); ?></h2>
					<div><?php the_field('section_description_text_3'); ?></div>
				</div>
				<div>
						<img loading="lazy" src="<?php the_field('section_image_3'); ?>" alt="<?php the_field('section_title_3'); ?>" width="" height=""/>
				</div>
			</div>
		</section>
		
		<section>
			<div>			
				
				<div>
					<img  loading="lazy" src="<?php the_field('section_image_4'); ?>" alt="<?php the_field('section_title_4'); ?>"/>
					<img loading="lazy" src="<?php the_field('section_image_4_mob'); ?>" alt="<?php the_field('section_title_4'); ?>"/>
					
				</div>
				<div>
					<h2><?php the_field('section_title_4'); ?></h2>
					<div><?php the_field('section_description_text_4'); ?></div>
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
