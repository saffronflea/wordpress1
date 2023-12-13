<?php
function wd_finals2_widgets_init() {
    register_sidebar (
        array(
            'name'          => esc_html_('sidebar', 'wed_finals2'),
            'id'            => 'side_bar-1',
            'description'   => esc_html__('add sidebar widgets here. ', 'wd_finals2'),
            'before_widget' => '<section id = "%1$s"
            class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2
            class="widget-title">',
            'after_title'   => '</h2>',

        )
        );
}
add_action(
    'widgets_init',
    'wd_finals2_widgets_init'
);

//js css connection //

function wd_finals3_script() {
    wp_enqueue_style('wd_finals3_style', 
    get_stylesheet_uri(), array(), 3)
}
add_action('wp_enqueue_scripts',
'wd_finals3_scripts');

?>