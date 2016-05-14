<?php
/**
 *
 * @package corporatemunk
 */
global $munk; 
?>
	<!-- section-5 -->
    
		<section class="portfolio bg-blue section">
			<div class="container">
				<div class="icon bg-blue">
					<?php if ($munk['second-block-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['second-block-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon5.png" alt="img description" class="lazy">
                    <?php
					}
					?>                   
                </div>
				<div class="heading">
					<h1><?php echo $munk['second-block-header']; ?></h1>
					<p><?php echo $munk['second-block-header-text']; ?></p>
				</div>
				<div class="row">
					
                    
							 <?php
							// WP_Query arguments for mu_team cpt posts
							$portfoliopostarray = $munk['portfolio-posts']; // selected post arrray
							$args = array(
								'post_type' => array( 'mu_portfolio' ),
								'orderby' => 'ASC',
								'post__in' => $portfoliopostarray,
								'posts_per_page' => '3', // limit only to three								
							);											
							// The Query
							$the_query = new WP_Query( $args );						
							?>                        
							<?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                        
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="col">
                                            <div class="img-holder">
                                            
                                            
                                            
                                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                
													<?php the_post_thumbnail( 'businessmunk-portfolio-thumbnail', array( 'class' => 'lazy' ) ); ?>                                                
<!--                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php //echo get_template_directory_uri(); ?>/images/img2.jpg" alt="img description" class="lazy"> -->
                                                    <div class="hover-state"><p style="padding:20px;"><?php echo excerpt(25); ?></p></div>
                                                </a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                    
						 <?php endwhile; ?>
                         <?php wp_reset_postdata(); ?>                        
                        <?php else : ?>
                        <p class="not-found"><?php _e( 'Sorry, no posts matched your criteria.', 'corporate-munk' ); ?></p>
                        <?php endif; ?>                            
					
					
				</div>
			</div>
		</section>    
    