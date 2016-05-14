<?php
/**
 *
 * @package corporatemunk
 */
global $munk; 
?>
	<!-- section 1 -->
    <section class="services section">
			<div class="container">
				<div class="icon">
					<?php if ($munk['services-block-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['services-block-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="img description" class="lazy">
                    <?php
					}
					?>                     
                </div>
				<div class="heading">
					<h1><?php echo $munk['services-header']; ?></h1>
					<p><?php echo $munk['services-header-desc']; ?></p>
				</div>
				<div class="row" id="page-wrap">
					
						 <?php
							// WP_Query arguments for services posts
							$servicespostarray = $munk['services-posts']; // selected post arrray
							$args = array(
								'post_type' => array( 'mu_service' ),
								'orderby' => 'ASC',
								'post__in' => $servicespostarray,
								'posts_per_page' => '3', // limit only to 3
							);											
							// The Query
							$the_query = new WP_Query( $args );						
						?>                        
							<?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                                        
                                    <div class="col-md-4 col-sm-6">
                                        <div class="col block" style="height:240px !important;">
	                                    <div class="icon-holder"><span><?php the_post_thumbnail( 'large', array( 'class' => 'lazy' ) ); ?></span></div>                                            
                                            <div class="text-holder">
			                                     <?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
												<p><?php echo excerpt(25); ?></p>
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