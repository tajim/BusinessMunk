<?php
/**
 *
 * @package corporatemunk
 */
 global $munk;
?>
   
		<section class="section blog">
			<div class="container">
				<div class="icon">
                    <?php if ($munk['feat-blog-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['feat-blog-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon8.png" alt="img description" class="lazy">
                    <?php
					}
					?>                
                </div>
				<div class="heading">
					<h1 class="title"><?php echo $munk['sixth-block-header']; ?></h1>
					<p><?php echo $munk['sixth-block-header-texrarea']; ?></p>
				</div>
				<div class="row">
					
                    
						<?php
							// WP_Query arguments for posts
							$blogpostarray = $munk['sixth-block-posts']; // selected post arrray
							$args = array(
								'post_type' => array( 'post' ),
								'orderby' => 'ASC',
								'ignore_sticky_posts' => 1,								
								'post__in' => $blogpostarray,
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
                                            <a class="post-thumbnail" href="<?php the_permalink(); ?>">			    	                             
												 <?php the_post_thumbnail( 'large', array( 'class' => 'lazy' ) ); ?>                                                 
				                            </a>                                                      
                                             </div>
                                            <div class="text-holder clearfix">
                                                <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                                                <span class="date"><?php echo get_the_date(); ?></span>
												<p><?php echo excerpt(25); ?></p>
	                                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Continue Reading</a>
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