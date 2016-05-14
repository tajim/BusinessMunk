<?php
/**
 * The template file for mu_portoflio archive.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package corporate-munk
 */
global $munk;
get_header(); ?>
	
<section class="portfolio section">
			<div class="container">
				<div class="icon">
					<?php if ($munk['second-block-header-img']['url']) { ?>                    
                    <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo $munk['second-block-header-img']['url']; ?>" alt="img description" class="lazy">
                    <?php }
					else { ?>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/grey.gif" data-original="<?php echo get_template_directory_uri(); ?>/images/icon5.png" alt="img description" class="lazy">
                    <?php
					}
					?>                 
                </div>
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>             
				<div class="heading">
					<h1><?php echo $munk['mu_portoflio_page_title']; ?></h1>
					<p><?php echo $munk['second-block-header-text']; ?></p>                    
				</div>
				<div class="row">
					

			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php $i = 1; while ( have_posts() ) : the_post(); ?>                       
                    
                    
                    <div class="col-md-4 col-sm-6">
						<div class="col">
							<div class="img-holder">

                            <a href="<?php echo esc_url( get_permalink()); ?>">                            
								<?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) { ?>                    
                               <?php the_post_thumbnail( 'businessmunk-portfolio-thumbnail' ); ?>
                                <?php }
                                else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" style="width:360px; height:280px;" />
                                <?php
                                }
                                ?>                             
	                            <div class="hover-state"></div>
                            </a>
                            
                            

							</div>
						</div>
					</div>
					
					
			<?php 
			if($i % 3 == 0) {echo '<div class="clearfix"></div>';}
			$i++;
			endwhile; ?>		
        	<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>    
            
	            <div class="clearfix"></div>
                <div class="paginations">
				<?php the_posts_pagination(array('type'=>'list','prev_text'=>'&laquo;','next_text'=>'&raquo;',)); ?>                      			
                </div>
            					
					
					
				</div>
			</div>
		</section>    
        
<?php get_footer(); ?>