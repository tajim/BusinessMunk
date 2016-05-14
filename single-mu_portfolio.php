<?php
/**
 * The template for displaying all single posts.
 *
 * @package business-munk
 */

get_header(); ?>


		<section class="portfolio section portfolio-detail">
			<div class="container">
					
				<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon16.png" alt="img description"></div>
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>             
                <?php while ( have_posts() ) : the_post(); ?>                                
				<div class="heading">
					 <?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ), '</h1>' ); ?>
					<ul class="detail-lists row">
						<li class="col-sm-6"><strong><?php echo __( 'Year:', 'business-munk' ); ?></strong> <?php echo get_post_meta($post->ID, 'project_details_year', true); ?></li>
						<li class="col-sm-6"><strong><?php echo __( 'Client:', 'business-munk' ); ?></strong> <?php echo get_post_meta($post->ID, 'project_details_client_name', true); ?>t</li>
						<li class="col-sm-6"><strong><?php echo __( 'Website:', 'business-munk' ); ?></strong> <a href="<?php echo get_post_meta($post->ID, 'project_details_url', true); ?>"><?php echo get_post_meta($post->ID, 'project_details_url', true); ?></a></li>
						<li class="col-sm-6"><strong><?php echo __( 'Category:', 'business-munk' ); ?></strong>
										<?php
                                        $term_list = wp_get_post_terms($post->ID, 'mu_portfolio_category', array("fields" => "all"));
                                        foreach($term_list as $term_single) {
                                        echo $term_single->name; //do something here
										echo ",&nbsp;";
                                        }
                                        ?>                          
                        </li>                        
					</ul>                    
                    
				</div>
                
							<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) : ?>
                            <div class="featured-image">
                                <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                                   <center><?php the_post_thumbnail( 'full' ); ?></center>
                                </a>
                                <br />
                            </div>                
                            <?php endif; ?>                  
                
				<div class="detail-text">
					<?php the_content(); ?>									
				</div>
				 <?php endwhile; // end of the loop. ?>                
			</div>
		</section>
			
    
    
<?php get_footer(); ?>