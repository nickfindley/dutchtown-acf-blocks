<article>
<?php
if ( has_post_thumbnail() ) :
?>
    <header class="article-header has-featured-image">
        <div class="container">
            <div class="post-thumbnail">
                <?php the_post_thumbnail( '', ['class' => 'no-lazyload'] ); ?>
            </div>
<?php
else :
?>
    <header class="article-header">
        <div class="container">
<?php
endif;
?>
            <h1>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>

            <section class="article-meta">
                <p><?php dutchtown_posted_on(); ?></p>
            </section>

            <section class="article-sharing">
<?php
                dutchtown_facebook_link();
                dutchtown_twitter_link();
                dutchtown_mailto_link();
?>
            </section>
        </div>
    </header>

    <section class="container container-article-content">
<?php 
if ( $excerpts == 1 ) :
    the_excerpt();
else :
    the_content();
endif;
?>
    </section>

    <footer class="article-footer">
<?php
if ( has_category() || dutchtown_is_updated() ) :
?>
        <p>
<?php
    if ( has_category() ) :
        $category = get_primary_taxonomy_term();
?>
            Filed under <a href="<?php echo $category['url']; ?>"><?php echo $category['title']; ?></a>.
<?php
    endif;

    if ( dutchtown_is_updated() ) :
?>
            This post was last updated on <?php dutchtown_updated_on(); ?>.
<?php
    endif;
?>
        </p>
<?php
endif;
?>
    </footer>
</article>