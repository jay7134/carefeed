<?php
/**
 * Template Name: Home
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="home-hero">
			<div class="hero-bg">
				<div class="">
					<div class="">
					<img loading="lazy" src="<?php the_field('hero_image'); ?>" alt="" width="" height=""/>
					<h1><?php the_field('h1_heading'); ?></h1>
					<p></p>
					</div>
				</div>
			</div>
		</section>
		<section id="our-solutions">
			<div class="container">
				<div class="row onqh-mob-show">
					<div class="col-sm-12">
						<div class="">
							<p><?php the_field('mobile_sub_heading');?></p>
						</div>
					</div>
				</div>
				<div class="achievements-logos">
					<div class="">
						<img loading="lazy" src="<?php the_field('achievement_image_1'); ?>" alt=""/>
					</div>
					<div class="">
						<img loading="lazy" src="<?php the_field('achievement_image_2'); ?>" alt=""/>
					</div>
					<div class="">
						<img loading="lazy" src="<?php the_field('achievement_image_3'); ?>" alt=""/>
					</div>
					<div class="">
						<img loading="lazy" src="<?php the_field('achievement_image_4'); ?>" alt=""/>
					</div>
				</div>
				<div class="solutions-list">					
					<div class="">
						<h2><?php the_field('h2_heading'); ?></h2>
					</div>
					<div class="">
						<div class="box_bgcolor">
							<div class="solution-box">
								<p><?php the_field('solution_1');?></p>
								<img loading="lazy" src="<?php the_field('solution_1_image');?>" alt=""/>
							</div>
						</div>
					</div>
					<div class="">
						<div class="box_bgcolor">
							<div class="solution-box bg-solution">
								<p><?php the_field('solution_2');?></p>
								<img loading="lazy" src="<?php the_field('solution_2_image');?>" alt=""/>
							</div>
						</div>
					</div>
					<div class="">
						<div class="box_bgcolor">
							<div class="solution-box arrows_3">
								<p><?php the_field('solution_3');?></p>
								<img loading="lazy" src="<?php the_field('solution_3_image');?>" alt=""/>
							</div>
						</div>
					</div>
					<div class="">
						<div class="box_bgcolor">
							<div class="solution-box">
								<p><?php the_field('solution_4');?></p>
								<img loading="lazy" src="<?php the_field('solution_4_image');?>" alt=""/>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section id="diverse-team-platform">

			<div class="container">
				<div class="">
					<h2><?php the_field('heading_diverse_team');?></h2>
					<p><?php the_field('diverse_team_content');?></p>
				</div>
				<div class="swivel">
					<div>
						<a href="#"><?php the_field('tab_content_1');?></a>
						<img src="<?php the_field('tab_image1');?>" alt="<?php the_field('tab_content_1');?>"/>
						<a href="#"><?php the_field('tab_content_2');?></a>
						<img src="<?php the_field('tab_image_2');?>" alt="<?php the_field('tab_content_2');?>"/>
						<a href="#"><?php the_field('tab_content_3');?></a>
						<img src="<?php the_field('tab_image_3');?>" alt="<?php the_field('tab_content_3');?>"/>
						<a href="#"><?php the_field('tab_content_4');?></a>
						<img src="<?php the_field('tab_image_4');?>" alt="<?php the_field('tab_content_4');?>"/>
						<a href="#"><?php the_field('tab_content_5');?></a>
						<img src="<?php the_field('tab_image_5');?>" alt="<?php the_field('tab_content_5');?>"/>
						<a href="#"><?php the_field('tab_content_6');?></a>
						<img src="<?php the_field('tab_image_6');?>" alt="<?php the_field('tab_content_6');?>"/>
						<a href="#"><?php the_field('tab_content_7');?></a>
						<img src="<?php the_field('tab_image_7');?>" alt="<?php the_field('tab_content_7');?>"/>
						<a href="#"><?php the_field('tab_content_8');?></a>
						<img src="<?php the_field('tab_image_8');?>" alt="<?php the_field('tab_content_8');?>"/>
						<a href="#"><?php the_field('tab_content_9');?></a>
						<img src="<?php the_field('tab_image_9');?>" alt="<?php the_field('tab_content_9');?>"/>
						<a href="#"><?php the_field('tab_content_10');?></a>
						<img src="<?php the_field('tab_image_10');?>" alt="<?php the_field('tab_content_10');?>"/>
					</div>
				</div>
			</div>
			
			<div class="eliminate">
				<div class="">
					<div class="">
						
						<h2><?php the_field('heading_eliminate');?></h2>
						<p><?php the_field('eliminate_text');?></p>
						<h3><?php the_field('heading_platform');?></h3>
					</div>
				</div>
				<div class="">
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_1');?>" alt="<?php the_field('platform_text_1');?>"/>
						<p><?php the_field('platform_text_1');?></p>	
						</div>
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_2');?>" alt="<?php the_field('platform_text_2');?>"/>
						<p><?php the_field('platform_text_2');?></p>	
						</div>	
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_3');?>" alt="<?php the_field('platform_text_3');?>"/>
						<p><?php the_field('platform_text_3');?></p>	
						</div>
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_4');?>" alt="<?php the_field('platform_text_4');?>"/>
						<p><?php the_field('platform_text_4');?></p>	
						</div>
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_5');?>" alt="<?php the_field('platform_text_5');?>"/>
						<p><?php the_field('platform_text_5');?></p>	
						</div>
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_6');?>" alt="<?php the_field('platform_text_6');?>"/>
						<p><?php the_field('platform_text_6');?></p>
						</div>	
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_7');?>" alt="<?php the_field('platform_text_7');?>"/>
						<p><?php the_field('platform_text_7');?></p>
						</div>	
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_8');?>" alt="<?php the_field('platform_text_8');?>"/>
						<p><?php the_field('platform_text_8');?></p>	
						</div>
					</div>
					<div class="">
						<div class="platform-box">
						<img loading="lazy" src="<?php the_field('platform_image_9');?>" alt="<?php the_field('platform_text_9');?>"/>
						<p><?php the_field('platform_text_9');?></p>	
						</div>
					</div>

				</div>
				<div class="">
					<div class="">
						<a href="<?php the_field('platform_cta_link');?>" role="button"><?php the_field('platform_cta_text');?></a>
					</div>
				</div>
			</div>
		</section>
		<?php
			get_template_part( 'template-parts/pxo_form' );
			get_template_part( 'template-parts/integrations' );
			get_template_part( 'template-parts/why_choose_carefeed' );
			get_template_part( 'template-parts/get_started' );
		?>
	</main><!-- #main -->

<?php
get_footer();
