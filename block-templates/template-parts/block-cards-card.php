<?php
$title =            get_sub_field( 'title' );
$title_link =       get_sub_field( 'title_link' );
$body =             get_sub_field( 'body' );
$footer =           get_sub_field( 'footer' );
$image =            get_sub_field( 'image' );
$stretched_link =   get_sub_field( 'stretched_link' );
$style =            get_sub_field( 'style' );

$item_class =       'card';

if ( $style ) :
    $item_class .= ' ' . $style;
else :
    $item_class .= ' plain-black';
endif;

if ( $image ) :
    $item_class .= ' card-has-image';
endif;
?>

<div class="<?php echo $item_class; ?>">
<?php
if ( $image ) :
?>
    <?php echo wp_get_attachment_image( $image, 'xs', false, array( 'class' => 'card-img-top' ) ) . "\n"; ?>
<?php
endif;
?>
    <div class="card-body">
        <h3 class="card-title">
<?php
if ( $title_link ) :
    $link_class = '';
    if ( $stretched_link == 1 ) :
        $link_class = ' class="stretched-link"';
    endif;
?>
            <a href="<?php echo $title_link; ?>"<?php echo $link_class; ?>>
                <?php echo $title; ?>
            </a>
<?php
else :
?>
            <?php echo $title; ?>
<?php
endif;
?>
        </h3>

        <?php echo $body; ?>
    </div>
<?php
if ( $footer ) :
?>
    <div class="card-footer">
        <?php echo $footer; ?>
    </div>
<?php
endif;
?>
</div>