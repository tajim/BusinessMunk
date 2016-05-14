<?php
/**
 * @package business-munk
 */
global $munk;
?>

				        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
							<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() && $munk['mu_featuredimage'] == '1' ) : ?>
                            <div class="featured-image">
                                <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'corporatemunk-blog-thumbnail' ); ?>
                                </a>
                            </div>                
                            <?php endif; ?>   
			                <?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>                            
							<ul class="meta-info">
								<li class="author"><?php the_author(); ?></li>
								<li class="date"><?php the_time('F j, Y'); ?></li>
								<li class="comment"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></li>
							</ul>
							<div class="text clearfix">
            					<?php the_excerpt(); ?>
            					<a href="<?php echo esc_url( get_permalink()); ?>" class="btn-readmore">Continue Reading</a>
							</div>
						</article>        