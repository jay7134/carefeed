<section id="download_brochure">
	<div class="">
		<div>
			<div>
				<img loading="lazy" class="img-fluid" src="<?php the_field('brochure_image'); ?>" alt="<?php the_field('brochure_title'); ?>" width="982" height="724"/>
			</div>
			<div>
				<h2><?php the_field('brochure_title'); ?></h2>
				<p><?php the_field('brochure_description_text'); ?></p>
				<div class="embed-form">
					<?php the_field('brochure_embed_form'); ?>
				</div>
			</div>
		</div>
	</div>
</section>