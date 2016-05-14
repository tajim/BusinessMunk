<?php
/**
 * @package business-munk
 */
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
							<div class="text clearfix">
								<?php the_content(); ?>
							</div>
						</article>  