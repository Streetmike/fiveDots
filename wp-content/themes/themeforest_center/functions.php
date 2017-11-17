<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

remove_action ('wp_head', 'wp_generator');
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'start_post_rel_link', 10);
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action( 'wp_head', 'parent_post_rel_link', 10);
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10);

if (class_exists('MultiPostThumbnails')) {

    new MultiPostThumbnails(array(
        'label' => 'Secondary Image',
        'id' => 'secondary-image',
        'post_type' => 'post'
    ) );

    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'post'
    ) );

}

add_action('wp_ajax_my_action', 'my_action_callback');
add_action('wp_ajax_nopriv_my_action', 'my_action_callback');

function my_action_callback() {

    if(empty($_POST['id'])) {
        $name = 'гость';
    } else {
        $name = esc_attr($_POST['id']);
    }

    echo 'Hello, '. $name;

    wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

    wp_enqueue_script('ajax', get_template_directory_uri(), ['jquery']);

    wp_localize_script( 'ajax', 'myajax', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'name' => wp_get_current_user()->display_name
    ));
}
?>


