<?php
/**
 * The template file for mu_team archive.
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
	
<section class="section our-team">
			<div class="container">
				<div class="icon"><img src="images/icon6.png" alt=""></div>
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>             
				<div class="heading">
					<h1 class="title">Our Team</h1>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sonatoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, </p>
				</div>
				<div class="row">
					
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php $i = 1; while ( have_posts() ) : the_post(); ?>                       
                    
                    
                    <div class="col-md-4 col-sm-6">
						<div class="col">
                            
                            <div class="img-holder">
                                    <?php if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) { ?>                    
                                   <?php the_post_thumbnail( 'businessmunk-portfolio-thumbnail' ); ?>
                                    <?php }
                                    else { ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" style="width:360px; height:280px;" />
                                    <?php
                                    }
                                    ?>                             
                            </div>                                    
                        
							<div class="text-holder">
								<?php the_title( sprintf( '<h2 class="title">', esc_url( get_permalink() ) ), '</h2>' ); ?>                                
                                <span class="sub-title"><?php echo get_post_meta($post->ID, 'job_title_enter_job_title_here', true); ?></span>
                                <p><?php echo excerpt(15); ?></p>
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