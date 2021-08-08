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
    // close container-page-content
?>
</section>

<section class="news-full">
<?php
endif;

while ( $posts_query->have_posts() ) :
    $posts_query->the_post();
    require( 'block-news-full-post.php' );
endwhile;
wp_reset_postdata();

if ( $style == 'full' ) :
    // reopen container-page-content
?>
</section>

<section class="container container-page-content">
<?php
endif;

if ( $more ) :
?>
    <section class="news-more">
        <?php echo $more; ?>
    </section>
<?php
endif;

restore_current_blog();