<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package business-munk
 */
if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}

?>

                       
                    <aside class="sidebar">														
						<?php if ( is_active_sidebar( 'sidebar-main' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-main' ); ?>
                        <?php endif; ?>							
					</aside>