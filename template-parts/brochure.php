<section id="download_brochure">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7">
				<img loading="lazy" class="img-fluid" src="<?php the_field('brochure_image'); ?>" alt="<?php the_field('brochure_title'); ?>" width="982" height="724"/>
			</div>
			<div class="col-md-5 pb-20">
				<h3><?php the_field('brochure_title'); ?></h3>
				<p class="pt-20 pb-20"><?php the_field('brochure_description_text'); ?></p>
				<a class="btn btn-primary btn-1" href="<?php the_field('brochure_download_link'); ?>" role="button"><?php the_field('download_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>