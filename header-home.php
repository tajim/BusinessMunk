<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package business-munk
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
   	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">            
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php global $munk; ?>
	<div class="wrapper">
		<!-- header of the site -->
		<header id="header">
			<div class="container">
					<?php
			        if ($munk['topbar-switch'] == '1') { ?>
                            <div class="header-t clearfix">
                                <ul class="contact-info pull-left">
                                    <li class="email"><a href="mailto:<?php echo $munk['topbar-email']; ?>"><?php echo $munk['topbar-email']; ?></a></li>
                                    <li class="skype"><a href="skype:<?php echo $munk['topbar-skype']; ?>"><?php echo $munk['topbar-skype']; ?></a></li>
                                </ul>
                                <ul class="social-networks pull-right">
                                    <?php if ($munk['facebook']) { ?><li><a href="<?php echo $munk['facebook']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-facebook.png" alt="" width="7" height="14"></a></li><?php } ?>
                                    <?php if ($munk['twitter']) { ?><li><a href="<?php echo $munk['twitter']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-twitter.png" alt="" width="17" height="12"></a></li><?php } ?>
                                    <?php if ($munk['youtube']) { ?><li><a href="<?php echo $munk['youtube']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-youtube.png" alt="" width="12" height="14"></a></li><?php } ?>
                                    <?php if ($munk['linkedin']) { ?><li><a href="<?php echo $munk['linkedin']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-linkedin.png" alt="" width="13" height="12"></a></li><?php } ?>
                                    <?php if ($munk['vimeo']) { ?><li><a href="<?php echo $munk['vimeo']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-vimeo.png" alt="" width="12" height="10"></a></li><?php } ?>
                                </ul>
                            </div>
                		<?php
					}
					?>                            
				<div class="header-b">
					<!-- logo of the site -->
					<div class="logo">
                    
                        <?php		
						if ($munk['header-logo']['url']) { ?>
						<div class="img-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="img-responsive" src="<?php echo $munk['header-logo']['url']; ?>" width="<?php echo $munk['header-logo']['width']; ?>" height="<?php echo $munk['header-logo']['height']; ?>">
                        </a>
                        </div>                        
						<?php
						}
						else { ?>
                        <div class="text-logo-holder">                                               
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<span class="slogan"><?php bloginfo( 'description' ); ?></span>
						</div>                        						
						<?php } ?>                    
                                            
                        
					</div>
					<nav id="nav" class="clearfix">
						
						<?php                       
                        $defaults = array(
                            'theme_location'  => 'left',
                            'menu'            => '',
                            'container'       => 'ul',
                            'container_class' => 'left-navigation pull-left',
                            'container_id'    => '',
                            'menu_class'      => 'left-navigation pull-left',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,                        
                        );                        
                        wp_nav_menu( $defaults );                        						
                        ?>                        
                        
                        
                        
						<?php                       
                        $defaults = array(
                            'theme_location'  => 'right',
                            'menu'            => '',
                            'container'       => 'ul',
                            'container_class' => 'right-navigation pull-right',
                            'container_id'    => '',
                            'menu_class'      => 'right-navigation pull-right',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,                        
                        );                        
                        wp_nav_menu( $defaults );                        						
                        ?>                         
                        
						
					</nav>
				</div>
			</div>
		</header>