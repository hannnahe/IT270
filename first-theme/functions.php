<?php

function my_excerpt_length($length){
    return 35;
}

add_filter('excerpt_length', 'my_excerpt_length', 999);

set_post_thumbnail_size(150, 150);

add_theme_support('post-thumbnails');


//register the navigations
register_nav_menus(array(
'primary' => 'Primary Menu',
'tours' => 'Tours Menu',
'footer' => 'Footer Menu',
'hotels' => 'Hotel Menu'
));


//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
    add_filter( 'widget_text', 'do_shortcode' );   

//This lets WP know that we are linking a script - enqueing scripts
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

//register widgets! we are registering it here
    function site1_widgets_init() {
register_sidebar(
    array(
     'name'  => esc_html__('Sidebar Blog', 'site1'),
     'id'   => 'sidebar-blog',
     'description'  => esc_html__('Our blog widget', 'site1'), 
     'before_widget'   => '<section id="%1$s" class="widget %2$s">',
     'after_widget'   => '</section>',
     'before_title'   => '<h3 class="widget-title">',
     'after_title'   => '</h3>',
    )
    );

    register_sidebar(
        array(
         'name'  => esc_html__('Sidebar Tours', 'site1'),
         'id'   => 'sidebar-tours',
         'description'  => esc_html__('Our tours widget', 'site1'), 
         'before_widget'   => '<section id="%1$s" class="widget %2$s">',
         'after_widget'   => '</section>',
         'before_title'   => '<h3 class="widget-title">',
         'after_title'   => '</h3>',
        )
        );

        register_sidebar(
            array(
             'name'  => esc_html__('Sidebar About', 'site1'),
             'id'   => 'sidebar-about',
             'description'  => esc_html__('Our about widget', 'site1'), 
             'before_widget'   => '<section id="%1$s" class="widget %2$s">',
             'after_widget'   => '</section>',
             'before_title'   => '<h3 class="widget-title">',
             'after_title'   => '</h3>',
            )
            );

            register_sidebar(
                array(
                 'name'  => esc_html__('Sidebar Buy', 'site1'),
                 'id'   => 'sidebar-buy',
                 'description'  => esc_html__('Our buy widget', 'site1'), 
                 'before_widget'   => '<section id="%1$s" class="widget %2$s">',
                 'after_widget'   => '</section>',
                 'before_title'   => '<h3 class="widget-title">',
                 'after_title'   => '</h3>',
                )
                );

                register_sidebar(
                    array(
                     'name'  => esc_html__('Sidebar footer content', 'site1'),
                     'id'   => 'sidebar-footer-content',
                     'description'  => esc_html__('Our footer content', 'site1'), 
                     'before_widget'   => '<section id="%1$s" class="widget %2$s">',
                     'after_widget'   => '</section>',
                     'before_title'   => '<h3 class="widget-title">',
                     'after_title'   => '</h3>',
                    )
                    );
 }
 add_action( 'widgets_init', 'site1_widgets_init');



 //  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');


function covid_disclaimer(){
    return '<small>Before you purchase your tickets, check with everyone in your party. These tickets are <b>non-refundable.</b></small>';
}
add_shortcode('disclaimer', 'covid_disclaimer');

function today_date(){
    return date("l\, F jS Y ");
}
add_shortcode('current_date', 'today_date');

//adding a switch function
function specials(){
    if(isset($_GET['today'])){
        $today = $_GET['today'];
    }else{
        $today = date('l');
    }

    switch($today) {
        case 'Thursday';
        $content= 'Today\'s special is good ole Yellowstone! Lets read some information about Yellowstone! To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Friday';
        $content= 'Today\'s special is Chicago! Let\'s explore Chicago, the Windy City!!!! To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Saturday';
        $content= 'Today\'s special is Miami, FL! Let\'s learn all that Miami has to offer! To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Sunday';
        $content= 'Today\'s special is the San Juan Islands! Let\'s sail and hopefully see some Orcas! To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Monday';
        $content= 'Today\'s special is the Rocky Mountains! Time to hike in the splendor.  To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Tuesday';
        $content= 'Today\'s special is Hawaii! Time for some sun and swimming! To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Wednesday';
        $content= 'Today\'s special is the Oregon Coast! Maybe..Canon Beach? To learn about our special, click <a href=""> here</a>.';
        break;

        case 'Saturday';
        $content= 'Today\'s special is Vermont. Lets get green! To learn about our special, click <a href=""> here</a>.';
        break;
        }
    return $content;
    }

    add_shortcode('today_specials', 'specials');

    function year(){
        return date('Y');
    }
    add_shortcode('current_year', 'year');
    
    remove_filter('the_content', 'wpautop');

 