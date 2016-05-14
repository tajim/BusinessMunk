<?php
/**
 * Template Name: Homepage Template
 *
 * @package businesss-munk
 */

get_header('home'); 

global $munk;
$layout = $munk['homepage-blocks']['enabled'];

get_template_part( 'page-templates/parts/general', 'slider' );

if ($layout): foreach ($layout as $key=>$value) {
 
    switch($key) {
 
        case 'services': get_template_part( 'page-templates/parts/home', 'services' );		
        break;
 
        case 'portfolio': get_template_part( 'page-templates/parts/home', 'portfolio' );
        break;  

        case 'team': get_template_part( 'page-templates/parts/home', 'team' );
        break;  
			
        case 'ourblog': get_template_part( 'page-templates/parts/home', 'ourblog' );
        break;  
		
        case 'contact': get_template_part( 'page-templates/parts/home', 'contact' );
        break;  										
 
    }
 
}
endif;


?>
		
       
<?php get_footer(); ?>