<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package businesss-munk
 */

get_header(); ?>

		<section class="section blog">
			<div class="container">
				<div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/icon8.png" alt=""></div>
                <?php if ($munk['mu_breadcrumbs'] == '1') { dimox_breadcrumbs(); } else { echo "<br />"; }	?>             
				<div class="row">
					<div class="col-md-8">
						
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            						
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
            
			<?php endwhile; ?>
		
        	<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>                                  
                        
            <div class="paginations">                        
			<?php the_posts_pagination(array('type'=>'list','prev_text'=>'&laquo;','next_text'=>'&raquo;',)); ?>                         								
			</div>            


					</div>
					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>        
<?php get_footer(); ?>