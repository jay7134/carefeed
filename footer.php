<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="">
    			<div class="">
    				<div class="footer-logo">
    					<a href="<?php echo site_url();?>">
    						<img src="<?php echo get_template_directory_uri().'/assets/img/footer_logo.svg'; ?>" alt="Carefeed footer logo" width="257" height="122" />
    					</a>
    				</div>
    				<div class="contact-info">
    					<p><a href="tel:<?php the_field('phone');?>"><?php the_field('phone'); ?></a></p>
    					<p><a href="mailto:<?php the_field('email');?>"><?php the_field('email'); ?></a></p>
    				</div>
    			</div>
    			<div class="">
    				<div class="social-links">
    					<a href="#" target="_blank">
    						<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" fill="#27AAE1"/></svg>
    					</a> &nbsp;&nbsp;
    					<a href="#" target="_blank">
    						<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" fill="#27AAE1"/></svg>
    					</a>
    				</div>
    				<div class="hippa">
    					<a href="#" target="_blank">
    						<img src="<?php echo get_template_directory_uri().'/assets/img/hipaa-compliance.svg'; ?>" class="" alt="hipaa-compliance" width="108" height="56" />
    					</a>
    				</div>
    				<div class="footer_links">
    				<p><a href="#">Client Login</a></p>
    				<p>Copyright © <?php echo date('Y');?> Carefeed <span class="sep"> | </span>	
    					<a href="#" class="link_privacy">Privacy Policy</a></p>
    				</div>
    			</div>
    		</div>
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
