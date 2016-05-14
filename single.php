<?php
/**
 * The template for displaying all single posts.
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
                    
						<?php get_template_part( 'content', 'single' ); ?>
                                                    
							<?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>                            
                
                        <?php endwhile; // end of the loop. ?>                                 
                        
					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>						
					</div>
				</div>
			</div>
		</section>
			
    
    
<?php get_footer(); ?>