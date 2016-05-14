<?php
/**
 * The template file for mu_service archive.
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
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>                             
				<div class="heading">
					<h1><?php echo $munk['services-header']; ?></h1>
					<p><?php echo $munk['services-header-desc']; ?></p>
				</div>
				<div class="row" id="page-wrap">
					

			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php $i = 1; while ( have_posts() ) : the_post(); ?>                       

                    <div class="col-md-4 col-sm-6">
						<div class="col block">
							<div class="icon-holder"><span><?php the_post_thumbnail( 'businessmunk-project-thumbnail' ); ?></span></div>
							<div class="text-holder">
								<?php the_title( sprintf( '<h2 class="title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
								<p><?php echo excerpt(25); ?></p>
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
					
					
				</div>
			</div>
		</section>    
        
<?php get_footer(); ?>