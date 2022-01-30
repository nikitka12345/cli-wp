<?php function movie_custom_fields() {
    add_post_type_support( 'movie', 'custom-fields');
}
add_action('init', 'true_custom_fields');
?>