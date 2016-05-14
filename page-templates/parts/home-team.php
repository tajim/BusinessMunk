<?php
/**
 *
 * @package corporatemunk
 */
global $munk; 
?>
	<!-- section 4 -->
	
		<section class="section our-team">
			<div class="container">
				<div class="icon">
					<?php if ($munk['fourth-block-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['fourth-block-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon6.png" alt="img description" class="lazy">
                    <?php
					}
					?>                                     
                </div>
				<div class="heading">
					<h1 class="title"><?php echo $munk['fourth-block-header']; ?></h1>
					<p><?php echo $munk['fourth-block-header-text']; ?></p>
				</div>
				<div class="row">
					
							 <?php
							// WP_Query arguments for mu_team cpt posts
							$teamspostarray = $munk['fourth-block-posts']; // selected post arrray
							$args = array(
								'post_type' => array( 'mu_team' ),
								'orderby' => 'ASC',
								'post__in' => $teamspostarray,
								'posts_per_page' => '4', // limit only to four
							);											
							// The Query
							$the_query = new WP_Query( $args );						
							?>                        
							<?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                         
                    
                    
                    
                                        <div class="col-md-3 col-sm-6">
                                            <div class="col">
                                                <div class="img-holder">
	                                                <a class="post-thumbnail" href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail( 'businessmunk-portfolio-thumbnail', array( 'class' => 'lazy' ) ); ?>
						                            </a>                                                 	
                                                </div>                                                
                                                <div class="text-holder">
                                                    <h2 class="title"><?php echo the_title(); ?></h2>
                                                    <span class="sub-title"><?php echo get_post_meta($post->ID, 'job_title_enter_job_title_here', true); ?></span>
                                                    <p><?php echo excerpt(35); ?></p>
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
    
    