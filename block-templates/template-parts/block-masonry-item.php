<?php
$title =            get_sub_field( 'title' );
$title_link =       get_sub_field( 'title_link' );
$body =             get_sub_field( 'body' );
$image =            get_sub_field( 'image' );
$stretched_link =   get_sub_field( 'stretched_link' );
$style =            get_sub_field( 'style' );

$item_class =       'masonry';

if ( $style ) :
    $item_class .= ' ' . $style;
else :
    $item_class .= ' plain-black';
endif;

if ( $image ) :
    $item_class .= ' masonry-has-image';
endif;
?>

<div class="<?php echo $item_class; ?>">
<?php
if ( $style == 'flora-black' || $style == 'flora-yellow' ) :
?>
    <div class="masonry-flora-crown"></div>
<?php
endif;
?>
    <div class="masonry-inner">
<?php
if ( $image ) :
?>
        <div class="masonry-image">
            <?php echo wp_get_attachment_image( $image, 'medium', false, array( 'class' => 'card-img-top' ) ); ?>
        </div>
<?php
endif;
?>
        <div class="masonry-body">
<?php
if ( $title_link ) :
    $link_class = '';
    if ( $stretched_link == 1 ) :
        $link_class = ' class="stretched-link"';
    endif;
?>
            <h3><a href="<?php echo $title_link; ?>"<?php echo $link_class; ?>><?php echo $title; ?></a></h3>
<?php
else : 
?>
            <h3><?php echo $title; ?></h3>
<?php    
endif;
?>
            <?php echo $body; ?>
        </div>
    </div>
</div>