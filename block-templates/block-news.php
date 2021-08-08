<?php
$block_classes = '';

if ( ! empty( $block['className'] ) ) :
    $block_classes .= ' ' . $block['className'];
endif;

$title =        get_field( 'title' );
$body =         get_field( 'body' );
$more =         get_field( 'more' );
$url =          get_field( 'posts_url' );
$number =       get_field( 'number_of_posts' );
$categories =   get_field( 'categories' );
$style =        get_field( 'style' );
$excerpts =     get_field( 'excerpts' );

if ( $style == 'full' ) :
    require( 'template-parts/block-news-full.php' );
else :
    require( 'template-parts/block-news-compact.php' );
endif;