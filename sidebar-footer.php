<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package corporate-munk
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

		<div class="footer-m clearfix">
            <div class="container">            
				<div class="row" id="page-wrap">
					<div class="col-md-4">
	             		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <?php endif; ?>						
					</div>
					<div class="col-md-4">
                		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <?php endif; ?>						
					</div>
					<div class="col-md-4">
                		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
                        <?php endif; ?>						
					</div>
				</div>
			</div>                
		</div>            