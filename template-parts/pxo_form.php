<section id="free-evaluation" class="">
	<div class="container">
		<div class="">
			<div class="">
				<div class="like-button">
					<div class="">
						<img src="<?php echo get_template_directory_uri().'/assets/img/Isolation_Mode.svg'; ?>" alt="Free Evaluation"/>
					</div>
					<div class="">
						<h4><?php the_field('free_evaluation'); ?></h4>
					</div>
				</div>
				<h2><?php the_field('free_evaluation_heading');?></h2>
				
			</div>
			<div>
				<?php the_field('form_shortcode'); ?>
			</div>
		</div>
	</div>
</section>