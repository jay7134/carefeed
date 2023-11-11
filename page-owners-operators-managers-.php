<?php
/**
 * Template Name: Owners - Operators - Management
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
	
	<main id="primary" class="site-main">
		<div id="owners-operators-management">
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
	</section>
	<?php 
			get_template_part( 'template-parts/pxo_form' ); 
			get_template_part( 'template-parts/integrations' );
	?>
	<section>
		<div >
			<div>
				<div>
					
					<h2><?php the_field('section_title_2'); ?></h2>
					<div class="tab">
						<ul>
							<li><a href="#tab-1"><?php the_field('tab_text_1');?></a></li>	
							<li><a href="#tab-2"><?php the_field('tab_text_2');?></a></li>	
						</ul>
					</div>
					<div class="tab-content">
						<div id="tab-1">
							<h3><?php the_field('tab_title_1');?></h3>
							<div><?php the_field('tab_description_text_1');?></div>
							<img loading="lazy" src="<?php the_field('tab_image_1'); ?>" alt="<?php the_field('tab_title_1'); ?>" width="" height=""/>
							
						</div>
						<div id="tab-2">
							<h3><?php the_field('tab_title_2');?></h3>
							<div><?php the_field('tab_description_text_2');?></div>
							<img loading="lazy" src="<?php the_field('tab_image_2'); ?>" alt="<?php the_field('tab_title_2'); ?>" width="" height=""/>
						</div>
					</div>
					
				</div>

			</div>
		</div>

		</section>
		
		<section>
			<div>			
				
				<div>
					<img  loading="lazy" src="<?php the_field('section_image_4'); ?>" alt="<?php the_field('section_title_4'); ?>"/>
					
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