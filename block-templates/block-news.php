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
    require ( 'template-parts/block-news-full-header.php' );
else :
    require ( 'template-parts/block-news-compact-header.php' );
endif;
switch_to_blog( 1 );

if ( $categories ) :
    $args = array(
        'posts_per_page' => $number,
        'category__in' => $categories
    );
else :
    $args = array(
        'posts_per_page' => $number
    );
endif;

$posts_query = new WP_Query( $args );

if ( $posts_query->have_posts() ) :
    if ( $style == 'full' ) :
        // close container-page-content
?>
</section>
<section class="news-full">
<?php
    endif;

    while ( $posts_query->have_posts() ) :
        $posts_query->the_post();

        if ( $style == 'full' ) :
            require( 'template-parts/block-news-full.php' );
        else :
            require( 'template-parts/block-news-compact.php' );
        endif;
    endwhile;
    wp_reset_postdata();

    if ( $style == 'full' ) :
        // reopen container-page-content
?>
</section>
<section class="container container-page-content">
<?php
    endif;
endif;

if ( $more ) :
?>
    <section class="news-more">
        <?php echo $more; ?>
    </section>
<?php
endif;

restore_current_blog();

if ( $style != 'full' ) :
?>
</section>
<?php
endif;