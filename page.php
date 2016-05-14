<?php
/**
 * The template for displaying all single pages.
 *
 * @package business-munk
 */

get_header(); ?>

	<section class="section blog">
			<div class="container">
				<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon8.png" alt=""></div>
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>             
				<div class="row">
					<div class="col-md-8">
                    
						<?php while ( have_posts() ) : the_post(); ?>                    
                    
							<?php get_template_part( 'content', 'page' ); ?>
                                                                                     
                        <?php endwhile; // end of the loop. ?>                                 
                        
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>						
					</div>
				</div>
			</div>
		</section>


<?php get_footer(); ?>