<section class="news-compact<?php echo esc_attr( $block_classes ); ?>">
    <header>
        <h2>
<?php
if ( $url ) :
?>
            <a href="<?php echo $url; ?>"><?php echo $title; ?></a><
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