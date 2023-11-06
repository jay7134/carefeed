<section id="why_onq" class="pt-40">
	<div class="container pt-50 pb-50">
		<div class="row">
			<div class="col-12 text-center">
				<img src="<?php echo get_template_directory_uri().'/assets/img/stars.svg'; ?>" alt="<?php the_field('title_why_choose_onq'); ?>" width="264" height="34"/>
				<h2 class="pt-20 pb-40 text-center"><?php the_field('title_why_choose_onq'); ?></h2>
			</div>
			<div class="col-md-4 text-center">
				<div class="choice-box">
				<img loading="lazy" src="<?php the_field('choose_image_1'); ?>" alt="<?php the_field('choose_onq_title_1'); ?>" width="128" height="128"/>
				<h4 class="pt-20 pb-10"><?php the_field('choose_onq_title_1'); ?></h4>
				<p><?php the_field('choose_onq_text_1'); ?></p>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="choice-box">
				<img loading="lazy" src="<?php the_field('choose_image_2'); ?>" alt="<?php the_field('choose_onq_title_2'); ?>" width="128" height="128"/>
				<h4 class="pt-20 pb-10"><?php the_field('choose_onq_title_2'); ?></h4>
				<p><?php the_field('choose_onq_text_2'); ?></p>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="choice-box">
				<img loading="lazy" src="<?php the_field('choose_image_3'); ?>" alt="<?php the_field('choose_onq_title_3'); ?>" width="128" height="128"/>
				<h4 class="pt-20 pb-10"><?php the_field('choose_onq_title_3'); ?></h4>
				<p><?php the_field('choose_onq_text_3'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>