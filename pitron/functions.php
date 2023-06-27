<?php 

require_once get_template_directory().'/inc/'.'class-tgm-plugin-activation.php';
require_once get_template_directory().'/inc/'.'add_plugin.php';   

define('PITRON_THEME_DIR', get_template_directory());
define('PITRON_THEME_URI', get_template_directory_uri());
define('PITRON_THEME_CSS_DIR', PITRON_THEME_URI . '/assets/css/');
define('PITRON_THEME_IMG_DIR', PITRON_THEME_URI . '/assets/img/');
define('PITRON_THEME_JS_DIR', PITRON_THEME_URI . '/assets/js/');
define('PITRON_THEME_INC', PITRON_THEME_DIR . '/inc/');


/**================================================
 * Custom template helper function for this theme.
 * ================================================*/
require PITRON_THEME_INC . 'template_helper.php';


/**
 * pitron_scripts description
 * @return [type] [description]
 */
function pitron_scripts()
{

    /*=====================================================
     * all css files
      * ===================================================*/

    wp_enqueue_style('bootstrap', PITRON_THEME_CSS_DIR . 'bootstrap.min.css', array());
    wp_enqueue_style('line-awesome', PITRON_THEME_CSS_DIR . 'line-awesome.min.css', []);
    wp_enqueue_style('animate', PITRON_THEME_CSS_DIR . 'animate.css', []);
    wp_enqueue_style('magnific-popup', PITRON_THEME_CSS_DIR . 'magnific-popup.css', [], time());  
    wp_enqueue_style('flaticon', PITRON_THEME_CSS_DIR . 'flaticon.css', []);
    wp_enqueue_style('owl-carousel', PITRON_THEME_CSS_DIR . 'owl.carousel.css', []);

    wp_enqueue_style('barfiller', PITRON_THEME_CSS_DIR . 'barfiller.css', []);
    wp_enqueue_style('fancy-box', PITRON_THEME_CSS_DIR . 'fancy-box.min.css', []);
    wp_enqueue_style('nice-select', PITRON_THEME_CSS_DIR . 'nice-select.css', []);
    wp_enqueue_style('owl-theme-default', PITRON_THEME_CSS_DIR . 'owl.theme.default.css', []);

    wp_enqueue_style('PITRON-style', get_stylesheet_uri());
    wp_enqueue_style('responsive', PITRON_THEME_CSS_DIR . 'responsive.css', []);
    // all js
    wp_enqueue_script('jquery', PITRON_THEME_JS_DIR . 'jquery-1.12.4.min.js', ['imagesloaded'], false, true);
    wp_enqueue_script('popper', PITRON_THEME_JS_DIR . 'popper.min.js', ['jquery'], false, true);
    wp_enqueue_script('bootstrap', PITRON_THEME_JS_DIR . 'bootstrap.min.js', ['jquery'], '', true);
    wp_enqueue_script('wow', PITRON_THEME_JS_DIR . 'wow.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-waypoints', PITRON_THEME_JS_DIR . 'jquery.waypoints.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-counterup', PITRON_THEME_JS_DIR . 'jquery.counterup.min.js', ['jquery'], '', true);    
    wp_enqueue_script('owl-carousel', PITRON_THEME_JS_DIR . 'owl.carousel.min.js', ['jquery'], false, true);
    wp_enqueue_script('magnific-popup', PITRON_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-sticky', PITRON_THEME_JS_DIR . 'jquery.sticky.js', ['jquery'], false, true);
    wp_enqueue_script('isotope', PITRON_THEME_JS_DIR . 'isotope-3.0.6-min.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-fancybox', PITRON_THEME_JS_DIR . 'jquery-fancybox.min.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-barfiller', PITRON_THEME_JS_DIR . 'jquery.barfiller.js', ['jquery'], '', true);
    wp_enqueue_script('jquery-easing', PITRON_THEME_JS_DIR . 'jquery.easing.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-nice-select', PITRON_THEME_JS_DIR . 'jquery.nice-select.min.js', ['jquery'], false, true);


    // wp_enqueue_script('waypoints', PITRON_THEME_JS_DIR . 'waypoints.min.js', ['jquery'], false, true);
    wp_enqueue_script('PITRON-main', PITRON_THEME_JS_DIR . 'main.js', ['jquery'], time(), true);


}
add_action('wp_enqueue_scripts', 'pitron_scripts');

/**===============================================================
 *  Adding menu
 * ===============================================================*/
// This theme uses wp_nav_menu() in one location
register_nav_menus(array(
    'pitron_nav' => __('Pitron Nav ', 'pitron')
));

// Add li Class
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



// Add a Class
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

/**===============================================================
 *  Adding navbar chooser section into theme customizer
 * ===============================================================*/
function pitron_theme_navbar_chooser_customizer($wp_customize){
  $wp_customize->add_section('choose_pitron_navbar', array(
      'title' => __('Choose a Navbar','pitron'),
      'description' => __('Choose a Navbar style for your site','pitron')
  ));

  $wp_customize->add_setting('pitron_navbar_chooser', array(
       'default' => 'navbar_1'
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_navbar_chooser',  array(
      'label' => __('Select a Navbar', 'pitron'),
      'description' => 'Change or select a Navabar style for your site',
      'section' => 'choose_pitron_navbar',
      'setting' => 'pitron_navbar_chooser',
      'type' => 'radio',
      'choices' => array(
          'navbar_1'   => __( 'Navbar 1' ),
          'navbar_2'   => __( 'Navbar 2' ),
          'navbar_3'   => __( 'Navbar 3' )
      )
  ) ) );
}
add_action( 'customize_register', 'pitron_theme_navbar_chooser_customizer');

/**===============================================================
 *  Adding Site logo customer section into theme customizer
 * ===============================================================*/
function pitron_theme_logo_customizer($wp_customize){
    $wp_customize->add_section('update_pitron_site_logo', array(
        'title' => __('Site Logo','pitron'),
        'description' => __('Change Site Logo From Here','pitron')
    ));

    $wp_customize->add_setting('pitron_site_logo', array(
        'default' =>  PITRON_THEME_IMG_DIR.'logo.png'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pitron_site_logo', array(
        'label' => __('Chage Logo', 'pitron'),
        'description' => 'Change or update logo of your theme',
        'setting' => 'pitron_site_logo',
        'section' => 'update_pitron_site_logo'
    ) ) );
}
add_action( 'customize_register', 'pitron_theme_logo_customizer');

/**===============================================================
 *  Adding Contacts Information section into theme customizer
 * ===============================================================*/
function pitron_theme_contact_information_customizer($wp_customize){
    //contact information section
    $wp_customize->add_section('contact_information', array(
        'title' => __('Contact Information','pitron'),
        'description' => __('Enter contact informations in the fields below.','pitron')
    ));

    //street loation setting and control
    $wp_customize->add_setting('pitron_contact_information_location_street', array(
        'default' => '66 Broklyn Street'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_location_street',  array(
        'label' => __('Street', 'pitron'),
        'description' => 'Enter Street Location',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_location_street',
        'type' => 'text',

    ) ) );

    //city location setting and control
    $wp_customize->add_setting('pitron_contact_information_location_city', array(
        'default' => 'New York'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_location_city',  array(
        'label' => __('City', 'pitron'),
        'description' => 'Enter City Name',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_location_city',
        'type' => 'text',

    ) ) );    

    //country location setting and control
    $wp_customize->add_setting('pitron_contact_information_location_country', array(
        'default' => 'USA'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_location_country',  array(
        'label' => __('Country', 'pitron'),
        'description' => 'Enter Country Name',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_location_country',
        'type' => 'text',

    ) ) );    


    //opening days setting and control
    $wp_customize->add_setting('pitron_contact_information_opening_days', array(
        'default' => 'Monday-Friday'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_opening_days',  array(
        'label' => __('Opening Days', 'pitron'),
        'description' => 'Enter Opening Days',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_opening_days',
        'type' => 'text',

    ) ) );  
    
    //opening hours setting and control
    $wp_customize->add_setting('pitron_contact_information_opening_hours', array(
        'default' => '08.00-20.00'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_opening_hours',  array(
        'label' => __('Opening Hours', 'pitron'),
        'description' => 'Enter Opening Hours',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_opening_hours',
        'type' => 'text',

    ) ) );    

    //phone setting and control
    $wp_customize->add_setting('pitron_contact_information_phone', array(
        'default' => '(+1)212-946-2064'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_phone',  array(
        'label' => __('Phone', 'pitron'),
        'description' => 'Enter Phone Number',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_phone',
        'type' => 'text',

    ) ) );    

    //secondary phone setting and control
    $wp_customize->add_setting('pitron_contact_information_secondary_phone', array(
        'default' => '(+3)112-976-2067'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_secondary_phone',  array(
        'label' => __('Secondary Phone', 'pitron'),
        'description' => 'Enter Secondary Phone Number',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_secondary_phone',
        'type' => 'text',

    ) ) );        

    //email setting and control
    $wp_customize->add_setting('pitron_contact_information_email', array(
        'default' => 'admin@pitron.com'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_email',  array(
        'label' => __('Email', 'pitron'),
        'description' => 'Enter Email Address',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_email',
        'type' => 'text',

    ) ) );        
    
    //secondary email setting and control
    $wp_customize->add_setting('pitron_contact_information_secondary_email', array(
        'default' => 'info@pitron.com'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pitron_contact_information_secondary_email',  array(
        'label' => __('Secondary Email', 'pitron'),
        'description' => 'Enter Secondary Email Address',
        'section' => 'contact_information',
        'setting' => 'pitron_contact_information_secondary_email',
        'type' => 'text',

    ) ) );        

}
add_action( 'customize_register', 'pitron_theme_contact_information_customizer');

/**===============================================================
 *  Adding Working Procedure section into theme customizer
 * ===============================================================*/
function pitron_theme_working_procedure_customizer($wp_customize){
    //contact information section
    $wp_customize->add_section('working_procedure_steps', array(
        'title' => __('Working Procedure Steps','pitron'),
        'description' => __('Enter Working Procedure Steps.','pitron')
    ));

    //step 1 icon
    $wp_customize->add_setting('step_1_icon', array(
        'default' =>  PITRON_THEME_IMG_DIR.'icon/law-book.png'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'step_1_icon', array(
        'label' => __('Step 1 Icon', 'pitron'),
        'description' => 'Change or update step 1 icon',
        'setting' => 'step_1_icon',
        'section' => 'working_procedure_steps'
    ) ) );    

    //step 1 title
    $wp_customize->add_setting('step_1_title', array(
        'default' => 'Study & Research'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_1_title',  array(
        'label' => __('Step 1 Title', 'pitron'),
        'description' => 'Enter Step 1 Title',
        'section' => 'working_procedure_steps',
        'setting' => 'step_1_title',
        'type' => 'text',

    ) ) );

    //step 1 short description
    $wp_customize->add_setting('step_1_short_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_1_short_description',  array(
        'label' => __('Step 1 Short Description', 'pitron'),
        'description' => 'Enter Step 1 Short Description',
        'section' => 'working_procedure_steps',
        'setting' => 'step_1_short_description',
        'type' => 'textarea',

    ) ) );    

    //step 2 
    //step 2 icon
    $wp_customize->add_setting('step_2_icon', array(
        'default' =>  PITRON_THEME_IMG_DIR.'icon/contract.png'
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'step_2_icon', array(
        'label' => __('Step 2 Icon', 'pitron'),
        'description' => 'Change or update step 2 icon',
        'setting' => 'step_2_icon',
        'section' => 'working_procedure_steps'
    ) ) );    
    
    //step 2 title
    $wp_customize->add_setting('step_2_title', array(
        'default' => 'Data Collection'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_2_title',  array(
        'label' => __('Step 2 Title', 'pitron'),
        'description' => 'Enter Step 2 Title',
        'section' => 'working_procedure_steps',
        'setting' => 'step_2_title',
        'type' => 'text',

    ) ) );
    
    //step 2 short description
    $wp_customize->add_setting('step_2_short_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_2_short_description',  array(
        'label' => __('Step 2 Short Description', 'pitron'),
        'description' => 'Enter Step 2 Short Description',
        'section' => 'working_procedure_steps',
        'setting' => 'step_2_short_description',
        'type' => 'textarea',

    ) ) );

    //step 3 
    //step 3 icon
    $wp_customize->add_setting('step_3_icon', array(
        'default' =>  PITRON_THEME_IMG_DIR.'icon/lawyer-2.png'
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'step_3_icon', array(
        'label' => __('Step 3 Icon', 'pitron'),
        'description' => 'Change or update step 2 icon',
        'setting' => 'step_3_icon',
        'section' => 'working_procedure_steps'
    ) ) );    
    
    //step 3 title
    $wp_customize->add_setting('step_3_title', array(
        'default' => 'Fight in the Court'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_3_title',  array(
        'label' => __('Step 3 Title', 'pitron'),
        'description' => 'Enter Step 3 Title',
        'section' => 'working_procedure_steps',
        'setting' => 'step_3_title',
        'type' => 'text',

    ) ) );
    
    //step 3 short description
    $wp_customize->add_setting('step_3_short_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_3_short_description',  array(
        'label' => __('Step 3 Short Description', 'pitron'),
        'description' => 'Enter Step 3 Short Description',
        'section' => 'working_procedure_steps',
        'setting' => 'step_3_short_description',
        'type' => 'textarea',

    ) ) ); 
    
    //step 4
    //step 4 icon
    $wp_customize->add_setting('step_4_icon', array(
        'default' =>  PITRON_THEME_IMG_DIR.'icon/podium-2.png'
    ));
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'step_4_icon', array(
        'label' => __('Step 4 Icon', 'pitron'),
        'description' => 'Change or update step 4 icon',
        'setting' => 'step_4_icon',
        'section' => 'working_procedure_steps'
    ) ) );    
    
    //step 2 title
    $wp_customize->add_setting('step_4_title', array(
        'default' => 'Bring Back the Win'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_4_title',  array(
        'label' => __('Step 4 Title', 'pitron'),
        'description' => 'Enter Step 4 Title',
        'section' => 'working_procedure_steps',
        'setting' => 'step_4_title',
        'type' => 'text',

    ) ) );
    
    //step 2 short description
    $wp_customize->add_setting('step_4_short_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'step_4_short_description',  array(
        'label' => __('Step 4 Short Description', 'pitron'),
        'description' => 'Enter Step 4 Short Description',
        'section' => 'working_procedure_steps',
        'setting' => 'step_4_short_description',
        'type' => 'textarea',

    ) ) );    
}
add_action( 'customize_register', 'pitron_theme_working_procedure_customizer');



add_theme_support( 'post-thumbnails' );

function pitron_theme_custom_post()
{

    // slider custom post
    register_post_type('service',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Service'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes','excerpt'
                
            ),
            'public' => true,
            'show_ui'=> true
        )
    );
    // slider custom post
    register_post_type('prices',
        array(
            'labels' => array(
                'name' => __('Prices'),
                'singular_name' => __('Price'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes'
            ),
            'public' => true,
            'show_ui'=> true
        )
    );
    
    // slider custom post
    register_post_type('attorneys',
        array(
            'labels' => array(
                'name' => __('Attorneys'),
                'singular_name' => __('Attorney'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes'
            ),
            'public' => true,
            'show_ui'=> true
        )
    );   

    // slider custom post
    register_post_type('faqs',
        array(
            'labels' => array(
                'name' => __('FAQS'),
                'singular_name' => __('FAQ'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes'
            ),
            'public' => true,
            'show_ui'=> true
        )
    );    

    // slider custom post
    register_post_type('cases',
        array(
            'labels' => array(
                'name' => __('Cases'),
                'singular_name' => __('Case'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes','excerpt'
            ),
            'public' => true,
            'show_ui'=> true
        )
    );    

    // slider custom post
    register_post_type('testimonials',
        array(
            'labels' => array(
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonials'),                                
            ),

            'menu_icon' => 'dashicons-feedback',
            'menu_position'=> 5,

            'supports' => array(
                'title',  'custom-fields', 'thumbnail', 'page-attributes'
            ),
            'public' => true,
            'show_ui'=> true
        )
    );      
    
}
add_action('init', 'pitron_theme_custom_post');


function pitron_widgets_init()
{



    register_sidebar(array(
      'name' => esc_html__('Case Contact Form', 'pitron'),
      'id' => 'pitron-case-contact-form',
      'description' => esc_html__('Add Case Contact Form Here', 'pitron'),
     
    ));

    register_sidebar(array(
        'name' => esc_html__('Contact Page Form', 'pitron'),
        'id' => 'pitron-contact-page-form',
        'description' => esc_html__('Add Contact Page Form Here', 'pitron'),
       
    ));

    register_sidebar(array(
        'name' => esc_html__('FAQ Contact Form', 'pitron'),
        'id' => 'pitron-faq-contact-form',
        'description' => esc_html__('Add FAQ Contact Form Here', 'pitron'),
       
    ));
}
add_action('widgets_init', 'pitron_widgets_init');


?>