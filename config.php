<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "theme_munk";

	$siteurl = esc_url( home_url( '' ) );

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'business-munk' ),
        'page_title'           => __( 'Theme Options', 'business-munk' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-hammer',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => 'munk',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-hammer',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'business-munk' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'business-munk' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'business-munk' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/thememunk?_rdr=p',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/thememunk',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Welcome to your theme\'s control center.</p>', 'business-munk' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'business-munk' );
    }

    // Add content after the form.

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Support', 'business-munk' ),
            'content' => __( '<p>For Support. Please log in into <a href="http://support.thememunk.com/">http://support.thememunk.com/</a></p>', 'business-munk' )
        ),
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '', 'business-munk' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */
	 
	// -> START General Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General', 'business-munk' ),
        'id'     => 'mu_general',
        'desc'   => __( '', 'business-munk' ),
        'icon'   => 'el el-cogs',
		'fields'     => array(
					 array(
							'id'       => 'mu_breadcrumbs',
							'type'     => 'switch',
							'title'    => 'Enable or Disable Breadcrumbs',
							'desc'    => 'If you want to disable the breadcrumbs then you can do so over here.',
							'subtitle' => '',
							'default'  => true
					),								
					 array(
							'id'       => 'mu_featuredimage',
							'type'     => 'switch',
							'title'    => 'Enable or Disable Featured Image on Blog Listing Page',
							'desc'    => 'If you want to disable the feature image on blog listing page then you can do so over here',							
							'subtitle' => '',
							'default'  => true
					),					
					 array(
							'id'       => 'mu_featuredimage_single',
							'type'     => 'switch',
							'title'    => 'Enable or Disable Featured Image on Single Post',
							'desc'    => 'If you want to disable the feature image on single blog posts then you can do so over here',							
							'subtitle' => '',
							'default'  => true
					),	
					 array(
							'id'       => 'mu_portoflio_page_title',
							'type'     => 'text',
							'title'    => 'Enter Title For Portfolio Page',
					        'desc' => sprintf( __( 'Your Portfolio page is available at: <a target="_blank" href="%1$s/portfolio"><strong>%1$s/portfolio</strong></a>', 'business-munk'), $siteurl ),							
							'subtitle' => '',
							'default'  => 'Portfolio'
					),
					
					
						)		
		));
		
	
					
	
    // -> End General Fields		 
	 

    // -> START Header Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header', 'business-munk' ),
        'id'     => 'header',
        'desc'   => __( '', 'business-munk' ),
        'icon'   => 'el el-credit-card',
		'fields'     => array(
			 array(
							'id'       => 'header-logo',
							'type'     => 'media',
							'title'    => __( 'Site Logo', 'business-munk' ),
							'desc'     => __( 'Upload Logo ', 'business-munk' ),
							'subtitle' => __( '', 'business-munk' ),
						),
			array(
							'id'       => 'topbar-switch',
							'type'     => 'switch',
							'title'    => 'Enable or Disable Top Bar',
							'subtitle' => '',
							'default'  => true
						),							
		),		
		));
  // -> End Header Fields			
	
    // -> START Homepage Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Homepage', 'business-munk' ),
        'id'     => 'homepage',
        'desc'   => __( '', 'business-munk' ),
        'icon'   => 'el el-home',		
		));	
		
		
							// Homepage Layout Drag and Drop Starts
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Homepage Layout', 'business-munk' ),
								'id'         => 'home-layout',
								'subsection' => true,
								'fields'     => array(		
										array(
											'id'      => 'homepage-blocks',
											'type'    => 'sorter',
										    'title'   => 'Homepage Layout Manager',
											'desc'    => 'Organize how you want the layout to appear on the homepage',											
											'options' => array(
													'enabled'  => array(
//														'slider'     => 'Slider',													
														'services' => 'Services Section',
														'portfolio'   => 'Portfolio Section',
														'team'   => 'Team Section',																												
														'ourblog'   => 'Featured Blog Section',														
														'contact'   => 'Contact Section',
													),
													'disabled' => array(
													)
												),											
										),								
								)
							) );							
							// Homepage Layout Drag and Drop Ends
		
		
						// Homepage Slider Starts
						Redux::setSection( $opt_name, array(
								'title'      => __( 'Slider Section', 'business-munk' ),
								'id'         => 'home-slider',
								'subsection' => true,
								'fields'     => array(
										//General Slider Settings Starts
										array(
											'id'          => 'general-slides',
											'type'        => 'slides',
											'title'       => __( 'General Slider Options', 'business-munk' ),
											'placeholder' => array(
												'title'       => __( 'This is a title', 'business-munk' ),
												'description' => __( 'Description Here', 'business-munk' ),
												'url'         => __( 'Give us a link!', 'business-munk' ),
											),
										),									
										//General Slider Settings Ends
										
								)
							) );	
							// Homepage Slider Ends
							
							// Homepage Services Starts
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Services Section', 'business-munk' ),
								'id'         => 'home-services',
								'subsection' => true,
								'fields'     => array(
										array(
											'id'       => 'services-block-header-img',
											'type'     => 'media',
											'title'    => 'Header Icon',
											'desc' => 	'Choose Image',
											'default'  => '',
										),								
										array(
											'id'       => 'services-header',
											'type'     => 'text',
											'title'    => 'Services Block Title',
											'desc' => 	'Enter Services Block Title',
											'default'  => '',
										),
										array(
											'id'       => 'services-header-desc',
											'type'     => 'textarea',
											'title'    => 'Services Block Description',
											'desc' => 	'Enter Services Block Description',
											'default'  => '',
										),										
										array(
										'id'       => 'services-posts',
										'type'     => 'select',
										'data' => 'post',
										'args' => array('post_type' => array('mu_service')),
										'multi'    => true,
										'title'    => __( 'Select Services Post', 'business-munk' ),
										),										
										
								)
							) );							

							// Homepage Services Ends
							
							// Homepage Portfolio Start
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Portfolio Section', 'business-munk' ),
								'id'         => 'home-second-block',
								'subsection' => true,
								'fields'     => array(
										array(
											'id'       => 'second-block-header-img',
											'type'     => 'media',
											'title'    => 'Header Icon',
											'desc' => 	'Choose Image',
											'default'  => '',
										),
										array(
											'id'       => 'second-block-header',
											'type'     => 'text',
											'title'    => 'Header Title',
											'desc' => 	'Enter Title',
											'default'  => '',
										),
										array(
											'id'       => 'second-block-header-text',
											'type'     => 'textarea',
											'title'    => 'Header Text',
											'desc' => 	'Enter Text',
											'default'  => '',
										),	
										array(
										'id'       => 'portfolio-posts',
										'type'     => 'select',
										'data' => 'post',
										'args' => array('post_type' => array('mu_portfolio')),
										'multi'    => true,
										'title'    => __( 'Select Portfolio Post', 'business-munk' ),
										),										
										
								)
							) );									
							// Homepage Portfolio Ends								

							
							// Homepage Fourth Block - Teams Starts							
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Team Section', 'business-munk' ),
								'id'         => 'home-fourth-block',
								'subsection' => true,
								'fields'     => array(			
										array(
											'id'       => 'fourth-block-header-img',
											'type'     => 'media',
											'title'    => 'Header Icon',
											'desc' => 	'Choose Image',
											'default'  => '',
										),									
										array(
											'id'       => 'fourth-block-header',
											'type'     => 'text',
											'title'    => 'Header Title',
											'desc' => 	'Enter Title',
											'default'  => '',
										),
										array(
											'id'       => 'fourth-block-header-text',
											'type'     => 'textarea',
											'title'    => 'Header Text',
											'desc' => 	'Enter Text',
											'default'  => '',
										),
										array(
											'id'       => 'fourth-block-posts',
											'type'     => 'select',
											'data' => 'post',
											'args' => array('post_type' => array('mu_team')),
											'multi'    => true,
											'title'    => __( 'Select Featured Team Members', 'business-munk' ),
											'desc'    => __( 'Select featured team members to show on homepage', 'business-munk' ),											
										),										
								)
							) );														
							// Homepage Fourth Block - Team Ends	
							
							
							// Homepage sixth Block - Our Blog Starts					
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Feature Blog Section', 'business-munk' ),
								'id'         => 'home-sixth-block',
								'subsection' => true,
								'fields'     => array(	
										array(
											'id'       => 'feat-blog-header-img',
											'type'     => 'media',
											'title'    => 'Header Icon',
											'desc' => 	'Choose Image',
											'default'  => '',
										),											
										array(
											'id'       => 'sixth-block-header',
											'type'     => 'text',
											'title'    => 'Header Title',
											'desc' => 	'Enter Title',
											'default'  => '',
										),
										array(
											'id'       => 'sixth-block-header-texrarea',
											'type'     => 'textarea',
											'title'    => 'Header Text',
											'desc' => 	'Enter Text For Our Blog Area',
											'default'  => '',
										),										
										array(
											'id'       => 'sixth-block-posts',
											'type'     => 'select',
											'data' => 'post',
											'multi'    => true,
											'title'    => __( 'Select Featured Posts', 'business-munk' ),
											'desc'    => __( 'Select featured posts to show on homepage', 'business-munk' ),											
										),										
								)
							) );																							
							// Homepage sixth Block - Our Blog Ends
							
							// Homepage Contact Block - Starts
							
							Redux::setSection( $opt_name, array(
								'title'      => __( 'Contact Section', 'business-munk' ),
								'id'         => 'home-seventh-block',
								'subsection' => true,
								'fields'     => array(		
										array(
											'id'       => 'contact-block-header-img',
											'type'     => 'media',
											'title'    => 'Header Icon',
											'desc' => 	'Choose Image',
											'default'  => '',
										),														
										array(
											'id'       => 'seventh-block-header',
											'type'     => 'text',
											'title'    => 'Header Title',
											'desc' => 	'Enter Title',
											'default'  => '',
										),
										array(
											'id'       => 'address',
											'type'     => 'textarea',
											'title'    => 'Address',
											'desc' => 	'Enter Your Address',
											'default'  => '',
										),
								)
							) );																							
							// Homepage sixth Block - Our Blog Ends							
							
							
		
							    // -> START Homepage Fields		
	
	// -> START Social Media Icons
	Redux::setSection( $opt_name, array(
		'title'  => __( 'Contact / Social Media', 'business-munk' ),
		'id'     => 'social-media',
		'desc'   => __( '', 'business-munk' ),
		'icon'   => 'el el-group',
		'fields'    => array(
		array(
			'id'       => 'topbar-skype',
			'type'     => 'text',
			'title'    => 'Skype Username',
			'desc' => 'Enter your skype username here',							
		),										
		array(
			'id'       => 'phone',
			'type'     => 'text',
			'title'    => 'Phone',
			'desc' => 	'Enter Phone Number',
			'default'  => '',
		),		
		array(
			'id'       => 'topbar-email',
			'type'     => 'text',
			'title'    => 'Email Address',
			'desc' => 'Enter your email adress here',
		),																		
		array(
			'id'       => 'twitter',
			'type'     => 'text',
			'title'    => 'Twitter',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),
		array(
			'id'       => 'facebook',
			'type'     => 'text',
			'title'    => 'Facebook',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),							
		array(
			'id'       => 'youtube',
			'type'     => 'text',
			'title'    => 'Youtube',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),							
		array(
			'id'       => 'linkedin',
			'type'     => 'text',
			'title'    => 'Linkedin',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),							
		array(
			'id'       => 'vimeo',
			'type'     => 'text',
			'title'    => 'Vimeo',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),			
		array(
			'id'       => 'gplus',
			'type'     => 'text',
			'title'    => 'Google+',
			'desc' => 	'Enter Full URL',
			'default'  => '',
		),																																																																																																	
		
),
));



// -> End Social Media Icons
	
	
	// -> START Footer Fields
	Redux::setSection( $opt_name, array(
		'title'  => __( 'Footer', 'business-munk' ),
		'id'     => 'footer',
		'desc'   => __( '', 'business-munk' ),
		'icon'   => 'el el-credit-card el-rotate-180',
				'fields'     => array(
						 array(
						'id'       => 'footer-widget-area',
						'type'     => 'switch',
						'title'    => 'Enable or Disable Footer Widget Area',
						'subtitle' => '',
						'default'  => true
					),
					array(
						'id'       => 'copyright-text',
						'type'     => 'text',
						'title'    => 'Enter Text For Copyright Area',
						'subtitle' => '',
						'default'  => '',
					),					
				),		
		));	
	// -> End Footer Fields	

	


