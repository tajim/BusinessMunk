<?php
/**
 * @package corporate-munk
 */
global $munk;
?>

                       
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
							<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() && $munk['mu_featuredimage_single'] == '1' ) : ?>
                            <div class="featured-image">
                                <a class="post-thumbnail" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'corporatemunk-blog-thumbnail' ); ?>
                                </a>
                            </div>                
                            <?php endif; ?>                              
			                <?php the_title( sprintf( '<h2 class="title">', esc_url( get_permalink() ) ), '</h2>' ); ?>                                
							<ul class="meta-info">
								<li class="author"><?php the_author(); ?></li>
								<li class="date"><?php the_time('F j, Y'); ?></li>
								<li class="comment"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></li>
							</ul>
							<div class="text clearfix">
								<?php the_content(); ?>									
								<div class="tags">
									<span class="fa fa-tag"></span>
									<?php the_tags( 'Tags: ', ', ', '' ); ?> 
								</div>
							</div>
						</article>                        