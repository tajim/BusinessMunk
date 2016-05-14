<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package business-munk
 */
?>
<?php global $munk; ?>

		<footer id="footer">			
			<?php
			if ($munk['footer-widget-area'] == '1') { 
			get_sidebar('footer'); 
			}
			?>
			<div class="footer-b bg-blue">
				<div class="container">
				<?php if ($munk['copyright-text']) { ?>
					<?php echo $munk['copyright-text']; ?>
                    &nbsp;|&nbsp;
                    <a href="<?php echo esc_url( __( 'http://thememunk.com/', 'business-munk' ) ); ?>"  title="Premium WordPress Themes">
                    <?php printf( __( 'Theme By: %s', 'business-munk' ), 'ThemeMunk' ); ?>
                    </a>
                    &nbsp;|&nbsp;
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'business-munk' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'business-munk' ), 'WordPress' ); ?></a>                
					 <?php }
                     else {
                      ?>   
                    <?php bloginfo( 'name' ); ?> - <?php echo date('Y'); ?>                 
                    &nbsp;|&nbsp;
                    <a href="<?php echo esc_url( __( 'http://thememunk.com/', 'business-munk' ) ); ?>"  title="Premium WordPress Themes">
                    <?php printf( __( 'Theme By: %s', 'business-munk' ), 'ThemeMunk' ); ?>
                    </a>
                    &nbsp;|&nbsp;
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'business-munk' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'business-munk' ), 'WordPress' ); ?></a>                  
                  <?php } ?>   
				</div>
			</div>
		</footer>
		<a href="#" class="scrollup">Scroll</a>
	</div>
    <?php wp_footer(); ?>            
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
			animation: "fade"
			});
		});
		//mean menu
		jQuery('header nav').meanmenu({
			meanScreenWidth: "991",
			meanRevealPosition: "center"
		});
		$(document).ready(function() {
			$(".meanmenu-reveal").click(function() {
				$(".right-navigation").slideToggle();
			});
		});
		//lazy load images
		$(function() {
		     $("img.lazy").lazyload({
		         effect : "fadeIn"
		     });
		 });
	</script>

</body>
</html>