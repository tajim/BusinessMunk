<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package business-munk
 */

get_header(); ?>

	<section class="section blog">
			<div class="container">
            
            	<article class="error-page">
						<span>404</span>
						<h2>Oops, This Page Could Not Be Found!</h2>
						<p>
							The page you are looking for is not here. It may have been deleted, or the address might have been miss-typed. You can use the navigation bar above, or:
						</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="homelinks">Return to Homepage</a>
					</article>
            
			</div>
		</section>


<?php get_footer(); ?>