<?php
if ( has_post_thumbnail() ) :
?>
<article class="has-featured-image">
<?php
else :
?>
<article>
<?php
endif;
?>
    <header class="article-header">
        <h3>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>

        <section class="article-meta">
            <p><?php dutchtown_posted_on(); ?></p>
        </section>
    </header>       
<?php
if ( has_post_thumbnail() ) :
?>
    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
<?php
endif;
?>

    <div class="article-content">
        <?php the_excerpt(); ?>
    </div>
</article>