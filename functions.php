<?php
/**
 * @package Basis Child
 */

function my_responsive_nav_options( $options ) {
    $options['label'] = 'Men&uacute;';
    return $options;
}
add_filter( 'basis_responsive_nav_options', 'my_responsive_nav_options' );

function my_read_more_text( $text ) {
    return 'Seguir leyendo';
}
add_filter( 'basis_read_more_text', 'my_read_more_text' );

function my_social_links( $services ) {
    $services['youtube'] = array(
        'title' => 'Youtube',
        'url'   => 'https://www.youtube.com/user/Hiperderecho'
    );
    return $services;
}
add_filter( 'collections_get_social_links', 'my_collections_get_social_links' );