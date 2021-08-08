<section class="news-compact<?php echo esc_attr( $block_classes ); ?>">
    <header>
        <h2>
<?php
if ( $url ) :
?>
            <a href="<?php echo $url; ?>"><?php echo $title; ?></a>
<?php
else :
?>
            <?php echo $title; ?>
<?php
endif;
?>
        </h2>
<?php
if ( $body ) :
?>
        <?php echo $body; ?>
<?php
endif;
?>
    </header>
<?php
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
    while ( $posts_query->have_posts() ) :
        $posts_query->the_post();
        require( 'block-news-compact-post.php' );
    endwhile;
    wp_reset_postdata();
endif;

if ( $more ) :
?>
    <section class="news-more">
        <?php echo $more; ?>
    </section>
<?php
endif;

restore_current_blog();
?>
</section>